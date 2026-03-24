vendor/larastan/larastan/src/Internal/ConsoleApplicationResolver.php [45:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getApplication(): Application
    {
        if ($this->application === null) {
            $this->application = new Application(app(Container::class), app(Dispatcher::class), app()->version());
            $this->application->setContainerCommandLoader();
        }

        return $this->application;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Internal/ConsoleApplicationResolver.php [45:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getApplication(): Application
    {
        if ($this->application === null) {
            $this->application = new Application(app(Container::class), app(Dispatcher::class), app()->version());
            $this->application->setContainerCommandLoader();
        }

        return $this->application;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



