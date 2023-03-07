<?php
include("../../connect.php");
$result = $conn->query("SELECT * FROM absensi where nisn='$_SESSION[nisn]'");
while ($data = $result->fetch_assoc()) {
    echo "<tr>";

    echo "<td>" . $data['tanggal'] . "</td>";
    echo "<td>" . $data['masuk'] . "</td>";
    echo "<td>" . $data['keluar'] . "</td>";
    echo "<td>  -- </td>";

    echo "</tr>";
}



?>