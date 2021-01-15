<?php
	foreach($records as $record){
		echo "<p>".$record->username."<a href='user/delete/$record->id'>X</a><a href='user/edit/$record->id'>EDIT</a></p>";
	}
?>
<form method="post" action="user/create">
<p>Username <input type="text" name="username"></p>
<p>Password <input type="text" name="password"></p>
<p><input type="submit" name="submit" value="submit"></p>
</form>
