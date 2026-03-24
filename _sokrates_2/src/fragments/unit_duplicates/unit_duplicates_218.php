vendor/larastan/larastan/src/Support/ViewFileHelper.php [71:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAllViewNames(): Generator
    {
        foreach ($this->viewDirectories as $viewDirectory) {
            foreach ($this->getViews($viewDirectory) as $view) {
                if (str_contains($view->getPathname(), 'views' . DIRECTORY_SEPARATOR . 'vendor') || str_contains($view->getPathname(), 'views' . DIRECTORY_SEPARATOR . 'errors')) {
                    continue;
                }

                $viewName = explode($viewDirectory . DIRECTORY_SEPARATOR, $view->getPathname());

                yield str_replace([DIRECTORY_SEPARATOR, '.blade.php'], ['.', ''], $viewName[1]);
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Support/ViewFileHelper.php [71:84]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getAllViewNames(): Generator
    {
        foreach ($this->viewDirectories as $viewDirectory) {
            foreach ($this->getViews($viewDirectory) as $view) {
                if (str_contains($view->getPathname(), 'views' . DIRECTORY_SEPARATOR . 'vendor') || str_contains($view->getPathname(), 'views' . DIRECTORY_SEPARATOR . 'errors')) {
                    continue;
                }

                $viewName = explode($viewDirectory . DIRECTORY_SEPARATOR, $view->getPathname());

                yield str_replace([DIRECTORY_SEPARATOR, '.blade.php'], ['.', ''], $viewName[1]);
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



