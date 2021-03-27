<?php
$pageTitle = 'Store';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
];

include_once('header.php');
?>
<?php include_once('footer.php'); ?>

<div class="pic"><img src="img/store.png" alt=""></div>
<?php
include_once('end.php');