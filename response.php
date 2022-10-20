<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $server="localhost";
            $username="alessio";
            $password="Password01";
            $database="userinfo";
            $conn=mysqli_connect($server, $username, $password, $database);

            $fname=htmlspecialchars($_POST['FNAME']);
            $lname=htmlspecialchars($_POST['LNAME']);
            $username=htmlspecialchars($_POST['USERNAME']);
            $password=htmlspecialchars($_POST['PASSWORD']);
            $sex=htmlspecialchars($_POST['SEX']);
            $conditions=htmlspecialchars($_POST['CONDITIONS']);


            $sql="INSERT INTO users (FNAME, LNAME, SEX, USERNAME, PASSWORD, CONDITIONS) values('$fname', '$lname', $sex, '$username', '$password', '$conditions');";
            $result=mysqli_query($conn, $sql);
            if ($result)
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
    ?>
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