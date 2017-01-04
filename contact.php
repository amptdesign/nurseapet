<?php
 
        // check for form submission - useful if someone is trying to browse directly to this PHP file. 
        //If check is negative it will redirect back to your contact page. 
        if (!isset($_POST['send_message']) || $_POST['send_message'] != 'Send Message') {
            header('Location: index.php'); exit;
        }
	
        // get the posted data
        $name = $_POST['name'];
        $petname = $_POST['petname'];
        $contact_method = $_POST['contact_method'];
        $contact_phone = $_POST['contact_phone'];
        $email = $_POST['email'];
        $services = $_POST['services'];
        $services_optional = $_POST['services_optional'];
        $message = $_POST['message'];
		
        // write the email content
        $email_content = "Name: $name\n";
        $email_content .= "Pets Name: $petname\n";
        $email_content .= "Preferred Method of Contact: $contact_method\n";
        $email_content .= "Phone: $contact_phone\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Services: $services\n";
        $email_content .= "Services Optional: $services_optional\n";
        $email_content .= "Message:\n\n$message";

        $headers = 'From: webmaster@nurseapet.com' . "\r\n" .'Reply-To: beatriz@nurseapet.com' . "\r\n";
	
        // send the email 
        mail ("amptdesign@live.com;beatriz@nurseapet.com", "New Contact Message from Nurse-a-Pet.com", $email_content, $headers);
	
        // send the user back to the form
        header('Location: index.php?s='.urlencode('Thank you for your message')); exit;
 
?>
