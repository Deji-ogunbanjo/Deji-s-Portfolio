<?php 

if(isset($_POST["subBtn"])){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    // $from = "dejiogunbanjo9@gmail.com";
    $to = "dejiogunbanjo9@gmail.com";
    $subject = "Checking Subject";
    $cc = "dejiogunbanjo9@gmail.com";
    $usersName = $_POST["usersname"];
    $email = $_POST["email"];
    
    $message = "<html> <body>

    
         <div>
            <p  style='color: red;'>Hello Deji you have a new subcriber</>
            <div>Subscribers Email Address: $email; </div>
         </div>

    </body></html>";
    
    // The content-type  Multipurpose Internet Mail Extension header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8";
    $headers .= "From:" . $email . "\r\n";
    $headers .= "Cc: dejiogunbanjo49@gmail.com ";
    $headers .= "Bcc: johdoe@gmail.com ";
    
    if(mail($to, $subject, $message, $headers)) {
    echo "Message was sent successfully.";
    
   $autoRespSub = "Thank you for trusting Deji";
   
   $body = "
   <div style='text-align: center;' >
        <div>Hello, $usersName !!!</div>
        <div>
            <h4></h4>
            <p>/p>
        </div>
        
        <div>
            <a target='_blank' href='https://deji-ogunbanjo.github.io/Iamdeji/' style='padding: 10px 30px; background: #22223B; color: white;' >Go back to the website</a>
        </div>
   </div>
   ";
   
   mail($email, $autoRespSub,$body, $headers );
   
    
    } else {
      echo "Message was not sent.";
    }
}
?>





<body>
    <div>
        <h3>Php mail To</h3>
        <div>
           
        </div>
    </div>
</body>
</html>





