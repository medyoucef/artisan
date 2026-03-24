vendor/larastan/larastan/src/Types/GenericEloquentBuilderTypeNodeResolverExtension.php [27:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof UnionTypeNode || count($typeNode->types) !== 2) {
            return null;
        }

        $modelTypeNode   = null;
        $builderTypeNode = null;
        foreach ($typeNode->types as $innerTypeNode) {
            if (
                ! ($innerTypeNode instanceof IdentifierTypeNode)
                || ! $this->provider->hasClass($nameScope->resolveStringName($innerTypeNode->name))
                || ! (new ObjectType(Model::class))->isSuperTypeOf(new ObjectType($nameScope->resolveStringName($innerTypeNode->name)))->yes()
            ) {
                continue;
            }

            $modelTypeNode = $innerTypeNode;
        }

        if ($modelTypeNode === null) {
            return null;
        }

        foreach ($typeNode->types as $innerTypeNode) {
            if (
                ! ($innerTypeNode instanceof IdentifierTypeNode)
                || ! $this->provider->hasClass($nameScope->resolveStringName($innerTypeNode->name))
                || ($nameScope->resolveStringName($innerTypeNode->name) !== Builder::class && ! (new ObjectType(Builder::class))->isSuperTypeOf(new ObjectType($nameScope->resolveStringName($innerTypeNode->name)))->yes())
            ) {
                continue;
            }

            $builderTypeNode = $innerTypeNode;
        }

        if ($builderTypeNode === null) {
            return null;
        }

        $builderTypeName = $nameScope->resolveStringName($builderTypeNode->name);
        $modelTypeName   = $nameScope->resolveStringName($modelTypeNode->name);

        return new GenericObjectType($builderTypeName, [
            new ObjectType($modelTypeName),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/GenericEloquentBuilderTypeNodeResolverExtension.php [27:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof UnionTypeNode || count($typeNode->types) !== 2) {
            return null;
        }

        $modelTypeNode   = null;
        $builderTypeNode = null;
        foreach ($typeNode->types as $innerTypeNode) {
            if (
                ! ($innerTypeNode instanceof IdentifierTypeNode)
                || ! $this->provider->hasClass($nameScope->resolveStringName($innerTypeNode->name))
                || ! (new ObjectType(Model::class))->isSuperTypeOf(new ObjectType($nameScope->resolveStringName($innerTypeNode->name)))->yes()
            ) {
                continue;
            }

            $modelTypeNode = $innerTypeNode;
        }

        if ($modelTypeNode === null) {
            return null;
        }

        foreach ($typeNode->types as $innerTypeNode) {
            if (
                ! ($innerTypeNode instanceof IdentifierTypeNode)
                || ! $this->provider->hasClass($nameScope->resolveStringName($innerTypeNode->name))
                || ($nameScope->resolveStringName($innerTypeNode->name) !== Builder::class && ! (new ObjectType(Builder::class))->isSuperTypeOf(new ObjectType($nameScope->resolveStringName($innerTypeNode->name)))->yes())
            ) {
                continue;
            }

            $builderTypeNode = $innerTypeNode;
        }

        if ($builderTypeNode === null) {
            return null;
        }

        $builderTypeName = $nameScope->resolveStringName($builderTypeNode->name);
        $modelTypeName   = $nameScope->resolveStringName($modelTypeNode->name);

        return new GenericObjectType($builderTypeName, [
            new ObjectType($modelTypeName),
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



