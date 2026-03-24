vendor/larastan/larastan/src/ReturnTypes/RelationCollectionExtension.php [36:51]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        $modelType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TRelatedModel');

        if ($modelType === null && $methodReflection->getDeclaringClass()->getName() === Builder::class) {
            $modelType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TModel');
        }

        if ($modelType === null || $modelType->getObjectClassNames() === []) {
            return false;
        }

        return $methodReflection->getDeclaringClass()->hasNativeMethod($methodReflection->getName()) ||
            $this->reflectionProvider->getClass(Builder::class)->hasNativeMethod($methodReflection->getName()) ||
            $this->reflectionProvider->getClass(QueryBuilder::class)->hasNativeMethod($methodReflection->getName());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/RelationCollectionExtension.php [36:51]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isMethodSupported(MethodReflection $methodReflection): bool
    {
        $modelType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TRelatedModel');

        if ($modelType === null && $methodReflection->getDeclaringClass()->getName() === Builder::class) {
            $modelType = $methodReflection->getDeclaringClass()->getActiveTemplateTypeMap()->getType('TModel');
        }

        if ($modelType === null || $modelType->getObjectClassNames() === []) {
            return false;
        }

        return $methodReflection->getDeclaringClass()->hasNativeMethod($methodReflection->getName()) ||
            $this->reflectionProvider->getClass(Builder::class)->hasNativeMethod($methodReflection->getName()) ||
            $this->reflectionProvider->getClass(QueryBuilder::class)->hasNativeMethod($methodReflection->getName());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



