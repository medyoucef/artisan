vendor/larastan/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [135:201]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Identifier) {
            return [];
        }

        $name = $node->name;

        if (! in_array($name->toLowerString(), $this->shouldHandle, true)) {
            return [];
        }

        if (! $this->isCalledOnCollection($node->var, $scope)) {
            // Method was not called on a collection, so no errors.
            return [];
        }

        $previousCall = $node->var;

        if (! $this->callIsQuery($previousCall, $scope)) {
            // Previous call wasn't on a Builder, so no errors.
            return [];
        }

        if (! ($previousCall->name instanceof Identifier)) {
            // Previous call was made dynamically e.g. User::query()->{$method}()
            // Can't really analyze it in this scenario so no errors.
            return [];
        }

        if ($name->toLowerString() === 'first') {
            if (count($node->args) === 0) {
                // 'first', also accepts a closure as an argument.
                return [$this->formatError($name->toString())];
            }
        } elseif ($this->isRiskyMethod($name)) {
            return [$this->formatError($name->toString())];
        } elseif ($this->isRiskyParamMethod($name)) {
            if (count($node->args) === 0) {
                // Calling e.g. DB::table()->pluck($columnName)->sum()
                // We have to check whether $columnName is actually a database column
                // and not an alias for some computed attribute
                if ($previousCall->name->name === 'pluck' && $this->firstArgIsDatabaseColumn($previousCall, $scope)) {
                    return [$this->formatError($name->toString())];
                }

                return [];
            }

            if ($this->firstArgIsDatabaseColumn($node, $scope)) {
                return [$this->formatError($name->toString())];
            }
        } elseif (in_array($name->toLowerString(), ['contains', 'containsstrict'], true)) {
            // 'contains' can also be called with Model instances or keys as its first argument
            /** @var Arg[] $args */
            $args = $node->args;
            if (count($args) === 1 && ! ($args[0]->value instanceof Node\FunctionLike)) {
                return [$this->formatError($name->toString())];
            }

            if ($this->firstArgIsDatabaseColumn($node, $scope)) {
                return [$this->formatError($name->toString())];
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [135:201]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Identifier) {
            return [];
        }

        $name = $node->name;

        if (! in_array($name->toLowerString(), $this->shouldHandle, true)) {
            return [];
        }

        if (! $this->isCalledOnCollection($node->var, $scope)) {
            // Method was not called on a collection, so no errors.
            return [];
        }

        $previousCall = $node->var;

        if (! $this->callIsQuery($previousCall, $scope)) {
            // Previous call wasn't on a Builder, so no errors.
            return [];
        }

        if (! ($previousCall->name instanceof Identifier)) {
            // Previous call was made dynamically e.g. User::query()->{$method}()
            // Can't really analyze it in this scenario so no errors.
            return [];
        }

        if ($name->toLowerString() === 'first') {
            if (count($node->args) === 0) {
                // 'first', also accepts a closure as an argument.
                return [$this->formatError($name->toString())];
            }
        } elseif ($this->isRiskyMethod($name)) {
            return [$this->formatError($name->toString())];
        } elseif ($this->isRiskyParamMethod($name)) {
            if (count($node->args) === 0) {
                // Calling e.g. DB::table()->pluck($columnName)->sum()
                // We have to check whether $columnName is actually a database column
                // and not an alias for some computed attribute
                if ($previousCall->name->name === 'pluck' && $this->firstArgIsDatabaseColumn($previousCall, $scope)) {
                    return [$this->formatError($name->toString())];
                }

                return [];
            }

            if ($this->firstArgIsDatabaseColumn($node, $scope)) {
                return [$this->formatError($name->toString())];
            }
        } elseif (in_array($name->toLowerString(), ['contains', 'containsstrict'], true)) {
            // 'contains' can also be called with Model instances or keys as its first argument
            /** @var Arg[] $args */
            $args = $node->args;
            if (count($args) === 1 && ! ($args[0]->value instanceof Node\FunctionLike)) {
                return [$this->formatError($name->toString())];
            }

            if ($this->firstArgIsDatabaseColumn($node, $scope)) {
                return [$this->formatError($name->toString())];
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



