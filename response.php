<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <p>Your First Name is: <?= htmlspecialchars($_POST['FNAME']) ?></p><br>
        <p>Your Last Name is: <?= htmlspecialchars($_POST['LNAME']) ?></p><br>
        <p>Your UserName is: <?= htmlspecialchars($_POST['USERNAME']) ?></p><br>
        <p>Your Password is: <?= htmlspecialchars($_POST['PASSWORD']) ?></p><br>
        <p>Your Gender is: <?= htmlspecialchars($_POST['SEX']) ?></p><br>
        <p>Your Conditions are: <?= htmlspecialchars($_POST['CONDITIONS']) ?></p><br>
    </body>
</html>