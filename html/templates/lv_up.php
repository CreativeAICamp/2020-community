<?php
$pageTitle = 'Level_up';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => true],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
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
        for (let i = 0; i < features.length; i++) {
            const marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map,
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = 'promotion.php';
            });
        }
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8Too94E9gsDi-PwS8sb-NA7zbMc8uR5w&callback=initMap" async></script>
<?php
include_once('end.php');
