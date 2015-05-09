<?php
//session_start();
?>
<form action="#" method="post">
<p>Enter text shown below:</p>
<!--
<p><img src="./?<//?php echo session_name()?>=<//?php echo session_id()?>"></p>
-->
<!--  Modify 1 --
<p><img src="lib/kcaptcha/index.php"></p>
<!-- ========== -->
<!--  Modify 2 -->
<iframe id="frame2" name="frame2" src="lib/kcaptcha2/index.php"></iframe>
<p>
    <a href="lib/kcaptcha2/index.php" target="frame2">Другая капча</a>
</p>
<!-- ========== -->
<p><input type="text" name="keystring"></p>
<p><input type="submit" value="Check"></p>
</form>
<?php
if(count($_POST)>0){
	if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['keystring']){
		//echo "Correct";
                // - Modify 3 -
                echo '<span style="color: green">Correct</span><br><br>';
                // ============
	}else{
		//echo "Wrong";
                // - Modify 4 -
                echo '<span style="color: red">Wrong</span><br><br>';
                // ============
	}
}
unset($_SESSION['captcha_keystring']);
?>