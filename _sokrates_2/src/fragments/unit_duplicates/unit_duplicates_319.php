vendor/ramsey/uuid/src/Guid/Fields.php [135:143]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTimestamp(): Hexadecimal
    {
        return new Hexadecimal(sprintf(
            '%03x%04s%08s',
            hexdec($this->getTimeHiAndVersion()->toString()) & 0x0fff,
            $this->getTimeMid()->toString(),
            $this->getTimeLow()->toString()
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/ramsey/uuid/src/Nonstandard/Fields.php [107:115]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getTimestamp(): Hexadecimal
    {
        return new Hexadecimal(sprintf(
            '%03x%04s%08s',
            hexdec($this->getTimeHiAndVersion()->toString()) & 0x0fff,
            $this->getTimeMid()->toString(),
            $this->getTimeLow()->toString()
        ));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



