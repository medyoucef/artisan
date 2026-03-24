vendor/larastan/larastan/src/Support/ConfigParser.php [49:62]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private FileHelper $fileHelper,
        private Parser $parser,
        private FileTypeMapper $fileTypeMapper,
        array $configPaths,
        #[AutowiredParameter]
        private bool $treatPhpDocTypesAsCertain,
    ) {
        foreach ($configPaths as $configPath) {
            $this->configPaths[] = $this->fileHelper->absolutizePath($configPath);
        }

        $this->configFiles = $this->getConfigFiles();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ConfigParser.php [49:62]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(
        private FileHelper $fileHelper,
        private Parser $parser,
        private FileTypeMapper $fileTypeMapper,
        array $configPaths,
        #[AutowiredParameter]
        private bool $treatPhpDocTypesAsCertain,
    ) {
        foreach ($configPaths as $configPath) {
            $this->configPaths[] = $this->fileHelper->absolutizePath($configPath);
        }

        $this->configFiles = $this->getConfigFiles();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



