vendor/larastan/larastan/src/Methods/BuilderHelper.php [259:289]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineBuilderName(string $modelClassName): string
    {
        $modelReflection = $this->reflectionProvider->getClass($modelClassName);
        $method          = $modelReflection->getNativeMethod('newEloquentBuilder');

        if ($method->getDeclaringClass()->getName() === Model::class) {
            $attrs = $modelReflection->getNativeReflection()->getAttributes('Illuminate\Database\Eloquent\Attributes\UseEloquentBuilder'); //@phpstan-ignore argument.type (Attribute class might not exist)

            if ($attrs !== []) {
                $expr =  $attrs[0]->getArgumentsExpressions()[0];

                if ($expr instanceof ClassConstFetch && $expr->class instanceof Name) {
                    return $expr->class->toString();
                }
            }
        }

        $returnType = $method->getVariants()[0]->getReturnType();

        if (in_array(EloquentBuilder::class, $returnType->getReferencedClasses(), true)) {
            return EloquentBuilder::class;
        }

        $classNames = $returnType->getObjectClassNames();

        if (count($classNames) === 1) {
            return $classNames[0];
        }

        return $returnType->describe(VerbosityLevel::value());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/BuilderHelper.php [259:289]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineBuilderName(string $modelClassName): string
    {
        $modelReflection = $this->reflectionProvider->getClass($modelClassName);
        $method          = $modelReflection->getNativeMethod('newEloquentBuilder');

        if ($method->getDeclaringClass()->getName() === Model::class) {
            $attrs = $modelReflection->getNativeReflection()->getAttributes('Illuminate\Database\Eloquent\Attributes\UseEloquentBuilder'); //@phpstan-ignore argument.type (Attribute class might not exist)

            if ($attrs !== []) {
                $expr =  $attrs[0]->getArgumentsExpressions()[0];

                if ($expr instanceof ClassConstFetch && $expr->class instanceof Name) {
                    return $expr->class->toString();
                }
            }
        }

        $returnType = $method->getVariants()[0]->getReturnType();

        if (in_array(EloquentBuilder::class, $returnType->getReferencedClasses(), true)) {
            return EloquentBuilder::class;
        }

        $classNames = $returnType->getObjectClassNames();

        if (count($classNames) === 1) {
            return $classNames[0];
        }

        return $returnType->describe(VerbosityLevel::value());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



