<?php
namespace BlueFission\Framework\Generation;

class ValueObjectGenerator extends ScaffoldGenerator
{
    public function getType(): string
    {
        return 'valueobject';
    }

    public function generateValueObjectFromHeaders($tableName, $headers)
    {
        $valueObjectCode = '';

        foreach ($headers as $header) {
            $propertyName = strtolower($header);
            $valueObjectCode .= "\tpublic \${$propertyName};\n";
        }

        return $valueObjectCode;
    }
}
