vendor/larastan/larastan/src/Types/Factory/ModelFactoryType.php [16:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        string $className,
        Type|null $subtractedType = null,
        ClassReflection|null $classReflection = null,
        TrinaryLogic|null $isSingleModel = null,
    ) {
        parent::__construct($className, $subtractedType, $classReflection);

        $this->isSingleModel = $isSingleModel ?? TrinaryLogic::createMaybe();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Types/Factory/ModelFactoryType.php [16:25]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        string $className,
        Type|null $subtractedType = null,
        ClassReflection|null $classReflection = null,
        TrinaryLogic|null $isSingleModel = null,
    ) {
        parent::__construct($className, $subtractedType, $classReflection);

        $this->isSingleModel = $isSingleModel ?? TrinaryLogic::createMaybe();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



