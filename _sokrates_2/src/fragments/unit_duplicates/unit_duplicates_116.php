vendor/larastan/larastan/src/ApplicationResolver.php [29:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function createSymlinkToVendorPath(Application $app, string $vendorDir): void
    {
        if (class_exists(CreateVendorSymlink::class)) {
            (new CreateVendorSymlink($vendorDir))->bootstrap($app);

            return;
        }

        $filesystem = new Filesystem();

        $laravelVendorPath = $app->basePath('vendor');

        if (
            sprintf('%s/autoload.php', $laravelVendorPath) !== sprintf('%s/autoload.php', $vendorDir)
        ) {
            if ($filesystem->exists($app->bootstrapPath('cache/packages.php'))) {
                $filesystem->delete($app->bootstrapPath('cache/packages.php'));
            }

            $filesystem->delete($laravelVendorPath);
            $filesystem->link($vendorDir, $laravelVendorPath);
        }

        $app->flush();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ApplicationResolver.php [29:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function createSymlinkToVendorPath(Application $app, string $vendorDir): void
    {
        if (class_exists(CreateVendorSymlink::class)) {
            (new CreateVendorSymlink($vendorDir))->bootstrap($app);

            return;
        }

        $filesystem = new Filesystem();

        $laravelVendorPath = $app->basePath('vendor');

        if (
            sprintf('%s/autoload.php', $laravelVendorPath) !== sprintf('%s/autoload.php', $vendorDir)
        ) {
            if ($filesystem->exists($app->bootstrapPath('cache/packages.php'))) {
                $filesystem->delete($app->bootstrapPath('cache/packages.php'));
            }

            $filesystem->delete($laravelVendorPath);
            $filesystem->link($vendorDir, $laravelVendorPath);
        }

        $app->flush();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



