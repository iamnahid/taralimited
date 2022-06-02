<?php
    require('./db.php');
    ob_start();

    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">';
    echo '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';

    if($_POST['submit_contact'])
    {
        
        $to = "info@karotoagreen.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = "Query from Website Contact";
        $gender = $_POST['gender'];

        $mailTemplate =
        '
            <div class="col-10">            
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-secondary">From: '.$name.' ['.$from.']</h5>
                    </div>
                    <div class="card-body text-justify p-5">
                    
        ';

        $message = wordwrap($_POST['message'], 120, "\r\n");
        $mailTemplate .= $message.
        '
                    </div>
                    <div class="card-footer">
                        <p class="text-capitalize text-danger">***Note: Do not reply to this mail!</p>
                    </div>
                </div>  
            </div>  
        ';

        $headers = 'From: '.$name.' <'.$from.'>'. "\r\n";
        $headers .= 'To: '.$to."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        $insertMessageSQL = "INSERT INTO `messages`(`id`, `name`, `email`, `phone`, `gender`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '$message')"; 
                    
        // print_r($mailTemplate);

        $insertResult = mysqli_query($conn, $insertMessageSQL);

        if (!$insertResult) {
            printf("Errormessage: %s\n", mysqli_error($conn));
        }

        $mailResult = mail($to, $subject, $message, $headers);

        if($mailResult)
        {            
            $success = 'Email has sent successfully.';
            header('location: ../Contact?status=success');
            exit();
        }
        else{
            $error = 'Email sending failed.';
            header('location: ../Contact?status=error');
            exit();
        }
    }

?>