vendor/sebastian/code-unit/src/CodeUnitCollection.php [66:74]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function mergeWith(self $other): self
    {
        return new self(
            array_merge(
                $this->asArray(),
                $other->asArray(),
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/sebastian/complexity/src/Complexity/ComplexityCollection.php [110:118]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function mergeWith(self $other): self
    {
        return new self(
            array_merge(
                $this->asArray(),
                $other->asArray(),
            ),
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



