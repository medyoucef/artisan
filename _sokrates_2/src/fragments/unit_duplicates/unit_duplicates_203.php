vendor/fakerphp/faker/src/Faker/Extension/Helper.php [92:105]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private static function replaceWildcard(string $string, string $wildcard, callable $callback): string
    {
        if (($pos = strpos($string, $wildcard)) === false) {
            return $string;
        }

        for ($i = $pos, $last = strrpos($string, $wildcard, $pos) + 1; $i < $last; ++$i) {
            if ($string[$i] === $wildcard) {
                $string[$i] = call_user_func($callback);
            }
        }

        return $string;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/fakerphp/faker/src/Faker/Provider/Base.php [414:427]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private static function replaceWildcard($string, $wildcard, $callback)
    {
        if (($pos = strpos($string, $wildcard)) === false) {
            return $string;
        }

        for ($i = $pos, $last = strrpos($string, $wildcard, $pos) + 1; $i < $last; ++$i) {
            if ($string[$i] === $wildcard) {
                $string[$i] = call_user_func($callback);
            }
        }

        return $string;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



