vendor/larastan/larastan/src/SQL/IamcalSqlParser.php [85:113]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function resolveNullable(array $field): bool
    {
        // If the parser explicitly captured NULL / NOT NULL, trust it.
        if (isset($field['null'])) {
            return $field['null'];
        }

        // Types where MySQL generally omits DEFAULT NULL in SHOW CREATE TABLE,
        // but the column is still nullable unless NOT NULL is explicitly present.
        return in_array($field['type'], [
            'TEXT',
            'TINYTEXT',
            'MEDIUMTEXT',
            'LONGTEXT',
            'BLOB',
            'TINYBLOB',
            'MEDIUMBLOB',
            'LONGBLOB',
            'JSON',
            'GEOMETRY',
            'POINT',
            'LINESTRING',
            'POLYGON',
            'MULTIPOINT',
            'MULTILINESTRING',
            'MULTIPOLYGON',
            'GEOMETRYCOLLECTION',
        ], true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/SQL/IamcalSqlParser.php [85:113]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function resolveNullable(array $field): bool
    {
        // If the parser explicitly captured NULL / NOT NULL, trust it.
        if (isset($field['null'])) {
            return $field['null'];
        }

        // Types where MySQL generally omits DEFAULT NULL in SHOW CREATE TABLE,
        // but the column is still nullable unless NOT NULL is explicitly present.
        return in_array($field['type'], [
            'TEXT',
            'TINYTEXT',
            'MEDIUMTEXT',
            'LONGTEXT',
            'BLOB',
            'TINYBLOB',
            'MEDIUMBLOB',
            'LONGBLOB',
            'JSON',
            'GEOMETRY',
            'POINT',
            'LINESTRING',
            'POLYGON',
            'MULTIPOINT',
            'MULTILINESTRING',
            'MULTIPOLYGON',
            'GEOMETRYCOLLECTION',
        ], true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



