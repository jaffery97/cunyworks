<style>
	body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f2f2f2;
}

.container {
    text-align: center;
}

.message {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    border-radius: 10px;
    position: relative;
}

.message::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    border-width: 15px;
    border-style: solid;
    border-color: #4CAF50 transparent transparent transparent;
}

</style>


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Message: $message";
$recipient = "mhjafory@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<span class='message'>Thank You!" . " -" . "<a href='https://mjafory.github.io/cunyworks/contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a></span?";
?>
