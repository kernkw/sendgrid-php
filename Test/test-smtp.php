<?php

include '/Users/sendgrid1/code_integration/sendgrid-php/SendGrid_loader.php';

$sendgrid = new SendGrid('username', 'password');

$mail = new SendGrid\Mail();
$mail->
  addTo('kyle.kern@sendgrid.com')->

        
  setFrom('kyle.kern@sendgrid.com')->
  setSubject('test send')->
  setText('Hello World!')->
  setHtml('Hello World!');
   
$sendgrid->
smtp->
  send($mail);

?>