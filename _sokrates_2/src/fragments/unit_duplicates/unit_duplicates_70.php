vendor/larastan/larastan/src/Support/HigherOrderCollectionProxyHelper.php [27:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasPropertyOrMethod(ClassReflection $classReflection, string $name, string $propertyOrMethod): bool
    {
        if ($classReflection->getName() !== HigherOrderCollectionProxy::class) {
            return false;
        }

        $activeTemplateTypeMap = $classReflection->getActiveTemplateTypeMap();

        if ($activeTemplateTypeMap->count() !== 3) {
            return false;
        }

        $methodType = $activeTemplateTypeMap->getType('T');
        $valueType  = $activeTemplateTypeMap->getType('TValue');

        if (($methodType === null) || ($valueType === null)) {
            return false;
        }

        $constants = $methodType->getConstantStrings();

        if (count($constants) !== 1) {
            return false;
        }

        if (! $valueType->canCallMethods()->yes()) {
            return false;
        }

        if ($propertyOrMethod === 'method') {
            return $valueType->hasMethod($name)->yes();
        }

        return $valueType->hasInstanceProperty($name)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/HigherOrderCollectionProxyHelper.php [27:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasPropertyOrMethod(ClassReflection $classReflection, string $name, string $propertyOrMethod): bool
    {
        if ($classReflection->getName() !== HigherOrderCollectionProxy::class) {
            return false;
        }

        $activeTemplateTypeMap = $classReflection->getActiveTemplateTypeMap();

        if ($activeTemplateTypeMap->count() !== 3) {
            return false;
        }

        $methodType = $activeTemplateTypeMap->getType('T');
        $valueType  = $activeTemplateTypeMap->getType('TValue');

        if (($methodType === null) || ($valueType === null)) {
            return false;
        }

        $constants = $methodType->getConstantStrings();

        if (count($constants) !== 1) {
            return false;
        }

        if (! $valueType->canCallMethods()->yes()) {
            return false;
        }

        if ($propertyOrMethod === 'method') {
            return $valueType->hasMethod($name)->yes();
        }

        return $valueType->hasInstanceProperty($name)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



