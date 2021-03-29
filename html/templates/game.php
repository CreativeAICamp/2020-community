<?php
$pageTitle = 'Game';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => true],
    ['title' => 'Pie', 'url' => 'pie.php', 'active' => false],
];
include_once('header.php');
?>
<div class="pic"><a href="lv_up.php"><img src="img/game.jpg" alt="" width="100%"></a></div>

<?php include_once('footer.php'); ?>

<?php
include_once('end.php');