vendor/laravel/framework/src/Illuminate/Routing/PendingResourceRegistration.php [178:195]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function middlewareFor($methods, $middleware)
    {
        $methods = Arr::wrap($methods);
        $middleware = Arr::wrap($middleware);

        if (isset($this->options['middleware'])) {
            $middleware = Router::uniqueMiddleware(array_merge(
                $this->options['middleware'],
                $middleware
            ));
        }

        foreach ($methods as $method) {
            $this->options['middleware_for'][$method] = $middleware;
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Routing/PendingSingletonResourceRegistration.php [202:219]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function middlewareFor($methods, $middleware)
    {
        $methods = Arr::wrap($methods);
        $middleware = Arr::wrap($middleware);

        if (isset($this->options['middleware'])) {
            $middleware = Router::uniqueMiddleware(array_merge(
                $this->options['middleware'],
                $middleware
            ));
        }

        foreach ($methods as $method) {
            $this->options['middleware_for'][$method] = $middleware;
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



