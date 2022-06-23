var $temp = $("<input>");

$('.clipboard1').on('click', function() {
  $("body").append($temp);
  $temp.val("http://ludocafe.space/games/mafia_game.php").select();
  document.execCommand("copy");
  $temp.remove();
})

$('.clipboard2').on('click', function() {
  $("body").append($temp);
  $temp.val("http://ludocafe.space/games/chess_game.php").select();
  document.execCommand("copy");
  $temp.remove();
})

$('.clipboard3').on('click', function() {
  $("body").append($temp);
  $temp.val("http://ludocafe.space/games/mind_game.php").select();
  document.execCommand("copy");
  $temp.remove();
})