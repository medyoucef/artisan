vendor/larastan/larastan/src/Support/ConfigParser.php [199:223]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function parseConfigFile(string $configFileName): Node\Stmt\Return_|null
    {
        foreach ($this->configFiles as $configFile) {
            if (str_ends_with($configFile->getPathname(), $configFileName . '.php')) {
                try {
                    $stmts = $this->parser->parseFile($configFile->getPathname());
                } catch (ParserErrorsException) {
                    continue;
                }

                /** @var Node\Stmt\Return_|null $returnNode */
                $returnNode = (new NodeFinder())->findFirstInstanceOf($stmts, Node\Stmt\Return_::class);

                if ($returnNode === null) {
                    continue;
                }

                $this->parsedConfigFiles[$configFileName] = $returnNode;

                return $returnNode;
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ConfigParser.php [199:223]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function parseConfigFile(string $configFileName): Node\Stmt\Return_|null
    {
        foreach ($this->configFiles as $configFile) {
            if (str_ends_with($configFile->getPathname(), $configFileName . '.php')) {
                try {
                    $stmts = $this->parser->parseFile($configFile->getPathname());
                } catch (ParserErrorsException) {
                    continue;
                }

                /** @var Node\Stmt\Return_|null $returnNode */
                $returnNode = (new NodeFinder())->findFirstInstanceOf($stmts, Node\Stmt\Return_::class);

                if ($returnNode === null) {
                    continue;
                }

                $this->parsedConfigFiles[$configFileName] = $returnNode;

                return $returnNode;
            }
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



