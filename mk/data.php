<?php
$lines = file('ancor.txt'); //here's the filename
$counter = 1;
foreach ($lines as $line) {
list($a,$b,$c) = explode('|', $line);
print "<tr>
<td style='display:none;'>$a</td>
<td>$b</td>
<td>$c</td>
<td><a href='delete.php?u=$line'><button class='btn btn-danger btn-xs'>Delete</button></a></td>
</tr>";
$counter++;
}
?>