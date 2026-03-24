vendor/open-telemetry/sdk/Logs/Processor/BatchLogRecordProcessor.php [184:251]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function flush(?string $flushMethod = null, ?CancellationInterface $cancellation = null): bool
    {
        if ($flushMethod !== null) {
            $flushId = $this->batchId + $this->queue->count() + (int) (bool) $this->batch;
            $this->flush->enqueue([$flushId, $flushMethod, $cancellation, !$this->running, Context::getCurrent()]);
        }

        if ($this->running) {
            return false;
        }

        $success = true;
        $exception = null;
        $this->running = true;

        try {
            for (;;) {
                while (!$this->flush->isEmpty() && $this->flush->bottom()[0] <= $this->batchId) {
                    [, $flushMethod, $cancellation, $propagateResult, $context] = $this->flush->dequeue();
                    $scope = $context->activate();

                    try {
                        $result = $this->exporter->$flushMethod($cancellation);
                        if ($propagateResult) {
                            $success = $result;
                        }
                    } catch (Throwable $e) {
                        if ($propagateResult) {
                            $exception = $e;
                        } else {
                            self::logError(sprintf('Unhandled %s error', $flushMethod), ['exception' => $e]);
                        }
                    } finally {
                        $scope->detach();
                    }
                }

                if (!$this->shouldFlush()) {
                    break;
                }

                if ($this->queue->isEmpty()) {
                    $this->enqueueBatch();
                }
                $batchSize = count($this->queue->bottom());
                $this->batchId++;
                $scope = $this->exportContext->activate();

                try {
                    $this->exporter->export($this->queue->dequeue())->await();
                } catch (Throwable $e) {
                    self::logError('Unhandled export error', ['exception' => $e]);
                } finally {
                    $this->processed += $batchSize;
                    $this->queueSize -= $batchSize;
                    $scope->detach();
                }
            }
        } finally {
            $this->running = false;
        }

        if ($exception !== null) {
            throw $exception;
        }

        return $success;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/open-telemetry/sdk/Trace/SpanProcessor/BatchSpanProcessor.php [202:269]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function flush(?string $flushMethod = null, ?CancellationInterface $cancellation = null): bool
    {
        if ($flushMethod !== null) {
            $flushId = $this->batchId + $this->queue->count() + (int) (bool) $this->batch;
            $this->flush->enqueue([$flushId, $flushMethod, $cancellation, !$this->running, Context::getCurrent()]);
        }

        if ($this->running) {
            return false;
        }

        $success = true;
        $exception = null;
        $this->running = true;

        try {
            for (;;) {
                while (!$this->flush->isEmpty() && $this->flush->bottom()[0] <= $this->batchId) {
                    [, $flushMethod, $cancellation, $propagateResult, $context] = $this->flush->dequeue();
                    $scope = $context->activate();

                    try {
                        $result = $this->exporter->$flushMethod($cancellation);
                        if ($propagateResult) {
                            $success = $result;
                        }
                    } catch (Throwable $e) {
                        if ($propagateResult) {
                            $exception = $e;
                        } else {
                            self::logError(sprintf('Unhandled %s error', $flushMethod), ['exception' => $e]);
                        }
                    } finally {
                        $scope->detach();
                    }
                }

                if (!$this->shouldFlush()) {
                    break;
                }

                if ($this->queue->isEmpty()) {
                    $this->enqueueBatch();
                }
                $batchSize = count($this->queue->bottom());
                $this->batchId++;
                $scope = $this->exportContext->activate();

                try {
                    $this->exporter->export($this->queue->dequeue())->await();
                } catch (Throwable $e) {
                    self::logError('Unhandled export error', ['exception' => $e]);
                } finally {
                    $this->processed += $batchSize;
                    $this->queueSize -= $batchSize;
                    $scope->detach();
                }
            }
        } finally {
            $this->running = false;
        }

        if ($exception !== null) {
            throw $exception;
        }

        return $success;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



