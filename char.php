<table>
<?php

$charprintable = array('NUL','SOH','STX','ETX','EOT','ENQ','ACK','BEL',
                   'BS','TAB','LF','VT','FF','CR','SO','SI',
                   'DLE','DC1','DC2','DC3','DC4','NAK','SYN','ETB',
                   'CAN','EM','SUB','ESC','FS','GS','RS','US');

$chardescription = array('null character',	'start of heading',
                     'start of text',		'end of text',
                     'end of transmission',     'enquiry',
                     'acknowledge',             'bell',
                     'backspace',               'horizontal tab',
                     'NL line feed, new line',  'vertical tab',
                     'NP form feed, new page',  'carriage return',
                     'shift out',               'shift in',
                     'data link escape',        'device control 1',
                     'device control 2',        'device control 3',
                     'device control 4',        'negative acknowledge',
                     'synchronous idle',        'end of trans. block',
                     'cancel',                  'end of medium',
                     'substitute',              'escape',
                     'file separator',          'group separator',
                     'record separator',        'unit separator');

$counter=0;
$border = "|";
echo "<tr>";
for($x=0; $x<4; $x++){
  echo "<td>Dec</td>";
  echo "<td>Hx</td>";
  echo "<td>Oct</td>";
  echo "<td>Char</td>";
  if($x==0){ echo "<td>Desc.</td>";	}
  if($x<3){ echo "<td>$border</td>"; 	}
}
for($x=0; $x<32; $x++){
  if($counter==0){
    echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\">";
    $counter = 1;
  }else{
    echo "<tr>";
    $counter = 0;
  }
  for($y=0; $y<4; $y++){
    $char=$x+(32*$y);

    echo "<td>";
    echo $char;
    echo "</td>";

    echo "<td>";
    echo dechex($char);
    echo "</td>";

    echo "<td>";
    echo decoct($char);
    echo "</td>";

    if($y==0){
      echo "<td><b>";
      echo $charprintable[$char];  
      echo "</b></td>";

      echo "<td>";
      echo "(".$chardescription[$char].")";
      echo "</td>";
    }else{
      echo "<td><b>";
      if($char==32){
        echo "SPC";
      }else if($char==127){
        echo "DEL";
      }else{
        echo htmlentities(chr($char));
      }
      echo "</b></td>";
    }
    if($y<3){ echo "<td>$border</td>"; }
  }
  
  echo "</tr>";
}

?>

</table>
