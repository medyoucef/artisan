vendor/psy/psysh/src/Readline/Hoa/ConsoleOutput.php [163:172]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function writeLine(string $line)
    {
        if (false === $n = \strpos($line, "\n")) {
            return $this->write($line."\n", \strlen($line) + 1);
        }

        ++$n;

        return $this->write(\substr($line, 0, $n), $n);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/psy/psysh/src/Readline/Hoa/FileLinkReadWrite.php [253:262]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function writeLine(string $line)
    {
        if (false === $n = \strpos($line, "\n")) {
            return $this->write($line."\n", \strlen($line) + 1);
        }

        ++$n;

        return $this->write(\substr($line, 0, $n), $n);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/psy/psysh/src/Readline/Hoa/FileReadWrite.php [253:262]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function writeLine(string $line)
    {
        if (false === $n = \strpos($line, "\n")) {
            return $this->write($line."\n", \strlen($line) + 1);
        }

        ++$n;

        return $this->write(\substr($line, 0, $n), $n);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



