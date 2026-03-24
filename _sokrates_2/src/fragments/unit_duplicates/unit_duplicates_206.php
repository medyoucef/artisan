vendor/larastan/larastan/src/Methods/HigherOrderTapProxyExtension.php [16:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== HigherOrderTapProxy::class) {
            return false;
        }

        $templateTypeMap = $classReflection->getActiveTemplateTypeMap();

        $templateType = $templateTypeMap->getType('TClass');

        if ($templateType === null || $templateType->getObjectClassReflections() === []) {
            return false;
        }

        return $templateType->hasMethod($methodName)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/HigherOrderTapProxyExtension.php [16:31]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== HigherOrderTapProxy::class) {
            return false;
        }

        $templateTypeMap = $classReflection->getActiveTemplateTypeMap();

        $templateType = $templateTypeMap->getType('TClass');

        if ($templateType === null || $templateType->getObjectClassReflections() === []) {
            return false;
        }

        return $templateType->hasMethod($methodName)->yes();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



