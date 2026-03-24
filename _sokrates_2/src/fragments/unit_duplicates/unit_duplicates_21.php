vendor/larastan/larastan/src/Rules/NoPublicModelScopeAndAccessorRule.php [35:98]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, AnalyserScope $scope): array
    {
        $classReflection = $node->getClassReflection();

        if (! $classReflection->is(Model::class)) {
            return [];
        }

        $parentClass = $node->getClassReflection()->getParentClass();

        if ($parentClass !== null && $parentClass->hasNativeMethod($node->getMethodReflection()->getName())) {
            return [];
        }

        if ($this->isScopeMethod($node)) {
            if (! $node->getOriginalNode()->isProtected()) {
                return [
                    RuleErrorBuilder::message(
                        sprintf(
                            "Local query scope method '%s' should be declared as protected.",
                            $node->getMethodReflection()->getName(),
                        ),
                    )
                    ->identifier('larastan.noPublicModelScopeMethod')
                    ->line($node->getStartLine())
                    ->file($scope->getFile())
                    ->fixNode($node->getOriginalNode(), static function (Node $node) {
                        $node->flags &= ~Modifiers::PUBLIC;
                        $node->flags &= ~Modifiers::PRIVATE;
                        $node->flags |= Modifiers::PROTECTED;

                        return $node;
                    })
                    ->build(),
                ];
            }
        }

        if ($this->isAccessorMethod($node)) {
            if (! $node->getOriginalNode()->isProtected()) {
                return [
                    RuleErrorBuilder::message(
                        sprintf(
                            "Model accessor method '%s' should be declared as protected.",
                            $node->getMethodReflection()->getName(),
                        ),
                    )
                    ->identifier('larastan.noPublicModelAccessorMethod')
                    ->line($node->getStartLine())
                    ->file($scope->getFile())
                    ->fixNode($node->getOriginalNode(), static function (Node $node) {
                        $node->flags &= ~Modifiers::PUBLIC;
                        $node->flags &= ~Modifiers::PRIVATE;
                        $node->flags |= Modifiers::PROTECTED;

                        return $node;
                    })
                    ->build(),
                ];
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoPublicModelScopeAndAccessorRule.php [35:98]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, AnalyserScope $scope): array
    {
        $classReflection = $node->getClassReflection();

        if (! $classReflection->is(Model::class)) {
            return [];
        }

        $parentClass = $node->getClassReflection()->getParentClass();

        if ($parentClass !== null && $parentClass->hasNativeMethod($node->getMethodReflection()->getName())) {
            return [];
        }

        if ($this->isScopeMethod($node)) {
            if (! $node->getOriginalNode()->isProtected()) {
                return [
                    RuleErrorBuilder::message(
                        sprintf(
                            "Local query scope method '%s' should be declared as protected.",
                            $node->getMethodReflection()->getName(),
                        ),
                    )
                    ->identifier('larastan.noPublicModelScopeMethod')
                    ->line($node->getStartLine())
                    ->file($scope->getFile())
                    ->fixNode($node->getOriginalNode(), static function (Node $node) {
                        $node->flags &= ~Modifiers::PUBLIC;
                        $node->flags &= ~Modifiers::PRIVATE;
                        $node->flags |= Modifiers::PROTECTED;

                        return $node;
                    })
                    ->build(),
                ];
            }
        }

        if ($this->isAccessorMethod($node)) {
            if (! $node->getOriginalNode()->isProtected()) {
                return [
                    RuleErrorBuilder::message(
                        sprintf(
                            "Model accessor method '%s' should be declared as protected.",
                            $node->getMethodReflection()->getName(),
                        ),
                    )
                    ->identifier('larastan.noPublicModelAccessorMethod')
                    ->line($node->getStartLine())
                    ->file($scope->getFile())
                    ->fixNode($node->getOriginalNode(), static function (Node $node) {
                        $node->flags &= ~Modifiers::PUBLIC;
                        $node->flags &= ~Modifiers::PRIVATE;
                        $node->flags |= Modifiers::PROTECTED;

                        return $node;
                    })
                    ->build(),
                ];
            }
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



