<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <h3 class="col-md-8 offset-md-2 mt-5"> Для первичного анализа нам требуется чуть больше информации </h3>

        </div>

        <div class="row mt-3">
            <select class="select col-md-4 offset-md-4">
                <option>Услуги</option>
                <option>Торговля</option>
                <option>Общественное питание</option>
                <option>Производство</option>
                <option>IT-сфера</option>
                <option>Другое</option>
            </select>
        </div>



            <div class="form col-md-10 offset-md-1 mt-4">

                    <input type="text" class="other col-md-5 mx-auto mb-3" placeholder="Введите ваш вариант">
                    <div class="sub-title">Какие этапы работ уже проведены по упаковке?</div>
                    <div class="row d-flex">
                        <div class="check-box col-md-6 mb-4 mt-4"><input  class="check1 check" value="Никаких" type="checkbox" >Никаких</div>
                        <div class="check-box col-md-6">          <input  class="check1 check"  value="Разработана финмодель"  type="checkbox">Разработана финмодель</div>
                        <div class="check-box col-md-6">          <input   class="check1 check" value="Готова юридическая модель" type="checkbox">Готова юридическая модель</div>
                        <div class="check-box col-md-6">          <input   class="check1 check"  value="Прописаны стандарты и бизнес-процессы" type="checkbox" name="check">Прописаны стандарты и бизнес-процессы</div>
                    </div>
                    <div class="sub-title mt-5">Какого месячного заработка хотите с вашей франшизы?</div>
                    <div class="row d-flex">
                        <div class="check-box col-md-6 mb-4 mt-4"><input class="check2 check" value="100-300 тысяч рублей в месяц" type="checkbox">100-300 тысяч рублей в месяц</div>
                        <div class="check-box col-md-6"><input class="check2 check" value="300-500 тысяч рублей в месяц"   type="checkbox">300-500 тысяч рублей в месяц</div>
                        <div class="check-box col-md-6"><input class="check2 check" value="500-1000 тысяч рублей в месяц"  type="checkbox">500-1000 тысяч рублей в месяц</div>
                        <div class="check-box col-md-6"><input class="check2 check" value="Более миллиона рублей в месяц"  type="checkbox">Более миллиона рублей в месяц</div>
                    </div>
                    <button class="send mt-5 " disabled >Отправить</button>
                    <h3 class="result"></h3>
                    <div id="result"></div>

            </div>


    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>