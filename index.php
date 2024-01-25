<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grizzly</title>
    
    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"   
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>

    <!-- scripts -->
    <script src="./js/async_check_phone.js"></script>
    <script src="./js/cookie_block.js"></script>
</head>
<body>
    <div class="container">
        <section class="check_number row">
            <h1 class="fs-5 mt-3 mb-2 text-center">Задание №1. Проверка номера</h1>
            <form action="./phone_number.php" method="post" class="col-lg-5 col-md-8 col-12 mx-auto" id="check_phone_form">
                <div class="d-flex flex-column flex-sm-row">
                    <input name="phone_number" type="tel" placeholder="Введите номер..." class="form-control">
                    <button type="submit" class="btn btn-primary mt-2 mt-sm-0">Отправить</button>
                </div>
            </form>
            <p class="check_number_status text-center"></p>
        </section>
        <section>
            <h1 class="fs-5 mt-3 mb-2 text-center">Задание №2. Куки поп-ап</h1>
            <p class="text-center">Реализован всплывающий блок об использовании куки. Для проверки в js/cookie_block.js нужно раскоммитить строку, обновить страницу, раскоммитить,а затем снова перезагрузить, чтобы вернуть функционал. </p>
        </section>

        <section>
            <div class="about_company px-5 pt-5 mt-5">

                <img class="e_logo_purple" src="./images/e_logo_purple.png" alt="purple_logo">
                <img class="e_logo_opacity" src="./images/e_logo_opacity.png" alt="opacity_logo">

                    <div class="about_company_content mx-4 mt-3 row justify-content-between">
                        <h1 class="mb-5 fw-bold">Dlaczego my</h1>
                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Koszty</h2>
                            <p class="pb-5">Zamieniasz koszty stałe <br> logistyki na koszty zmienne.</p>
                        </div>

                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Black Friday?</h2>
                            <p class="pb-5">Czekasz na niego z <br> niecierpliwością, a nie z obawą.</p>
                        </div>

                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Oszczędność czasu</h2>
                            <p class="pb-5">Zajmujesz się tym, co lubisz - eCommercem, a nie logistyką.</p>
                        </div>

                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Spokój ducha</h2>
                            <p class="pb-5">Nie przejmujesz się kurierami, nie zajmujesz się wysyłką zamówień.</p>
                        </div>

                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Opakowania</h2>
                            <p class="pb-5">Wyzwania pakowania znamy od podszewki - ściśle współpracujemy z producentem opakowań.</p>
                        </div>

                        <div class="info col-6">
                            <h2 class="pb-3 fw-bold">Co dajemy dodatkowo?</h2>
                            <p class="pb-5">Wraz z naszą usługą otrzymujesz bezpłatny konsulting w zakresie eCommerce.</p>
                        </div>

                    </div>
            </div>
        </section>
        
    </div>

    <div class="cookie_block position-fixed bottom-0 end-0 m-3 px-3 py-2 d-none">
        <div class="alert alert-light d-flex justify-content-center flex-column mb-1" role="alert">
            <p class="my-2">Этот сайт использует файлы cookie для хранения данных. Продолжая использовать сайт, вы даете свое согласие на работу с этими файлами. </p>
            <button type="button" class="btn btn-success p-2" id="accept_cookie">Хорошо, принимаю</button>
            <button type="button" class="btn-close" aria-label="Close" id="reject_cookie"></button>
        </div>
    </div>

    <script>
        $(window).on('resize', function() {
            ($(window).width() <= 991) ?    $('.e_logo_opacity').addClass('d-none') : 
                                            $('.e_logo_opacity').removeClass('d-none');
        })
    </script>
</body>
</html>