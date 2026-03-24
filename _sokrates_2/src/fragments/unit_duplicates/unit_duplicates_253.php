vendor/larastan/larastan/src/Properties/ModelCastHelper.php [200:211]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getDateType(): Type
    {
        $dateClass = class_exists(Date::class)
            ? Date::now()::class
            : IlluminateCarbon::class;

        if ($dateClass === IlluminateCarbon::class) {
            return new ObjectType(Carbon::class);
        }

        return new ObjectType($dateClass);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Properties/ModelCastHelper.php [200:211]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getDateType(): Type
    {
        $dateClass = class_exists(Date::class)
            ? Date::now()::class
            : IlluminateCarbon::class;

        if ($dateClass === IlluminateCarbon::class) {
            return new ObjectType(Carbon::class);
        }

        return new ObjectType($dateClass);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



