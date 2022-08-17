<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite"> <!-- Set your country language and website schema -->
 <!-- <html lang="pt-br" itemscope itemtype="https://schema.org/WebSite" prefix="og: https://ogp.me/ns#"> Set your country language and website schema -->
  <head>
    <meta charset="UTF-8" /> <!-- Unicode default( UTF-8 )  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{SITE_TITLE} | {SITE_SUBNAME}</title>

    <!-- Defaults Metas -->
    <meta name="description" content="{SITE_DESCRIPTION}" />
    <meta name="robots" content="index, follow" /> <!-- Allow browsers to index -->
    <meta name="google-site-verification" content="{GOOGLE_CHECK}" /> <!-- Tag Google -->

    <!-- Defaults Links -->
    <link rel="base" href="{SITE_URL}" /> <!-- Website Url -->
    <link rel="canonical" href="{SITE_URL}" /> <!-- Website Url -->
    <link rel="alternate" type="application/rss+xml" href="{SITE_URL}" /> <!-- RSS Url -->
    <link rel="sitemap" type="application/xml" href="{SITE_DESCRIPTION}" /> <!-- Sitemap Url -->
    <link rel="author" href="{SITE_URL_PAGE_AUTOR}" /> <!-- Personal profile of the author of the site ( Example Facebook profile )  -->
    <link rel="publisher" href="{SITE_URL_PAGE_WEBSITE}" /> <!-- Personal website page (Example website page on Facebook) -->

    <?php require 'partls/seo.php'; ?>
    <!-- All Metas( Itemprop and Property ( Og:, Article:, Twitter: ) ) -->

    <link rel="shortcut icon" href="{SITE_URL}/_storage/images/favicon.png" /> <!-- Imagem Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> <!-- Importing font from google -->

    <!-- All Styles -->
    <!-- <link rel="stylesheet" href="_storage/css/components/normalize.css"> --> <!-- Reset CSS -> https://necolas.github.io/normalize.css/ -->
    <link rel="stylesheet" href="_storage/css/components/reset.css"> <!-- Reset CSS -->
    <link rel="stylesheet" href="_storage/css/components/cssoo.css"> <!-- Defines CSS -->

    <link rel="stylesheet" href="_storage/css/components/boxicons.css"> <!-- Boxicons -> https://boxicons.com/ -->
    <link rel="stylesheet" href="_storage/css/components/fontawesome.css"> <!-- Fontawesome -> https://fontawesome.com/icons -->
    <link rel="stylesheet" href="_storage/css/components/line-awesome.css"> <!-- Line-Awesome -> https://icons8.com/line-awesome -->

    <link rel="stylesheet" href="_storage/css/components/iconscout.css"> <!-- Iconscout -> https://iconscout.com/ *Pending -->
    <link rel="stylesheet" href="_storage/css/components/icomoon.css"> <!-- Icomoon -> https://icomoon.io/ *Pending -->

    <link rel="stylesheet" href="_storage/css/folds/header.css">
    <link rel="stylesheet" href="_storage/css/folds/main.css">
    <link rel="stylesheet" href="_storage/css/folds/footer.css">

    <link rel="stylesheet" href="_storage/css/components/queries.css"> <!-- Media Queries -->
    <link rel="stylesheet" href="_storage/css/components/animate.css"> <!-- Animete Style -->

    <!--[if lt IE 9]>
      <script src="{SITE_URL}/_storage/js/html5shiv.js"></script>
    <![endif]-->

  </head>
  <body>

    <header class="header container__flex">

      <div class="content__flex">

        <h1 class="header__logo fz">
          <span>{SITE_TITLE}</span>
          <img src="_storage/images/logo.svg" title="{SITE_TITLE} | {SITE_SUBNAME}" alt="{SITE_TITLE} | {SITE_SUBNAME}" />
        </h1>
        <!-- Fim Logotipo -->

        <nav class="header__menu">
          <h2 class="fz">Navegação {SITE_TITLE}</h2>
          <ul>
            <li>
              <a title="{SITE_TITLE} | {SITE_SUBNAME}" href="{SITE_URL}">Home</a>
            </li>
            <li>
              <a title="{PAGE_NAME} or {ARTICLE_NAME} | {SITE_TITLE}" href="#article__1">Quem Somos</a>
            </li>
            <li>
              <a title="{PAGE_NAME} or {ARTICLE_NAME} | {SITE_TITLE}" href="#article__2">Fale Conosco</a>
            </li>
          </ul>
          <!-- Fim Ul -->
        </nav>
        <!-- Fim Nav -->

      </div>
      <!-- Fim Content -->

    </header>
    <!-- Fim Header > container -->
