vendor/larastan/larastan/src/Support/CollectionHelper.php [72:100]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineCollectionClassName(string $modelClassName): string
    {
        try {
            $modelReflection = $this->reflectionProvider->getClass($modelClassName);

            $attrs = $modelReflection->getNativeReflection()->getAttributes('Illuminate\Database\Eloquent\Attributes\CollectedBy'); //@phpstan-ignore argument.type (Attribute class might not exist)

            if ($attrs !== []) {
                $expr =  $attrs[0]->getArgumentsExpressions()[0];

                if ($expr instanceof ClassConstFetch && $expr->class instanceof Name) {
                    return $expr->class->toString();
                }
            }

            $newCollectionMethod = $modelReflection->getNativeMethod('newCollection');
            $returnType          = $newCollectionMethod->getVariants()[0]->getReturnType();

            $classNames = $returnType->getObjectClassNames();

            if (count($classNames) === 1) {
                return $classNames[0];
            }

            return $returnType->describe(VerbosityLevel::value());
        } catch (MissingMethodFromReflectionException | ShouldNotHappenException) {
            return EloquentCollection::class;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/CollectionHelper.php [72:100]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function determineCollectionClassName(string $modelClassName): string
    {
        try {
            $modelReflection = $this->reflectionProvider->getClass($modelClassName);

            $attrs = $modelReflection->getNativeReflection()->getAttributes('Illuminate\Database\Eloquent\Attributes\CollectedBy'); //@phpstan-ignore argument.type (Attribute class might not exist)

            if ($attrs !== []) {
                $expr =  $attrs[0]->getArgumentsExpressions()[0];

                if ($expr instanceof ClassConstFetch && $expr->class instanceof Name) {
                    return $expr->class->toString();
                }
            }

            $newCollectionMethod = $modelReflection->getNativeMethod('newCollection');
            $returnType          = $newCollectionMethod->getVariants()[0]->getReturnType();

            $classNames = $returnType->getObjectClassNames();

            if (count($classNames) === 1) {
                return $classNames[0];
            }

            return $returnType->describe(VerbosityLevel::value());
        } catch (MissingMethodFromReflectionException | ShouldNotHappenException) {
            return EloquentCollection::class;
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



