<?php

namespace koolreport\jsonsoc;

use koolreport\dashboard\PropModel;

class Type extends PropModel
{
    protected function beforeOnCreated()
    {
        $this->props([
            "type"=>null,
            "originalValue"=>null,
            "default"=>null,
        ]);
    }

    /**
     * Return the converted value
     * @return null 
     */
    public function value()
    {
        $origialValue = $this->_orginialValue();
        if($origialValue===null) {
            return $this->_default();
        }
        return null;
    }


}