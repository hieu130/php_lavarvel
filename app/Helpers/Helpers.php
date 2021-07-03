<?php
if (! function_exists("formateDate")){
    function formateDate($date){
    if ($date instanceof Carbon\Carbon)
        $date = \Carbon\Carbon::createFromDate($date);
    return $date->format("d/m/Y");
    }
}

