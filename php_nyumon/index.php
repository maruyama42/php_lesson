<!--#29 Cookieを使ってみよう-->
<?php

// setcookie("username", "taguchi", time()*60*60);
setcookie("username", "taguchi", time()-60*60);

echo $_COOKIE['username'];

