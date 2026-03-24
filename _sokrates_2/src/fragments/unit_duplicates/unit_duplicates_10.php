vendor/larastan/larastan/src/Support/ConfigParser.php [69:175]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypes(array $constantStrings, Scope $scope): array
    {
        $returnTypes = [];

        foreach ($constantStrings as $constantString) {
            $key = $constantString->getValue();

            if (array_key_exists($key, $this->parsedConfigs)) {
                $returnTypes[] = $this->parsedConfigs[$key];
                continue;
            }

            $configKeyParts = explode('.', $key);
            $configFileName = array_shift($configKeyParts);

            if (array_key_exists($configFileName, $this->parsedConfigFiles)) {
                $cachedConfigFile = $this->parsedConfigFiles[$configFileName];
            } else {
                $cachedConfigFile = $this->parseConfigFile($configFileName);

                // We could not parse the file or couldn't find the return array
                if ($cachedConfigFile === null) {
                    return [];
                }

                $this->parsedConfigFiles[$configFileName] = $cachedConfigFile;
            }

            // Check if we have a type from the docblock
            $docComment = $cachedConfigFile->getDocComment();

            if ($docComment !== null && $this->treatPhpDocTypesAsCertain) {
                $resolvedPhpDoc = $this->fileTypeMapper->getResolvedPhpDoc(
                    $scope->getFile(),
                    $scope->getClassReflection()?->getName(),
                    $scope->getTraitReflection()?->getName(),
                    $scope->getFunctionName(),
                    $docComment->getText(),
                );

                $returnTag = $resolvedPhpDoc->getReturnTag();

                if ($returnTag !== null) {
                    $type = $returnTag->getType();

                    foreach ($configKeyParts as $part) {
                        $offset = is_numeric($part) ? new ConstantIntegerType((int) $part) : new ConstantStringType($part);

                        $type = $type->getOffsetValueType($offset);
                    }

                    $this->parsedConfigs[$key] = $type;
                    $returnTypes[]             = $type;
                    continue;
                }
            }

            if (! $cachedConfigFile->expr instanceof Array_) {
                continue;
            }

            $arrayNode = $cachedConfigFile->expr;

            if ($configKeyParts === []) {
                $type = $scope->getType($arrayNode);

                $this->parsedConfigs[$key] = $type;
                $returnTypes[]             = $type;

                continue;
            }

            $ret   = null;
            $items = $arrayNode->items;

            foreach ($configKeyParts as $configKeyPart) {
                foreach ($items as $item) {
                    if (! $item->key instanceof Node\Scalar) {
                        continue 3;
                    }

                    if (! property_exists($item->key, 'value')) {
                        continue;
                    }

                    $itemKey = (string) $item->key->value;
                    if ($itemKey !== $configKeyPart) {
                        continue;
                    }

                    if ($item->value instanceof Array_) {
                        $items = $item->value->items;
                    }

                    $ret = $item->value;
                }
            }

            if ($ret === null) {
                continue;
            }

            $returnTypes[] = $scope->getType($ret);
        }

        return $returnTypes;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ConfigParser.php [69:175]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTypes(array $constantStrings, Scope $scope): array
    {
        $returnTypes = [];

        foreach ($constantStrings as $constantString) {
            $key = $constantString->getValue();

            if (array_key_exists($key, $this->parsedConfigs)) {
                $returnTypes[] = $this->parsedConfigs[$key];
                continue;
            }

            $configKeyParts = explode('.', $key);
            $configFileName = array_shift($configKeyParts);

            if (array_key_exists($configFileName, $this->parsedConfigFiles)) {
                $cachedConfigFile = $this->parsedConfigFiles[$configFileName];
            } else {
                $cachedConfigFile = $this->parseConfigFile($configFileName);

                // We could not parse the file or couldn't find the return array
                if ($cachedConfigFile === null) {
                    return [];
                }

                $this->parsedConfigFiles[$configFileName] = $cachedConfigFile;
            }

            // Check if we have a type from the docblock
            $docComment = $cachedConfigFile->getDocComment();

            if ($docComment !== null && $this->treatPhpDocTypesAsCertain) {
                $resolvedPhpDoc = $this->fileTypeMapper->getResolvedPhpDoc(
                    $scope->getFile(),
                    $scope->getClassReflection()?->getName(),
                    $scope->getTraitReflection()?->getName(),
                    $scope->getFunctionName(),
                    $docComment->getText(),
                );

                $returnTag = $resolvedPhpDoc->getReturnTag();

                if ($returnTag !== null) {
                    $type = $returnTag->getType();

                    foreach ($configKeyParts as $part) {
                        $offset = is_numeric($part) ? new ConstantIntegerType((int) $part) : new ConstantStringType($part);

                        $type = $type->getOffsetValueType($offset);
                    }

                    $this->parsedConfigs[$key] = $type;
                    $returnTypes[]             = $type;
                    continue;
                }
            }

            if (! $cachedConfigFile->expr instanceof Array_) {
                continue;
            }

            $arrayNode = $cachedConfigFile->expr;

            if ($configKeyParts === []) {
                $type = $scope->getType($arrayNode);

                $this->parsedConfigs[$key] = $type;
                $returnTypes[]             = $type;

                continue;
            }

            $ret   = null;
            $items = $arrayNode->items;

            foreach ($configKeyParts as $configKeyPart) {
                foreach ($items as $item) {
                    if (! $item->key instanceof Node\Scalar) {
                        continue 3;
                    }

                    if (! property_exists($item->key, 'value')) {
                        continue;
                    }

                    $itemKey = (string) $item->key->value;
                    if ($itemKey !== $configKeyPart) {
                        continue;
                    }

                    if ($item->value instanceof Array_) {
                        $items = $item->value->items;
                    }

                    $ret = $item->value;
                }
            }

            if ($ret === null) {
                continue;
            }

            $returnTypes[] = $scope->getType($ret);
        }

        return $returnTypes;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



