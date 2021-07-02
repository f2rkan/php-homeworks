<html>
<center>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
<?php

for($satir = 1; $satir <= 8 ; $satir++)
{
    echo "<center>";
	echo "<tr>";
	for($sutun = 1; $sutun <= 8; $sutun++)
	{
		$total = $satir + $sutun;
		if($total % 2 == 0)
		{
			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td height=35px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
?>
</table>
</html>