vendor/nesbot/carbon/lazy/Carbon/MessageFormatter/MessageFormatterMapperStrongType.php [19:26]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        public function format(string $message, string $locale, array $parameters = []): string
        {
            return $this->formatter->format(
                $message,
                $this->transformLocale($locale),
                $parameters
            );
        }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nesbot/carbon/lazy/Carbon/MessageFormatter/MessageFormatterMapperWeakType.php [22:29]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        public function format($message, $locale, array $parameters = [])
        {
            return $this->formatter->format(
                $message,
                $this->transformLocale($locale),
                $parameters
            );
        }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



