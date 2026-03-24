vendor/larastan/larastan/src/Rules/NoPublicModelScopeAndAccessorRule.php [100:129]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function isScopeMethod(InClassMethodNode $method): bool
    {
        $methodName = $method->getMethodReflection()->getName();

        if (str_starts_with($methodName, 'scope')) {
            $original = $method->getOriginalNode();

            if ($original->params !== [] && $original->params[0]->type !== null) {
                $firstParamType = $original->params[0]->type;

                if ($firstParamType instanceof Node\Name) {
                    $typeName = $firstParamType->toString();

                    if ($typeName === 'Builder' || str_ends_with($typeName, '\Builder')) {
                        return true;
                    }
                }
            }
        }

        foreach ($method->getOriginalNode()->attrGroups as $attrGroup) {
            foreach ($attrGroup->attrs as $attr) {
                if ($attr->name->toString() === 'Illuminate\Database\Eloquent\Attributes\Scope') {
                    return true;
                }
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoPublicModelScopeAndAccessorRule.php [100:129]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function isScopeMethod(InClassMethodNode $method): bool
    {
        $methodName = $method->getMethodReflection()->getName();

        if (str_starts_with($methodName, 'scope')) {
            $original = $method->getOriginalNode();

            if ($original->params !== [] && $original->params[0]->type !== null) {
                $firstParamType = $original->params[0]->type;

                if ($firstParamType instanceof Node\Name) {
                    $typeName = $firstParamType->toString();

                    if ($typeName === 'Builder' || str_ends_with($typeName, '\Builder')) {
                        return true;
                    }
                }
            }
        }

        foreach ($method->getOriginalNode()->attrGroups as $attrGroup) {
            foreach ($attrGroup->attrs as $attr) {
                if ($attr->name->toString() === 'Illuminate\Database\Eloquent\Attributes\Scope') {
                    return true;
                }
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



