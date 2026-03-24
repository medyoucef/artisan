vendor/dragonmantank/cron-expression/src/Cron/DayOfMonthField.php [121:132]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function increment(DateTimeInterface &$date, $invert = false, $parts = null): FieldInterface
    {
        if (! $invert) {
            $date = $date->add(new \DateInterval('P1D'));
            $date = $date->setTime(0, 0);
        } else {
            $date = $date->sub(new \DateInterval('P1D'));
            $date = $date->setTime(23, 59);
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/dragonmantank/cron-expression/src/Cron/DayOfWeekField.php [150:161]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function increment(DateTimeInterface &$date, $invert = false, $parts = null): FieldInterface
    {
        if (! $invert) {
            $date = $date->add(new \DateInterval('P1D'));
            $date = $date->setTime(0, 0);
        } else {
            $date = $date->sub(new \DateInterval('P1D'));
            $date = $date->setTime(23, 59);
        }

        return $this;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



