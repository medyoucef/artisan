vendor/larastan/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [326:334]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function formatError(string $methodName): RuleError
    {
        return RuleErrorBuilder::message(sprintf(
            "Called '%s' on Laravel collection, but could have been retrieved as a query.",
            $methodName,
        ))
            ->identifier('larastan.noUnnecessaryCollectionCall')
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/NoUnnecessaryCollectionCallRule.php [326:334]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function formatError(string $methodName): RuleError
    {
        return RuleErrorBuilder::message(sprintf(
            "Called '%s' on Laravel collection, but could have been retrieved as a query.",
            $methodName,
        ))
            ->identifier('larastan.noUnnecessaryCollectionCall')
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



