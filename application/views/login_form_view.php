<html>
<head>
<title>Login | LOOKING</title>
</head>

<body>
<form action="login" method="POST">
<?php echo $model -> labels['username']; ?>
<input type="text" name="username">
<?php echo $model -> labels['password']; ?>
<input type="password" name="password">

<input type="submit" name="submit" value="LOGIN">
</form>

</body>
</html>