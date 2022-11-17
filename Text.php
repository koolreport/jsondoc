<?php

namespace koolreport\jsonsoc;

class Text extends Type
{
    public function value()
    {
        $value = parent::value();
        if($value!==null) {
            return (string)$value;
        }
        return null;
    }
}