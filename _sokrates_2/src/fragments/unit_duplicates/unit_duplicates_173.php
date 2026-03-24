vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [48:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(Throwable $throwable): void
    {
        $output      = $this->output ?? new ConsoleOutput();
        $errorOutput = $output instanceof ConsoleOutput ? $output->getErrorOutput() : $output;

        if ($this->decorated !== null) {
            $output->setDecorated($this->decorated);
            $errorOutput->setDecorated($this->decorated);
        }

        $decorated = $errorOutput->isDecorated();

        if ($decorated && $this->renderWithCollision($throwable, $errorOutput)) {
            return;
        }

        $this->renderWithSymfonyStyle($throwable, $errorOutput);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [48:65]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function handle(Throwable $throwable): void
    {
        $output      = $this->output ?? new ConsoleOutput();
        $errorOutput = $output instanceof ConsoleOutput ? $output->getErrorOutput() : $output;

        if ($this->decorated !== null) {
            $output->setDecorated($this->decorated);
            $errorOutput->setDecorated($this->decorated);
        }

        $decorated = $errorOutput->isDecorated();

        if ($decorated && $this->renderWithCollision($throwable, $errorOutput)) {
            return;
        }

        $this->renderWithSymfonyStyle($throwable, $errorOutput);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



