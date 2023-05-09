<?php 
    try {

        file_put_contents('assets/form.txt', file_get_contents('assets/form.txt')."\r\n".json_encode($_POST));

        !empty($_POST) ? mail('info@medianssolutions.com', 'New message', $data : '';
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    header("Location: /");
?>