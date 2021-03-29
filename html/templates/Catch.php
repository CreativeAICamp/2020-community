<?php
$pageTitle = 'Map';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
    ['title' => 'Pie', 'url' => 'pie.php', 'active' => false],
];

include_once('header.php');
?>
    <div class="success">
    <div class="textHeight">
        <h5 class="my-0">Phra Prang Sam Yot</h5>
        <p class="my-0">Successed : 50%</p>
    </div>
    <div>
    <tr>
        <td>
            <img src="img/Star.png">
        </td>
        <td>
            <img src="img/Star.png">
        </td>
        <td>
            <img src="img/Star.png">
        </td>
        <td>
            <img src="img/Star.png">
        </td>
        <td>
            <img src="img/Star.png">
        </td>    
    </tr>
    </div>
</div>

<div class="question">
    <h3>?</h3>
</div>

<div class="whiteBox">
    <div class="l">
        <h4 class="my-0">Selected :</h4>
    </div>
    <div class="l">
        <button><img src="img/mango-with-sticky-rice.png"></botton>
    </div>
    <div class="l">
        <p class="my-0">x0</p>
    </div>
    <div class="l">
        <img src="img/Thai dessert_black.white.png">
    </div>
    <div class="l">
        <p class="my-0">x0</p>
    </div>
</div>

<div class="whiteBox2">
    <div class="feed">
        <div class="flipV">
            <a href="success.php"><h3 class="my-0">Feed</h3></a>
        </div>
    </div>
    <div class="l">
        <button><img src="img/mango-with-sticky-rice.png"></botton>
    </div>
    <div class="l">
        <p class="my-0">x0</p>
    </div>
    <div class="l">
        <img src="img/Thai dessert_black.white.png">
    </div>
    <div class="l">
        <p class="my-0">x0</p>
    </div>
</div>
    <?php include_once('video.php'); ?>
    <?php include_once('footer.php'); ?>

<?php
include_once('end.php');