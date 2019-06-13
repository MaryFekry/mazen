<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['msg'];
        $emailTo = 'Mary.Fekry96@gmail.com';
        $header = 'from '.$emailFrom;
        $txt = 'you received e-mail from '.$name.'\n\n'.$message;
        
        
            
        function died($error) {
            // your error code can go here
            echo "We are very sorry, but there were error(s) found with the form you submitted. ";
            echo "These errors appear below.<br /><br />";
            echo $error."<br /><br />";
            echo "Please go back and fix these errors.<br /><br />";
            die();
        }
        
         // validation expected data exists
        if(!isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['msg'])) {
            died('We are sorry, but there appears to be a problem with the form you submitted.');       
        }
        
        mail($emailTo,$txt,$header);
    }
?>
