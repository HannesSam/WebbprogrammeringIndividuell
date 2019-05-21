<?php
class Authorizer
{

    public static function createHash($password, $salt1, $salt2)
    {
        $hash = md5($salt1 . $password . $salt2);
        return $hash;
    }

    public static function authenticateUser($password, $hash1, $salt1, $salt2)
    {
        $hash2 = md5($salt1 . $password . $salt2);
        if ($hash1 === $hash2) {
            return true;
        } else {
            return false;
        }
    }

    public static function getSalt()
    {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randStringLen = 15;

        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }

        return $randString;
    }
}
