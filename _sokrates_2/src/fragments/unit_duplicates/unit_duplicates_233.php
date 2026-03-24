vendor/larastan/larastan/src/Types/CollectionOf/CollectionOfType.php [80:93]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverseSimultaneously(Type $right, callable $cb): Type
    {
        if (! $right instanceof self) {
            return $this;
        }

        $type = $cb($this->type, $right->type);

        if ($this->type === $type) {
            return $this;
        }

        return new self($type, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/CollectionOf/CollectionOfType.php [80:93]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverseSimultaneously(Type $right, callable $cb): Type
    {
        if (! $right instanceof self) {
            return $this;
        }

        $type = $cb($this->type, $right->type);

        if ($this->type === $type) {
            return $this;
        }

        return new self($type, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



