<?php 

function checkPhoneNumber(string $number, $cdn = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json')
{
    $phones_list_JSON = file_get_contents($cdn);
    $phones_list_array = json_decode($phones_list_JSON);
    
    $symbols_list = ['+', '-', '(', ')', ' ', '#'];
    $clean_number = str_replace($symbols_list, '', $number);

    foreach($phones_list_array as $phone_list_array) {
        $country_code = str_replace($symbols_list, '', $phone_list_array->mask);
        $cropped_number_under_mask = substr($clean_number, 0, strlen($country_code));
        
        if($cropped_number_under_mask === $country_code) {
            
            return "Данный номер пренадлежит стране: $phone_list_array->name_ru";
        }
    }
    
    return "Совпадений не найдено!";
}    

echo checkPhoneNumber('+375(29)123-45-67');
