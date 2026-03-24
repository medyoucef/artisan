vendor/larastan/larastan/src/Concerns/LoadsAuthModel.php [17:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getAuthModels(ConfigRepository $config, string|null $guard = null): array
    {
        $guards    = $config->get('auth.guards');
        $providers = $config->get('auth.providers');

        if (! is_array($guards) || ! is_array($providers)) {
            return [];
        }

        return array_reduce(
            $guard === null ? array_keys($guards) : [$guard],
            static function ($carry, $guardName) use ($guards, $providers) {
                $provider = $guards[$guardName]['provider'] ?? null;

                if (! $provider) {
                    return $carry;
                }

                $authModel = $providers[$provider]['model'] ?? null;

                if (! $authModel || in_array($authModel, $carry, strict: true)) {
                    return $carry;
                }

                $carry[] = $authModel;

                return $carry;
            },
            initial: [],
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Concerns/LoadsAuthModel.php [17:47]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getAuthModels(ConfigRepository $config, string|null $guard = null): array
    {
        $guards    = $config->get('auth.guards');
        $providers = $config->get('auth.providers');

        if (! is_array($guards) || ! is_array($providers)) {
            return [];
        }

        return array_reduce(
            $guard === null ? array_keys($guards) : [$guard],
            static function ($carry, $guardName) use ($guards, $providers) {
                $provider = $guards[$guardName]['provider'] ?? null;

                if (! $provider) {
                    return $carry;
                }

                $authModel = $providers[$provider]['model'] ?? null;

                if (! $authModel || in_array($authModel, $carry, strict: true)) {
                    return $carry;
                }

                $carry[] = $authModel;

                return $carry;
            },
            initial: [],
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



