<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>
    <div id="bg">
     
        <div class="moduleL">   
          <form class="form" method="post" action="../../controller/cscontroller.php">
            <input type="text" name="email" placeholder="Email Address" class="textbox" required/>
            <input type="password" name="password" placeholder="Password" class="textbox" required/>
            <input type="submit" value="submit" class="button" />
          </form>
          <a href="../../index.php"><button class="cancel">Cancel</button></a>
        </div>
      </div>
</body>
</html>