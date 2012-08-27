<form action="main.php" method="GET">
  <input type="hidden" name="color" value="<?php echo $colorscheme; ?>">
  <input type="hidden" name="tab" value="<?php echo $tab; ?>">
  <table>
    <tr>
      <td colspan=3><b>Encoder</b> - enter a string to be encoded</td>
    </tr>
    <tr>
      <td colspan=3><input type="text" name="encode" size=80 value="<?php echo $encode ?>" autocomplete="off"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Encode"></td>
    </tr>
  </table>
</form>

<?php

if($encode){
  echo "<table>";

  echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\"><td><b>Method</b></td><td><b>Output</b></td></tr>";

  echo "<tr>";
  echo "<td width=\"128\">URLEnc:</td>";
  echo "<td>".htmlentities(urlencode($encode))."</td>";
  echo "</tr>";

  echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\">";
  echo "<td width=\"128\">ASCII+ :</td>";
  echo "<td>";
  if($encode){
    $encodearray = str_split($encode);
    $counter = 1;
    foreach($encodearray as $v){
      echo ord($v);
      if($counter<count($encodearray)){
        echo "+";
      }
      $counter++;
    }
  }
  echo "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td width=\"128\">HEX :</td>";
  echo "<td>";
  if($encode){
    $encodearray = str_split($encode);
    foreach($encodearray as $v){
      echo "%";
      echo htmlentities(dechex(ord($v)));
    }
  }
  echo "</td>";
  echo "</tr>";

 echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\">";
  echo "<td width=\"128\">HTML :</td>";
  echo "<td>";
  if($encode){
    $encodearray = str_split($encode);
    foreach($encodearray as $v){
      echo htmlentities("&#".ord($v).";");
    }
  }
  echo "</td>";
  echo "</tr>";

 echo "<tr>";
  echo "<td width=\"128\">ROT13 :</td>";
  echo "<td>".htmlentities(str_rot13($encode))."</td>";
  echo "</tr>";

  echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\">";
  echo "<td width=\"128\">ROT47 :</td>";
  if (!function_exists('str_rot47'))
  {
    function str_rot47($str)
    {
      return strtr($str, 
        '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~', 
        'PQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNO');
    }
}
  echo "<td>".htmlentities(str_rot47($encode))."</td>";
  echo "</tr>";


  echo "</table>";

}
?>

