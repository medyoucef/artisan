vendor/larastan/larastan/src/Rules/NoAuthHelperInRequestScopeRule.php [39:112]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier) {
            return [];
        }

        $methodName = $node->name->toString();

        if (! in_array($methodName, ['check', 'user', 'guest'], true)) {
            return [];
        }

        if (! $node->var instanceof Node\Expr\FuncCall) {
            return [];
        }

        if (! $node->var->name instanceof Name || $node->var->name->name !== 'auth') {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        if (! (new ObjectType(AuthManager::class))->isSuperTypeOf($calledOnType)->yes()) {
            return [];
        }

        $message = match ($methodName) {
            'check' => 'Do not use auth()->check() in a class that has access to the request. Use $%s->user() !== null instead.',
            'user' => 'Do not use auth()->user() in a class that has access to the request. Use $%s->user() instead.',
            'guest' => 'Do not use auth()->guest() in a class that has access to the request. Use $%s->user() === null instead.',
        };

        if ($scope->isInClass() && $scope->getClassReflection()->is(Request::class)) {
            return [
                RuleErrorBuilder::message(sprintf($message, 'this'))
                    ->identifier('larastan.noAuthHelperInRequestScope')
                    ->fixNode($node, static function (Node $node) use ($methodName) {
                        $variable = new Node\Expr\Variable('this');

                        return match ($methodName) {
                            'check' => new NotIdentical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                            'user' => new MethodCall($variable, 'user', []),
                            'guest' => new Identical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                        };
                    })
                    ->build(),
            ];
        }

        if (! $scope->hasVariableType('request')->yes()) {
            return [];
        }

        $requestType = $scope->getVariableType('request');

        if (! (new ObjectType(Request::class))->isSuperTypeOf($requestType)->yes()) {
            return [];
        }

        return [
            RuleErrorBuilder::message(sprintf($message, 'request'))
                ->identifier('larastan.noAuthHelperInRequestScope')
                ->fixNode($node, static function (Node $node) use ($methodName) {
                    $variable = new Node\Expr\Variable('request');

                    return match ($methodName) {
                        'check' => new NotIdentical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                        'user' => new MethodCall($variable, 'user', []),
                        'guest' => new Identical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                    };
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoAuthHelperInRequestScopeRule.php [39:112]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Node\Identifier) {
            return [];
        }

        $methodName = $node->name->toString();

        if (! in_array($methodName, ['check', 'user', 'guest'], true)) {
            return [];
        }

        if (! $node->var instanceof Node\Expr\FuncCall) {
            return [];
        }

        if (! $node->var->name instanceof Name || $node->var->name->name !== 'auth') {
            return [];
        }

        $calledOnType = $scope->getType($node->var);

        if (! (new ObjectType(AuthManager::class))->isSuperTypeOf($calledOnType)->yes()) {
            return [];
        }

        $message = match ($methodName) {
            'check' => 'Do not use auth()->check() in a class that has access to the request. Use $%s->user() !== null instead.',
            'user' => 'Do not use auth()->user() in a class that has access to the request. Use $%s->user() instead.',
            'guest' => 'Do not use auth()->guest() in a class that has access to the request. Use $%s->user() === null instead.',
        };

        if ($scope->isInClass() && $scope->getClassReflection()->is(Request::class)) {
            return [
                RuleErrorBuilder::message(sprintf($message, 'this'))
                    ->identifier('larastan.noAuthHelperInRequestScope')
                    ->fixNode($node, static function (Node $node) use ($methodName) {
                        $variable = new Node\Expr\Variable('this');

                        return match ($methodName) {
                            'check' => new NotIdentical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                            'user' => new MethodCall($variable, 'user', []),
                            'guest' => new Identical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                        };
                    })
                    ->build(),
            ];
        }

        if (! $scope->hasVariableType('request')->yes()) {
            return [];
        }

        $requestType = $scope->getVariableType('request');

        if (! (new ObjectType(Request::class))->isSuperTypeOf($requestType)->yes()) {
            return [];
        }

        return [
            RuleErrorBuilder::message(sprintf($message, 'request'))
                ->identifier('larastan.noAuthHelperInRequestScope')
                ->fixNode($node, static function (Node $node) use ($methodName) {
                    $variable = new Node\Expr\Variable('request');

                    return match ($methodName) {
                        'check' => new NotIdentical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                        'user' => new MethodCall($variable, 'user', []),
                        'guest' => new Identical(new MethodCall($variable, 'user', []), new Node\Expr\ConstFetch(new Name('null'))),
                    };
                })
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



