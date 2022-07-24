<?php

        
        $text = $_POST['text'];
        $color = $_POST['color'];
        $font = $_POST['font'];
        $size = $_POST['size'];
        $quality = $_POST['quality'];
        $to = $_POST['email'];
        if(isset($_POST['bright'])){
            $bright = 1;
        }
        

        $message = "
            <html>
                <head>
                    <title>HTML email</title>
                </head>
                <body>
                    <img src='http://antickzone.com/img/logo.png' style='width:100px;height:auto;'></img>
                    <h3><strong>Customised text: </strong>$text</h3>
                    <h3><strong>Color: </strong>$color</h3>
                    <h3><strong>Font: </strong>$font</h3>
                    <h3><strong>Size: </strong>$size</h3>
                    <h3><strong>Quality: </strong>$quality</h3>
                </body>
            </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // $to = "somebody@example.com, somebodyelse@example.com";
        $subject = "Custom Sign";

        // More headers
        $headers .= 'From: <antickzone@gmail.com>' . "\r\n";
        

        $mail = mail($to,$subject,$message,$headers);
        if($mail){
            echo "1";
        }else{
            echo "0";
        }
    
?>