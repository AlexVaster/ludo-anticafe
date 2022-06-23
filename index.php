<!DOCTYPE html>
<html>
<head>
  <link href="./styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <title>LUDO</title>
</head>
<body>
  <nav class="navbar">
    <a href="./index.php" class="logo"><span>LUDO</span></a>
    <ul class="nav-list">
      <li><a href="#all_events">События</a></li>
      <li><a href="rent.php">Аренда</a></li>
      <li><a href="contacts.php">Контакты</a></li>
    </ul>
  </nav>
  <div class="main">
    <div class="main_words">
      <div class="home_name">
        <span class="h1 main_left_text">LUDO</span>
      </div>
      <div class="home_text_btn">
        <div>
          <span class="h4 main_right_text">Уютные места, чтобы посидеть в небольшой компании,<br>
            так и большие залы для проведения мероприятий<br>от лекций до занятий йогой</span>
        </div>
        <div>
          <a class="btn h4" href="#all_events">Предстоящие события</a>
        </div>
      </div>
    </div>
  </div>
  <div class="picture">
    <img src="image/MainPic.jpg" alt="" />
    <div id="all_events"></div>
  </div>
  <div class="all_events">
    <div class="delim">
      <span class="h2">Расписание ежедневных событий</span>
    </div>
    <div class="event_block">
      <div class="today">
        <span class="h2">СЕГОДНЯ<br>16.06.</span>
        <div class="today_icons">
          <button class="clipboard1"><img src="/image/share-2.svg" alt=""></button>
        </div>
        <div class="line"></div>
      </div>
      <div class="fig_event">
        <a href="./games/mafia_game.php">
          <img src="./image/MafiaLong.png" alt="">
          <span class="h2">МАФИЯ<br>20:00</span>
        </a>
      </div>
    </div>
    <div class="event_block">
      <div class="today">
        <span class="h2">ЗАВТРА<br>17.06.</span>
        <div class="today_icons">
          <button class="clipboard2"><img src="/image/share-2.svg" alt=""></button>
        </div>
        <div class="line"></div>
      </div>
      <div class="fig_event">
        <a href="./games/chess_game.php">
          <img src="./image/ChessLong.png" alt="">
          <span class="h2">ШАХМАТНЫЙ ТУРНИР<br>20:00</span>
        </a>
      </div>
    </div>
    <div class="event_block">
      <div class="today">
        <span class="h2">ПОСЛЕЗАВТРА<br>18.06.</span>
        <div class="today_icons">
        <button class="clipboard3"><img src="/image/share-2.svg" alt=""></button>
        </div>
        <div class="line"></div>
      </div>
      <div class="fig_event">
        <a href="./games/mind_game.php">
          <img src="./image/MindGameLong.png" alt="">
          <span class="h2">ИГРЫ РАЗУМА<br>20:00</span>
        </a>
      </div>
    </div>
  </div>
  <div class="other_btn">
    <div>
      <a class="btn h4" href="./get_all.php">Архив событий</a>
    </div>
  </div>

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
          <span class="h4">Электронная почта<br><br>info@ludocafe.space<br>reserv@ludocafe.space</span>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/scripts/logo.js"></script>
  <script src="/scripts/copy.js"></script>
</body>

</html>