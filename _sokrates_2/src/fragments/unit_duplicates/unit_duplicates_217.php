vendor/larastan/larastan/src/Support/ViewFileHelper.php [32:46]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(private array $viewDirectories, private FileHelper $fileHelper)
    {
        if (count($viewDirectories) !== 0) {
            return;
        }

        $finder = $this->resolve(ViewFactory::class)->getFinder();

        $viewDirectories = array_merge(
            $finder->getPaths(),
            ...array_values($finder->getHints()),
        );

        $this->viewDirectories = $viewDirectories; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewFileHelper.php [32:46]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function __construct(private array $viewDirectories, private FileHelper $fileHelper)
    {
        if (count($viewDirectories) !== 0) {
            return;
        }

        $finder = $this->resolve(ViewFactory::class)->getFinder();

        $viewDirectories = array_merge(
            $finder->getPaths(),
            ...array_values($finder->getHints()),
        );

        $this->viewDirectories = $viewDirectories; // @phpstan-ignore-line
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



