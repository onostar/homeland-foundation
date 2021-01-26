<?php
        session_start();
        
        $host = "localhost";
        $username = "homewrfl_admin";
        $password = "homeland@foundation";
        $dbname = "homewrfl_homeland_foundation";
        $connectDB = mysqli_connect($host, $username, $password, $dbname);

        /* if($connectDB){
            echo "db connected";
        }else{
            echo "not connected";
        } */
        $_SESSION['error'] = "";
        $_SESSION['success'] = "";
        $full_name = $_POST['full_name'];
        $location = $_POST['victim_location'];
        $incident = $_POST['incident'];
        $message = $_POST['victim_message'];

        $sql_insert = "INSERT INTO complaint_form (full_name, victim_location, incident, victim_message) VALUES ('$full_name', '$location', '$incident', '$message')";
        $insert_done = mysqli_query($connectDB, $sql_insert);

        if($insert_done){
            $formContent = "From: $full_name \n Location: $location \n Type of Incident: $incident \n Message: $message";
            $recipient = "contact@homelandfoundation.org";
            $subject = "Crime Report";
            $mailheader = "From: $full_name \r\n";
            mail($recipient, $subject, $formContent, $mailheader) or die("Error!");
            $_SESSION['success'] = "Your report has been submitted!";
            header("Location: index.php");
            
        }else{
            $_SESSION['error'] = "Your report was not submitted!";
            header("Location: index.php");
        }
    ?>