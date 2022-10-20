<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="style.css">
        <?php
            $server="localhost";
            $username="alessio";
            $password="Password01";
            $database="userinfo";
            $conn=mysqli_connect($server, $username, $password, $database);

            $sql="select USERNAME from users;";
            $result=mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <section>
            <div class="background">
                <div class="cblock">
                    <form>
                        <h1>LOGIN</h1>
                        <label for="USERNAME1">USERNAME: </label><br>
                        <input type="text" id="USERNAME1" name="USERNAME1"><br>
                        <label for="USERNAME">USERNAME: </label><br>
                        <select id="USERNAME" name="USERNAME">
                            <?php 
                                foreach($result as $row)
                                {
                                    echo"<option value='{$row['USERNAME']}'>{$row['USERNAME']}</option>\n";
                                }

                            mysqli_close($conn);
                            ?>
                        </select><br>
                        <label for="PASSWORD">PASSWORD: </label><br>
                        <input type="password" id="PASSWORD" name="PASSWORD"><br><br>
                        <input type="submit" value="SUBMIT"><br>
                    </form>
                </div>
                <div>
                    <ul>
                        <li><a href="signup.html">CREATE AN ACCOUNT</a></li>
                        <li><a href="index.html">GO HOME</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>