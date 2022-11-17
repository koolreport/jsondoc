<?php

namespace koolreport\jsonsoc;

use koolreport\dashboard\PropModel;

class JSonDoc extends PropModel
{
    protected function __construct($data=null)
    {
        parent::__construct();
        if($data!==null) {
            $this->data($data);
        }
    }
    protected function beforeOnCreated()
    {
        $this->props([
            "data"=>null,
            "structure"=>null,
        ]);
    }
}