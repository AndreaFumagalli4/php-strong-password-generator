<?php 
    function getRandomPassword($passwordLength) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&=?;:_-.,';
        $randomPassword = '';
        for ($i = 0; $i < $passwordLength; $i++){
            $randomPassword .= $characters[rand(0, (strlen($characters) - 1))];
        }
        return $randomPassword;
    }
?>