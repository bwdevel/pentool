<?php
if(isset($_GET['tab'])){
  $tab = $_GET['tab'];
  if(($tab != "base64" &&
       $tab != "hash" &&
       $tab != "encoder" &&
       $tab != "whois" &&
       $tab != "char" &&
       $tab != "opt" &&
       $tab != "about")){
  $tab="home";
  }
}else{
  $tab="home";
}

if(isset($_GET['base64'])){
  $base64 = $_GET['base64'];
  $clear = base64_decode($base64);
  $encode="";
}else if(isset($_GET['clear'])){
  $clear = $_GET['clear'];
  $base64 = base64_encode($clear);
  $encode="";
}else if(isset($_GET['encode'])){
  $encode = $_GET['encode'];
  $clear="";
  $base64="";
}else{
  $clear="";
  $base64="";
  $encode = "";
}

if(isset($_GET['listtype'])){
        $listtype = $_GET['listtype'];
}else{
        $listtype = "short";
}

$mainwidth = 800;
$menuitemname =    array("Home", "Base64", "Hash", "Encoder", "Char", "WhoIs", "Options", "About");
$menuitemhandle =  array("home", "base64", "hash", "encoder", "char", "whois", "opt",     "about");
$menuwidth = $mainwidth;
$menuitemcount= sizeof($menuitemname);

$version = "0.5";
$debug = FALSE;

?>

<?php include 'header.php'; ?>

<table>
  <tr>
    <td>
      <table width="<?php echo $menuwidth ?>" align="left" valign="top">
        <tr>
          <td>
            <?php include 'menu.php'; ?>
          </td>
        </tr>
        <tr><td colspan =<?php echo $menuitemcount; ?>><hr width="100%"></td></tr>
     </table>
    </td>
  </tr>
  <tr>
    <td>
      <table width="<?php echo $mainwidth ?>">
        <tr>
          <td>
            <?php include $tab.".php"; ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <tr>
    <td>
      <?php if($debug){include 'debug.php';} ?>
    </td>
  </tr>
</table>
<?php include 'footer.php'; ?>
