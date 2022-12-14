<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
        <script>
            function fieldrequirement(x) {
                var required = document.getElementById("requirement");
                if (x.value == "") {
                    required.style.display = "block";
                } else {
                     required.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
        <section class="signup">
            <div class="background">
                <div class="cblock">
                    <form class="login-form" action="response.php" method="POST">
                        <h1>REGISTER</h1>
                        <div class="flex-input">
                            <label for="FNAME">FIRST NAME: </label>
                            <input type="text" id="FNAME" name="FNAME" pattern="[A-Za-z]*">
                        </div>
                        <div class="flex-input">
                            <label for="LNAME">LAST NAME: </label>
                            <input type="text" id="LNAME" name="LNAME" pattern="[A-Za-z]*">
                        </div>
                        <div class="flex-input">
                            <label for="USERNAME">USERNAME: </label>
                            <input type="text" id="USERNAME" name="USERNAME" required onblur="fieldrequirement(this);">
                            <p id="requirement" hidden>Required*</p><br>
                        </div>
                        <div class="flex-input">
                            <label for="PASSWORD">PASSWORD: </label>
                            <input type="password" id="PASSWORD" name="PASSWORD" required>
                        </div>
                        <div class="flex-input">
                            <label for="SEX">SEX: </label>
                            <select id="SEX" name="SEX">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div>
                            <textarea id="CONDITIONS" name="CONDITIONS" rows="10" cols="53">ANY SPECIAL CONDITIONS: </textarea><br><br>
                            <input type="submit" value="SUBMIT"><br>
                        </div>
                    </form>
                    <div>
                        <ul>
                            <li><a href="login.html">ALREADY A MEMBER?</a></li>
                            <li><a href="index.html">GO HOME</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>