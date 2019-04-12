<?php
if($_POST["message"]) {
    mail("behindthevoicepodcast@gmail.com", "Form to email message", $_POST["feedback"], "From: an@email.address");
}
?>
