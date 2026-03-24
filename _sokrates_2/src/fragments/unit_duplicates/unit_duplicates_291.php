vendor/larastan/larastan/src/ReturnTypes/GuardDynamicStaticMethodReturnTypeExtension.php [74:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findTypeFromGuardDriver(string $driver): Type|null
    {
        return match ($driver) {
            'session' => new ObjectType('Illuminate\Auth\SessionGuard'),
            'token' => new ObjectType(TokenGuard::class),
            'passport' => new ObjectType(RequestGuard::class),
            default => null,
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/GuardDynamicStaticMethodReturnTypeExtension.php [74:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function findTypeFromGuardDriver(string $driver): Type|null
    {
        return match ($driver) {
            'session' => new ObjectType('Illuminate\Auth\SessionGuard'),
            'token' => new ObjectType(TokenGuard::class),
            'passport' => new ObjectType(RequestGuard::class),
            default => null,
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



