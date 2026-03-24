vendor/larastan/larastan/src/SQL/IamcalSqlParser.php [73:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function resolveTypeOptions(array $field): array
    {
        $result = [];

        if (array_key_exists('unsigned', $field) && $field['unsigned']) {
            $result[] = 'unsigned';
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/IamcalSqlParser.php [73:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function resolveTypeOptions(array $field): array
    {
        $result = [];

        if (array_key_exists('unsigned', $field) && $field['unsigned']) {
            $result[] = 'unsigned';
        }

        return $result;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



