vendor/symfony/service-contracts/ServiceMethodsSubscriberTrait.php [31:66]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getSubscribedServices(): array
    {
        $services = method_exists(get_parent_class(self::class) ?: '', __FUNCTION__) ? parent::getSubscribedServices() : [];

        foreach ((new \ReflectionClass(self::class))->getMethods() as $method) {
            if (self::class !== $method->getDeclaringClass()->name) {
                continue;
            }

            if (!$attribute = $method->getAttributes(SubscribedService::class)[0] ?? null) {
                continue;
            }

            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                throw new \LogicException(\sprintf('Cannot use "%s" on method "%s::%s()" (can only be used on non-static, non-abstract methods with no parameters).', SubscribedService::class, self::class, $method->name));
            }

            if (!$returnType = $method->getReturnType()) {
                throw new \LogicException(\sprintf('Cannot use "%s" on methods without a return type in "%s::%s()".', SubscribedService::class, $method->name, self::class));
            }

            /* @var SubscribedService $attribute */
            $attribute = $attribute->newInstance();
            $attribute->key ??= self::class.'::'.$method->name;
            $attribute->type ??= $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType;
            $attribute->nullable = $attribute->nullable ?: $returnType->allowsNull();

            if ($attribute->attributes) {
                $services[] = $attribute;
            } else {
                $services[$attribute->key] = ($attribute->nullable ? '?' : '').$attribute->type;
            }
        }

        return $services;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/symfony/service-contracts/ServiceSubscriberTrait.php [35:70]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function getSubscribedServices(): array
    {
        $services = method_exists(get_parent_class(self::class) ?: '', __FUNCTION__) ? parent::getSubscribedServices() : [];

        foreach ((new \ReflectionClass(self::class))->getMethods() as $method) {
            if (self::class !== $method->getDeclaringClass()->name) {
                continue;
            }

            if (!$attribute = $method->getAttributes(SubscribedService::class)[0] ?? null) {
                continue;
            }

            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                throw new \LogicException(\sprintf('Cannot use "%s" on method "%s::%s()" (can only be used on non-static, non-abstract methods with no parameters).', SubscribedService::class, self::class, $method->name));
            }

            if (!$returnType = $method->getReturnType()) {
                throw new \LogicException(\sprintf('Cannot use "%s" on methods without a return type in "%s::%s()".', SubscribedService::class, $method->name, self::class));
            }

            /* @var SubscribedService $attribute */
            $attribute = $attribute->newInstance();
            $attribute->key ??= self::class.'::'.$method->name;
            $attribute->type ??= $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType;
            $attribute->nullable = $attribute->nullable ?: $returnType->allowsNull();

            if ($attribute->attributes) {
                $services[] = $attribute;
            } else {
                $services[$attribute->key] = ($attribute->nullable ? '?' : '').$attribute->type;
            }
        }

        return $services;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



