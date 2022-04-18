<?

    $visitCounter = 0;

    if(isset($_COOKIE['visitCounter']))
    {
      $visitCounter = $_COOKIE['visitCounter'];
    }
    $visitCounter++;
    setcookie("visitCounter", $visitCounter);
    $lastVisit = $_COOKIE['lastVisit'];
    $lastVisit = date('d-m-Y');
    if(date('d-m-Y')!= $_COOKIE['lastVisit'])
    {
    	setcookie('lastVisit', $lastVisit, time()+86400);
    }
    if($visitCounter == 0)
    {
      echo '<blockquote>Спасибо, что зашли на огонек!</blockquote>';
    }
    else
    {
      echo '<blockquote>Вы зашли к нам '.$visitCounter.' раз!<br>Последние раз вы нас посещали в '.$lastVisit.'</blockquote>';
    }
?>
