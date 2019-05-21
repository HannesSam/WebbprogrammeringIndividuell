<?php
class CheckInput
{

    public static function valdiateNotEmpty($input1, $input2 = "a", $input3 = "b", $input4 = "c")
    {
        $input1 = trim($input1);
        $input2 = trim($input2);
        $input3 = trim($input3);
        $input4 = trim($input4);

        if ($input1  == "" || $input2 == "" || $input3 == "" || $input4 == "") {
            return false;
        } else {
            return true;
        }
    }
    public static function validateEmail($email)
    {
        for ($i = 0; $i < strlen($email) - 1; $i++) {
            if ($email[$i] == "@") {
                for ($j = $i; $j < strlen($email) - 1; $j++) {
                    if ($email[$j] == ".") {
                        return true;
                    }
                }
            }
        }
        return false;
    }
}
