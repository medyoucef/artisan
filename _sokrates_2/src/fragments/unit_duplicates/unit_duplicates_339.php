vendor/larastan/larastan/src/Properties/SchemaColumn.php [12:20]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        public string $name,
        public string $readableType,
        public bool $nullable = false,
        /** @var array<int, string> */
        public array|null $options = null,
    ) {
        $this->writeableType = $readableType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/SchemaColumn.php [12:20]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        public string $name,
        public string $readableType,
        public bool $nullable = false,
        /** @var array<int, string> */
        public array|null $options = null,
    ) {
        $this->writeableType = $readableType;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



