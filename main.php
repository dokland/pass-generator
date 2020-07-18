<h3>Secure Password Generator</h3>
<?php
	function password_generate($chars)
	{
	  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!';
	  return substr(str_shuffle($data), 0, $chars);
	}
	  echo password_generate(20)."\n";

		echo "<br><br /><center><button type='submit' name='submitAdd' value='lmao'  onclick='window.location.reload();'><b>Generate</b></center>";
?>
