<?php
$pageTitle = 'Map';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
];

include_once('header.php');
?>
    <div class="mas">
        <img src="img/Mascot_Lop.png" alt="">
    </div>
    <div class="yel">
        <button target="_blank">?</button>
    </div>
    <div class="grey">
        <button target="_blank"></button>
    </div>
    <div class="need">
        <button target="_blank"></button>
    </div>
    <div class="want">
        <button target="_blank"></button>
    </div>
    <div class="feed">
        <button target="_blank">feed</button>
    </div>
    <div class="Success">
        <h1>Phra Prang Sam Yot</h1>
        <p>Successed : 50%</p>
    </div>
    <div class="row">
        <div class="column">
            <img src="img/Star.png" alt="">
        </div>
        <div class="column">
            <img src="img/Star.png" alt="">
        </div>
        <div class="column">
            <img src="img/Star.png" alt="">
        </div>
        <div class="column">
            <img src="img/Star.png" alt="">
        </div>
        <div class="column">
            <img src="img/Star.png" alt="">
        </div>
    </div>
    <img src="img/Rectangle_success white tab.png" alt="">
    <img src="img/Rectangle_success green tab.png" alt="">
    <div class="Tab_1">
        <img src="img/mango-with-sticky-rice.png" alt="">
        <p>x5</p>
        <img src="img/Thai dessert.png" alt="">
        <p>x5</p>
    </div>
    <div class="Tab_2">
            <img src="img/mango-with-sticky-rice.png" alt="">
            <p>x10</p>
            <img src="img/Thai dessert_black.white.png" alt="">
            <p>x0</p>
        </div>
    </div>
    <?php include_once('footer.php'); ?>

<?php
include_once('end.php');