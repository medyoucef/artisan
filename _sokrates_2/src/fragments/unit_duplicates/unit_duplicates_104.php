vendor/larastan/larastan/src/Rules/CheckDispatchArgumentTypesCompatibleWithClassConstructorRule.php [142:164]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getAvailableMethods(): array
    {
        if ($this->dispatchableClass === Dispatchable::class) {
            return [
                'dispatch',
                'dispatchIf',
                'dispatchUnless',
                'dispatchSync',
                'dispatchNow',
                'dispatchAfterResponse',
            ];
        }

        if ($this->dispatchableClass === EventDispatchable::class) {
            return [
                'dispatch',
                'dispatchIf',
                'dispatchUnless',
            ];
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/nunomaduro/larastan/src/Rules/CheckDispatchArgumentTypesCompatibleWithClassConstructorRule.php [142:164]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function getAvailableMethods(): array
    {
        if ($this->dispatchableClass === Dispatchable::class) {
            return [
                'dispatch',
                'dispatchIf',
                'dispatchUnless',
                'dispatchSync',
                'dispatchNow',
                'dispatchAfterResponse',
            ];
        }

        if ($this->dispatchableClass === EventDispatchable::class) {
            return [
                'dispatch',
                'dispatchIf',
                'dispatchUnless',
            ];
        }

        return [];
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



