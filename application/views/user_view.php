<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Test</title>
</head>

<body>
    <table>
        <tr>
            <th>User NO.</th>
            <th>Username</th>
            <th>Company</th>
        </tr>
        <?php
        foreach ($userArray as $key => $value) {
            echo "<tr>
            <td>" . $value->id . "</td>
            <td>" . $value->username . "</td>
            <td>" . $value->company . "</td>
            </tr>";
        }
        ?>
</body>

</html>
<?php
?>