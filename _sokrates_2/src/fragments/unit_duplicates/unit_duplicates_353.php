vendor/larastan/larastan/src/Types/CollectionOf/CollectionOfType.php [69:78]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverse(callable $cb): Type
    {
        $type = $cb($this->type);

        if ($this->type === $type) {
            return $this;
        }

        return new self($type, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/CollectionOf/CollectionOfType.php [69:78]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function traverse(callable $cb): Type
    {
        $type = $cb($this->type);

        if ($this->type === $type) {
            return $this;
        }

        return new self($type, $this->collectionHelper);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



