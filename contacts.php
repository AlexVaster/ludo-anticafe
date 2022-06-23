<!DOCTYPE html>
<html lang="en">

<head>
  <link href="/styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <title>Контакты</title>
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A90ee8748219c6832b6b82df1231897cd4211e17c5fbfe106445c09b36c2601e1&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true&amp;id=map"></script>
  </script>
</head>

<body>
  <nav class="navbar navbar_none contacts_main_nav">
    <a href="/index.php" class="logo logo_show"><span>LUDO</span></a>
    <ul class="nav-list">
      <li><a href="/index.php">События</a></li>
      <li><a href="/rent.php">Аренда</a></li>
      <li><a href="/contacts.php">Контакты</a></li>
    </ul>
  </nav>
  <div class = "cont">
  <div class="map_div">
      <div id="map"></div>
    </div>
    
    <div class="contacts_main">
      <div class="middle_column">
        <span class="h3">Телефон<br><br>+7 (495) 532-**-**<br>+7 (495) 532-**-**</span>
        <div>
          <span class="h3">Электронная почта<br><br>info@ludocafe.space<br>rsrv@ludocafe.space</span>
        </div>
        <div>
          <span class="h3">Адрес<br><br>г. Москва<br>Большая Семёновская, 38</span>
        </div>
      </div>
      <div class="feedback_form">
        <div>
          <span class="h3">Возникли вопросы?<br>Напишите нам:<br><br></span>
          <form method = "post" action="/db/insert.php" id="form_contacts">
            <input class="btnC inp_btn h5" id="email" required="" placeholder="example@example.ru" type="mail">
            <input class="btnC inp_btn h5" name="message" required="" placeholder="Сообщение" type="text" >
            <div>
              <input class="btnC h4" id="myBtn" name="submit" type="submit">
              <br><br>
              <span class="h5" id="result"></span>
            </div>
          </form>
        </div>
        <div class="logo-class">
          <img src="/image/Logo.jpg" alt="">
        </div>
      </div>
    </div>
    
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="/scripts/mail.js"></script>
    

  <footer class="footer">
    <div class="footer_block">
      <div class="anticafe">
        <div>
          <span class="h4">Антикафе<br>LUDO<br><br>Работаем круглосуточно!</span>
        </div>
      </div>
      <div class="contacts">
        <div>
          <span class="h4">Адрес<br><br>г. Москва<br>Большая Семёновская, 38</span>
        </div>
        <div>
          <span class="h4">Телефон<br><br>+7 (495) 532-**-**<br>+7 (495) 532-**-**</span>
        </div>
        <div>
          <span class="h4">Электронная почта<br><br>info@ludocafe.space<br>rsrv@ludocafe.space</span>
        </div>
        <div>
          <span class="h4">Социальные сети</span>
          <div id="circles">
            <div class="vk">
              <a href="/contacts.php"><img src="./image/vk.svg" alt=""></a>
            </div>
            <div class="tg">
              <a href="/contacts.php"><img src="./image/tg.svg" alt=""></a>
            </div>
            <div class="whts">
              <a href="/contacts.php"><img src="./image/whts.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>