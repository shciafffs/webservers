<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $state=htmlspecialchars($_POST['LED']);

            if ($state == 'ON') {
                shell_exec("gpio write 7 1");
            } elseif ($state == 'OFF') {
                shell_exec("gpio write 7 0");
            } elseif ($state == 'TOGGLE') {
                shell_exec("gpio toggle 7");
            } elseif ($state == 'BLINK') {
                shell_exec("gpio blink 7");
            }

    ?>
    </head>
    <body>
        <p>Your LED is: <?= echo $state; ?></p><br>
    </body>
</html>