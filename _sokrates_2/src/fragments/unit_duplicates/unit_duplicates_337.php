vendor/larastan/larastan/src/Properties/ModelPropertyHelper.php [246:256]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function hasDate(Model $modelInstance, string $propertyName): bool
    {
        $dates = $modelInstance->getDates();

        // In order to support SoftDeletes
        if (method_exists($modelInstance, 'getDeletedAtColumn')) {
            $dates[] = $modelInstance->getDeletedAtColumn();
        }

        return in_array($propertyName, $dates, true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelPropertyHelper.php [246:256]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function hasDate(Model $modelInstance, string $propertyName): bool
    {
        $dates = $modelInstance->getDates();

        // In order to support SoftDeletes
        if (method_exists($modelInstance, 'getDeletedAtColumn')) {
            $dates[] = $modelInstance->getDeletedAtColumn();
        }

        return in_array($propertyName, $dates, true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



