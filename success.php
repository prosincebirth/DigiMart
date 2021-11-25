<?php

if (isset($_GET['ukayra_id'])) {
    echo "UkayraID: " . $_GET['ukayra_id'] . "<br />";

    if (isset($_GET['paymongo_id'])) {
        echo "PaymongoID: " . $_GET['paymongo_id'] . "<br />";
    }

    if (isset($_GET['method'])) {
        echo "Method: " . $_GET['method'] . "<br />";
    }

    if (isset($_GET['message'])) {
        echo "Error Message: " . $_GET['message'];
    }
} else {
    echo "Success Page";
}

echo '<script>
    $(document).ready(function() {
        $("body").addClass("modal-open");
        $("#desposit_success").addClass("in").css({"display":"block", "padding-right":"6px"});

        setTimeout(function() {
            window.location.href = "user_wallet.php";
        }, 2500);        
    });
</script>';

// header("Location: user_wallet.php");
//echo "<a href='/digimart/user_wallet.php'>Back to main</a>";