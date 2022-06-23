<!DOCTYPE html>
<html lang="en">

<head>
  <link href="http://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
<link href="http://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet"/>
  <link href="/styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <title>Мафия</title>
</head>

<body>
  <nav class="navbar">
    <a href="/index.php" class="logo logo_show"><span>LUDO</span></a>
    <ul class="nav-list">
      <li><a href="/index.php">События</a></li>
      <li><a href="/rent.php">Аренда</a></li>
      <li><a href="/contacts.php">Контакты</a></li>
    </ul>
  </nav>
  <div class="game_block">
    <div class="game_col">
      <div class="game_pic">
        <img src="/image/MafiaBig.png" alt="">
      </div>

      <div class="info_block">
        <span class="info_header h2">МАФИЯ</span>
        <span class="info_main h5">Мафия в городе!<br><br>
          Настали неспокойные времена: убийцы и уголовники вновь вступили
          на тропу войны. Необходимо вывести их на чистую воду, пока не пострадали невинные жители.<br><br>
          Чем закончится битва и за кем останется последнее слово — <br>
          предсказать невозможно..</span>
        <div class="info_more">
          <div class="line_more"></div>
        </div>
        <span class="info_tabletime h3">ЧЕТВЕРГ — 20:00<br>СУББОТА — 23:00</span>
        <span class="info_rules h6">Без предварительной записи.<br>Оплата по тарифу антикафе.</span>
        <div>
          <a class="btn h4" href="/rent.php">Посмотреть тарифы</a>
        </div>
      </div>
    </div>
  </div>

  <div class="tabletime">
    <div class="delim archive">
      <span class="h2">Расписание ежедневных событий</span>
    </div>
    <div class="carousel">
      <div class="img_1">
        <a href="/games/chess_game.php">
          <span class="h3">ШАХМАТЫ</span>
          <img src="/image/Chess.png" alt="">
        </a>
      </div>
      <div class="img_2">
        <a href="/games/mind_game.php">
          <span class="h3">ИГРЫ РАЗУМА</span>
          <img src="/image/MindGame.png" alt="">
        </a>
      </div>
      <div class="img_3">
        <a href="/games/uno_game.php">
          <span class="h3">УНО</span>
          <img src="/image/Uno.png" alt="">
        </a>
      </div>
      <div class="img_4">
        <a href="/games/dungeon_game.php">
          <span class="h3">ПОДЗЕМЕЛЬЯ</span>
          <img src="/image/Dungeon.png" alt="">
        </a>
      </div>
      <div class="img_5">
        <a href="/games/classics_game.php">
          <span class="h3">ВЕЧЕР КЛАССИКИ</span>
          <img src="/image/Classics.png" alt="">
        </a>
      </div>
      <div class="img_6">
        <a href="/games/domino_game.php">
          <span class="h3">ДОМИНО</span>
          <img src="/image/Domino.png" alt="">
        </a>
      </div>
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
  <script src="http://kenwheeler.github.io/slick/slick/slick.js"></script>

  <script src="/scripts/slide.js"></script>

</body>

</html>