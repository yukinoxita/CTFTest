<html>
<head>
<title>修改密码</title>
<style>
h1
{
    text-align:center;
    font-size:50px;
}
input
{
    height:30px;
}
#exec
{
    font-size:40px;    
    text-align:center;
}
#reg
{
    text-align:center;    
    border:solid grey;
    margin:100px;    
    margin-left:500px;
    margin-right:500px;
}       
</style>
</head>
<body>
<h1>后台管理修改密码界面</h1>
<div id="reg">
<h2>丑陋的小框框</h2>
<form action="change.php" method="post" id="exec">
<input type="text" name="username" placeholder="用户名"><br>
<input type="password" name="password" placeholder="密码"><br>
<input type="submit" value="修改">
</form>
</div>
</body>
</html>
