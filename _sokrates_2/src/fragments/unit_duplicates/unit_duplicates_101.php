vendor/fakerphp/faker/src/Faker/ORM/Propel/EntityPopulator.php [100:127]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isColumnBehavior(\ColumnMap $columnMap)
    {
        foreach ($columnMap->getTable()->getBehaviors() as $name => $params) {
            $columnName = Base::toLower($columnMap->getName());

            switch ($name) {
                case 'nested_set':
                    $columnNames = [$params['left_column'], $params['right_column'], $params['level_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;

                case 'timestampable':
                    $columnNames = [$params['create_column'], $params['update_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/ORM/Propel2/EntityPopulator.php [103:130]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isColumnBehavior(ColumnMap $columnMap)
    {
        foreach ($columnMap->getTable()->getBehaviors() as $name => $params) {
            $columnName = Base::toLower($columnMap->getName());

            switch ($name) {
                case 'nested_set':
                    $columnNames = [$params['left_column'], $params['right_column'], $params['level_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;

                case 'timestampable':
                    $columnNames = [$params['create_column'], $params['update_column']];

                    if (in_array($columnName, $columnNames, false)) {
                        return true;
                    }

                    break;
            }
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



