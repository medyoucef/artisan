vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [124:148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renderWithSymfonyStyle(Throwable $throwable, OutputInterface $output): void
    {
        $decorated       = $output->isDecorated();
        $isUserCodeError = $this->isUserCodeError($throwable);
        $message         = $isUserCodeError
            ? $this->formatUserCodeError($throwable, decorated: $decorated)
            : $this->formatFrameworkError($throwable, decorated: $decorated);

        $title = $isUserCodeError ? self::USER_TITLE : self::FRAMEWORK_TITLE;
        $style = $isUserCodeError ? 'fg=white;bg=red' : 'fg=black;bg=yellow';

        $io = new SymfonyStyle(new ArrayInput([]), $output);

        $io->block($title, null, $style, ' ', true);

        foreach ($this->splitLines($message) as $line) {
            match (true) {
                $line === '' => $io->newLine(),
                str_starts_with($line, 'Error:') => $io->writeln('<error>' . $line . '</error>'),
                str_starts_with($line, 'Stack trace:') => $io->writeln('<options=bold>' . $line . '</options=bold>'),
                preg_match('/^#\d+/', $line) === 1 => $io->writeln('<fg=gray>' . $line . '</fg=gray>'),
                default => $io->writeln($line),
            };
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [124:148]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function renderWithSymfonyStyle(Throwable $throwable, OutputInterface $output): void
    {
        $decorated       = $output->isDecorated();
        $isUserCodeError = $this->isUserCodeError($throwable);
        $message         = $isUserCodeError
            ? $this->formatUserCodeError($throwable, decorated: $decorated)
            : $this->formatFrameworkError($throwable, decorated: $decorated);

        $title = $isUserCodeError ? self::USER_TITLE : self::FRAMEWORK_TITLE;
        $style = $isUserCodeError ? 'fg=white;bg=red' : 'fg=black;bg=yellow';

        $io = new SymfonyStyle(new ArrayInput([]), $output);

        $io->block($title, null, $style, ' ', true);

        foreach ($this->splitLines($message) as $line) {
            match (true) {
                $line === '' => $io->newLine(),
                str_starts_with($line, 'Error:') => $io->writeln('<error>' . $line . '</error>'),
                str_starts_with($line, 'Stack trace:') => $io->writeln('<options=bold>' . $line . '</options=bold>'),
                preg_match('/^#\d+/', $line) === 1 => $io->writeln('<fg=gray>' . $line . '</fg=gray>'),
                default => $io->writeln($line),
            };
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



