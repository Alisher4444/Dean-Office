		<?php
			include 'dbconnect.php';
			$query = "SELECT *FROM chat2 WHERE id ORDER BY id DESC";
			$run = mysql_query($query);

			while($row=mysql_fetch_array($run)) :

		?>
		<div id="chat_data">

			<span style="color:green;"><?php echo $row['name']; ?></span> :
			<span style="color:brown;"><?php echo $row['msg']; ?></span>
			<span style="float:right;"><?php echo formatDate($row['time']); ?></span>

		</div>

		<?php

			endwhile;

		?>
