<?php
function makeRandom($length) {
    $str_result = '1234567890QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzasdfghjklpoiuytrewq';
    return substr(str_shuffle($str_result), 0, $length);
}
?>