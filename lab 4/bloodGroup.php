<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if blood group is selected
    if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
        $bloodGroup = $_POST['blood_group'];
        echo "Thank you! You have selected: " . htmlspecialchars($bloodGroup);
    } else {
        echo "Error: Please select a blood group.";
    }
}
?>