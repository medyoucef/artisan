vendor/larastan/larastan/src/Methods/MacroMethodsClassReflectionExtension.php [191:202]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function hasIndirectTraitUse(ClassReflection $class, string $traitName): bool
    {
        $className = $class->getName();

        if (array_key_exists($className, $this->traitCache) && array_key_exists($traitName, $this->traitCache[$className])) {
            return $this->traitCache[$className][$traitName];
        }

        $this->traitCache[$className][$traitName] = in_array($traitName, array_keys($class->getTraits(true)), true);

        return $this->traitCache[$className][$traitName];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Methods/MacroMethodsClassReflectionExtension.php [191:202]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function hasIndirectTraitUse(ClassReflection $class, string $traitName): bool
    {
        $className = $class->getName();

        if (array_key_exists($className, $this->traitCache) && array_key_exists($traitName, $this->traitCache[$className])) {
            return $this->traitCache[$className][$traitName];
        }

        $this->traitCache[$className][$traitName] = in_array($traitName, array_keys($class->getTraits(true)), true);

        return $this->traitCache[$className][$traitName];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



