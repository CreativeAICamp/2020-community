<?php
$pageTitle = 'detail';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => true],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
    ['title' => 'Pie', 'url' => 'pie.php', 'active' => false],
];

include_once('header.php');
?>

<div class="pic"><img src="img/character_detail.png" alt="" width="100%"></div>

<?php include_once('footer.php'); ?>
<?php
include_once('end.php');