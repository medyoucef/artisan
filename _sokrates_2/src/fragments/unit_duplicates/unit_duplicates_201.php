vendor/symfony/string/Inflector/FrenchInflector.php [130:145]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function pluralize(string $singular): array
    {
        if ($this->isInflectedWord($singular)) {
            return [$singular];
        }

        foreach (self::PLURALIZE_REGEXP as $rule) {
            [$regexp, $replace] = $rule;

            if (1 === preg_match($regexp, $singular)) {
                return [preg_replace($regexp, $replace, $singular)];
            }
        }

        return [$singular.'s'];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/symfony/string/Inflector/SpanishInflector.php [99:114]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function pluralize(string $singular): array
    {
        if ($this->isInflectedWord($singular)) {
            return [$singular];
        }

        foreach (self::PLURALIZE_REGEXP as $rule) {
            [$regexp, $replace] = $rule;

            if (1 === preg_match($regexp, $singular)) {
                return [preg_replace($regexp, $replace, $singular)];
            }
        }

        return [$singular.'s'];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



