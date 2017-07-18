<?php

function woolayout_settings_layout_settings() {

ob_start("ob_html_compress");
$true = true;

?>

<center>

<h1>  WELCOME TO WOOLAYOUT  </h1>

<br>

<h2> Thank you for Downloading Woolayout. Enjoy to create and design your Woocommerce Pages.  </h2>

<br>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="B56WD6X23V85A">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</center>


<?php



ob_end_flush();



}



?>