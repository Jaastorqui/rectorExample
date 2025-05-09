<?php

namespace MyClass;

class MyClass
{

    public function badParameterOrder($name = 'default', $required): string
    {
        // Optional parameter before required parameter - will be fixed by OptionalParametersAfterRequiredRector
        return "Processing $required with $name";
    }

    public function missingNullableType($param = null)
    {
        // Missing nullable type hint - will be fixed by ExplicitNullableParamTypeRector
        return $param;
    }

    public function badStringInterpolation(): string
    {
        $value = 'world';
        // Problematic string interpolation - will be fixed by VariableInStringInterpolationFixerRector
        return "Hello ${value}!";
    }

    public function dynamicPropertyUsage($name, $value): string
    {
        // Using dynamic properties without declaration - will be fixed by CompleteDynamicPropertiesRector
        $this->propertyName = $name;
        $this->propertyValue = $value;

        return "Set {$this->propertyName} to {$this->propertyValue}";
    }

    public function setName(string $name = null): void
    {
        // This method is just an example of a setter
        $this->name = $name;
    }
}