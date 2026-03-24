vendor/laravel/framework/src/Illuminate/Routing/PendingResourceRegistration.php [219:229]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function withoutMiddlewareFor($methods, $middleware)
    {
        $methods = Arr::wrap($methods);
        $middleware = Arr::wrap($middleware);

        foreach ($methods as $method) {
            $this->options['excluded_middleware_for'][$method] = $middleware;
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Routing/PendingSingletonResourceRegistration.php [243:253]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function withoutMiddlewareFor($methods, $middleware)
    {
        $methods = Arr::wrap($methods);
        $middleware = Arr::wrap($middleware);

        foreach ($methods as $method) {
            $this->options['excluded_middleware_for'][$method] = $middleware;
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



