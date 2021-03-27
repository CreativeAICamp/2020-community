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
<div class="h-100 position-relative">
    <div id="map" class="h-100"></div>
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
            zoom: 14,
        });
        const icons = {
            logo1: {
                icon: "img/Area_seven.png",
                icon: "img/Seven.png"
            },
            logo2: {
                icon: "img/Area_seven.png",
                icon: "img/Seven.png"
            },
            logo3: {
                icon: "img/Area_seven.png",
                icon: "img/Seven.png"
            },
            logo4: {
                icon: "img/Area_seven.png",
                icon: "img/Seven.png"
            },
            
        };
        const features = [
            {
                position: new google.maps.LatLng(7.950797, 98.28318424),
                type: "logo1",
            },
            {
                position: new google.maps.LatLng(16.439625, 102.828728),
                type: "logo2",
            },
            {
                position: new google.maps.LatLng(13.7276256, 100.5324386),
                type: "logo3",
            },
            {
                position: new google.maps.LatLng(18.743760777, 99.07700569),
                type: "logo4",
            },
        ];

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
