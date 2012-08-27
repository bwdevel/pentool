<table border=1>

<tr>
  <td colspan=2 align=center>---- DEGBUG ---</td>
</tr>
<tr>
  <td width="200"><?php echo "\$menuitemcount ="; ?></td>
  <td><?php echo $menuitemcount;?></td>
</tr>
<tr>
  <td><?php echo "sizeof\(\$theme\) = "; ?></td>
  <td><?php echo sizeof($theme);?></td>
</tr>

<tr>
  <td><?php echo "\$colorschememax = "; ?></td>
  <td><?php echo $colorschememax;?></td>
</tr>

<tr>
  <td colspan=2><?php if($tab=="char"){var_dump($charprintable);} ?></td>
</tr>
  <td colspan=2><?php if($tab=="char"){var_dump($chardescription);} ?></td>
<tr>
</tr>
<tr>
  <td colspan=2><?php var_dump($theme); ?></td>
</tr>

</table>



<?php



?>
