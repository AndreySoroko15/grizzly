<?php 

$phones_list_JSON = file_get_contents("https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json");
$phones_list_array = json_decode($phones_list_JSON);

echo '<pre>' . print_r($phones_list_array, true) . '</pre>';