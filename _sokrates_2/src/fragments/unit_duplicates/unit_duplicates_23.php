vendor/larastan/larastan/src/Properties/ModelCastHelper.php [139:198]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getWriteableType(string $cast, Type $originalType): Type
    {
        $cast = $this->parseCast($cast);

        $attributeType = match ($cast) {
            'int', 'integer', 'timestamp' => new IntegerType(),
            'real', 'float', 'double' => new FloatType(),
            'decimal' => TypeCombinator::intersect(new StringType(), new AccessoryNumericStringType(), new FloatType()),
            'string' => new StringType(),
            'bool', 'boolean' => TypeCombinator::union(new BooleanType(), new ConstantIntegerType(0), new ConstantIntegerType(1)),
            'object' => new ObjectType(stdClass::class),
            'array', 'json' => new ArrayType(new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()),
            'collection' => new ObjectType(Collection::class),
            'date', 'datetime' => $this->getDateType(),
            'immutable_date', 'immutable_datetime' => new ObjectType(CarbonImmutable::class),
            AsArrayObject::class, AsCollection::class,
            AsEncryptedArrayObject::class, AsEncryptedCollection::class => new MixedType(),
            AsStringable::class => TypeCombinator::union(new StringType(), new ObjectType(Stringable::class)),
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

        if (
            $classReflection->is(CastsAttributes::class)
            || $classReflection->is(CastsInboundAttributes::class)
        ) {
            $methodReflection = $classReflection->getNativeMethod('set');
            $parameters       = $methodReflection->getVariants()[0]->getParameters();

            $valueParameter = Arr::first($parameters, static fn (ParameterReflection $parameterReflection) => $parameterReflection->getName() === 'value');

            if ($valueParameter) {
                return $valueParameter->getType();
            }
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelCastHelper.php [139:198]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getWriteableType(string $cast, Type $originalType): Type
    {
        $cast = $this->parseCast($cast);

        $attributeType = match ($cast) {
            'int', 'integer', 'timestamp' => new IntegerType(),
            'real', 'float', 'double' => new FloatType(),
            'decimal' => TypeCombinator::intersect(new StringType(), new AccessoryNumericStringType(), new FloatType()),
            'string' => new StringType(),
            'bool', 'boolean' => TypeCombinator::union(new BooleanType(), new ConstantIntegerType(0), new ConstantIntegerType(1)),
            'object' => new ObjectType(stdClass::class),
            'array', 'json' => new ArrayType(new BenevolentUnionType([new IntegerType(), new StringType()]), new MixedType()),
            'collection' => new ObjectType(Collection::class),
            'date', 'datetime' => $this->getDateType(),
            'immutable_date', 'immutable_datetime' => new ObjectType(CarbonImmutable::class),
            AsArrayObject::class, AsCollection::class,
            AsEncryptedArrayObject::class, AsEncryptedCollection::class => new MixedType(),
            AsStringable::class => TypeCombinator::union(new StringType(), new ObjectType(Stringable::class)),
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

        if (
            $classReflection->is(CastsAttributes::class)
            || $classReflection->is(CastsInboundAttributes::class)
        ) {
            $methodReflection = $classReflection->getNativeMethod('set');
            $parameters       = $methodReflection->getVariants()[0]->getParameters();

            $valueParameter = Arr::first($parameters, static fn (ParameterReflection $parameterReflection) => $parameterReflection->getName() === 'value');

            if ($valueParameter) {
                return $valueParameter->getType();
            }
        }

        return new MixedType();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



