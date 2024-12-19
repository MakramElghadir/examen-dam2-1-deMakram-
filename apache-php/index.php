<?php
    echo "Eternal glory to the Omnissiah!";

    echo "<p>Current Date and Time: " . date("Y-m-d H:i:s") . "</p>";

    echo "<p>PHP Version: " . phpversion() . "</p>";

    echo "<p>Apache Version: " . apache_get_version() . "</p>";

    $server_ip = $_SERVER['SERVER_ADDR'];
    echo "<p>Server IP: " . $server_ip . "</p>";

    $client_ip = $_SERVER['REMOTE_ADDR'];
    echo "<p>Client IP: " . $client_ip . "</p>";
    ?>
?>
