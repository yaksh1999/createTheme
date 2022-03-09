<?php
	$theme_name = $_POST['theme_name']; 
	$cwd = getcwd();
	if (!file_exists($cwd.'/'.$theme_name)) {
 	   mkdir($cwd.'/'.$theme_name, 0777,true);
 	   chmod($cwd.'/'.$theme_name, 0777);
 	   	$fileContent  = "Theme Name: ".$theme_name."\n";
 	    $fileContent .= 'Version: 1.0';
		$fileName = 'style.css';
		$filePath = $theme_name.'/'.$fileName;

		if (file_put_contents($filePath, $fileContent) !== false) {
		     chmod($filePath , 0777);
		} else {
				echo "Files not created for theme style";
		}

		$fileContent = "<?php get_header(); ?>\n";
		$fileContent .= "<body>\n";
		$fileContent .= "<?php get_footer(); ?>\n";
		$fileName = 'index.php';
		$filePath = $theme_name.'/'.$fileName;

		if (file_put_contents($filePath, $fileContent) !== false) {
		     chmod($filePath , 0777);
		} else {
				echo "Files not created for theme index";
		}


		$fileContent = "";
		$fileName = 'single.php';
		$filePath = $theme_name.'/'.$fileName;

		if (file_put_contents($filePath, $fileContent) !== false) {
		     chmod($filePath , 0777);
		} else {
				echo "Files not created for theme single.php";
		}

		$fileContent = "<!DOCTYPE html>\n";
		$fileContent .= "<html>\n";
		$fileContent .= "<head>\n";
		$fileContent .= "<?php wp_head(); ?>\n";
		$fileContent .= "<meta charset='utf-8'>\n";
		$fileContent .= "<meta name='viewport' content='width=device-width, initial-scale=1'>\n";
		$fileContent .= "<title></title>\n";
		$fileContent .= "</head>\n";
		$fileName = 'header.php';
		$filePath = $theme_name.'/'.$fileName;

		if (file_put_contents($filePath, $fileContent) !== false) {
		     chmod($filePath , 0777);
		} else {
				echo "Files not created for theme header";
		}

		$fileContent = '<?php wp_footer(); ?>\n';
		$fileContent .= '</body>\n';
		$fileContent .= '</html>\n';
		$fileName = 'footer.php';
		$filePath = $theme_name.'/'.$fileName;

		if (file_put_contents($filePath, $fileContent) !== false) {
		     chmod($filePath , 0777);
		} else {
				echo "Files not created for theme footer";
		}
	}
	if (!file_exists($theme_name.'/assets'))
	{
		mkdir($theme_name.'/assets', 0777,true);
 	    chmod($theme_name.'/assets', 0777);

	 	    if (!file_exists($theme_name.'/assets/css'))
			{
				mkdir($theme_name.'/assets/css', 0777,true);
		 	    chmod($theme_name.'/assets/css', 0777);
		 	    	$fileContent = '';
					$fileName = 'style.css';
					$filePath = $theme_name.'/assets/css/'.$fileName;

					if (file_put_contents($filePath, $fileContent) !== false) {
					     chmod($filePath , 0777);
					} else {
							echo "Files not created for css";
					}
			}
			if (!file_exists($theme_name.'/assets/js'))
			{
				mkdir($theme_name.'/assets/js', 0777,true);
		 	    chmod($theme_name.'/assets/js', 0777);
		 	    $fileContent = '';
					$fileName = 'custom.js';
					$filePath = $theme_name.'/assets/js/'.$fileName;

					if (file_put_contents($filePath, $fileContent) !== false) {
					     chmod($filePath , 0777);
					} else {
							echo "Files not created for css";
					}
			}
			if (!file_exists($theme_name.'/assets/img'))
			{
				mkdir($theme_name.'/assets/img', 0777,true);
		 	    chmod($theme_name.'/assets/img', 0777);
			}
	}
	if (!file_exists($theme_name.'/templates'))
	{
		mkdir($theme_name.'/templates', 0777,true);
 	    chmod($theme_name.'/templates', 0777);
	}
	if (!file_exists($theme_name.'/inc'))
	{
		mkdir($theme_name.'/inc', 0777,true);
 	    chmod($theme_name.'/inc', 0777);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create a Wordpress Theme</title>
</head>
<body>
	<form method="post" action="">
		<label for="theme_name">Theme Name:</label><br>
		<input type="text" id="theme_name" name="theme_name"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>