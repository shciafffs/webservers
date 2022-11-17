<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $raw=`./bme280`;
            $deserialized=json_decode($raw);

            $temp=$deserialized->temperature;
            $pressure=$deserialized->pressure;
            $altitude=$deserialized->altitude;
    ?>
    </head>
    <body>
        <p>The Ambient Temperature is: <?= $temp; ?></p><br>
        <p>The Ambient Pressure is: <?= $pressure; ?></p><br>
        <p>The Altitude is: <?= $altitude; ?></p><br>
    </body>
</html>