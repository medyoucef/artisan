vendor/larastan/larastan/src/Types/GenericEloquentCollectionTypeNodeResolverExtension.php [41:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof UnionTypeNode || count($typeNode->types) !== 2) {
            return null;
        }

        $arrayTypeNode      = null;
        $identifierTypeNode = null;
        foreach ($typeNode->types as $innerTypeNode) {
            if ($innerTypeNode instanceof ArrayTypeNode) {
                $arrayTypeNode = $innerTypeNode;
                continue;
            }

            if (! ($innerTypeNode instanceof IdentifierTypeNode)) {
                continue;
            }

            $identifierTypeNode = $innerTypeNode;
        }

        if ($arrayTypeNode === null || $identifierTypeNode === null) {
            return null;
        }

        $identifierTypeName = $nameScope->resolveStringName($identifierTypeNode->name);
        if ($identifierTypeName !== Collection::class) {
            return null;
        }

        $innerArrayTypeNode = $arrayTypeNode->type;
        if (! $innerArrayTypeNode instanceof IdentifierTypeNode) {
            return null;
        }

        $resolvedInnerArrayType = $this->typeNodeResolver->resolve($innerArrayTypeNode, $nameScope);

        return new GenericObjectType($identifierTypeName, [
            new IntegerType(),
            $resolvedInnerArrayType,
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/GenericEloquentCollectionTypeNodeResolverExtension.php [41:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof UnionTypeNode || count($typeNode->types) !== 2) {
            return null;
        }

        $arrayTypeNode      = null;
        $identifierTypeNode = null;
        foreach ($typeNode->types as $innerTypeNode) {
            if ($innerTypeNode instanceof ArrayTypeNode) {
                $arrayTypeNode = $innerTypeNode;
                continue;
            }

            if (! ($innerTypeNode instanceof IdentifierTypeNode)) {
                continue;
            }

            $identifierTypeNode = $innerTypeNode;
        }

        if ($arrayTypeNode === null || $identifierTypeNode === null) {
            return null;
        }

        $identifierTypeName = $nameScope->resolveStringName($identifierTypeNode->name);
        if ($identifierTypeName !== Collection::class) {
            return null;
        }

        $innerArrayTypeNode = $arrayTypeNode->type;
        if (! $innerArrayTypeNode instanceof IdentifierTypeNode) {
            return null;
        }

        $resolvedInnerArrayType = $this->typeNodeResolver->resolve($innerArrayTypeNode, $nameScope);

        return new GenericObjectType($identifierTypeName, [
            new IntegerType(),
            $resolvedInnerArrayType,
        ]);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



