<?php

function tsdrpg_stat_block ( $str, $dex, $con, $int, $wis, $cha ) 
{
	$html = '<table class="tsdrpg-stat-block"><thead><tr>
		<th>Str</th>
		<th>Dex</th>
		<th>Con</th>
		<th>Int</th>
		<th>Wis</th>
		<th>Cha</th>
		</tr></thead>
		</thead>
		<tr><td>'
		. $str 
		. '</td><td>'
		. $dex
		. '</td><td>'
		. $con 
		. '</td><td>'
		. $int
		. '</td><td>'
		. $wis
		. '</td><td>'
		. $cha
		. '</td></tr></table>';
	return $html;
} 
