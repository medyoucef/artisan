vendor/laravel/prompts/src/Themes/Default/MultiSearchPromptRenderer.php [85:101]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function spaceForDropdown(MultiSearchPrompt $prompt): self
    {
        if ($prompt->searchValue() !== '') {
            return $this;
        }

        $this->newLine(max(
            0,
            min($prompt->scroll, $prompt->terminal()->lines() - 7) - count($prompt->matches()),
        ));

        if ($prompt->matches() === []) {
            $this->newLine();
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/prompts/src/Themes/Default/SearchPromptRenderer.php [82:98]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function spaceForDropdown(SearchPrompt $prompt): self
    {
        if ($prompt->searchValue() !== '') {
            return $this;
        }

        $this->newLine(max(
            0,
            min($prompt->scroll, $prompt->terminal()->lines() - 7) - count($prompt->matches()),
        ));

        if ($prompt->matches() === []) {
            $this->newLine();
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



