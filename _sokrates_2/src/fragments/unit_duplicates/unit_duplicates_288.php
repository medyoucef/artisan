vendor/larastan/larastan/src/Methods/ModelForwardsCallsExtension.php [221:230]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function transformStaticType(Type $type, GenericObjectType $builder): Type
    {
        return TypeTraverser::map($type, static function (Type $type, callable $traverse) use ($builder): Type {
            if ($type instanceof StaticType) {
                return $builder;
            }

            return $traverse($type);
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/ModelForwardsCallsExtension.php [221:230]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function transformStaticType(Type $type, GenericObjectType $builder): Type
    {
        return TypeTraverser::map($type, static function (Type $type, callable $traverse) use ($builder): Type {
            if ($type instanceof StaticType) {
                return $builder;
            }

            return $traverse($type);
        });
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



