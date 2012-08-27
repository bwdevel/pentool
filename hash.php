<form action="main.php" method="GET">
  <input type="hidden" name="color" value="<?php echo $colorscheme; ?>">
  <input type="hidden" name="tab" value="<?php echo $tab; ?>">
  <table>
    <tr>
      <td colspan=3><b>Hasher</b> - enter a string to be hashed</td>
    </tr>
    <tr>
      <td colspan=3><input type="text" name="encode" size=80 value="<?php echo $encode ?>" autocomplete="off"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Hash"></td>
      <td><input type="radio" name="listtype" value="short"<?php if($listtype=="short"){echo " checked";}?>>Short List</td>
      <td><input type="radio" name="listtype" value="long"<?php if($listtype=="long"){echo " checked";}?>>Long List</td>
    </tr>
  </table>
</form>

      <?php
        if($encode){
          echo "<table width=\"800\"><tr></td>";
          echo "<tr><td><b>Algo</b></td><td><b>str_len</b></td><td><b>Hash</b></td></tr>";

          $algos = array('adler32','crc32','crc32b','md2','md4','md5','sha1','sha224','sha256','sha384','sha512');
          $counter=0;
          if($listtype=="long"){
            $algoPointer = hash_algos();
          } else {
            $algoPointer = $algos;
          }
          foreach($algoPointer as $v){
            $r = hash($v, $encode, false);
              if($counter==0){
                echo "<tr bgcolor=\"".$theme[$colorscheme][3]."\">";
                $counter=1;
              }else{
                echo "<tr bgcolor=\"".$theme[$colorscheme][1]."\">";
                $counter=0;
              }
             printf("<td>%s</td><td>%d</td><td>%s</td></tr>",$v, strlen($r), $r);
          }
        echo "</table>";
        }
      ?>

