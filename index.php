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
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>

    <!-- scripts -->
    <script src="./js/async_check_phone.js"></script>
</head>
<body>
    <section class="check_number d-flex justify-content-center align-items-center flex-column">
        <h1 class="fs-5 mt-3 mb-2">Задание №1. Проверка номера</h1>
        <form action="./phone_number.php" method="post" class="d-flex" id="check_phone_form">
            <input name="phone_number" type="tel" placeholder="Введите номер..." class="form-control">
            <button type="submit" class="btn btn-primary ms-1">Отправить</button>
        </form>
        <p class="check_number_status"></p>
    </section>
</body>
</html>