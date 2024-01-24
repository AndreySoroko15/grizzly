$(document).ready(function() {
    $("#check_phone_form").submit(function(e) {
        e.preventDefault();

        let phone_number = $('input[name=phone_number]').val();
        let url = window.location.href;
        let answer_string = $('.check_number_status'); 

        $.ajax({
            method: 'POST',
            url: url + 'phone_number.php',
            data: { phone_number: phone_number },
            success: function(response) {
                answer_string.html(response);
                answer_string.css('color', 'green');
            },
            error: function(xhr) {
                if(xhr.status == 404) {
                    answer_string.html('Совпадений не найдено :(')
                    answer_string.css('color', 'red');
                }
            }
        })
    })
    
    $('input[name=phone_number]').on('input', function() {
        let input_value = $(this).val();
    
        if(input_value === '') {
            $('.check_number_status').empty();
        }
    })
})