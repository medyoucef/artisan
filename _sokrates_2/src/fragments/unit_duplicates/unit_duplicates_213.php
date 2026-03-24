vendor/larastan/larastan/src/SQL/PhpMyAdminSqlParser.php [67:80]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function convertTypeOptions(OptionsArray $options): array
    {
        $result = [];

        foreach ($options->options as $option) {
            if (is_array($option)) {
                $result[] = strtolower($option['name']);
            } else {
                $result[] = strtolower($option);
            }
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/PhpMyAdminSqlParser.php [67:80]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function convertTypeOptions(OptionsArray $options): array
    {
        $result = [];

        foreach ($options->options as $option) {
            if (is_array($option)) {
                $result[] = strtolower($option['name']);
            } else {
                $result[] = strtolower($option);
            }
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



