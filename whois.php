<?php 

function getwhois($domain, $tld)
{
  if($domain){
    require_once("whois.class.php");

    $whois = new Whois();

    if( !$whois->ValidDomain($domain.'.'.$tld) ){
      return 'Sorry, the domain is not valid or not supported.';
    }

    if( $whois->Lookup($domain.'.'.$tld) ){
      return $whois->GetData(1);
    }else{
      return 'Sorry, an error occurred.';
    }
  }
}

$domain = trim($_REQUEST['domain']);

$dot = strpos($domain, '.');
$sld = substr($domain, 0, $dot);
$tld = substr($domain, $dot+1);

//echo "<br />".$domain."   ".$dot."   ".$sld."   ".$tld;
$whois = getwhois($sld, $tld);

?>


<form action="main.php" method="GET">
  <input type="hidden" name="color" value="<?php echo $colorscheme; ?>">
  <input type="hidden" name="tab" value="<?php echo $tab; ?>">
  <table>
    <tr>
      <td colspan=3><b>Whois</b> - This tool currently only supports SLD.TLD format (e.g. <i>example.com</i>).</td>
    </tr>
    <tr>
      <td colspan=3><input type="text" name="domain" size=80 value="<?php echo $encode ?>" autocomplete="off"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Whois"></td>
    </tr>
  </table>
</form>
<table>
  <tr>
    <td><pre><?php if($domain){ echo $whois; } ?></pre></td>
  </tr>
</table>

