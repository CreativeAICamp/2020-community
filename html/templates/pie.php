<?php
$pageTitle = 'Missions';
$menus = [
    ['title' => 'Map', 'url' => 'map.php', 'active' => false],
    ['title' => 'Missions', 'url' => 'missions.php', 'active' => false],
    ['title' => 'Characters', 'url' => 'character.php', 'active' => false],
    ['title' => 'Store', 'url' => 'store.php', 'active' => false],
    ['title' => 'Fighting', 'url' => 'game.php', 'active' => false],
    ['title' => 'Pie', 'url' => 'pie.php', 'active' => true],
  ];
$cluster01= 20;
$cluster02= 20;
$cluster03= 20;
$cluster04= 20;
$cluster05= 20;
?>
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

    
  <link href="pizzachart/css/vendor/normalize.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/main.css">
  <link href="pizzachart/css/vendor/foundation.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="pizzachart/css/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <script src="pizzachart/js/vendor/modernizr.js"></script>
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

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-pie-id="pie">
        <li data-value="<?php echo $cluster01; ?>">cluster01</li>
        <li data-value="<?php echo $cluster02; ?>">cluster02</li>
        <li data-value="<?php echo $cluster03; ?>">cluster03</li>
        <li data-value="<?php echo $cluster04; ?>">cluster04</li>
        <li data-value="<?php echo $cluster05; ?>">cluster05</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="pie"></div>
    </div>
  </div>
  <br><br><br>

  <script src="pizzachart/js/vendor/dependencies.js"></script>
  <script src="pizzachart/js/pizza.js"></script>
  <script>
    $(window).load(function() {
      Pizza.init();
      $(document).foundation();
    });
  </script>


<?php include_once('footer.php'); ?>
<?php
include_once('end.php');