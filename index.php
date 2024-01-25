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
    </div>

    <div class="cookie_block position-fixed bottom-0 end-0 m-3 d-none">
        <div class="alert alert-light d-flex justify-content-center flex-column mb-1" role="alert">
            <p>Этот сайт использует файлы cookie для хранения данных. Продолжая использовать сайт, вы даете свое согласие на работу с этими файлами. </p>
            <button type="button" class="btn btn-success" id="accept_cookie">Хорошо, принимаю</button>
            <button type="button" class="btn-close" aria-label="Close" id="reject_cookie"></button>
        </div>
    </div>
</body>
</html>