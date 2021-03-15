<?php
$pageTitle = 'Missions';
$menus = [
    ['title' => 'Home', 'url' => '#', 'active' => false],
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => true],
    ['title' => 'Characters', 'url' => '#', 'active' => false],
    ['title' => 'Store', 'url' => '#', 'active' => false],
];

include_once('header.php');
?>

<div class="container-fluid py-4">
    <div class="row">
        <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="col-12 col-xl-10 offset-xl-1 mb-3">
            <div class="card shadow-sm p-3">
                <div class="d-flex justify-content-between">
                    <div class="flex-grow-1 align-self-center d-flex flex-row align-items-center">
                        <img src="https://picsum.photos/150?_=<?= $i ?>" class="rounded" />
                        <div class="ml-4">
                            <h3>Elit est non</h3>
                            <div>
                                <?php for ($stars = 0; $stars < rand(3, 5); $stars++): ?>
                                <img src="images/star.png" alt="star">
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                    <div class="border-left px-3">
                        <h4>Commodo duis cupidatat</h4>
                        <div class="content mb-3">
                            <p class="m-0">Laboris fugiat</p>
                            <p class="m-0">minim ex quis fugiat</p>
                            <p class="m-0">ad commodo</p>
                        </div>
                        <button class="btn btn-success">Let's travel</button>
                    </div>
                    <div class="border-left px-3">
                        <h4>Deserunt aliquip</h4>
                        <div class="content mb-3">
                            <p class="m-0">Ullamco occaecat</p>
                            <p class="m-0">Sunt nostrud duis irure ad</p>
                            <p class="m-0">Adipisicing</p>
                        </div>
                        <button class="btn btn-success">Let's travel</button>
                    </div>
                    <div class="border-left px-3">
                        <h4>Elit fugiat exercitation</h4>
                        <div class="content mb-3">
                            <p class="m-0">Do est consectetur nisi</p>
                            <p class="m-0">Aliqua magna</p>
                            <p class="m-0">Nisi quis aute</p>
                        </div>
                        <button class="btn btn-success disabled">Success</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor ?>
    </div>
</div>

<?php include_once('footer.php'); ?>
<?php
include_once('end.php');
