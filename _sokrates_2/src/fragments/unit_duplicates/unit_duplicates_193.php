vendor/larastan/larastan/src/Support/ViewFileHelper.php [87:101]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getViews(string $path): array
    {
        $absolutePath = $this->fileHelper->absolutizePath($path);

        if (! is_dir($absolutePath)) {
            return [];
        }

        return iterator_to_array(
            new RegexIterator(
                new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                '/\.blade\.php$/i',
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewFileHelper.php [87:101]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getViews(string $path): array
    {
        $absolutePath = $this->fileHelper->absolutizePath($path);

        if (! is_dir($absolutePath)) {
            return [];
        }

        return iterator_to_array(
            new RegexIterator(
                new RecursiveIteratorIterator(new RecursiveDirectoryIterator($absolutePath)),
                '/\.blade\.php$/i',
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



