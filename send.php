<?php 
if (isset($_POST['name']))
{
    try {

        mail('info@medianssolutions.com', 'New message', json_encode($_POST));
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>