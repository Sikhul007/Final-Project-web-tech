<?php
    require_once('../model/db1.php');
    include ('../view/change_pass_v.php');
    include ("valid_pass.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change'])) {
        session_start();
        $userId = $_SESSION['userId'];
        $currentPassword = $_POST['current_password'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];
       $userId= $_SESSION['userId'];

        

        if ($newPassword != $confirmPassword) {
            echo "<p>New password and confirm password do not match.</p>";
        } else {

            $sql = "SELECT * FROM service_provider WHERE id = '$userId' && password = '$currentPassword'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
            
                $updateSql = "UPDATE profile SET password = '$newPassword' WHERE id = $userId";
                if ($conn->query($updateSql) === TRUE) {
                    echo "<p>Password updated successfully.</p>";
                } else {
                    echo "<p>Error updating password: " . $conn->error . "</p>";
                }
            } else {
                echo "<p>Incorrect current password.</p>";
            }
        }
    }

    $conn->close();
    ?>

