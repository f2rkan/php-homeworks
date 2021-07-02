<html>
<center>
<table align="center" border='1' width="100%">
<?php

$num = 10;

for($i = 1; $i <= 10; $i++)
{	
    echo "<tr>";
	
	for($j = 1; $j <= $num; $j++)
	{
		$carpim_tablosu = ($i * $j);
		echo "<td>$j  x $i = $carpim_tablosu </td>";
	}
	
	echo "<tr/>";
}
?>
</table>
</center>
</html>
