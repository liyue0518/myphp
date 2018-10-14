<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="server.php" method="post">
        用户名：<input type="text" name="username"><br/>
        密码：<input type="password" name="pwd"><br/>
        性别：<input type="radio" name="sex" value="m">男
        <input type="radio" name="sex" value="f">女 <br>
        爱好: <input type="checkbox" name="hobby[]" value="篮球">篮球
        <input type="checkbox" name="hobby[]" value="足球">足球
        <input type="checkbox" name="hobby[]" value="排球">排球
                <select name="school">
                    <option value="林大">林大</option>
                    <option>黑大</option>
                    <option>农大</option>
                    <option>理工</option>
                </select>
        <input type="submit" value="登陆">
    </form>
</body>
</html>