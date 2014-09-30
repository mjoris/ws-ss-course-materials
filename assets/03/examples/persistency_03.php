<?php

	// Suppress errors (for educational purposes)
	ini_set('error_reporting', 0);

	// Get variables
	$name = $_GET['name'];
	$pass = $_GET['pass'];
	$cont = (int) $_GET['cont'];
	$remark = $_GET['remark'];

?><!DOCTYPE html>
<html>
<head>
	<title>Testform</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

		<fieldset>

			<h2>Testform</h2>

			<dl class="clearfix">

				<dt><label for="name">Name</label></dt>
				<dd class="text"><input type="text" id="name" name="name" value="<?php echo $name; ?>" class="input-text" /></dd>

				<dt><label for="pass">Password</label></dt>
				<dd class="text"><input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" class="input-text" /></dd>

				<dt><label>Gender</label></dt>
				<dd>
					<label for="gender_male"><input type="radio" class="option" name="gender" id="gender_male" value="male" />Male</label>
					<label for="gender_female"><input type="radio" class="option" name="gender" id="gender_female" value="female" />Female</label>
				</dd>

				<dt><label for="cont">Continent</label></dt>
				<dd>
					<select name="cont" id="cont">
						<option value="0"<?php if ($cont == 0) { echo ' selected="selected"'; } ?>>Please select...</option>
						<option value="1"<?php if ($cont == 1) { echo ' selected="selected"'; } ?>>Africa</option>
						<option value="2"<?php if ($cont == 2) { echo ' selected="selected"'; } ?>>America</option>
						<option value="3"<?php if ($cont == 3) { echo ' selected="selected"'; } ?>>Antarctica</option>
						<option value="4"<?php if ($cont == 4) { echo ' selected="selected"'; } ?>>Asia</option>
						<option value="5"<?php if ($cont == 5) { echo ' selected="selected"'; } ?>>Europe</option>
						<option value="6"<?php if ($cont == 6) { echo ' selected="selected"'; } ?>>Oceania</option>
					</select>
				</dd>

				<dt><label>Meals</label></dt>
				<dd>
					<label for="meal0"><input type="checkbox" class="option" name="meals[]" id="meal0" value="breakfast" />breakfast</label>
					<label for="meal1"><input type="checkbox" class="option" name="meals[]" id="meal1" value="lunch" />lunch</label>
					<label for="meal2"><input type="checkbox" class="option" name="meals[]" id="meal2" value="dinner" />dinner</label>
				</dd>

				<dt><label for="remark">Remark</label></dt>
				<dd class="text"><textarea name="remark" id="remark" rows="5" cols="40"><?php echo $remark; ?></textarea></dd>

				<dt class="full clearfix" id="lastrow">
					<input type="submit" id="btnSubmit" name="btnSubmit" value="Send" />
				</dt>

			</dl>

		</fieldset>

	</form>

	<div id="debug">

<?php

	/**
	 * Helper Functions
	 * ========================
	 */

		/**
		 * Dumps a variable
		 * @param mixed $var
		 * @return
		 */
		function dump($var) {
			echo '<pre>';
			var_dump($var);
			echo '</pre>';
		}


	/**
	 * Main Program Code
	 * ========================
	 */

		// dump $_GET
		dump($_GET);

?>

	</div>

</body>
</html>