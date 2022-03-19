<input type="hidden" name="itshost" value="<?=$_SERVER['HTTP_HOST'];?>">
<?$urlnow = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  
$a = explode('?', $urlnow);  
$site = $a[0];   

?>
							<input type="hidden" name="site"        value="<? echo $site; ?>">
							<input type="hidden" name="type"        value="<? echo $_SESSION['type']; ?>">
							<input type="hidden" name="from"        value="<? echo $_SESSION['from']; ?>">
							<input type="hidden" name="issearch"    value="<? echo $_SESSION['issearch']; ?>"> 
							<input type="hidden" name="utm_term"    value="<? echo $_SESSION['utm_term'];?>">
							<input type="hidden" name="ip_lida"     value="<? echo $_SERVER['REMOTE_ADDR'];?>">
							<input type="hidden" name="url"         value="<? echo $url; ?>">
							<input type="hidden" name="utm_keyword" value="<? echo $_SESSION['utm_keyword'];?>"> 
							<input type="hidden" name="utm_term"    value="<? echo $_SESSION['utm_term'];?>">