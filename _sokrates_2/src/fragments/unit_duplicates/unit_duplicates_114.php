vendor/larastan/larastan/src/Types/CollectionOf/CollectionOfTypeNodeResolverExtension.php [30:55]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof GenericTypeNode) {
            return null;
        }

        if ($typeNode->type->name !== 'collection-of') {
            return null;
        }

        if (count($typeNode->genericTypes) !== 1) {
            return null;
        }

        $genericType = $this->typeNodeResolver->resolve($typeNode->genericTypes[0], $nameScope);

        if ((new ObjectType(Model::class))->isSuperTypeOf($genericType)->no()) {
            return null;
        }

        if ($genericType instanceof NeverType) {
            return null;
        }

        return new CollectionOfType($genericType, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/CollectionOf/CollectionOfTypeNodeResolverExtension.php [30:55]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof GenericTypeNode) {
            return null;
        }

        if ($typeNode->type->name !== 'collection-of') {
            return null;
        }

        if (count($typeNode->genericTypes) !== 1) {
            return null;
        }

        $genericType = $this->typeNodeResolver->resolve($typeNode->genericTypes[0], $nameScope);

        if ((new ObjectType(Model::class))->isSuperTypeOf($genericType)->no()) {
            return null;
        }

        if ($genericType instanceof NeverType) {
            return null;
        }

        return new CollectionOfType($genericType, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



