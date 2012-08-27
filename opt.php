<?php

  $colornames = array("", "Background", "Text", "Highlight", "Accent", "");

?>

<center>
  <table width="600">
    <tr>
      <td align="center" colspan="3">Current Theme:</td>
    </tr>
    <tr>
      <td align="center" colspan="3" bgcolor="<?php echo $theme[$colorscheme][3]; ?>"><b><?php echo $theme[$colorscheme][0]; ?></b></td>
    </tr>

<?php
 
  $prevtheme = $colorscheme - 1;
  if($prevtheme < $colorschememin){ $prevtheme = $colorschememax;  }

  $nexttheme = $colorscheme + 1;
  if($nexttheme > $colorschememax){ $nexttheme = $colorschememin; } 
 
  echo "<tr>";
    echo "<td align=\"center\"><a href=\"main.php?tab=opt&color=".$prevtheme."\">&#60;&#60; Previous &#60;&#60;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td align=\"center\"><a href=\"main.php?tab=opt&color=".$nexttheme."\">&#62;&#62; Next &#62;&#62;</td>";
  echo "</tr>";


  for($x=1;$x<5;$x++){
    echo "<tr>";
      echo "<td bgcolor=\"".$theme[$prevtheme][$x]."\" width=\"33%\">&nbsp;</td>";
      echo "<td align=\"center\" width=\"33%\">".$colornames[$x]."</td>";
      echo "<td bgcolor=\"".$theme[$nexttheme][$x]."\" width=\"33%\">&nbsp;</td>";
    echo "</tr>";

  }

   echo "<tr>";
      echo "<td align=\"center\" width=\"33%\">".$theme[$prevtheme][0]."</td>";
      echo "<td align=\"center\" width=\"33%\">Name</td>";
      echo "<td align=\"center\" width=\"33%\">".$theme[$nexttheme][0]."</td>";
    echo "</tr>";


?>



   </table>

</center>

