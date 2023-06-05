<?php
session_start();

$json = json_decode(file_get_contents("db.json"), true);
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
  <style>
    /* Style the button that is used to open and close the collapsible content */
    .collapsible {
      background-color: #434D9C;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      color: #fff;
      outline: none;
      font-size: 15px;
      opacity: 1;
      transition: .5s;
    }

    .collapsible:hover {
      opacity: .95;
      transition: .5s;
    }

    /* Style the collapsible content. Note: hidden by default */
    .content {
      padding: 0 0px;
      display: none;
      overflow: hidden;
      transition: .5s;
    }
  </style>
</head>

<body>


  <div class="container">
    <div class="contact-form">
      <div style="text-align: center;">
        <img src="assets/calculator.png" width="80%"><br><br>
        <h4 class="c-primary">
          Онлайн-калькулятор стоимости услуг
        </h4>
      </div>
      <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th width="60%">Наименование</th>
            <th width="10%">Ед.изм-ия</th>
            <th width="10%">Цена</th>
            <th width="10%">Кол-во</th>
            <th width="10%">Стоимость</th>
          </tr>
        </thead>
      </table>
      <?php
      $a = 0;
      $b = 0;
      $c = 0;
      ?>
      <?php foreach ($json as $key => $value) : ?>
        <?php $a++ ?>
        <div type="button" class="collapsible"><?php echo $key ?></div>
        <div class="content">
          <?php foreach ($value as $key1 => $value1) : ?>
            <?php $b++ ?>
            <div type="button" style="background-color: #6A70B0;" class="collapsible"><?php echo $key1 ?></div>
            <div class="content">
              <?php if (isset($value1[0])) : ?>
                <table class="table table-striped">
                  <tbody>
                    <?php foreach ($value1 as $element) : ?>
                      <tr>
                        <th width="60%"><?php echo $element["title"] ?></th>
                        <th width="10%"><?php echo $element["count"] ?></th>
                        <th width="10%"><?php echo $element["price"] ?> руб</th>
                        <th width="10%"><input type="number" onchange="$('#total<?php echo $a . $b . $c . $element["no"] ?>').html(+this.value*+<?php echo $element["price"] ?> + ' руб'); calculateTotal();" style="width: 90px;"></th>
                        <th width="10%" class="totalPrice" id="total<?php echo $a . $b . $c . $element["no"] ?>">0 руб</th>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else : ?>
                <?php foreach ($value1 as $key2 => $value2) : ?>
                  <?php $c++ ?>
                  <div type="button" style="background-color: #8E94C4;" class="collapsible"><?php echo $key2 ?></div>
                  <div class="content">
                    <table class="table table-striped">
                      <tbody>
                        <?php foreach ($value2 as $element) : ?>
                          <tr>
                            <th width="60%"><?php echo $element["title"] ?></th>
                            <th width="10%"><?php echo $element["count"] ?></th>
                            <th width="10%"><?php echo $element["price"] ?> руб</th>
                            <th width="10%"><input type="number" onchange="$('#total<?php echo $a . $b . $c . $element["no"] ?>').html(+this.value*+<?php echo $element["price"] ?> + ' руб'); calculateTotal();" style="width: 90px;"></th>
                            <th width="10%" class="totalPrice" id="total<?php echo $a . $b . $c . $element["no"] ?>">0 руб</th>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
      <div type="button" class="collapsible">Техническое обслуживание</div>
      <div class="content">
        <p>Работы по Техническому обслуживанию расчитываются в индивидуальном порядке. 
Для уточнения информации оставьте онлайн-заявку или свяжитесь со специалистом</p>
      </div>

      <div style="text-align: center; font-weight: 600; font-size: 30px; margin-top: 20px">
        Итого <span class="c-primary" id="finalPrice">0 руб</span>
      </div>
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

    function calculateTotal() {
      var total = 0;
      $(".totalPrice").each(function() {
        console.log($(this).html());
        total += +$(this).html().replace(' руб', '');
      });
      $("#finalPrice").html(total + " руб");
    }

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>