<!DOCTYPE html>
<html lang="en">

<head>
  <link href="http://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
<link href="http://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet"/>
  <link href="/styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <title>Аренда</title>
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

  <div class="rent_block">
    <div class="rent_columns">
      <div class="info_block">
        <span class="info_header h2">Библиотека</span>
        <span class="info_main h5">Уютное пространство для больших компаний!<br><br>
        Просторное помещение, рассчитаное на компании до 30 человек, стилизованное под зал библиотеки. Окунитесь в мир настольных игр в окружении знаний и таинственных изданий. Здесь на каждой полке Вы найдете множество интересных книг и мини-игр.<br><br>
        Зал оборудован видео и аудио техникой для достижения необходимой комфортной атмосферы.</span>
        <div class="info_more">
          <div class="line_more"></div>
        </div>
        <table class="rent_price h3">
          <tr>
            <td>ПН-ПТ</td>
            <td>200₽/час</td>
          </tr>
          <tr>
            <td>СБ-ВС</td>
            <td>300₽/час</td>
          </tr>
        </table>
        <button class="btn h4" id="myBtn1">Забронировать</button>
      </div>
      <div class="mafia_pic">
        <img src="/image/Library.png" alt="">
      </div>
    </div>
  </div>

  <div class="rent_block">
    <div class="rent_columns">
      <div class="mafia_pic">
        <img src="/image/SoftArea.png" alt="">
      </div>
      <div class="info_block">
        <span class="info_header h2">Мягкий зал</span>
        <span class="info_main h5">Мир пуфиков и мягких кресел!<br><br>
        Светлое и оттого уютное помещение для небольших компаний до 20 человек. Здесь Вы можете собраться с друзьями, чтобы провести время в тепле и комфорте. Поиграть вместе в различные настольные или консольные игры, не выползая из мягких кресел и пуфиков.<br><br>
        Зал оборудован видео и аудио техникой для достижения необходимой комфортной атмосферы.</span>
        <div class="info_more">
          <div class="line_more"></div>
        </div>
        <table class="rent_price h3">
          <tr>
            <td>ПН-ПТ</td>
            <td>150₽/час</td>
          </tr>
          <tr>
            <td>СБ-ВС</td>
            <td>250₽/час</td>
          </tr>
        </table>
        <button class="btn h4" id="myBtn2">Забронировать</button>
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

<div id="myModal" class="modal">
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <span class="modal_h">LUDO</span>
  </div>
  <div class="modal-body">
    <form action="/db/insert.php" method="post" id="form_rent">
      <span class="h4">Весь зал</span>
      <input class="check_box" name="flg" type="checkbox">
      <div>
        <input class="btn inp_btn h4" name="name" required="" placeholder="Имя" type="text">
        <input class="btn inp_btn h4" name="count" required="" placeholder="Количество гостей" type="number" min="1" max="50">
        <input class="btn inp_btn h4" id="online_phone" name="phone" required="" autofocus="autofocus" pattern= "\+7\s?[\(]{0,1}[0-9]{3}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder= "+7(___)___-__-__" type="phone" >
        <div class="modal_sub">
          <input class="btn h4" type="submit" name="rent_insert">
        </div>
      </div>
    </form>
  </div>

  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://kenwheeler.github.io/slick/slick/slick.js"></script>

  <script src="/scripts/slide.js"></script>
  <script src="/scripts/modal.js"></script>
  <script src="/scripts/number.js"></script> 

</body>

</html>