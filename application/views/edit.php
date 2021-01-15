<form method="post" action="<?php echo site_url("user/update/".$records[0]->id) ?>">
<p>Username <input type="text" name="username" value="<?= $records[0]->username ?>"></p>
<p>Password <input type="text" name="password" value="<?= $records[0]->password ?>"></p>
<p><input type="submit" name="submit" value="submit"></p>
</form>

