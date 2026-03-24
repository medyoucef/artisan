vendor/larastan/larastan/src/Types/ModelProperty/ModelPropertyTypeNodeResolverExtension.php [34:63]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof GenericTypeNode) {
            return null;
        }

        if ($typeNode->type->name !== 'model-property') {
            return null;
        }

        if (! $this->active) {
            return new StringType();
        }

        if (count($typeNode->genericTypes) !== 1) {
            return new ErrorType();
        }

        $genericType = $this->baseResolver->resolve($typeNode->genericTypes[0], $nameScope);

        if ((new ObjectType(Model::class))->isSuperTypeOf($genericType)->no()) {
            return new ErrorType();
        }

        if ($genericType instanceof NeverType) {
            return new ErrorType();
        }

        return new GenericModelPropertyType($genericType, $this->modelPropertyHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ModelProperty/ModelPropertyTypeNodeResolverExtension.php [34:63]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function resolve(TypeNode $typeNode, NameScope $nameScope): Type|null
    {
        if (! $typeNode instanceof GenericTypeNode) {
            return null;
        }

        if ($typeNode->type->name !== 'model-property') {
            return null;
        }

        if (! $this->active) {
            return new StringType();
        }

        if (count($typeNode->genericTypes) !== 1) {
            return new ErrorType();
        }

        $genericType = $this->baseResolver->resolve($typeNode->genericTypes[0], $nameScope);

        if ((new ObjectType(Model::class))->isSuperTypeOf($genericType)->no()) {
            return new ErrorType();
        }

        if ($genericType instanceof NeverType) {
            return new ErrorType();
        }

        return new GenericModelPropertyType($genericType, $this->modelPropertyHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



