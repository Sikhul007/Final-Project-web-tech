<!DOCTYPE html>
<html>
<head>
    <title>Tour guides</title>
    <link rel="stylesheet" href="../asset/tour guide.css"/>
       
</head>
<body>
    <form action="../../shihab/payment/payment.php" method="post"> 
        <table border="1" cellspacing="0">
            <tr class="colored-header"> 
                <td align="center" colspan="6">
                    <h1>Our tour guides</h1>
                </td>
            </tr>
            <tr>
                <?php
                include("../model/database.php");
                $sql = "SELECT name, email, gender, phone, picture FROM tour_guide";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<td valign='top'>";
                        echo "<input type='radio' name='selected_guide' value='" . $row["name"] . "'>";
                        echo "<b>Tour Guide: ". $row["name"]. "</b>";
                        echo "<ul>";
                        echo "<img src='../Asset/profile.png' width='100px'>";
                        echo "<h2>" . $row["name"] . "</h2>";
                        echo "<p>Email: " . $row["email"] . "</p>";
                        echo "<p>Gender: " . $row["gender"] . "</p>";
                        echo "<p>Phone: " . $row["phone"] . "</p>";
                        echo "</ul>";
                        echo "</td>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tr>
            <tr>
                <td align="center" colspan="6">
                    <input type="submit" value="Next">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
