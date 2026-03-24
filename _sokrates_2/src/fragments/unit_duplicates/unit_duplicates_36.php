vendor/larastan/larastan/src/Rules/ModelAppendsRule.php [44:92]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if ($node->props[0]->name->toString() !== 'appends') {
            return [];
        }

        $classReflection = $scope->getClassReflection();

        if (! $classReflection?->is(Model::class)) {
            return [];
        }

        $value = $node->props[0]->default;

        if (! $value instanceof Array_) {
            return [];
        }

        $appends = $value->items;

        return array_reduce($appends, function ($errors, $appended) use ($classReflection, $scope) {
            if (! $appended->value instanceof String_) {
                return $errors;
            }

            $name = $appended->value->value;

            $hasDatabaseProperty = $this->modelPropertyHelper->hasDatabaseProperty($classReflection, $name);
            $hasAccessor         = $this->modelPropertyHelper->hasAccessor($classReflection, $name, strictGenerics: false);

            if ($hasDatabaseProperty) {
                $errors[] = RuleErrorBuilder::message(sprintf("Property '%s' is not a computed property, remove from \$appends.", $name))
                    ->identifier('rules.modelAppends')
                    ->line($appended->getStartLine())
                    ->file($scope->getFile())
                    ->build();
            }

            if (! $hasDatabaseProperty && ! $hasAccessor) {
                $errors[] = RuleErrorBuilder::message(sprintf("Property '%s' does not exist in model.", $name))
                    ->identifier('rules.modelAppends')
                    ->line($appended->getStartLine())
                    ->file($scope->getFile())
                    ->build();
            }

            return $errors;
        }, []);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/ModelAppendsRule.php [44:92]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if ($node->props[0]->name->toString() !== 'appends') {
            return [];
        }

        $classReflection = $scope->getClassReflection();

        if (! $classReflection?->is(Model::class)) {
            return [];
        }

        $value = $node->props[0]->default;

        if (! $value instanceof Array_) {
            return [];
        }

        $appends = $value->items;

        return array_reduce($appends, function ($errors, $appended) use ($classReflection, $scope) {
            if (! $appended->value instanceof String_) {
                return $errors;
            }

            $name = $appended->value->value;

            $hasDatabaseProperty = $this->modelPropertyHelper->hasDatabaseProperty($classReflection, $name);
            $hasAccessor         = $this->modelPropertyHelper->hasAccessor($classReflection, $name, strictGenerics: false);

            if ($hasDatabaseProperty) {
                $errors[] = RuleErrorBuilder::message(sprintf("Property '%s' is not a computed property, remove from \$appends.", $name))
                    ->identifier('rules.modelAppends')
                    ->line($appended->getStartLine())
                    ->file($scope->getFile())
                    ->build();
            }

            if (! $hasDatabaseProperty && ! $hasAccessor) {
                $errors[] = RuleErrorBuilder::message(sprintf("Property '%s' does not exist in model.", $name))
                    ->identifier('rules.modelAppends')
                    ->line($appended->getStartLine())
                    ->file($scope->getFile())
                    ->build();
            }

            return $errors;
        }, []);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



