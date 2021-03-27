<?php
$pageTitle = 'Map';
$menus = [
    ['title' => 'Home', 'url' => '#', 'active' => false],
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
  
];

include_once('header.php');
?>

<div class="h-100 position-relative">
    <div id="map" class="h-100"></div>
    <div class="lv-up overlay">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">
                <h1>Level UP</h1>
                <div class="content d-flex flex-sm-row flex-column">
                    <div class="flex-fill d-flex flex-row column-left">
                        <div class="lv-from">
                            <img src="https://picsum.photos/100?_=1" class="mb-3 rounded-circle" />
                            <h4>Level: 1</h4>
                        </div>
                        <div class="separators">
                            <i class="fas fa-angle-right"></i>
                            <i class="fas fa-angle-right"></i>
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="lv-to">
                            <img src="https://picsum.photos/100?_=2" class="mb-3 rounded-circle" />
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
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 13.7276256,
                lng: 100.5324386
            },
            zoom: 19,
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async></script>
<?php
include_once('end.php');
