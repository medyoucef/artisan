vendor/larastan/larastan/src/Support/ViewParser.php [33:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function parseFile(string $path): array
    {
        try {
            return $this->parser->parseFile($path);
        } catch (ParserErrorsException) {
            return [];
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewParser.php [33:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function parseFile(string $path): array
    {
        try {
            return $this->parser->parseFile($path);
        } catch (ParserErrorsException) {
            return [];
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



