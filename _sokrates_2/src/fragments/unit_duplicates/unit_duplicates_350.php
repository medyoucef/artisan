vendor/larastan/larastan/src/Support/ViewFileHelper.php [61:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAllViewFilePaths(): Generator
    {
        foreach ($this->viewDirectories as $viewDirectory) {
            foreach ($this->getViews($viewDirectory) as $view) {
                yield $view->getPathname();
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewFileHelper.php [61:68]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAllViewFilePaths(): Generator
    {
        foreach ($this->viewDirectories as $viewDirectory) {
            foreach ($this->getViews($viewDirectory) as $view) {
                yield $view->getPathname();
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



