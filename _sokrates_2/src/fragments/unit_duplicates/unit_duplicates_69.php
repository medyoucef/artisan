vendor/larastan/larastan/src/ReturnTypes/DateExtension.php [29:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isStaticMethodSupported(MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'create',
            'createFromDate',
            'createFromTime',
            'createFromTimeString',
            'createFromTimestamp',
            'createFromTimestampMs',
            'createFromTimestampUTC',
            'createMidnightDate',
            'fromSerialized',
            'getTestNow',
            'instance',
            'maxValue',
            'minValue',
            'now',
            'parse',
            'today',
            'tomorrow',
            'yesterday',
            'createFromFormat',
            'createSafe',
            'make',
        ], true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/ReturnTypes/DateExtension.php [29:54]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function isStaticMethodSupported(MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'create',
            'createFromDate',
            'createFromTime',
            'createFromTimeString',
            'createFromTimestamp',
            'createFromTimestampMs',
            'createFromTimestampUTC',
            'createMidnightDate',
            'fromSerialized',
            'getTestNow',
            'instance',
            'maxValue',
            'minValue',
            'now',
            'parse',
            'today',
            'tomorrow',
            'yesterday',
            'createFromFormat',
            'createSafe',
            'make',
        ], true);
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



