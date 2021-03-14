<?php
$pageTitle = !isset($pageTitle) ? 'Untitled' : $pageTitle;
$menus = !isset($menus) ? [] : $menus;
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome5.min.css">
    <link rel="stylesheet" href="css/main.css">

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
