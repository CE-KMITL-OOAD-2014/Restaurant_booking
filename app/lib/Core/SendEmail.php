<?php

class SendEmail {

	protected static $email;
	protected static $name;


    public static function setValue ($r_email, $r_name)
    {
        self::$email = $r_email;
        self::$name = $r_name;
    }

    public static function getEmail() 
    {
    	return self::$email;
    }

    public static function getName()
    {
    	return self::$name;
    }

    public static function sendmail ($data)
    {
    	Mail::send('emails.message', $data, function($message)
        {
        	$email = SendEmail::getEmail();
        	$name = SendEmail::getName();
          	$message->to($email, $name)->subject('Reservation Complete!');
        });
    }

  
}
