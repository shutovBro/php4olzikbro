<!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
    $vert=$_POST['A'];
    $vertical=true;
    $menu=[
      ['link' => 'Домой', 'href'=> 'index.php'],
      ['link' => 'О нас', 'href'=> 'index.php?id=about'],
      ['link' => 'Контакты', 'href'=> 'index.php?id=contact'],
      ['link' => 'Таблицы умножения', 'href'=> 'index.php?id=table'],
      ['link' => 'Калькулятор', 'href'=> 'index.php?id=calc']
    ];
    if($vert == "Вертикальное")
    {
      $vertical=true;
    }
    else if ($vert=="Горизонтальное")
    {
      $vertical=false;
    }
      drawMenu($menu, $vertical);
    ?>
    <!-- Меню -->
    <!-- Навигация -->