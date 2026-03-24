vendor/larastan/larastan/src/Rules/NoModelMakeRule.php [71:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isCalledOnModel(StaticCall $call, Scope $scope): bool
    {
        $class = $call->class;
        if ($class instanceof FullyQualified) {
            $type = new ObjectType($class->toString());
        } elseif ($class instanceof Expr) {
            $type = $scope->getType($class);

            if ($type->isClassString()->yes() && $type->getConstantStrings() !== []) {
                $type = new ObjectType($type->getConstantStrings()[0]->getValue());
            }
        } else {
            // TODO can we handle relative names, do they even occur here?
            return false;
        }

        return (new ObjectType(Model::class))
            ->isSuperTypeOf($type)
            ->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoModelMakeRule.php [71:90]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isCalledOnModel(StaticCall $call, Scope $scope): bool
    {
        $class = $call->class;
        if ($class instanceof FullyQualified) {
            $type = new ObjectType($class->toString());
        } elseif ($class instanceof Expr) {
            $type = $scope->getType($class);

            if ($type->isClassString()->yes() && $type->getConstantStrings() !== []) {
                $type = new ObjectType($type->getConstantStrings()[0]->getValue());
            }
        } else {
            // TODO can we handle relative names, do they even occur here?
            return false;
        }

        return (new ObjectType(Model::class))
            ->isSuperTypeOf($type)
            ->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



