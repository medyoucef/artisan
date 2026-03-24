vendor/larastan/larastan/src/Rules/DeferrableServiceProviderMissingProvidesRule.php [32:58]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $classReflection = $node->getClassReflection();

        // This rule is only applicable to deferrable serviceProviders
        if (! $classReflection->is(ServiceProvider::class) || ! $classReflection->implementsInterface(DeferrableProvider::class)) {
            return [];
        }

        if (! $classReflection->hasNativeMethod('provides')) {
            throw new ShouldNotHappenException('If this scenario happens, the "provides" method is removed from the base Laravel ServiceProvider and this rule can be removed.');
        }

        $method = $classReflection->getNativeMethod('provides');

        // The provides method is overwritten somewhere in the class hierarchy
        if ($method->getDeclaringClass()->getName() !== ServiceProvider::class) {
            return [];
        }

        return [
            RuleErrorBuilder::message('ServiceProviders that implement the "DeferrableProvider" interface should implement the "provides" method that returns an array of strings or class-strings')
                ->line($node->getStartLine())
                ->identifier('larastan.deferrableServiceProvider.missingProvides')
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/DeferrableServiceProviderMissingProvidesRule.php [32:58]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function processNode(Node $node, Scope $scope): array
    {
        $classReflection = $node->getClassReflection();

        // This rule is only applicable to deferrable serviceProviders
        if (! $classReflection->is(ServiceProvider::class) || ! $classReflection->implementsInterface(DeferrableProvider::class)) {
            return [];
        }

        if (! $classReflection->hasNativeMethod('provides')) {
            throw new ShouldNotHappenException('If this scenario happens, the "provides" method is removed from the base Laravel ServiceProvider and this rule can be removed.');
        }

        $method = $classReflection->getNativeMethod('provides');

        // The provides method is overwritten somewhere in the class hierarchy
        if ($method->getDeclaringClass()->getName() !== ServiceProvider::class) {
            return [];
        }

        return [
            RuleErrorBuilder::message('ServiceProviders that implement the "DeferrableProvider" interface should implement the "provides" method that returns an array of strings or class-strings')
                ->line($node->getStartLine())
                ->identifier('larastan.deferrableServiceProvider.missingProvides')
                ->build(),
        ];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



