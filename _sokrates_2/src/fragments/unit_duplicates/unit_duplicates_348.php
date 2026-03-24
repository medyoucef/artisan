vendor/larastan/larastan/src/Support/BootstrapErrorHandler.php [235:242]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function buildCollisionBody(string $message): string
    {
        return implode('', array_map(fn (string $line): string => match (true) {
            $line === '' => '<div class="mb-1"></div>',
            str_starts_with($line, ' - ') => '<div class="pl-3">• ' . $this->escapeForHtml(substr($line, 3)) . '</div>',
            default => '<div>' . $this->escapeForHtml($line) . '</div>',
        }, $this->splitLines($message)));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/BootstrapErrorHandler.php [235:242]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function buildCollisionBody(string $message): string
    {
        return implode('', array_map(fn (string $line): string => match (true) {
            $line === '' => '<div class="mb-1"></div>',
            str_starts_with($line, ' - ') => '<div class="pl-3">• ' . $this->escapeForHtml(substr($line, 3)) . '</div>',
            default => '<div>' . $this->escapeForHtml($line) . '</div>',
        }, $this->splitLines($message)));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



