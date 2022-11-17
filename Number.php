<?php

namespace koolreport\jsonsoc;

class Number extends Type
{
    public function value()
    {
        $value = parent::value();
        if($value!==null) {
            return (float)$value;
        }
        return null;
    }
}