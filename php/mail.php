<?php
if(isset($_POST['name']) && isset($_POST['mess']))
{
  $name= $_POST['name'];
  $text= $_POST['mess'];
  $mail = mail("hi.paul@yandex.ru", "Отзыв с сайта sherege.sh", $name."\n".$text, "Content-type: text/plain; charset=utf-8");

  if ($mail) {
    echo "сработало";
    header( 'Location: http://sherege.sh/feedback.php' ); 
  }
  else {
    echo "не сработало";
    header( 'Location: http://sherege.sh/feedback.php' ); 
  }
}
else {
    echo "нет данных";
    header( 'Location: http://sherege.sh/feedback.php' ); 
}

// $to = 'coolbatmanarrow@gmail.com'; $subject = 'Test email using PHP'; $message = 'This is a test email message'; $headers = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion(); mail($to, $subject, $message, $headers, '-fwebmaster@example.com');
// $headers = 'From: webmaster@example.com'; mail('hi.paul@yandex.ru', 'Test email using PHP', 'This is a test email message', $headers, '-fwebmaster@example.com');

?>