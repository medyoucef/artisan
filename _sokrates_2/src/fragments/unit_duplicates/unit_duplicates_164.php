vendor/fakerphp/faker/src/Faker/ORM/Propel/EntityPopulator.php [187:203]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function execute($con, $insertedEntities)
    {
        $obj = new $this->class();

        foreach ($this->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                $obj->setByName($column, is_callable($format) ? $format($insertedEntities, $obj) : $format);
            }
        }

        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
        $obj->save($con);

        return $obj->getPrimaryKey();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/ORM/Propel2/EntityPopulator.php [190:206]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function execute($con, $insertedEntities)
    {
        $obj = new $this->class();

        foreach ($this->getColumnFormatters() as $column => $format) {
            if (null !== $format) {
                $obj->setByName($column, is_callable($format) ? $format($insertedEntities, $obj) : $format);
            }
        }

        foreach ($this->getModifiers() as $modifier) {
            $modifier($obj, $insertedEntities);
        }
        $obj->save($con);

        return $obj->getPrimaryKey();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



