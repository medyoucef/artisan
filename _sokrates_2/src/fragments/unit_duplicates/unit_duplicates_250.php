vendor/larastan/larastan/src/Methods/HigherOrderTapProxyExtension.php [33:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        $templateType = $classReflection->getActiveTemplateTypeMap()->getType('TClass');

        if ($templateType === null || $templateType->getObjectClassReflections() === [] || ! $templateType->hasMethod($methodName)->yes()) {
            throw new ShouldNotHappenException();
        }

        return $templateType->getMethod($methodName, new OutOfClassScope());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/HigherOrderTapProxyExtension.php [33:44]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getMethod(
        ClassReflection $classReflection,
        string $methodName,
    ): MethodReflection {
        $templateType = $classReflection->getActiveTemplateTypeMap()->getType('TClass');

        if ($templateType === null || $templateType->getObjectClassReflections() === [] || ! $templateType->hasMethod($methodName)->yes()) {
            throw new ShouldNotHappenException();
        }

        return $templateType->getMethod($methodName, new OutOfClassScope());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



