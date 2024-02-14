<form method="POST">
	<input type="text" name="search">
	<button type="submit">Send</button>
</form>

<?php
	if(isset($_POST["search"])) {
		echo strip_tags($_POST["search"]);
	}
?>