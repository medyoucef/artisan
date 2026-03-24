vendor/fakerphp/faker/src/Faker/Provider/ka_GE/DateTime.php [7:21]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/Provider/tr_TR/DateTime.php [12:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => 'Pazar',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/Provider/zh_CN/DateTime.php [12:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/Provider/zh_TW/DateTime.php [12:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



