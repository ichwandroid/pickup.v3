<?php
require_once "config.php";

$sql = "SELECT * FROM tbl_scan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>NIS</th>";
    echo "<th>Status</th>";
    echo "<th>Timestamp</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["NIS"] . "</td>";
        echo "<td>" . $row["STATUS"] . "</td>";
        echo "<td>" . $row["TIMESCAN"] . "</td>";
        echo "<td>";
        echo "<a href='#' class='btn btn-info' data-toggle='modal' data-target='#edit-modal' onclick='editRecord(" . $row["NIS"] . ")'>Edit</a>";
        echo "<a href='#' class='btn btn-danger' onclick='deleteRecord(" . $row["NIS"] . ")'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No records found</p>";
}

$conn->close();
?>