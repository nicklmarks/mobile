<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Olé's - Login</title>
<style type="text/css">
#login form fieldset {
	font-family: Cambria;
	font-size: 16px;
	padding: 10px;
	width: 500px;
	margin-top: 45px;
	margin-right: auto;
	margin-left: auto;
	border: 3px solid #000;
}
#login form fieldset p legend {
	font-size: 22px;
	color: #000;
}
</style>
</head>

<body>
<form id="login form" name="login form" method="post" action="">
 <fieldset>
 <p>
    <label for="email"></label>
    <legend>Login:</legend>
 </p>
 <p>
  <input type="text" name="email" id="email" placeholder="Email" />
 </p>
  <p>
    <label for="password"></label>
    <input type="text" name="password" id="password" placeholder="Password" />
  </p>
  <p>
    <input type="submit" name="login" id="login" value="Login" />
  </p>
 </fieldset>
</form>
</body>
</html>