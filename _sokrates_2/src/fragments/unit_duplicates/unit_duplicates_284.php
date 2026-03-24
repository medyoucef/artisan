vendor/larastan/larastan/src/Collectors/UsedTranslationViewCollector.php [29:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getUsedTranslations(): array
    {
        $translations = [];

        foreach ($this->viewFileHelper->getRootViewFilePaths() as $viewFile) {
            $parserNodes = $this->viewParser->getNodes($viewFile);

            $translations[$viewFile] = $this->processNodes($parserNodes);
        }

        return $translations;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Collectors/UsedTranslationViewCollector.php [29:40]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getUsedTranslations(): array
    {
        $translations = [];

        foreach ($this->viewFileHelper->getRootViewFilePaths() as $viewFile) {
            $parserNodes = $this->viewParser->getNodes($viewFile);

            $translations[$viewFile] = $this->processNodes($parserNodes);
        }

        return $translations;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



