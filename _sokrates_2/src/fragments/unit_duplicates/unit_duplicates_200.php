vendor/symfony/string/Inflector/FrenchInflector.php [113:128]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function singularize(string $plural): array
    {
        if ($this->isInflectedWord($plural)) {
            return [$plural];
        }

        foreach (self::SINGULARIZE_REGEXP as $rule) {
            [$regexp, $replace] = $rule;

            if (1 === preg_match($regexp, $plural)) {
                return [preg_replace($regexp, $replace, $plural)];
            }
        }

        return [$plural];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/symfony/string/Inflector/SpanishInflector.php [82:97]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function singularize(string $plural): array
    {
        if ($this->isInflectedWord($plural)) {
            return [$plural];
        }

        foreach (self::SINGULARIZE_REGEXP as $rule) {
            [$regexp, $replace] = $rule;

            if (1 === preg_match($regexp, $plural)) {
                return [preg_replace($regexp, $replace, $plural)];
            }
        }

        return [$plural];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



