<?php
namespace CloudStorage;

include "autoload.php";
    
use \CloudStorage\Mail\Mailer;  // 1 way
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main
{
    public function __construct()
    {
        // $mail = new Mailer();
        // $mail->sendMail();

        (new Mail\Mailer)->sendMail();  // 2nd way
        (new FileSystem\Scanner)->scan();  
        echo (new Jpeg)->getDimension();  
        
    }
}

new Main();
?>