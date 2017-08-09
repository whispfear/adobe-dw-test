<?php include("functions.php"); ?>
<html>
    <head>
	<title>Factorial</title>
    </head>
    <body>
	<h1>Factorial</h1>
	<hr/>
	<form method="post" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
	    <label>Enter a number ?
		<input type="number" name="number" value='<?php echo $_POST["number"]; ?>'/>
	    </label>
	    <br/>
	    <input type="submit" name="submit" value="Calculate"/>
	</form>
	<?php if($_POST["submit"]){ ?>
	    <table>
		<thead>
		    <tr><th>Number</th>
			<th>Factorial</th></tr>
		</thead>
		<tbody>
		    <?php
		    for($i = 1; $i <= $_POST["number"]; $i++){
		    ?>
			<tr><td><?php echo $i; ?></td>
			    <td><?php echo factorial($i); ?></td>
			</tr>
		    <?php } ?>
		</tbody>
	    </table>
	<?php } ?>
    </body>
</html>
