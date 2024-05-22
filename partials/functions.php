<?php 

function check() {

    if (isset($_POST['mail'])) {

        $mail = $_POST['mail'];
    
        $check_mail = str_contains($mail, '@');
        $check_dot  = str_contains($mail, '.');
    
        if ($check_mail && $check_dot) {
            $result = 'Accesso Consentito';
            header('Location: ./partials/thankyou.php');
        } else {
            $result = 'Accesso Negato';
        }

        return $result;
    }
}


?>