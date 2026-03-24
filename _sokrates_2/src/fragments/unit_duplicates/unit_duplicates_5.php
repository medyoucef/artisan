vendor/larastan/larastan/src/Methods/MacroMethodsClassReflectionExtension.php [59:182]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        /** @var class-string[] $classNames */
        $classNames         = [];
        $found              = false;
        $macroTraitProperty = null;

        if ($classReflection->isInterface() && Str::startsWith($classReflection->getName(), 'Illuminate\Contracts')) {
            /** @var object|null $concrete */
            $concrete = $this->resolve($classReflection->getName());

            if ($concrete !== null) {
                $className = $concrete::class;

                if ($className && $this->reflectionProvider->getClass($className)->hasTraitUse(Macroable::class)) {
                    $classNames         = [$className];
                    $macroTraitProperty = 'macros';
                }
            }
        } elseif (
            $this->hasIndirectTraitUse($classReflection, Macroable::class) ||
            $classReflection->is(Builder::class) ||
            $classReflection->is(QueryBuilder::class)
        ) {
            $classNames         = [$classReflection->getName()];
            $macroTraitProperty = 'macros';

            if ($classReflection->is(Builder::class)) {
                $classNames[] = Builder::class;
            }
        } elseif ($classReflection->is(Facade::class)) {
            $facadeClass = $classReflection->getName();

            if ($facadeClass === Auth::class) {
                $classNames         = [SessionGuard::class, RequestGuard::class];
                $macroTraitProperty = 'macros';
            } elseif ($facadeClass === Cache::class) {
                $classNames         = [CacheManager::class, CacheRepository::class];
                $macroTraitProperty = 'macros';
            } else {
                $concrete = null;

                try {
                    $concrete = $facadeClass::getFacadeRoot();
                } catch (Throwable) {
                }

                if ($concrete) {
                    $facadeClassName = $concrete::class;

                    if ($facadeClassName) {
                        $classNames         = [$facadeClassName];
                        $macroTraitProperty = 'macros';
                    }
                }
            }
        }

        if ($classNames !== [] && $macroTraitProperty) {
            foreach ($classNames as $className) {
                $macroClassReflection = $this->reflectionProvider->getClass($className);

                if (! $macroClassReflection->getNativeReflection()->hasProperty($macroTraitProperty)) {
                    continue;
                }

                $refProperty = $macroClassReflection->getNativeReflection()->getProperty($macroTraitProperty);

                $found = array_key_exists($methodName, $refProperty->getValue());

                if (! $found) {
                    continue;
                }

                $macroDefinition = $refProperty->getValue()[$methodName];

                if (is_string($macroDefinition)) {
                    if (str_contains($macroDefinition, '::')) {
                        $macroDefinition = explode('::', $macroDefinition, 2);
                        $macroClassName  = $macroDefinition[0];
                        if (! $this->reflectionProvider->hasClass($macroClassName) || ! $this->reflectionProvider->getClass($macroClassName)->hasNativeMethod($macroDefinition[1])) {
                            throw new ShouldNotHappenException('Class ' . $macroClassName . ' does not exist');
                        }

                        $methodReflection = $this->reflectionProvider->getClass($macroClassName)->getNativeMethod($macroDefinition[1]);
                    } elseif (is_callable($macroDefinition)) {
                        $methodReflection = new Macro(
                            $macroClassReflection,
                            $methodName,
                            $this->closureTypeFactory->fromClosureObject(Closure::fromCallable($macroDefinition)),
                        );
                    } else {
                        throw new ShouldNotHappenException('Function ' . $macroDefinition . ' does not exist');
                    }
                } elseif (is_array($macroDefinition)) {
                    if (is_string($macroDefinition[0])) {
                        $macroClassName = $macroDefinition[0];
                    } else {
                        $macroClassName = get_class($macroDefinition[0]);
                    }

                    if ($macroClassName === false || ! $this->reflectionProvider->hasClass($macroClassName) || ! $this->reflectionProvider->getClass($macroClassName)->hasNativeMethod($macroDefinition[1])) {
                        throw new ShouldNotHappenException('Class ' . $macroClassName . ' does not exist');
                    }

                    $methodReflection = $this->reflectionProvider->getClass($macroClassName)->getNativeMethod($macroDefinition[1]);
                } else {
                    $methodReflection = new Macro(
                        $macroClassReflection,
                        $methodName,
                        $this->closureTypeFactory->fromClosureObject($macroDefinition),
                    );

                    $methodReflection->setIsStatic(true);
                }

                $this->methods[$classReflection->getName() . '-' . $methodName] = $methodReflection;

                break;
            }
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/MacroMethodsClassReflectionExtension.php [59:182]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        /** @var class-string[] $classNames */
        $classNames         = [];
        $found              = false;
        $macroTraitProperty = null;

        if ($classReflection->isInterface() && Str::startsWith($classReflection->getName(), 'Illuminate\Contracts')) {
            /** @var object|null $concrete */
            $concrete = $this->resolve($classReflection->getName());

            if ($concrete !== null) {
                $className = $concrete::class;

                if ($className && $this->reflectionProvider->getClass($className)->hasTraitUse(Macroable::class)) {
                    $classNames         = [$className];
                    $macroTraitProperty = 'macros';
                }
            }
        } elseif (
            $this->hasIndirectTraitUse($classReflection, Macroable::class) ||
            $classReflection->is(Builder::class) ||
            $classReflection->is(QueryBuilder::class)
        ) {
            $classNames         = [$classReflection->getName()];
            $macroTraitProperty = 'macros';

            if ($classReflection->is(Builder::class)) {
                $classNames[] = Builder::class;
            }
        } elseif ($classReflection->is(Facade::class)) {
            $facadeClass = $classReflection->getName();

            if ($facadeClass === Auth::class) {
                $classNames         = [SessionGuard::class, RequestGuard::class];
                $macroTraitProperty = 'macros';
            } elseif ($facadeClass === Cache::class) {
                $classNames         = [CacheManager::class, CacheRepository::class];
                $macroTraitProperty = 'macros';
            } else {
                $concrete = null;

                try {
                    $concrete = $facadeClass::getFacadeRoot();
                } catch (Throwable) {
                }

                if ($concrete) {
                    $facadeClassName = $concrete::class;

                    if ($facadeClassName) {
                        $classNames         = [$facadeClassName];
                        $macroTraitProperty = 'macros';
                    }
                }
            }
        }

        if ($classNames !== [] && $macroTraitProperty) {
            foreach ($classNames as $className) {
                $macroClassReflection = $this->reflectionProvider->getClass($className);

                if (! $macroClassReflection->getNativeReflection()->hasProperty($macroTraitProperty)) {
                    continue;
                }

                $refProperty = $macroClassReflection->getNativeReflection()->getProperty($macroTraitProperty);

                $found = array_key_exists($methodName, $refProperty->getValue());

                if (! $found) {
                    continue;
                }

                $macroDefinition = $refProperty->getValue()[$methodName];

                if (is_string($macroDefinition)) {
                    if (str_contains($macroDefinition, '::')) {
                        $macroDefinition = explode('::', $macroDefinition, 2);
                        $macroClassName  = $macroDefinition[0];
                        if (! $this->reflectionProvider->hasClass($macroClassName) || ! $this->reflectionProvider->getClass($macroClassName)->hasNativeMethod($macroDefinition[1])) {
                            throw new ShouldNotHappenException('Class ' . $macroClassName . ' does not exist');
                        }

                        $methodReflection = $this->reflectionProvider->getClass($macroClassName)->getNativeMethod($macroDefinition[1]);
                    } elseif (is_callable($macroDefinition)) {
                        $methodReflection = new Macro(
                            $macroClassReflection,
                            $methodName,
                            $this->closureTypeFactory->fromClosureObject(Closure::fromCallable($macroDefinition)),
                        );
                    } else {
                        throw new ShouldNotHappenException('Function ' . $macroDefinition . ' does not exist');
                    }
                } elseif (is_array($macroDefinition)) {
                    if (is_string($macroDefinition[0])) {
                        $macroClassName = $macroDefinition[0];
                    } else {
                        $macroClassName = get_class($macroDefinition[0]);
                    }

                    if ($macroClassName === false || ! $this->reflectionProvider->hasClass($macroClassName) || ! $this->reflectionProvider->getClass($macroClassName)->hasNativeMethod($macroDefinition[1])) {
                        throw new ShouldNotHappenException('Class ' . $macroClassName . ' does not exist');
                    }

                    $methodReflection = $this->reflectionProvider->getClass($macroClassName)->getNativeMethod($macroDefinition[1]);
                } else {
                    $methodReflection = new Macro(
                        $macroClassReflection,
                        $methodName,
                        $this->closureTypeFactory->fromClosureObject($macroDefinition),
                    );

                    $methodReflection->setIsStatic(true);
                }

                $this->methods[$classReflection->getName() . '-' . $methodName] = $methodReflection;

                break;
            }
        }

        return $found;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



