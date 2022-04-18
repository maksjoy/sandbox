<?php

require_once '../vendor/autoload.php';

//echo phpinfo();

final class HillelEmail extends Email
{

    public function __construct($email)
    {
        parent::__construct($email);

        if (strpos($email, '@hillel.ua') === false) {
            throw new Exception('invalid hillel email');
        }
    }
}

class Email
{
    protected $email;


    public function __construct($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("wrong email");

        }
        $this->email = $email;
    }

}

$email = new HillelEmail('abce@hillel.ua');


