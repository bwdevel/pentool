<form method="GET" action="main.php">
  <input type="hidden" name="color" value="<?php echo $colorscheme; ?>">
  <input type="hidden" name="tab" value="<?php echo $tab; ?>">
  <table>
    <tr>
      <td><b>Base64 Encode</b> - enter the clear text string to be encoded</td>
    </tr>
    <tr>
      <td><textarea name="clear" cols="80" rows="10"><?php printf($clear); ?></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" value="Encode"/></td>
    </tr>
  </table>
</form>

<p>
<hr>

<form method="GET" action="main.php">
  <input type="hidden" name="color" value="<?php echo $colorscheme; ?>">
  <input type="hidden" name="tab" value="<?php echo $tab; ?>">
  <table>
    <tr>
      <td><b>Base64 Decode</b> - enter the  Base64 string to be decode</td>
    </tr>
    <tr>
      <td><textarea name="base64" cols="80" rows="10"><?php printf($base64); ?></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" value="Decode"/></td>
    </tr>
  </table>
</form>

