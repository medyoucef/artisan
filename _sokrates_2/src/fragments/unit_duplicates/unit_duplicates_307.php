vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/AsymmetricVisibilityTokenEmulator.php [82:92]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getPreviousNonSpaceToken(array $tokens, int $start): ?Token {
        for ($i = $start - 1; $i >= 0; --$i) {
            if ($tokens[$i]->id === T_WHITESPACE) {
                continue;
            }

            return $tokens[$i];
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/KeywordEmulator.php [38:48]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getPreviousNonSpaceToken(array $tokens, int $start): ?Token {
        for ($i = $start - 1; $i >= 0; --$i) {
            if ($tokens[$i]->id === T_WHITESPACE) {
                continue;
            }

            return $tokens[$i];
        }

        return null;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



