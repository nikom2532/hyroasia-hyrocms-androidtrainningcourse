<?php
$tempL = ($post_id*200)-130;
$tempR = ($post_id*200)-270;

echo<<<HTMLBLOCK
<style>
#posts_L_
HTMLBLOCK;

the_ID();

echo<<<HTMLBLOCK
{
	position:relative;
	top: {$tempL}px;
	width: 35%;
	max-width: 35%;
	left: -20px;
	z-index: 2;
}

#posts_R_
HTMLBLOCK;
the_ID();
echo<<<HTMLBLOCK
{
	position:relative;
	top: {$tempR}px;
	width: 350px;
	max-width: 350px;
	left: 220px;
	z-index: 2;
}
</style>
HTMLBLOCK;

?>