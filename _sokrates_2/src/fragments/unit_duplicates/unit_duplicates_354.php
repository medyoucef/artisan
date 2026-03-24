vendor/larastan/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [136:145]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverse(callable $cb): Type
    {
        $newType = $cb($this->getGenericType());

        if ($newType === $this->getGenericType()) {
            return $this;
        }

        return new self($newType, $this->modelPropertyHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/ModelProperty/GenericModelPropertyType.php [136:145]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverse(callable $cb): Type
    {
        $newType = $cb($this->getGenericType());

        if ($newType === $this->getGenericType()) {
            return $this;
        }

        return new self($newType, $this->modelPropertyHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



