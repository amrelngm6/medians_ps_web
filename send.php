<?php 
    try {
        
        $data = json_encode($_POST, JSON_UNESCAPED_UNICODE);

        file_put_contents('assets/form.txt', file_get_contents('assets/form.txt')."\r\n".$data);

        !empty($_POST) ? mail('info@medianssolutions.com', 'New message', $data) : '';
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    header("Location: /");
?>