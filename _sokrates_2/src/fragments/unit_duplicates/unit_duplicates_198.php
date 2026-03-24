vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php [29:41]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function toWildfireLevel(Level $level): string
    {
        return match ($level) {
            Level::Debug     => 'log',
            Level::Info      => 'info',
            Level::Notice    => 'info',
            Level::Warning   => 'warn',
            Level::Error     => 'error',
            Level::Critical  => 'error',
            Level::Alert     => 'error',
            Level::Emergency => 'error',
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php [30:42]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function getLevelColor(Level $level): string
    {
        return match ($level) {
            Level::Debug     => '#CCCCCC',
            Level::Info      => '#28A745',
            Level::Notice    => '#17A2B8',
            Level::Warning   => '#FFC107',
            Level::Error     => '#FD7E14',
            Level::Critical  => '#DC3545',
            Level::Alert     => '#821722',
            Level::Emergency => '#000000',
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php [42:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function toWildfireLevel(Level $level): string
    {
        return match ($level) {
            Level::Debug     => 'LOG',
            Level::Info      => 'INFO',
            Level::Notice    => 'INFO',
            Level::Warning   => 'WARN',
            Level::Error     => 'ERROR',
            Level::Critical  => 'ERROR',
            Level::Alert     => 'ERROR',
            Level::Emergency => 'ERROR',
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php [61:73]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function toRollbarLevel(Level $level): string
    {
        return match ($level) {
            Level::Debug     => 'debug',
            Level::Info      => 'info',
            Level::Notice    => 'info',
            Level::Warning   => 'warning',
            Level::Error     => 'error',
            Level::Critical  => 'critical',
            Level::Alert     => 'critical',
            Level::Emergency => 'critical',
        };
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



