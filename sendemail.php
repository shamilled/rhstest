<html>
    <body>
        <?php
            if(isset($_POST['submit'])) {
                
                $recipient="yourmailid@domain.com";
            
                //$to = "shamilled@gmail.com";
                $email = $_POST['email'];
                $name = $_POST['name'];
                $subject = "New RHS Inquiry";
                $msg = $POST_['message'];
        
                $message = "New Inquiry from: ".$name."\n"."Message: ".$msg;
        
                $sent = mail($to, $subject, $message, $headers);
        
                $headers = "From: $name";
        
        
                if ($sent) {
                    alert("Your inquiry has been sent! Please wait for a response.");
                }
                else {
                    alert("We encountered a problem and could not send your message. Please try again.")
                } 
            }
             
        ?>
    </body>
</html>
