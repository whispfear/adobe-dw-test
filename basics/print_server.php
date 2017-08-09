<html>
    <head>
	<title>Server Information</title>
    </head>
    <body>
	<table>
	    <thead>
		<tr>
		    <th>Key</th>
		    <th>Value</th>
		</tr>
	    </thead>
	    <tbody>
		<?php foreach($_SERVER as $k => $v){ ?>
		    <tr>
			<td><?php echo $k ?></td>
			<td><?php echo $v ?></td>
		    </tr>
		<?php } ?>
	    </tbody>
	</table>
    </body>
</html>
