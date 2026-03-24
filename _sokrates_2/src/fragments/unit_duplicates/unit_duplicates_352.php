vendor/larastan/larastan/src/Types/CollectionOf/CollectionOfType.php [30:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getResult(): Type
    {
        $results = [];

        foreach ($this->type->getObjectClassNames() as $className) {
            $results[] = $this->collectionHelper->determineCollectionClass($className);
        }

        return TypeCombinator::union(...$results);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/CollectionOf/CollectionOfType.php [30:39]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getResult(): Type
    {
        $results = [];

        foreach ($this->type->getObjectClassNames() as $className) {
            $results[] = $this->collectionHelper->determineCollectionClass($className);
        }

        return TypeCombinator::union(...$results);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



