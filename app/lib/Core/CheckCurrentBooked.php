<?php

class CheckCurrentBooked {
	
	public function currentBook($books) {
        $currentBookeds[0] = "";
        $i = 0;

        foreach ($books as $book) {
            if( strtotime(date("m/d")) < strtotime($book->date) )
            {
                $currentBookeds[$i] = $book;
                $i++;
            }

            if ( strtotime(date("m/d")) == strtotime($book->date) )
            {
                if( strtotime(date("H:i")) < strtotime($book->time) )
                {
                    $currentBookeds[$i] = $book;
                    $i++;
                }
            }

        }

        return $currentBookeds;
    }
}