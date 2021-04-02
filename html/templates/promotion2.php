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
<div class="promo">
    <div class="greenbar">
        <table id="menu_table" >
            <div class="menu_button">
                <div class="logo">
                    <img src="img/Seven_logo.png" alt="">
                </div>
                <div class="sakha">
                    <p>6-8 ซอยสุเทพ ถนนมหิดล ตำบลมหาเมฆ อำเภอเมือง เชียงใหม่ 10030</p>
                </div>
                <div class="coupon">
                    <h>1/5 coupons</h>
                </div>
                <div class="o">
                    <img src="img/Oishi.png" alt="">
                </div>
                <div class="text">
                    <a1 class="name">Oishi</a1>
                    <a2 class="discount">Discount 7 Bath/bottle</a2>
                    <a3 class="more">Any flavour</a3>
                </div>
                <div class="click">
                    <button class="btn btn-success">1 coupon</button>
                </div>
                <div class="banana">
                    <img src="img/Banana.png" alt="">
                </div>
                <div class="text2">
                    <b1 class="name2">Banana</b1>
                    <b2 class="discount2">Discount 11 Bath/piece</b2>
                </div>
                <div class="click2">
                    <button class="btn btn-success">1 coupon</button>
                </div>
                <div class="milk">
                    <img src="img/Milk_tea.png" alt="">
                </div>
                <div class="text3">
                    <c1 class="name3">Pasteurized Milk Tea</c1>
                    <c2 class="discount3">Discount 7 Bath/bottle</c2>
                    <c3 class="more3">Any flavour</c3>
                </div>
                <div class="click3">
                    <button class="btn btn-success">1 coupon</button>
                </div>
                <div class="san">
                    <img src="img/Sandwich.png" alt="">
                </div>
                <div class="text4">
                    <d1 class="name4">Sandwich Nutrition</d1>
                    <d2 class="discount4">Discount 8 Bath/piece</d2>
                </div>
                <div class="click4">
                    <button class="btn btn-success">1 coupon</button>
                </div>
                <div class="dum">
                    <img src="img/Dump_pings.png" alt="">
                </div>
                <div class="text5">
                    <e1 class="name5">Dumplings</e1>
                    <e2 class="discount5">Discount 6 Bath/2 pieces</e2>
                </div>
                <div class="click5">
                    <button class="btn btn-success">1 coupon</button>
                </div>
                 
            </div>
        </table>
    </div>
</div>
<div class= "BG">
    <div class="h-100 position-relative">
        <div id="map" class="h-100"></div>
    </div>
</div>
<?php include_once('footer.php'); ?>

<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 7.950797, 
                lng: 98.28318424
            },
            zoom: 19,
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
        }
        const items = [
            {
                position: new google.maps.LatLng(13.7276956, 100.5323386),
                type: "item1",
            },
            {
                position: new google.maps.LatLng(13.7274836, 100.5324386),
                type: "item2",
            },
        ];

        for (let i = 0; i < items.length; i++) {
            const marker = new google.maps.Marker({
                position: items[i].position,
                icon: "img/item_icon.png",
                map: map,
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = 'catch.php';
            });
        }

        const monsters = [
            {
                position: new google.maps.LatLng(13.7276356, 100.5325586),
                type: "monster1",
            },
        ];

        for (let i = 0; i < monsters.length; i++) {
            const marker = new google.maps.Marker({
                position: monsters[i].position,
                icon: "img/monster_icon.png",
                map: map,
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = 'catch.php';
            });
        }
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8Too94E9gsDi-PwS8sb-NA7zbMc8uR5w&callback=initMap" async></script>
<?php
include_once('end.php');
