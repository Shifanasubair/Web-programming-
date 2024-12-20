<?php
$players = ["Virat Kohli", "Rohit Sharma", "MS Dhoni", "Rahul Dravid", "Hardik Pandya"];
?>

<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>

    <h2>List of Indian Cricket Players</h2>

    <table border="1">
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>

</body>
</html>

