<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php
			if(!isset($_POST['name'])||!isset($_POST['Section'])||!isset($_POST['CreditNumber'])||!isset($_POST['cardtype']))
			{
		?>
		<h1>Sorrry</h1>
		<p>You did not fill out the form completely.  <a href="buyagrade.html">Try again?</a></p>

		<?php
			}else{
		?>
 
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			Your information has been recorded.
		</p>
		
		<hr />
		
		<dl>
			<dt>Name</dt>
			<dd>
				<?=$_POST['name']?>
			</dd>
			
			<dt>Section</dt>
			<dd>
				<?=$_POST['Section']?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
					<?=$_POST['CreditNumber']?> (<?=$_POST['cardtype']?>)
			</dd>
		</dl>
		

		<?php
			$data= $_POST['name'].";".$_POST['Section'].";".$_POST['CreditNumber'].";".$_POST['cardtype']."\n";
			file_put_contents("suckers.txt", $data, FILE_APPEND);
			
		?>
		<p>Here are all the suckers who have submitted here:</p>
		<?php
			$myfile = fopen("suckers.txt", "r") or die("Unable to open file!");
			// Output one line until end-of-file
			while(!feof($myfile))
			{
			  echo fgets($myfile) . "<br>";
			}
			fclose($myfile);

		?>

 
	<?php
		}
	?>
	
	</body>
</html>