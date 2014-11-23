<?php
if ($_GET['randomId'] != "ZUdjYWoautEVm7Y_xeeqg0Efahf1eApJW_60VVwc2jrwXWN9HwYtt8XruaylC8S8") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
