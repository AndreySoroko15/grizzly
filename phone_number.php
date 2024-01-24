<?php 

function checkPhoneNumber(string $number)
{
    $phones_list_JSON = file_get_contents("https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json");
    $phones_list_array = json_decode($phones_list_JSON);
    
    // echo '<pre>' . print_r($phones_list_array, true) . '</pre>';

    $symbols_list = ['+', '-', '(', ')', ' ', '#'];
    $clean_number = str_replace($symbols_list, '', $number);

    $country_code = str_replace($symbols_list, '', $phones_list_array[40]->mask);

    echo $clean_number . '<br>' . $country_code . '<br>';

    $cropped_number_under_mask = substr($clean_number, 0, strlen($country_code));

    // echo '<p style="color: red">' . $cropped_number_under_mask . '</p>';

    


}    


checkPhoneNumber('+375(29)123-45-67');

