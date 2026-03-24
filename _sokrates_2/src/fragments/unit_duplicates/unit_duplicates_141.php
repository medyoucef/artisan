vendor/laravel/framework/src/Illuminate/Routing/PendingResourceRegistration.php [149:169]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function middleware($middleware)
    {
        $middleware = Arr::wrap($middleware);

        foreach ($middleware as $key => $value) {
            $middleware[$key] = (string) $value;
        }

        $this->options['middleware'] = $middleware;

        if (isset($this->options['middleware_for'])) {
            foreach ($this->options['middleware_for'] as $method => $value) {
                $this->options['middleware_for'][$method] = Router::uniqueMiddleware(array_merge(
                    Arr::wrap($value),
                    $middleware
                ));
            }
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Routing/PendingSingletonResourceRegistration.php [173:193]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function middleware($middleware)
    {
        $middleware = Arr::wrap($middleware);

        foreach ($middleware as $key => $value) {
            $middleware[$key] = (string) $value;
        }

        $this->options['middleware'] = $middleware;

        if (isset($this->options['middleware_for'])) {
            foreach ($this->options['middleware_for'] as $method => $value) {
                $this->options['middleware_for'][$method] = Router::uniqueMiddleware(array_merge(
                    Arr::wrap($value),
                    $middleware
                ));
            }
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



