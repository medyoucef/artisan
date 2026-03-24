vendor/larastan/larastan/src/ApplicationResolver.php [60:105]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function resolve(): Application
    {
        /** @var non-empty-string $workingPath */
        $workingPath = getcwd();
        if (! defined('TESTBENCH_WORKING_PATH')) {
            define('TESTBENCH_WORKING_PATH', $workingPath);
        }

        $composerConfig = ComposerHelper::getComposerConfig($workingPath);

        if ($composerConfig) {
            $vendorDir = ComposerHelper::getVendorDirFromComposerConfig($workingPath, $composerConfig);
        } else {
            $vendorDir = $workingPath . '/vendor';
        }

        $resolvingCallback = static function ($app): void {
            $packageManifest = $app->make(PackageManifest::class);

            if (file_exists($packageManifest->manifestPath)) {
                return;
            }

            $packageManifest->build();
        };

        if (class_exists(Config::class)) {
            $config = Config::loadFromYaml($workingPath);

            self::createSymlinkToVendorPath(Testbench::create($config['laravel'], null, ['extra' => ['dont-discover' => ['*']]]), $vendorDir);

            return Testbench::create(
                $config['laravel'],
                $resolvingCallback,
                ['enables_package_discoveries' => true, 'extra' => $config->getExtraAttributes()],
            );
        }

        self::createSymlinkToVendorPath(Testbench::create(Testbench::applicationBasePath(), null, ['extra' => ['dont-discover' => ['*']]]), $vendorDir);

        return Testbench::create(
            null,
            $resolvingCallback,
            ['enables_package_discoveries' => true],
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ApplicationResolver.php [60:105]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function resolve(): Application
    {
        /** @var non-empty-string $workingPath */
        $workingPath = getcwd();
        if (! defined('TESTBENCH_WORKING_PATH')) {
            define('TESTBENCH_WORKING_PATH', $workingPath);
        }

        $composerConfig = ComposerHelper::getComposerConfig($workingPath);

        if ($composerConfig) {
            $vendorDir = ComposerHelper::getVendorDirFromComposerConfig($workingPath, $composerConfig);
        } else {
            $vendorDir = $workingPath . '/vendor';
        }

        $resolvingCallback = static function ($app): void {
            $packageManifest = $app->make(PackageManifest::class);

            if (file_exists($packageManifest->manifestPath)) {
                return;
            }

            $packageManifest->build();
        };

        if (class_exists(Config::class)) {
            $config = Config::loadFromYaml($workingPath);

            self::createSymlinkToVendorPath(Testbench::create($config['laravel'], null, ['extra' => ['dont-discover' => ['*']]]), $vendorDir);

            return Testbench::create(
                $config['laravel'],
                $resolvingCallback,
                ['enables_package_discoveries' => true, 'extra' => $config->getExtraAttributes()],
            );
        }

        self::createSymlinkToVendorPath(Testbench::create(Testbench::applicationBasePath(), null, ['extra' => ['dont-discover' => ['*']]]), $vendorDir);

        return Testbench::create(
            null,
            $resolvingCallback,
            ['enables_package_discoveries' => true],
        );
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



