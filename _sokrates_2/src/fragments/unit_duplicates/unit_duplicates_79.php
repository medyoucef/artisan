vendor/larastan/larastan/src/Properties/ModelCastHelper.php [302:335]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function parseCastsMethod(ClassReflection $modelClassReflection): Type
    {
        $castsMethod = $modelClassReflection->getNativeMethod('casts');
        $fileName    = $castsMethod->getDeclaringClass()->getFileName();

        if ($fileName === null) {
            return new NullType();
        }

        $stmts = $this->parser->parseFile($fileName);

        $castsMethodNode = (new NodeFinder())->findFirst($stmts, static function (Node $node) use ($castsMethod): bool {
            return $node instanceof Node\Stmt\ClassMethod && $node->name->toString() === $castsMethod->getName();
        });

        if ($castsMethodNode === null) {
            return new NullType();
        }

        /** @var Node\Stmt\Return_|null $returnNode */
        $returnNode = (new NodeFinder())->findFirstInstanceOf($castsMethodNode, Node\Stmt\Return_::class);

        if ($returnNode === null) {
            return new NullType();
        }

        if (! $returnNode->expr instanceof Array_) {
            return new NullType();
        }

        $scope = $this->scopeFactory->create(ScopeContext::create($fileName));

        return $scope->getType($returnNode->expr);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelCastHelper.php [302:335]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function parseCastsMethod(ClassReflection $modelClassReflection): Type
    {
        $castsMethod = $modelClassReflection->getNativeMethod('casts');
        $fileName    = $castsMethod->getDeclaringClass()->getFileName();

        if ($fileName === null) {
            return new NullType();
        }

        $stmts = $this->parser->parseFile($fileName);

        $castsMethodNode = (new NodeFinder())->findFirst($stmts, static function (Node $node) use ($castsMethod): bool {
            return $node instanceof Node\Stmt\ClassMethod && $node->name->toString() === $castsMethod->getName();
        });

        if ($castsMethodNode === null) {
            return new NullType();
        }

        /** @var Node\Stmt\Return_|null $returnNode */
        $returnNode = (new NodeFinder())->findFirstInstanceOf($castsMethodNode, Node\Stmt\Return_::class);

        if ($returnNode === null) {
            return new NullType();
        }

        if (! $returnNode->expr instanceof Array_) {
            return new NullType();
        }

        $scope = $this->scopeFactory->create(ScopeContext::create($fileName));

        return $scope->getType($returnNode->expr);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



