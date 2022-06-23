const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validate = () => {
  const $result = $('#result');
  const email = $('#email').val();

  if (validateEmail(email)) {
    $result.text('');
    document.getElementById('myBtn').disabled=false;
  } else {
    $result.text('Введите правильный email');
    $result.css('color', 'black');
    document.getElementById('myBtn').disabled=true;
  }
  return false;
}
$('#email').on('input', validate);