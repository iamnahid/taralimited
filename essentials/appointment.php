<?php

    ob_start();

    if($_POST['submit_appointment'])
    {
        
        $to = "info@karotoagreen.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $appointmentTime = $_POST['time'];
        $formattedTime = date("F j, Y, g:i a", strtotime($appointmentTime));
        $subject = "Requesting for Appointment";

        // echo "<script>alert('".$formattedTime."')</script>";

        $message = wordwrap($_POST['message'], 120, "\r\n");
        $mailTemplate .='
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
            </head>
            <body>
                <div class="container-fluid" style="font-family: Poppins, sans-serif;">
                    <div class="row">
                        <div class="col-12" style="color: #646464;background: #ebebeb; padding: 10px; border-radius: 10px;">
                            <div class="header" style="background: #ffffff; padding: 2px; padding-left: 10px;border-left: 5px solid #006eff; border-radius: 10px;">                    
                                <!-- <h5 class="text-secondary">From: '.$name.' ['.$from.']</h5> -->
                                <h5 class="text-secondary">From: '.$name.' ['.$email.']</h5>
                            </div><br>
                            <div class="body" style="background: #ffffff; padding: 10px; padding-left: 15px;border-left: 5px solid #006eff; border-radius: 10px;">                    
                                <h5>Name:  <span style="color: #006eff;">'.$name.'</span></h5>
                                <h5>Gender:  <span style="color: #006eff;">'.$gender.'</span></h5>
                                <h5>Email:  <span style="color: #006eff;">'.$email.'</span></h5>
                                <h5>Phone:  <span style="color: #006eff;">'.$phone.'</span></h5>
                                <h5>Expected Appointment Schedule:  <span style="color: #006eff;padding-left: 10px;">'.$formattedTime.'</span></h5>

                                <h3>Purpose of Appointment: </h3>
                                <p style="text-align: justify;padding: 10px;">'.$message.'</p>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            </html>
        ';

        $headers = 'From: '.$name.' <'.$from.'>'. "\r\n";
        $headers .= 'To: '.$to."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        include('./db.php');

        $insertMessageSQL = "INSERT INTO `appointment`(`id`, `name`, `email`, `phone`, `gender`, `message`, `time`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '$message', '$appointmentTime')"; 
                    
        // print_r($mailTemplate);

        $insertResult = mysqli_query($conn, $insertMessageSQL);

        if (!$insertResult) {
            printf("Errormessage: %s\n", mysqli_error($conn));
        }

        $mailResult = mail($to, $subject, $mailTemplate, $headers);

        if($mailResult)
        {            
            $success = 'Thank you! Your Appointment Request has sent successfully.';
            header('location: ../Contact?status=success');
            exit();
        }
        else{
            $error = 'Request sending failed.';
            header('location: ../Contact?status=error');
            exit();
        }
    }

?>