<?php

class CheckTime {


    //check limited time for change book or cancel book ( 30 minute)
    public function checkTimeBefore ($book)
    {
        if ($book->date == date("m/d")) {
            if (strtotime("+30 minute", strtotime(date("H:i")))>strtotime($book->time))
                return false;
        }

        return true;
    } 

    public function checkLateTime ($time)
    {
        $currentTime = strtotime(date("H:i"));
        $bookTime = strtotime($time);
        if ($bookTime < $currentTime) 
            return false;
        
        else
            return true;                

    }

}