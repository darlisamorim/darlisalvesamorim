<?php
require 'source/controller.php';
?><!DOCTYPE html>
<html lang="<?= DAA_LOCALE; ?>" itemscope itemtype="<?= DAA_SCHEMA; ?>" prefix="og: <?= DAA_SCHEMA_OPEN_GRAPH; ?>">
<!-- Set your country language and website schema -->

<head>
    <meta charset="<?= DAA_CHARSET; ?>"/> <!-- Unicode default( UTF-8 )  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Default vieweport responsive design -->
    <title><?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?></title> <!-- Website Title -->

    <!-- Defaults Metas -->
    <meta name="description" content="<?= DAA_DESCRIPTION; ?>"/> <!-- Website Description -->
    <meta name="robots" content="index, follow"/> <!-- Allow browsers to index -->
    <meta name="google-site-verification" content="<?= DAA_GOOGLE_VERI; ?>"/> <!-- Tag Google -->

    <!-- Defaults Links -->
    <link rel="base" href="<?= DOMAIN; ?>"/> <!-- Website Url -->
    <link rel="canonical" href="<?= DOMAIN; ?>"/> <!-- Website Url -->
    <link rel="alternate" type="application/rss+xml" href="<?= DOMAIN; ?>/rss.php"/> <!-- RSS Url -->
    <link rel="sitemap" type="application/xml" href="<?= DOMAIN; ?>/sitemap.php"/> <!-- Sitemap Url -->
    <link rel="author" href="<?= DAA_LINKEDIN; ?>"/>
    <!-- Personal profile of the author of the site ( Example Facebook profile )  -->
    <link rel="publisher" href="<?= DAA_LINKEDIN; ?>"/>
    <!-- Personal website page (Example website page on Facebook) -->

    <?php require 'source/seo.php'; ?>
    <!-- All Metas( Itemprop and Property ( Og:, Article:, Twitter: ) ) -->

    <link rel="shortcut icon" href="<?= DOMAIN; ?>/_storage/images/<?= DAA_IMAGE_FAVICON; ?>"/> <!-- Imagem Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=<?= DAA_FONT_NAME; ?>:wght@<?= DAA_FONT_WEIGHT; ?>&display=swap"
          rel="stylesheet"> <!-- Importing font from google -->

    <!-- All Styles -->
    <link rel="stylesheet" href="_storage/css/components/cssoo.css"> <!-- Defines CSS -->
    <link rel="stylesheet" href="_storage/css/components/normalize.css">
    <!-- Reset CSS -> https://necolas.github.io/normalize.css/ -->
    <link rel="stylesheet" href="_storage/css/components/reset.css"> <!-- Reset CSS -->

    <link rel="stylesheet" href="_storage/css/components/boxicons.css"> <!-- Boxicons -> https://boxicons.com/ -->
    <link rel="stylesheet" href="_storage/css/components/fontawesome.css">
    <!-- Fontawesome -> https://fontawesome.com/icons -->
    <link rel="stylesheet" href="_storage/css/components/line-awesome.css">
    <!-- Line-Awesome -> https://icons8.com/line-awesome -->

    <link rel="stylesheet" href="_storage/css/components/iconscout.css">
    <!-- Iconscout -> https://iconscout.com/ *Pending -->
    <link rel="stylesheet" href="_storage/css/components/icomoon.css"> <!-- Icomoon -> https://icomoon.io/ *Pending -->

    <link rel="stylesheet" href="_storage/css/folds/header.css">
    <link rel="stylesheet" href="_storage/css/folds/main.css">
    <link rel="stylesheet" href="_storage/css/folds/footer.css">

    <link rel="stylesheet" href="_storage/css/components/queries.css"> <!-- Media Queries -->
    <link rel="stylesheet" href="_storage/css/components/animate.css"> <!-- Animete Style -->

    <!--[if lt IE 9]>
      <script src="<?= DOMAIN; ?>/_storage/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<header class="header container">
    <div class="content">
        <h1 class="fz"><?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?></h1>

        <nav class="header__menu">
            <h3 class="fz">Navegação | <?= DAA_NAME; ?></h3>
            <ul>
                <li><a title="Meu nome é | <?= DAA_NAME; ?>" href="">Olá</a></li>
                <li><a title="<?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?>" href="">Sobre Mim</a></li>
                <li><a title="Portfólios | <?= DAA_NAME; ?>" href="">Portfólios</a></li>
                <li><a title="Open Source | <?= DAA_NAME; ?>" href="">Open Source</a></li>
                <li><a title="Fale comigo | <?= DAA_NAME; ?>" href="">Fale Comigo</a></li>
            </ul>
            <ul>
                <li>Mode</li>
                <li>
                    <i class='bx bxs-sun'></i>
                </li>
                <li>
                    <i class='bx bxs-moon'></i>
                </li>
                <li>
                    <i class='bx bx-menu'></i>
                    <i class='bx bx-menu-alt-right'></i>
                </li>
            </ul>
        </nav>
        <!-- Fim Menu -->

        <div class="header__bio">
            <figure class="avatar">
                <img src="<?= DOMAIN; ?>/_storage/images/avatar.jpg" title="<?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?>"
                     alt="<?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?>">
            </figure>

            <article class="infos">
                <header class="header__article">
                    <h1><span class="fz">Informações | </span><?= DAA_NAME; ?></h1>
                    <p>Developer & Design.</p>
                </header>
                <dl>
                    <dt>Idade:</dt>
                    <dd><?= DAA_AGE; ?></dd>
                    <dt class="fz">Telefone:</dt>
                    <dd class="fz"><?= DAA_PHONE; ?></dd>
                    <dt>E-mail:</dt>
                    <dd><a title="E-mail | <?= DAA_NAME; ?>" href="mailto:<?= DAA_EMAIL; ?>"><?= DAA_EMAIL; ?></a></dd>
                    <dt>Endereço:</dt>
                    <dd><?= DAA_COUNTRY; ?>, <?= DAA_CITY; ?>/<?= DAA_UF; ?> - <?= DAA_ADDR; ?></dd>
                </dl>
                <ul>
                    <li><a title="Links | <?= DAA_NAME; ?>" href="<?= DAA_LINKS; ?>" target="_blank"><i
                                    class='bx bxs-share-alt'></i></a></li>
                    <li><a title="Linkedin | <?= DAA_NAME; ?>" href="<?= DAA_LINKEDIN; ?>" target="_blank"><i
                                    class='bx bxl-linkedin-square'></i></a></li>
                    <li><a title="GitHub | <?= DAA_NAME; ?>" href="https://www.github.com/<?= DAA_GITHUB; ?>"
                           target="_blank"><i class='bx bxl-github'></i></a></li>
                    <li><a title="CodePen | <?= DAA_NAME; ?>" href="https://codepen.io/<?= DAA_CODEPEN; ?>"
                           target="_blank"><i class='bx bxl-codepen'></i></a></li>
                    <li><a title="Dev.To | <?= DAA_NAME; ?>" href="https://dev.to/<?= DAA_DEVTO; ?>" target="_blank"><i
                                    class='bx bxl-dev-to'></i></a></li>
                    <li><a title="Medium | <?= DAA_NAME; ?>" href="https://medium.com/<?= DAA_MEDIUM; ?>"
                           target="_blank"><i class='bx bxl-medium-square'></i></a></li>
                    <li><a title="Dribbble | <?= DAA_NAME; ?>" href="https://dribbble.com/<?= DAA_DRIBBBLE; ?>"
                           target="_blank"><i class='bx bxl-dribbble'></i></a></li>
                    <li><a title="Behance | <?= DAA_NAME; ?>" href="https://www.behance.net/<?= DAA_BEHANCE; ?>"
                           target="_blank"><i class='bx bxl-behance'></i></a></li>
                    <li><a title="Deviantart | <?= DAA_NAME; ?>"
                           href="https://www.deviantart.com/<?= DAA_DEVIANTART; ?>" target="_blank"><i
                                    class='bx bxl-deviantart'></i></a></li>
                    <li><a title="Pinterest | <?= DAA_NAME; ?>" href="https://pinterest.com/<?= DAA_PINTEREST; ?>"
                           target="_blank"><i class='bx bxl-pinterest'></i></a></li>
                </ul>
            </article>
        </div>
    </div>

</header>
<!-- Fim Header > container -->