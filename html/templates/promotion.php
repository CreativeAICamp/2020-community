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
    <div id="map" class="h-100"></div>
<div class="promo">

    <table id="menu_table" >
          <div class="menu_button">
          <td class="greenbar">
            <div class="logo">
                <img src="img/Seven_logo.png" alt="">
            </div>
            <div class="sakha">
            <p>6-8 ถ. สาทรใต้ แขวง ทุ่งมหาเมฆ เขต สาทร กรุงเทพมหานคร 10120</p>
            </div>
            <div class="coupon">
            <h>1/5 coupons</h>
            </div>
            <div class="o">
                <img src="img/Oishi.png" alt="">
            </div>
            <div class="text">
                <a1 class="name">Oishi</a1>
                <a2 class="discount">Discount 5 Bath/bottle</a2>
                <a3 class="more">Any favour</a3>
            </div>
            <div class="click">
                <button>1 coupon</button>
            </div>
            <div class="banana">
                <img src="img/Banana.png" alt="">
            </div>
            <div class="text2">
                <b1 class="name2">Banana</b1>
                <b2 class="discount2">Discount 10 Bath/piece</b2>
            </div>
            <div class="click2">
                <button>1 coupon</button>
            </div>
            <div class="milk">
                <img src="img/Milk_tea.png" alt="">
            </div>
            <div class="text3">
                <c1 class="name3">Pasteurized Milk Tea</c1>
                <c2 class="discount3">Discount 5 Bath/bottle</c2>
                <c3 class="more3">Any favour</c3>
            </div>
            <div class="click3">
                <button>1 coupon</button>
            </div>
            <div class="san">
                <img src="img/Sandwich.png" alt="">
            </div>
            <div class="text4">
                <d1 class="name4">Sandwich Nutrition</d1>
                <d2 class="discount4">Discount 5 Bath/piece</d2>
            </div>
            <div class="click4">
                <button>1 coupon</button>
            </div>
            <div class="dum">
                <img src="img/Dump_pings.png" alt="">
            </div>
            <div class="text5">
                <e1 class="name5">Dump Plings</e1>
                <e2 class="discount5">Discount 5 Bath/2 pieces</e2>
            </div>
            <div class="click5">
                <button>1 coupon</button>
            </div>
          </td>
          </div>
      </table>
    <div class="po1">
        <img src="img/Area_seven.png" alt="">
    </div>
    <div class="s1">
        <a href="Catch.html" target="_blank"><img src="img/Seven.png" alt=""></a>
    </div>
        <div class="pink1">
            <img src="img/Rectangle_pink.png" alt="">
            <img src="img/Questionmark.png" alt="">
        </div>
         <div class="pink2">
             <img src="img/Rectangle_pink.png" alt="">
             <img src="img/Questionmark.png" alt="">
        </div>
        <div class="yellow">
            <img src="img/Rectangle_yellow.png" alt="">
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

    const icons = {
    parking: {
      icon:"https://www.compliancebuilding.com/wp-content/uploads/2018/01/7-eleven-brand-logo.png",
    },
    };
    const features = [
    {
      position: new google.maps.LatLng(13.7276244, 100.5324386),
    },
    ];
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async></script>
<?php
include_once('end.php');
