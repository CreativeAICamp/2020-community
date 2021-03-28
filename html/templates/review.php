<?php
$pageTitle = 'Review';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => true],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
];

include_once('header.php');
?>
<div class="pic"><img src="img/comment.png" alt="" width="100%"></div>
<?php include_once('footer.php'); ?>

<?php
include_once('end.php');