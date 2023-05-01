<?php 
    try {

        mail('info@medianssolutions.com', 'New message', json_encode($_POST));
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    header("Location: /");
?>