vendor/symfony/translation/Command/XliffLintCommand.php [159:167]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function display(SymfonyStyle $io, array $files): int
    {
        return match ($this->format) {
            'txt' => $this->displayTxt($io, $files),
            'json' => $this->displayJson($io, $files),
            'github' => $this->displayTxt($io, $files, true),
            default => throw new InvalidArgumentException(\sprintf('Supported formats are "%s".', implode('", "', $this->getAvailableFormatOptions()))),
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/symfony/yaml/Command/LintCommand.php [151:159]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function display(SymfonyStyle $io, array $files): int
    {
        return match ($this->format) {
            'txt' => $this->displayTxt($io, $files),
            'json' => $this->displayJson($io, $files),
            'github' => $this->displayTxt($io, $files, true),
            default => throw new InvalidArgumentException(\sprintf('Supported formats are "%s".', implode('", "', $this->getAvailableFormatOptions()))),
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



