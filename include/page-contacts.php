<?php
if (isset($_POST['username']) && isset($_POST['usertext'])) {
  $name = trim($_POST['username']);

  if (empty($name)) {
    $error = 'Sorry, please type your name.';
    print('<b style="color: red">'.$error.'</b>');
  } else {
    $message = 'Thanks, '.htmlspecialchars($name);
    $message .= '! We got your message.';
    print('<b style="color: green">'.$message.'</b>');
  }

  // TODO: add PHP code for sending an email
  // see https://www.php.net/manual/ru/function.mail.php

}
?><p>&laquo; <?php print($page['title']); ?>: please send your message &raquo;</p>

<form name="mailform" action="http://x2.if.ua/index.php" method="post" onSubmit="javascript: return isFormDataOK();">

  <input name="page" type="hidden" value="contacts">

  <p><b>Your name</b>:<br>
    <input name="username" type="text" size="42">
  </p>

  <p><b>Your message</b>:<br>
    <textarea name="usertext" rows="8" cols="32"></textarea>
  </p>

  <p><b>Your email or phone</b>:<br>
    <input name="userinfo" type="text" size="42">
  </p>

  <p>
    <input type="submit" value="send message">
  </p>

</form>


<script type="text/javascript">

  function isFormDataOK() {
    if (!document.mailform.username.value) {
      alert('Please type in your name.');
      document.mailform.username.focus();
      return false;
    }

    if (!document.mailform.userinfo.value) {
      alert('Please type in your email or phone.');
      document.mailform.userinfo.focus();
      return false;
    }

    return true;
  }

</script>
