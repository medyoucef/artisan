vendor/laravel/framework/src/Illuminate/Testing/Constraints/NotSoftDeletedInDatabase.php [86:103]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getAdditionalInfo($table)
    {
        $query = $this->database->table($table);

        $results = $query->limit($this->show)->get();

        if ($results->isEmpty()) {
            return 'The table is empty';
        }

        $description = 'Found: '.json_encode($results, JSON_PRETTY_PRINT);

        if ($query->count() > $this->show) {
            $description .= sprintf(' and %s others', $query->count() - $this->show);
        }

        return $description;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Testing/Constraints/SoftDeletedInDatabase.php [88:105]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getAdditionalInfo($table)
    {
        $query = $this->database->table($table);

        $results = $query->limit($this->show)->get();

        if ($results->isEmpty()) {
            return 'The table is empty';
        }

        $description = 'Found: '.json_encode($results, JSON_PRETTY_PRINT);

        if ($query->count() > $this->show) {
            $description .= sprintf(' and %s others', $query->count() - $this->show);
        }

        return $description;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



