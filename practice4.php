<?php

$size = $_POST["size"];

echo "<table border=1><tr><td></td>";
for ($i = 1; $i <= $size; $i++) {
	echo "<td>$i</td>";
}
echo "</tr>";

for ($i = 1; $i <= $size; $i++) {
	echo "<tr><td>$i</td>";
    for ($j = 1; $j <= $size; $j++) {
        echo "<td>", $i * $j, "</td>";
    }
    echo "</tr>";
}

?>