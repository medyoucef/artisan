vendor/larastan/larastan/src/Properties/ModelCastHelper.php [79:137]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getReadableType(string $cast, Type $originalType): Type
    {
        $cast = $this->parseCast($cast);

        $attributeType = match ($cast) {
            'int', 'integer', 'timestamp' => new IntegerType(),
            'real', 'float', 'double' => new FloatType(),
            'decimal' => TypeCombinator::intersect(new StringType(), new AccessoryNumericStringType()),
            'string' => new StringType(),
            'bool', 'boolean' => new BooleanType(),
            'object' => new ObjectType(stdClass::class),
            'array', 'json' => new ArrayType(new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()),
            'collection' => new ObjectType(Collection::class),
            'date', 'datetime' => $this->getDateType(),
            'immutable_date', 'immutable_datetime' => new ObjectType(CarbonImmutable::class),
            AsArrayObject::class, AsEncryptedArrayObject::class => new ObjectType(ArrayObject::class),
            AsCollection::class, AsEncryptedCollection::class => new BenevolentUnionType([
                new GenericObjectType(Collection::class, [new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()]),
                new NullType(),
            ]),
            AsStringable::class => new ObjectType(IlluminateStringable::class),
            default => null,
        };

        if ($attributeType) {
            return $attributeType;
        }

        if (! $this->reflectionProvider->hasClass($cast)) {
            return $originalType;
        }

        $classReflection = $this->reflectionProvider->getClass($cast);

        if ($classReflection->isEnum()) {
            return new ObjectType($cast);
        }

        if ($classReflection->is(Castable::class)) {
            $methodReflection = $classReflection->getNativeMethod('castUsing');
            $castUsingReturn  = $methodReflection->getVariants()[0]->getReturnType();

            if ($castUsingReturn->getObjectClassReflections() !== []) {
                $classReflection = $castUsingReturn->getObjectClassReflections()[0];
            }
        }

        if ($classReflection->is(CastsAttributes::class)) {
            $methodReflection = $classReflection->getNativeMethod('get');

            return $methodReflection->getVariants()[0]->getReturnType();
        }

        if ($classReflection->is(CastsInboundAttributes::class)) {
            return $originalType;
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelCastHelper.php [79:137]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getReadableType(string $cast, Type $originalType): Type
    {
        $cast = $this->parseCast($cast);

        $attributeType = match ($cast) {
            'int', 'integer', 'timestamp' => new IntegerType(),
            'real', 'float', 'double' => new FloatType(),
            'decimal' => TypeCombinator::intersect(new StringType(), new AccessoryNumericStringType()),
            'string' => new StringType(),
            'bool', 'boolean' => new BooleanType(),
            'object' => new ObjectType(stdClass::class),
            'array', 'json' => new ArrayType(new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()),
            'collection' => new ObjectType(Collection::class),
            'date', 'datetime' => $this->getDateType(),
            'immutable_date', 'immutable_datetime' => new ObjectType(CarbonImmutable::class),
            AsArrayObject::class, AsEncryptedArrayObject::class => new ObjectType(ArrayObject::class),
            AsCollection::class, AsEncryptedCollection::class => new BenevolentUnionType([
                new GenericObjectType(Collection::class, [new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()]),
                new NullType(),
            ]),
            AsStringable::class => new ObjectType(IlluminateStringable::class),
            default => null,
        };

        if ($attributeType) {
            return $attributeType;
        }

        if (! $this->reflectionProvider->hasClass($cast)) {
            return $originalType;
        }

        $classReflection = $this->reflectionProvider->getClass($cast);

        if ($classReflection->isEnum()) {
            return new ObjectType($cast);
        }

        if ($classReflection->is(Castable::class)) {
            $methodReflection = $classReflection->getNativeMethod('castUsing');
            $castUsingReturn  = $methodReflection->getVariants()[0]->getReturnType();

            if ($castUsingReturn->getObjectClassReflections() !== []) {
                $classReflection = $castUsingReturn->getObjectClassReflections()[0];
            }
        }

        if ($classReflection->is(CastsAttributes::class)) {
            $methodReflection = $classReflection->getNativeMethod('get');

            return $methodReflection->getVariants()[0]->getReturnType();
        }

        if ($classReflection->is(CastsInboundAttributes::class)) {
            return $originalType;
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



