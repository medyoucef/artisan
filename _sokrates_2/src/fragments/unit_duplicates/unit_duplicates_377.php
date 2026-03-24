vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/AsymmetricVisibilityTokenEmulator.php [72:79]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isKeywordContext(array $tokens, int $pos): bool {
        $prevToken = $this->getPreviousNonSpaceToken($tokens, $pos);
        if ($prevToken === null) {
            return false;
        }
        return $prevToken->id !== \T_OBJECT_OPERATOR
            && $prevToken->id !== \T_NULLSAFE_OBJECT_OPERATOR;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/KeywordEmulator.php [16:23]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function isKeywordContext(array $tokens, int $pos): bool {
        $prevToken = $this->getPreviousNonSpaceToken($tokens, $pos);
        if ($prevToken === null) {
            return false;
        }
        return $prevToken->id !== \T_OBJECT_OPERATOR
            && $prevToken->id !== \T_NULLSAFE_OBJECT_OPERATOR;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



