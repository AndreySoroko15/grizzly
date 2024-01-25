$(document).ready(function() {
    let cookie = $(".cookie_block");
    let close_button = $('#reject_cookie');
    let accept_button = $('#accept_cookie');
    let currentDate = new Date().toLocaleDateString();

    let cookieDisplayCheck = localStorage.getItem('show_cookie');
    
    if(cookieDisplayCheck != currentDate) {
        console.log('Куки не показывались');
        
        cookie.removeClass('d-none').fadeIn();
    }

    accept_button.click(function() {
        localStorage.setItem('show_cookie', currentDate);
        console.log(localStorage.getItem('show_cookie') + ' - Куки были показаны');
        cookie.fadeOut();
    })
    

    close_button.click(function() {
        cookie.fadeOut()
    })

    // Раскоммитить для проверки кода (нужно перезагрузить 2 раза страницу)
    // localStorage.removeItem('show_cookie');
})