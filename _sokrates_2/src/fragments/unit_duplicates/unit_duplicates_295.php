vendor/larastan/larastan/src/Support/ViewFileHelper.php [49:58]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getRootViewFilePaths(): Generator
    {
        $finder = $this->resolve(ViewFactory::class)->getFinder();

        foreach ($finder->getPaths() as $path) {
            foreach ($this->getViews($path) as $view) {
                yield $view->getPathname();
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewFileHelper.php [49:58]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getRootViewFilePaths(): Generator
    {
        $finder = $this->resolve(ViewFactory::class)->getFinder();

        foreach ($finder->getPaths() as $path) {
            foreach ($this->getViews($path) as $view) {
                yield $view->getPathname();
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



