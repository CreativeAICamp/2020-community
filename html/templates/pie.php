<?php
$pageTitle = 'Missions';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
    ['title' => 'Pie', 'url' => 'pie.php', 'active' => true],
];?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome5.min.css">
    <link rel="stylesheet" href="css/main.css">

    
  <link href="dist/css/vendor/normalize.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/main.css">
  <link href="dist/css/vendor/foundation.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="dist/css/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <script src="dist/js/vendor/modernizr.js"></script>
  <title><?= $pageTitle ?></title>
</head>
<body class="d-flex flex-column h-100" cz-shortcut-listen="true">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-main fixed-top">
            <div class="media d-flex">
                <img src="https://picsum.photos/60" class="mr-3 rounded-circle" />
                <div class="media-body align-self-center">
                    <h5 class="my-0">Name</h5>
                    <div>Level: 1</div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <?php foreach ($menus as $menu): ?>
                    <li class="nav-item <?= (isset($menu['active']) && $menu['active']) ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= isset($menu['url']) ? $menu['url'] : '#' ?>"><?= $menu['title'] ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="d-flex flex-grow-1">
        <div class="content flex-grow-1">
<body>
  <div class="row">
    <div class="large-12 columns">
      <h3>Graphs</h3>
    </div>
  </div>
  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-pie-id="pie">
        <li data-value="60">Water Buffalo (60)</li>
        <li data-value="20">Bison (20)</li>
        <li data-value="12">Sheep (12)</li>
        <li data-value="32" data-text="Goats {{percent}} ({{value}} total)">Goat (32)</li>
        <li data-value="50">Shetland Pony (50)</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="pie"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-pie-id="donut" data-options='{"donut":"true"}'>
        <li data-value="60">Water Buffalo (60)</li>
        <li data-value="20">Bison (20)</li>
        <li data-value="12">Sheep (12)</li>
        <li data-value="32">Goat (32)</li>
        <li data-value="50">Shetland Pony (50)</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="donut"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-bar-id="bar">
        <li data-value="200">Water Buffalo (300)</li>
        <li data-value="178">Bison (178)</li>
        <li data-value="12">Sheep (12)</li>
        <li data-value="32">Goat (32)</li>
        <li data-value="250">Shetland Pony (250)</li>
        <li data-value="99">Wild Ant (99)</li>
        <li data-value="78">Chameleon (78)</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="bar" style="height: 450px;"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-line-id="line">
        <li data-y="0" data-x="0">Water Buffalo</li>
        <li data-y="10" data-x="10">Bison</li>
        <li data-y="20" data-x="20">Bison</li>
        <li data-y="30" data-x="30">Bison</li>
        <li data-y="35" data-x="40">Bison</li>
        <li data-y="50" data-x="200">Bison</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="line" style="height: 450px;"></div>
    </div>
  </div>

  <br><br><br>

  <script src="dist/js/vendor/dependencies.js"></script>
  <script src="dist/js/pizza.js"></script>
  <script>
    $(window).load(function() {
      Pizza.init();
      $(document).foundation();
    });
  </script>
</body>
</html>