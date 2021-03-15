<?php
$pageTitle = 'Map';
$menus = [
    ['title' => 'Home', 'url' => '#', 'active' => false],
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => '#', 'active' => false],
    ['title' => 'Store', 'url' => '#', 'active' => false],
];

include_once('header.php');
?>

<div class="h-100 position-relative">
    <iframe class="w-100 h-100 border-0" src="https://www.google.com/maps/@13.7270576,100.5316447,18z"></iframe>
    <div class="lv-up overlay">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">
                <h1>Level UP</h1>
                <div class="content d-flex flex-sm-row flex-column">
                    <div class="flex-fill d-flex flex-row column-left">
                        <div class="lv-from">
                            <img src="https://picsum.photos/100" class="mb-3 rounded-circle" />
                            <h4>Level: 1</h4>
                        </div>
                        <div class="separators">
                            <i class="fas fa-angle-right"></i>
                            <i class="fas fa-angle-right"></i>
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="lv-to">
                            <img src="https://picsum.photos/100" class="mb-3 rounded-circle" />
                            <h4>Level: 2</h4>
                        </div>
                    </div>
                    <div class="flex-fill column-right">
                        <h3>Promotion</h3>
                        <div class="promotion">Discount: 2%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
<?php
include_once('end.php');
