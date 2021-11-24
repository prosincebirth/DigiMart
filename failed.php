<?php

if (isset($_GET['ukayra_id'])) {
    echo "UkayraID: " . $_GET['ukayra_id'] . "<br />";

    if (isset($_GET['method'])) {
        echo "Method: " . $_GET['method'] . "<br />";
    }

    if (isset($_GET['message'])) {
        echo "Error Message: " . $_GET['message'];
    }
} else {
    echo "Failed Page";
}

header("Location: user_wallet.php");
//echo "<a href='/digimart/user_wallet.php'>Back to main</a>";
