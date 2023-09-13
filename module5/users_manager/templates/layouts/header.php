<?php
if (!defined('_INCODE')) die('Acess deined...');
if (!isLogin()) {
    redirect('?module=auth&action=login');
}
?>
<html>

<head>
    <title>Quản lý người dùng</title>
    <meta charset='utf-8' />
    <link type="text/css" rel='stylesheet' href="<?php echo _WEB_HOST_TEMPLATE ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link type="text/css" rel='stylesheet' href="<?php echo _WEB_HOST_TEMPLATE ?>/css/fontawesome.min.css" />
    <link type="text/css" rel='stylesheet' href="<?php echo _WEB_HOST_TEMPLATE ?>/css/style.css" />
</head>

<body>
    <header>
        <div class="container content">
            <nav class="navbar navbar-expand-xxl navbar-light bg-light">
                <a class="navbar-brand " href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navar-wrap align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <div class="nav-item dropdown info">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Name</a>
                                <a class="dropdown-item" href="<?php echo _WEB_HOST_ROOT.'?module=auth&action=logout'; ?>">logout</a>
                            </div>
                        <div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>