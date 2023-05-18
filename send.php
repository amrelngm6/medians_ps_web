<?php 
    try {
            
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
        
        $data = json_encode($_POST, JSON_UNESCAPED_UNICODE);

        // file_put_contents('assets/form.txt', file_get_contents('assets/form.txt')."\r\n".$data);

        !empty($_POST) ? mail('info@medianssolutions.com', 'New message', $data) : '';
        echo json_encode(['result'=>'شكرا لك, سيتم التواصل معك بأقرب وقت']);

    } catch (Exception $e) {
        echo json_encode(['error'=>$e->getMessage()]);
    }
