vendor/larastan/larastan/src/Collectors/UsedViewInAnotherViewCollector.php [29:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getUsedViews(): array
    {
        $usedViews = [];

        foreach ($this->viewFileHelper->getAllViewFilePaths() as $viewFile) {
            $parserNodes = $this->viewParser->getNodes($viewFile);

            $usedViews = array_merge($usedViews, $this->processNodes($parserNodes));
        }

        return $usedViews;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedViewInAnotherViewCollector.php [29:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getUsedViews(): array
    {
        $usedViews = [];

        foreach ($this->viewFileHelper->getAllViewFilePaths() as $viewFile) {
            $parserNodes = $this->viewParser->getNodes($viewFile);

            $usedViews = array_merge($usedViews, $this->processNodes($parserNodes));
        }

        return $usedViews;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



