<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ПРОМИНВЕСТ-СТ</title>
  <!-- Подключаем стили -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Подключаем стили Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <!-- NAV-START -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light blur-nav">
    <img src="assets/logo.png" class="nav-logo">
    <div class="vertical-line d-md-none d-lg-block"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">ГЛАВНАЯ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wiring.html">ЭЛЕКТРОМОНТАЖ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="elab.html">ЭЛЕКТРО-ЛАБОРАТОРИЯ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html">ОБСЛУЖИВАНИЕ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="normative_base.html">НОРМАТИВНАЯ БАЗА</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">КОНТАКТЫ</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="vertical-line d-md-none d-lg-block"></div>
        <img src="assets/search.svg" class="nav-search">
      </form>
    </div>
  </nav>
  <!-- NAV-END -->

  <div class="container" style="margin-top: 70px;">
    <div class="static-title" style="margin-bottom: 0px; padding-bottom: 0px;">
      <div class="sub-title">КОНТАКТЫ</div>
      <div class="title">КОНТАКТЫ</div>
    </div>
  </div>
  <img src="assets/divider.png" height="3px" style="margin-bottom: 20px;">
  <div class="container">
    <p>
      Карта представительства ООО «Проминвест-СТ», г. Ставрополь
    </p>
    <div style="position:relative;overflow:hidden;">
      <a href="https://yandex.ru/maps/36/stavropol/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ставрополь</a><a href="https://yandex.ru/maps/36/stavropol/house/2_ya_promyshlennaya_ulitsa_8t/YEgYfwdmTEEEQFpvfXx0dHtgYQ==/?ll=41.906543%2C45.055735&utm_medium=mapframe&utm_source=maps&z=18.16" style="color:#eee;font-size:12px;position:absolute;top:14px;">2-я Промышленная улица, 8Т —
        Яндекс Карты</a>
      <iframe src="https://yandex.ru/map-widget/v1/?ll=41.906543%2C45.055735&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNDg5NzM2NDQwEpMB0KDQvtGB0YHQuNGPLCDQodGC0LDQstGA0L7Qv9C-0LvRjCwg0J_RgNC-0LzRi9GI0LvQtdC90L3Ri9C5INGA0LDQudC-0L0sINC80LjQutGA0L7RgNCw0LnQvtC9IOKEliAyMCwgMi3RjyDQn9GA0L7QvNGL0YjQu9C10L3QvdCw0Y8g0YPQu9C40YbQsCwgONCiIgoNTaAnQhUSOTRC&z=18.16" width="100%" height="400" allowfullscreen="true" style="position:relative; border: solid 0px #fff;"></iframe>
    </div>
    <br>
    <h4 style="font-family: 'Roboto Condensed';">
      ОФИС
    </h4>
    <p>
      355000, г. Ставрополь, Промышленная 2-я 8, литер Ш, офис 8
    </p>
    <br>
    <h4 style="font-family: 'Roboto Condensed';">
      КОНТАКТЫ ДЛЯ СВЯЗИ
    </h4>
    <p>
      <b>тел:</b> +7(865-2) 56-43-78<br>
      <b>тел:</b> +7(928-3) 211-213
    </p>
    <p>
      <b>e-mail:</b> prominvest-st@mail.ru
    </p>
  </div>


  <div class="container">
    <div class="static-title" style="margin-bottom: 0px; padding-bottom: 0px;">
      <div class="sub-title">ОСТАВЬТЕ ЗАЯВКУ</div>
      <div class="title">ОСТАВЬТЕ ЗАЯВКУ</div>
    </div>
  </div>
  <img src="assets/divider.png" height="3px" style="margin-bottom: 20px;">
  <div class="container">
    <p>
      Если Вы не смогли до нас дозвониться, <span class="c-primary">оставьте заявку на нашем сайте</span>
      и мы в ближайшее время свяжемся с Вами, а также проконсультируем
      по всем вопросам: <span class="c-primary">от стоимости работ, до сроков выполнения работ</span>
    </p>
    <div class="contact-form">
      <h4 class="c-primary">
        Заполните форму заявки
      </h4>
      <br>
      <form action="google_sheets.php" method="POST">
        <div class="row">
          <div class="col-md-4">
            <input name="name" class="custom-input" placeholder="Ваше имя *">

            <input name="phone" id="phone_number" class="custom-input" data-inputmask-mask="+7 (999) 999-99-99" placeholder="+7 (___) ___ - __ - __ *">

            <input name="email" class="custom-input" placeholder="E-mail *">
          </div>
          <div class="col-md-8">
            <textarea name="message" style="height: 188px;" class="custom-input" placeholder="Введите ваш запрос.
Например: описание работы"></textarea>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Я даю согласие на обработку моих персональных данных
          </label>
        </div>
        <div style="text-align: right; margin-top: 20px;">
          <button class="custom-btn">Отправить</button>
        </div>
      </form>
    </div>
  </div>

  <!-- FOOTER-START -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-6 section">
          <img src="assets/logo-white.png" height="70px">
          <br>
          <br>
          <a href="#" class="phone-link">+7(928) 3 211-213</a>
          <p>prominvest-st@mail.ru</p>
          <p>355000, г. Ставрополь,<br>
            проспект Кулакова 8Ш, офис 8</p>
        </div>
        <div class="col-md-4 col-6 section">
          <a class="link" href="index.html">ГЛАВНАЯ</a><br>
          <a class="link" href="wiring.html">ЭЛЕКТРОМОНТАЖ</a><br>
          <a class="link" href="elab.html">ЭЛЕКТРО-ЛАБОРАТОРИЯ</a><br>
          <a class="link" href="service.html">ОБСЛУЖИВАНИЕ</a><br>
          <a class="link" href="normative_base.html">НОРМАТИВНАЯ БАЗА</a><br>
          <a class="link" href="contacts.php">КОНТАКТЫ</a><br>
        </div>
        <div class="col-md-4 section" style="text-align: right;">

        </div>
      </div>
      <br>
      <p class="center">
        Copyright © 2023 ООО "Проминвест-СТ".
      </p>
    </div>
  </div>
  <!-- FOOTER-END -->
  <div class="success-dialog" id="success-dialog">
    <div class="dialog">
      <img src="assets/message.png" width="300">
      <br><br>
      <h4 class="c-primary">
        Спасибо!
      </h4>
      <p>
        Ваша заяка отправлена
        и принята в обработку
      </p>
      <p>
        Мы свяжемся с Вами в ближайшее время
      </p>
      <button class="custom-btn close-btn" onclick="closeDialog()">
        Закрыть
      </button>
    </div>
  </div>

  <!-- Подключаем скрипты -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-detect-breakpoint/src/bootstrap-detect-breakpoint.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

  <script src="js/dialog.js"></script>

  <script>
    <?php
      if(isset($_SESSION["success"])){
        echo "openDialog();";
        unset($_SESSION["success"]);
      }
    ?>
  </script>

  <script>
    $("#phone_number").inputmask();
  </script>
</body>

</html>