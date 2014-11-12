<?php

class Calculate {

    //generate set of available days for restaurant
    public function calDate($restaurant) {
        $days = explode(",", $restaurant->day);

        $Currentdate = date("Y-m-d");
        $date = strtotime("+0 day", strtotime($Currentdate));
        $results[0] = "";

        for ($i=0; $i < 15; $i++) { 
            for ($j=0; $j < count($days); $j++) { 
                if ($days[$j]==date("l", $date)) {
                    
                    $results[$i] = date("m/d", $date);
                    break;
                }
                
            }
            
            if ($j==count($days)) {

                $i--;
            }
            $date = date("Y-m-d",$date);
            $date = strtotime("+1 day", strtotime($date));            
        }

        $results = implode(",", $results);
        return $results;

    }

    //generate set of available time for restaurant
    public function calTime($restaurant) {

        $open = $restaurant->time_open;
        $close = $restaurant->time_close;
        $results[0] = $open;

        if($open[3]=='0'){
                        

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)!=0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    if ($results[$i-1] == "23:30") 
                        $results[$i] = "00:00";
                    
                    else
                        $results[$i] = ($time[0]+1).":"."00";
                }

            }
               
        }

        elseif ($open[3]=='3') {

            for ($i=1 ; $results[count($results)-1]!=$close ; $i++) {
                $time = explode(":", $results[$i-1]);

                if(($i%2)==0){                                
                    $results[$i] = $time[0].":"."30";
                }
                else {
                    if ($results[$i-1] == "23:30") 
                        $results[$i] = "00:00";
                    
                    else                    
                        $results[$i] = ($time[0]+1).":"."00";
                }

            }
             
        }
        $avail = implode(",", $results);
        return $avail;
    }

    //check limited time for change book or cancel book ( 30 minute)
    public function checkTime ($book)
    {
        if ($book->date == date("m/d")) {
            if (strtotime("+30 minute", strtotime(date("H:i")))>strtotime($book->time))
                return false;
        }

        return true;
    } 

}