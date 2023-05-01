<?php 
if (isset($_POST['name']))
{
    mail('info@medianssolutions.com', 'New message', json_encode($_POST));
}
?>