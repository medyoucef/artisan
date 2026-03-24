vendor/psy/psysh/src/TabCompletion/Matcher/ClassAttributesMatcher.php [74:86]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMatched(array $tokens): bool
    {
        $token = \array_pop($tokens);
        $prevToken = \array_pop($tokens);

        switch (true) {
            case self::tokenIs($prevToken, self::T_DOUBLE_COLON) && self::tokenIs($token, self::T_STRING):
            case self::tokenIs($token, self::T_DOUBLE_COLON):
                return true;
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/psy/psysh/src/TabCompletion/Matcher/ClassMethodsMatcher.php [71:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function hasMatched(array $tokens): bool
    {
        $token = \array_pop($tokens);
        $prevToken = \array_pop($tokens);

        switch (true) {
            case self::tokenIs($prevToken, self::T_DOUBLE_COLON) && self::tokenIs($token, self::T_STRING):
            case self::tokenIs($token, self::T_DOUBLE_COLON):
                return true;
        }

        return false;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



