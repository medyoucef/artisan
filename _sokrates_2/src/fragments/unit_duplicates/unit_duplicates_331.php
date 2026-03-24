vendor/hamcrest/hamcrest-php/hamcrest/Hamcrest/Arrays/MatchingOnce.php [43:52]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function _isNotSurplus($item)
    {
        if (empty($this->_elementMatchers)) {
            $this->_mismatchDescription->appendText('Not matched: ')->appendValue($item);

            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/hamcrest/hamcrest-php/hamcrest/Hamcrest/Arrays/SeriesMatchingOnce.php [45:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function _isNotSurplus($item)
    {
        if (empty($this->_elementMatchers)) {
            $this->_mismatchDescription->appendText('Not matched: ')->appendValue($item);

            return false;
        }

        return true;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



