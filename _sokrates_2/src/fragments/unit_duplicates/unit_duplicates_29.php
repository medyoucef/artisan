vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [67:122]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renderWithCollision(Throwable $throwable, OutputInterface $output): bool
    {
        if (! class_exists(Provider::class) || ! function_exists('Termwind\\render')) {
            return false;
        }

        $isUserCodeError = $this->isUserCodeError($throwable);

        try {
            $message = $isUserCodeError
                ? $this->formatUserCodeError($throwable, includeErrorDetails: false)
                : $this->formatFrameworkError($throwable, includeErrorDetails: false);

            $title        = $isUserCodeError ? self::USER_TITLE : self::FRAMEWORK_TITLE;
            $titleClasses = $isUserCodeError ? 'bg-red-500 text-white font-bold' : 'bg-yellow-500 text-black font-bold';

            $body = $this->buildCollisionBody($message);

            renderUsing($output);

            render(<<<HTML
                <div class="mx-2 mt-1">
                    <div class="px-1 $titleClasses">
                        {$title}
                    </div>
                    <div class="px-1">
                        {$body}
                    </div>
                    <div class="mt-1 text-gray">Exception Details</div>
                    <hr class="border-t text-gray"/>
                </div>

            HTML);

            $provider = new Provider();
            $handler  = $provider->register()
                ->getHandler()
                ->setOutput($output);

            $inspector = match (true) {
                class_exists(Inspector::class) => new Inspector($throwable),
                class_exists(InspectorFactory::class) => (new InspectorFactory())->create($throwable),
                default => null,
            };

            if ($inspector !== null) {
                $handler->setInspector($inspector);
            }

            $handler->handle($throwable);

            return true;
        } catch (Throwable) {
            return false;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [67:122]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renderWithCollision(Throwable $throwable, OutputInterface $output): bool
    {
        if (! class_exists(Provider::class) || ! function_exists('Termwind\\render')) {
            return false;
        }

        $isUserCodeError = $this->isUserCodeError($throwable);

        try {
            $message = $isUserCodeError
                ? $this->formatUserCodeError($throwable, includeErrorDetails: false)
                : $this->formatFrameworkError($throwable, includeErrorDetails: false);

            $title        = $isUserCodeError ? self::USER_TITLE : self::FRAMEWORK_TITLE;
            $titleClasses = $isUserCodeError ? 'bg-red-500 text-white font-bold' : 'bg-yellow-500 text-black font-bold';

            $body = $this->buildCollisionBody($message);

            renderUsing($output);

            render(<<<HTML
                <div class="mx-2 mt-1">
                    <div class="px-1 $titleClasses">
                        {$title}
                    </div>
                    <div class="px-1">
                        {$body}
                    </div>
                    <div class="mt-1 text-gray">Exception Details</div>
                    <hr class="border-t text-gray"/>
                </div>

            HTML);

            $provider = new Provider();
            $handler  = $provider->register()
                ->getHandler()
                ->setOutput($output);

            $inspector = match (true) {
                class_exists(Inspector::class) => new Inspector($throwable),
                class_exists(InspectorFactory::class) => (new InspectorFactory())->create($throwable),
                default => null,
            };

            if ($inspector !== null) {
                $handler->setInspector($inspector);
            }

            $handler->handle($throwable);

            return true;
        } catch (Throwable) {
            return false;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



