<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the checkbox is checked
    if (isset($_POST['human_check']) && $_POST['human_check'] == 'yes') {
        echo "Checkbox is checked. You are verified as a human!";
    } else {
        echo "Please check the box to verify that you are human.";
    }
} else {
    echo "Invalid request method.";
}
?>
