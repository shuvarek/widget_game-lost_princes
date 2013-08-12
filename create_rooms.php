

<table frame="border" cellpadding="0" cellspacing="0">
<!-- should be changed just to <table class=...> in the future -->
<?php
$width =9;
for( $i = 0; $i < $width; $i++)
{
	echo '<tr>';
	for( $j = 0; $j < $width; $j++)
	{
		echo "<td id='room_${j}_$i'>><img src='pic/empty_room_16x16.png'></td>";
	}
	echo "</tr>\n";
}
?>

</table>
