vendor/larastan/larastan/src/Rules/RelationExistenceRule.php [176:189]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getRuleError(
        string $relationName,
        ClassReflection $modelReflection,
        Node $node,
    ): RuleError {
        return RuleErrorBuilder::message(sprintf(
            "Relation '%s' is not found in %s model.",
            $relationName,
            $modelReflection->getName(),
        ))
            ->identifier('larastan.relationExistence')
            ->line($node->getAttribute('startLine'))
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/RelationExistenceRule.php [176:189]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getRuleError(
        string $relationName,
        ClassReflection $modelReflection,
        Node $node,
    ): RuleError {
        return RuleErrorBuilder::message(sprintf(
            "Relation '%s' is not found in %s model.",
            $relationName,
            $modelReflection->getName(),
        ))
            ->identifier('larastan.relationExistence')
            ->line($node->getAttribute('startLine'))
            ->build();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



