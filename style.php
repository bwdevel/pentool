<?php
if(isset($_GET['color'])){
  $colorscheme= $_GET['color'];
}else{
  $colorscheme = 1;
}


$theme = array(
           array("NULL",              "red",     "red",     "red",     "red",     ""),
           array("Default",           "white",   "black",   "lavender","grey",    ""),
           array("Pumpkin Attack",    "#120D08", "#E39B36", "#421614", "#BF3E15", ""),
           array("Minty Earth",       "#2B1B07", "#7FB758", "#462B05", "#5E4A29", ""),
           array("Terra ?",           "#E8DDCB", "#031634", "#CDB380", "#033649", ""),
           array("dream magnet",      "#343838", "#00DFFC", "#005F6B", "#008C9E", ""),
           array("Newly Risen Moon",  "#EEE6AB", "#36393B", "#C5BC8E", "#696758", ""),
           array("Newly Fallen Moon", "#36393B", "#EEE6AB", "#696758", "#46484B", ""),
           array("Machu Picchu",      "#684848", "#F0F0DB", "#607848", "#604878", ""),
           array("Ma(r)trix",         "#072606", "#0CFD10", "#0E4C0D", "#0E2F10", ""),
           array("Giant Goldfish",    "#FA6900", "#E0E4CC", "#F38630", "#A7DBD8", ""),
           array("Adrift in Dreams",  "#0B486B", "#CFF09E", "#3B8686", "#79BD9A", ""),
           array("I Demand a Pancake","#E5FCC2", "#594F4F", "#9DE0AD", "#547980", ""),
           array("Curiosity Killed",  "#2E2633", "#DCE9BE", "#555152", "#99173C", ""),
           array("clairedelune",      "#413E4A", "#F7E4BE", "#73626E", "#B38184", ""),
           array("Vintage Modern",    "#8C2318", "#F2C45A", "#5E8C6A", "#BfB35A", ""),
           array("Craving Starbucks", "#615145", "#C6CCA5", "#54787D", "#6B9997", ""),
           array("Early Morning",     "#F5DD9D", "#506266", "#BCC499", "#92A68A", ""),
           array("devistating loss",  "#6792AB", "#B8D0DE", "#73A2BD", "#86B4CF", ""),
           array("Blue Kitten",       "#2C3B63", "#ECE59A", "#250352", "#848D82", ""),
           array("Greyscale",         "#C0C0C0", "#202020", "#B0B0B0", "#606060", "")
         );


$colorschememin = 1;
$colorschememax = sizeof($theme) - 1;

if($colorscheme < $colorschememin){ $colorscheme = $colorschememin; }
if($colorscheme > $colorschememax){ $colorscheme = $colorschememax; }

?>

  <style type="text/css">
    body {
      color:<?php echo $theme[$colorscheme][2]; ?>;
      background-color:<?php echo $theme[$colorscheme][1]; ?>;
      font-family:courier;
      font-size:x-small;
    }
    a:link {color:<?php echo $theme[$colorscheme][2]; ?>; text-decoration:none; font-size:small;}  
    a:visited {color:<?php echo $theme[$colorscheme][2]; ?>; text-decoration:none; font-size:small;}
    a:active {color:<?php echo $theme[$colorscheme][2]; ?>; text-decoration:none; font-size:small;}
    a:hover {color:<?php echo $theme[$colorscheme][2]; ?>; text-decoration:none; font-size:small;}
    form {
      font-family:courier;
      font-size:small;
    }
    textarea {
      color:<?php echo $theme[$colorscheme][2]; ?>;
      background-color:<?php echo $theme[$colorscheme][3]; ?>;
      border-color:<?php echo $theme[$colorscheme][4]; ?>;
      font-family:courier;
      font-size:small;
    }
    input {
      color:<?php echo $theme[$colorscheme][2]; ?>;
      border-color:<?php echo $theme[$colorscheme][4]; ?>;
      background-color:<?php echo $theme[$colorscheme][3]; ?>;
      font-family:courier;
      font-size:small;
    }
    hr {
      color:<?php echo $theme[$colorscheme][4]; ?>;
    }
    td {
      font-size:small;
}
  </style>
