<?php

namespace koolreport\jsonsoc;

class ArrayList extends Type
{
    protected function beforeOnCreated()
    {
        parent::beforeOnCreated();
        $this->props([
            "itemStructure"=>null,
        ]);
    }

    public function addItem($itemValue)
    {
        
        return $this;
    }

    public function value()
    {
        return [];
    }
}