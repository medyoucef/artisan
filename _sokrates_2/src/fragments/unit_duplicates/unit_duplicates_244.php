vendor/ramsey/uuid/src/Guid/Fields.php [145:156]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getClockSeq(): Hexadecimal
    {
        if ($this->isMax()) {
            $clockSeq = 0xffff;
        } elseif ($this->isNil()) {
            $clockSeq = 0x0000;
        } else {
            $clockSeq = hexdec(bin2hex(substr($this->bytes, 8, 2))) & 0x3fff;
        }

        return new Hexadecimal(str_pad(dechex($clockSeq), 4, '0', STR_PAD_LEFT));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/ramsey/uuid/src/Rfc4122/Fields.php [83:94]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function getClockSeq(): Hexadecimal
    {
        if ($this->isMax()) {
            $clockSeq = 0xffff;
        } elseif ($this->isNil()) {
            $clockSeq = 0x0000;
        } else {
            $clockSeq = hexdec(bin2hex(substr($this->bytes, 8, 2))) & 0x3fff;
        }

        return new Hexadecimal(str_pad(dechex($clockSeq), 4, '0', STR_PAD_LEFT));
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



