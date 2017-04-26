<html>
<head>
<title>Member | LOOKING</title>
</head>
<body>
<h1>login berhasil!<h1>
<h2>Hai, <?php echo $this -> session -> userdata("nama");?></h2>
<a href="<?php echo base_url('login_member/login'); ?>">Logout</a>
</body>
</html>