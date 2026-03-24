vendor/laravel/framework/src/Illuminate/Foundation/Console/EnumMakeCommand.php [70:77]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getDefaultNamespace($rootNamespace)
    {
        return match (true) {
            is_dir(app_path('Enums')) => $rootNamespace.'\\Enums',
            is_dir(app_path('Enumerations')) => $rootNamespace.'\\Enumerations',
            default => $rootNamespace,
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Foundation/Console/InterfaceMakeCommand.php [49:56]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getDefaultNamespace($rootNamespace)
    {
        return match (true) {
            is_dir(app_path('Contracts')) => $rootNamespace.'\\Contracts',
            is_dir(app_path('Interfaces')) => $rootNamespace.'\\Interfaces',
            default => $rootNamespace,
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Foundation/Console/TraitMakeCommand.php [62:69]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getDefaultNamespace($rootNamespace)
    {
        return match (true) {
            is_dir(app_path('Concerns')) => $rootNamespace.'\\Concerns',
            is_dir(app_path('Traits')) => $rootNamespace.'\\Traits',
            default => $rootNamespace,
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



