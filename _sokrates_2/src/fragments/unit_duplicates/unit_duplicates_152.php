vendor/hamcrest/hamcrest-php/hamcrest/Hamcrest/Arrays/IsArrayContainingKey.php [38:53]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function describeMismatchSafely($array, Description $mismatchDescription)
    {
        //Not using appendValueList() so that keys can be shown
        $mismatchDescription->appendText('array was ')
                                                ->appendText('[')
                                                ;
        $loop = false;
        foreach ($array as $key => $value) {
            if ($loop) {
                $mismatchDescription->appendText(', ');
            }
            $mismatchDescription->appendValue($key)->appendText(' => ')->appendValue($value);
            $loop = true;
        }
        $mismatchDescription->appendText(']');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/hamcrest/hamcrest-php/hamcrest/Hamcrest/Arrays/IsArrayContainingKeyValuePair.php [41:56]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function describeMismatchSafely($array, Description $mismatchDescription)
    {
        //Not using appendValueList() so that keys can be shown
        $mismatchDescription->appendText('array was ')
                                                ->appendText('[')
                                                ;
        $loop = false;
        foreach ($array as $key => $value) {
            if ($loop) {
                $mismatchDescription->appendText(', ');
            }
            $mismatchDescription->appendValue($key)->appendText(' => ')->appendValue($value);
            $loop = true;
        }
        $mismatchDescription->appendText(']');
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



