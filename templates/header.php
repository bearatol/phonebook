<?php
global $router;
$url = $router->getURI();
//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Phonebook</title>

    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="/templates/images/favicon.ico" type="image/x-icon">

    <!-- style -->
    <link rel="stylesheet" href="/templates/style/bootstrap.min.css">
    <link rel="stylesheet" href="/templates/style/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/templates/style/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/templates/style/style.css?<?= time() ?>">

    <!-- script -->
    <script src="/templates/script/jquery-3.5.1.min.js"></script>
    <script src="/templates/script/jquery.mask.min.js"></script>
    <script src="/templates/script/bootstrap.min.js"></script>
    <script src="/templates/script/bootstrap.bundle.min.js"></script>
    <script src="/templates/script/script.js?<?= time() ?>"></script>

    <!-- other -->

</head>

<body>
<div class="all_content">
    <div class="content_with_header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><i>Phonebook</i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="/create-number/" class="nav-link <?=$url === 'create-number' ? 'active' : ''?>">
                                Add new number
                            </a>
                        </li>
                    </ul>
                    <form method="GET" action="/">
                        <div class="form-row">
                            <div class="col-10">
                                <input type="text" class="form-control" placeholder="Search text" required name="SEARCH_TEXT" value="">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content container">