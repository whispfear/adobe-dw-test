<?php include_once("db.php"); ?>
<html>
    <head>
	<title>TODO Listing</title>
	<link rel="stylesheet" type="text/css" href="static/style.css"/>
    </head>
    <body>
	<div id="container">
	    <h1>A simple todo list</h1>
	    <hr/>
	    <p><i>This is a todo list.</i></p>
	    <table>
		<thead>
		    <tr>
			<th>Subject</th>
			<th>Note</th>
		    </tr>
		</thead>
		<tbody>
		    <?php foreach(todo_list() as $todo){ ?>
			<tr>
			    <td><?php echo $todo["subject"] ?></td>
			    <td><?php echo $todo["note"] ?></td>
			</tr>
		    <?php } ?>
		</tbody>
	    </table>
	</div>
    </body>
</html>
