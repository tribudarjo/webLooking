<html>
<head>
<title>Login Member | LOOKING</title>
</head>
<body>
<h1>Login Member | LOOKING</h1>
<form action="<?php echo site_url('login_member/act_login'); ?>" method="post">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>