vendor/laravel/framework/src/Illuminate/Queue/Failed/DatabaseFailedJobProvider.php [72:79]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function ids($queue = null)
    {
        return $this->getTable()
            ->when(! is_null($queue), fn ($query) => $query->where('queue', $queue))
            ->orderBy('id', 'desc')
            ->pluck('id')
            ->all();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Queue/Failed/DatabaseUuidFailedJobProvider.php [75:82]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function ids($queue = null)
    {
        return $this->getTable()
            ->when(! is_null($queue), fn ($query) => $query->where('queue', $queue))
            ->orderBy('id', 'desc')
            ->pluck('uuid')
            ->all();
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



