<!DOCTYPE html>
<html>
<head>
  <link href="http://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
  <link href="http://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet"/>
  <link href="styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <title>Архив событий</title>
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
  <div class="descr_pic h3">
    <span>Интересные события<br>прошлых месяцев</span>
  </div>
  <div class="descr_picture">
    <img src="image/Dice.png" alt="" />
    <div id="all_events"></div>
  </div>
  <div class="all_events">
    <?php
    $servername='db.worldhosts.fun:3306';
    $username='u4512_dGHqQlcF1N';
    $password='m^BuBWXaPo9KZ.y4.YZ9j^OK';
    $dbname = "s4512_ludo";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    $conn->set_charset("utf8");
    $sql = 'SELECT * FROM EventArchive';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
      $Id = $row['Id']; 
      $Name = $row['Name'];
      $Count = $row['CountPerson'];
      $Date = $row['Date'];
      $Image = $row['Image'];
    echo' 
    <div class="event_block">
      <div class="today">
        <span class="h2">'. $Date .'<br>Участники: '. $Count .'</span>
        <div class="line"></div>
      </div>
      <div class="fig_event">
          <img src="./image/'. $Image .'.png" alt="">
          <span class="h2"> '. $Name .'</span>
      </div>
    </div>';
    }
    ?>
  </div>
  <div class="other_btn">
    <div>
      <a class="btn h4" href="/index.php">Вернуться на главную</a>
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
          <img src="./image/Chess.png" alt="">
        </a>
      </div>
      <div class="img_2">
        <a href="/games/mind_game.php">
          <span class="h3">ИГРЫ РАЗУМА</span>
          <img src="./image/MindGame.png" alt="">
        </a>
      </div>
      <div class="img_3">
        <a href="/games/uno_game.php">
          <span class="h3">УНО</span>
          <img src="./image/Uno.png" alt="">
        </a>
      </div>
      <div class="img_4">
        <a href="/games/dungeon_game.php">
          <span class="h3">ПОДЗЕМЕЛЬЯ</span>
          <img src="./image/Dungeon.png" alt="">
        </a>
      </div>
      <div class="img_5">
        <a href="/games/classics_game.php">
          <span class="h3">ВЕЧЕР КЛАССИКИ</span>
          <img src="./image/Classics.png" alt="">
        </a>
      </div>
      <div class="img_6">
        <a href="/games/domino_game.php">
          <span class="h3">ДОМИНО</span>
          <img src="./image/Domino.png" alt="">
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