<HEAD> <TITLE> Угадайте имя</TITLE></HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Введите логин: 
  <INPUT type="text" name="a" size="15"> 
  <INPUT type="hidden" name="h" value="Максим"> 
  <INPUT type="hidden" name="h" value="Рашит"> 
  <INPUT type="hidden" name="h" value="Александр">
  <INPUT type="hidden" name="h" value="Руслан"> 
  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Александр")||($_POST["a"]=="Рашит")||($_POST["a"]=="Булат")||($_POST["a"]=="Максим")) { 
  echo($_POST["a"]." -Здравствуйте!"); 
  } else { 
  	echo "Вы не зарегистрированы";
    }
    }
?>  
</BODY> 
</HTML>