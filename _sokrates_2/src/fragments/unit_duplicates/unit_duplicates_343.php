vendor/larastan/larastan/src/Rules/OctaneCompatibilityRule.php [153:160]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function dependencyInjectionError(Node $node): RuleError
    {
        return RuleErrorBuilder::message('Consider using bind method instead or pass a closure.')
            ->identifier('larastan.octaneCompatibility')
            ->tip('See: https://laravel.com/docs/octane#dependency-injection-and-octane')
            ->line($node->getAttribute('startLine'))
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/OctaneCompatibilityRule.php [153:160]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function dependencyInjectionError(Node $node): RuleError
    {
        return RuleErrorBuilder::message('Consider using bind method instead or pass a closure.')
            ->identifier('larastan.octaneCompatibility')
            ->tip('See: https://laravel.com/docs/octane#dependency-injection-and-octane')
            ->line($node->getAttribute('startLine'))
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



