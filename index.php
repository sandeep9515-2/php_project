<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
           background-color:cyan;
           display:block;
           height:20vh;
           font-size:10px;
        }
    </style>
</head>
<body>
   <form action="includes/formhandler.php" method="POST">
    <label for="username">USERNAME:</label>
    <input type=text id="username" name="username" placeholder="xxxx" />
    <br>
    <label for="password">PASSWORD:</label>
    <input type=text id="password" name="password" placeholder="yyyy" /> 
    <br>
    <input style="justify-content:center;" type="submit" value="submit"/>
  </form>
</body>
</html>