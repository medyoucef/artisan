vendor/open-telemetry/exporter-otlp/LogsConverter.php [136:145]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function setAttributes($pElement, AttributesInterface $attributes): void
    {
        foreach ($attributes as $key => $value) {
            /** @psalm-suppress InvalidArgument */
            $pElement->getAttributes()[] = (new KeyValue())
                ->setKey($key)
                ->setValue(AttributesConverter::convertAnyValue($value));
        }
        $pElement->setDroppedAttributesCount($attributes->getDroppedAttributesCount());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/open-telemetry/exporter-otlp/SpanConverter.php [113:122]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    private function setAttributes($pElement, AttributesInterface $attributes): void
    {
        foreach ($attributes as $key => $value) {
            /** @psalm-suppress InvalidArgument */
            $pElement->getAttributes()[] = (new KeyValue())
                ->setKey($key)
                ->setValue(AttributesConverter::convertAnyValue($value));
        }
        $pElement->setDroppedAttributesCount($attributes->getDroppedAttributesCount());
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



