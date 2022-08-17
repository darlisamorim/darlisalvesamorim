<?php

  // URL BASE
  define('BASE', 'www.darlisalvesamorim.com'); // Url raiz do website

  // Verify if in server localhost or hosting  
  if($_SERVER['HTTP_HOST'] == 'localhost'):
    define('DOMAIN', 'http://localhost/darlisalvesamorim'); // Url localhost do website
  else:
    define('DOMAIN', 'https://www.darlisalvesamorim.com'); // Url raiz do website
  endif;


  /*
   * Information Website
  */
  define('DAA_LOCALE', 'pt-br');
  define('DAA_SCHEMA', 'https://schema.org/WebSite'); 
  define('DAA_SCHEMA_OPEN_GRAPH', 'https://ogp.me/ns#'); 
  define('DAA_CHARSET', 'UTF-8'); 
  define('DAA_GOOGLE_VERI', 'Código de Verificação do google');

  define('DAA_LOGOTIPO', 'logotipo.svg'); // Image Logotipo
  define('DAA_AVATAR', 'avatar.svg'); // Image Avatar
  define('DAA_IMAGE_SHARE', 'default.svg'); // Default Image Website
  define('DAA_IMAGE_FAVICON', 'favicon.svg'); // Default Image Website
  define('DAA_CV', 'curriculo_darlisalvesamorim.pdf'); // CV Download
      
  define('DAA_NAME', 'Darlis Alves Amorim_'); // Name Website
  define('DAA_SUBNAME', 'Software Engineer end Full Stack Developer Freelancer Front-end & Back-end of São Paulo/SP'); // Subname WebSite
  define('DAA_DESCRIPTION', 'Software Engineer end Full Stack Developer of São Paulo/SP'); // Description Website

  /*
   * Settings Google Fonts
   * https://www.google.com/fonts
   * font-family: 'Roboto Mono', monospace; font-weight -> 100;200;300;400;500;600;700
   * 
  */
  define('DAA_FONT_NAME', 'Roboto+Mono'); // Name Typography
  define('DAA_FONT_WEIGHT', '100;200;300;400;500;600;700'); // Width Typography  

  // NETWORKS
  define('DAA_LINKEDIN', 'https://www.linkedin.com/in/darlisamorim'); // Linkedin

  define('DAA_FB', 'https://www.facebook.com/darlisalvesamorim'); // Profile Facebook
  define('DAA_FB_PAGE', 'https://www.facebook.com/darlisamorim'); // Page Facebook
  define('DAA_FB_PAGE_ID', '2323232'); // Page ID Facebook
  define('DAA_FB_APP_ID', '323232'); // App ID Facebook

  define('DAA_TWITTER', '@darlisamorim'); 

  define('DAA_INSTAGRAM', 'darlisamorim'); 
  define('DAA_GITHUB', 'darlisamorim'); 
  define('DAA_CODEPEN', 'darlisamorim'); 
  define('DAA_DEVTO', 'darlisamorim'); 
  define('DAA_MEDIUM', '@darlisamorim'); 
  define('DAA_DRIBBBLE', 'darlisamorim'); 
  define('DAA_BEHANCE', 'darlisamorim'); 
  define('DAA_PINTEREST', 'darlisamorim'); 
  define('DAA_TIKTOK', '@darlisamorim'); 
  




    // E-MAIL
