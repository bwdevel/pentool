<?php

$counter = 0;
foreach($menuitemhandle as $item)
{
  echo "<td align=\"center\"";
  if($tab == $item) {
    echo " bgcolor=\"".$theme[$colorscheme][3]."\"";
  }
  echo "><a href=\"main.php?tab=$item&color=$colorscheme\">".$menuitemname[$counter]."</a></td>";

  $counter++;
}

?>
