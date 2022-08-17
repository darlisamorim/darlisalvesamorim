<h1 align='center'> Darlis A. Amorim 👋, front-end project for portfolio 🧑🏻‍💻 </h1>

<p align='center'>
  Hope you like this foundation.
</p>

<p align='center'>
  <a title="Darlis A. Amorim_ | DevTo" target="_blank" href="https://dev.to/darlisamorim"><img src="https://img.shields.io/badge/DEV.TO-%230A0A0A.svg?&style=for-the-badge&logo=dev-dot-to&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Medium" href="https://medium.com/@darlisamorim"><img src="https://img.shields.io/badge/medium-%2312100E.svg?&style=for-the-badge&logo=medium&logoColor=white" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | CodePen" href="https://codepen.io/darlisamorim"><img src="https://img.shields.io/badge/CodePen-white?style=for-the-badge&logo=codepen&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
  <a title="Darlis A. Amorim_ | Website" href="https://www.darlisalvesamorim.com"><img src="https://img.shields.io/badge/-My%20Blog-17bf63?&style=for-the-badge&logo=blog&logoColor=black" /></a>&nbsp;&nbsp;&nbsp;
</p>


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#projeto)

## ➤ Projeto

Origins é uma base de arquivos para inicializar o desenvolvimento front-end, reúne algumas bibliotecas nativas veja nos extras abaixo. A proposta aqui é somente fazer o download e começar a codar. Deixei uma estrutura simples pré-pronto( Header, Main, Footer, CSS e Medias Queries), porém é claro que você precisa ler está documentação até o final e trabalhar em cima da estrutura não do que deixei pré-pronto.



[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#tecnologias)

## ➤ Tecnologias

- [HTML5](https://html5.org/)
  - Estrutura separada com tags pré-servidas
- [CSS3](https://www.w3.org/Style/CSS/Overview.en.html)
  - Folhas de estilo separadas
- [jQuery](https://jquery.com/)
  - Biblioteca adicionada
- [Javascript](https://javascript.info/)
  - Arquivo incluido( main.js )
- [PHP](https://www.php.net/)
  - Includes para fatiar o layout


Extras:
  * Bibliotecas:
    * [Boxicons](https://boxicons.com/)
    * [Fontawesome](https://fontawesome.com/)
    * [Icomoon](https://icomoon.io/)
    * [Line-Awesome](https://icons8.com/line-awesome)
    * [~~Iconscout~~ *Pending](https://icons8.com/line-awesome)
    * [~~NormalizeCSS~~ *Disabled](https://necolas.github.io/normalize.css/)
    * [AnimateCSS](https://animate.style)


  * Software
    * [Atom](https://atom.io/)




[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#layout)

## ➤ Layout

O Layout foi separado em camadas veja ( Pastas e Arquivos ):

  * **/_storage**:
    * [/css]
      * [/components] **->** ( Arquivos de Bibliotecas )
        * reset.css
        * cssoo.css
        * animate.css
        * boxicons.css
        * fontawesome.css
        * line-awesome.css
        * icomoon.css
        * ~~iconscout.css~~ **->** ( Pendente ( Assim que possível vou coloca-la ) )
        * ~~normalize.css~~ **->** ( Desabilitado ( Normalize desativado estou usando o próprio ) )
        * queries.css
      * [/folds] **->** ( Style de Páginas )
        * header.css
        * main.css
        * footer.css

    * [/fonts] **->** ( Arquivos complementares das bibliotecas ( .eot, svg, ttf etc..) )
    * [/images] **->** Imagens do projeto
      * logo.svg
      * favicon.svg
      * default.svg   
    * [/js] **->** Scripts do projeto
      * html5shiv.js
      * jquery.js
      * main.js

  * **/partls**:
    * [seo.php] **->** Otimizações para os buscadores
    * [header.php] **->** Arquivo de cabeçalho e definições do site
    * [footer.php] **->** Rodapé do site

  * **raiz/**:
    * index.php **->** Responsável pelas sessões ( sections ) do site
    * README.md **->** Arquivo padrão de interpretação do git ou seja este tutorial que está lendo agora
    * robots.txt **->** Define quais diretórios os buscadores podem ou não ler e interpretar
    * .gitignore **->** Define quais arquivos não serão adicionados na hora do envio para o repositório
    * ~~rss.php~~  **->** Arquivo *Pendente
    * ~~sitemap.php~~ **->** Arquivo *Pendente


[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Como utilizar ?

Comece deixando um Follow no meu Github e em seguida exclua os seguintes arquivos e pastas ( **.gitignore**, **README.md** e **/.git** ) você não precisa destes arquivos a partir disso e so ler com atenção abaixo. </br></br>
É uma estrutura bem simples basta seguir o padrão colocado por mim ou seja para cada arquivo existe um diretório específico onde ele se encaixará. A princípio quando você estiver refatorando o código irá notar que existem diversas Tags tais como ( **{SITE_TITLE}**, **{SITE_SUBNAME}**, **{GOOGLE_CHECK}**, **{FACEBOOK_ID_PAGE}**, etc ). Elas também foram colocadas como guia, pois servem para dizer exatamente onde você vai colocar determinada informações no site.

Recortei um trecho do arquivo **seo.php** é assim que ele se encontra atualmente:
```
<meta itemprop="name" content="{SITE_TITLE} | {SITE_SUBNAME}" />
<meta itemprop="description" content="{SITE_DESCRIPTION}" />
<meta itemprop="url" content="{SITE_URL}" />
<meta itemprop="image" content="{SITE_IMAGE_DEFAULT}" />

* Tags:

  * {SITE_TITLE} -> Titulo do site { ProGame }
  * {SITE_SUBNAME} -> Sub Descrição do site  { O Melhor Site de Games }
  * {SITE_DESCRIPTION} -> Descrição completa { Você encontra o download de todos os melhores jogos de graça }
  * {SITE_URL} -> URL do site { https://www.progame.com/ }
  * {SITE_IMAGE_DEFAULT} -> Imagem de compartilhamento do site { https://www.progame.com/_storage/images/default.svg }

* Note que cada Tag tem um texto auto-explicativo nela acima eu citei algumas existem outras dentro do projeto, porém veja um exemplo pronto abaixo.
```

Em nosso exemplo veja como ficará quando você modificar as Tags do site note que pegamos o mesmo trecho do arquivo **seo.php**:
```
* Exemplo:

<meta itemprop="name" content="ProGame | O Melhor Site de Games" />
<meta itemprop="description" content="Você encontra o download de todos os melhores jogos de graça" />
<meta itemprop="url" content="https://www.progame.com/" />
<meta itemprop="image" content="https://www.progame.com/_storage/images/default.svg" />
```
Desde de que você tenha atenção irá conseguir modificar e ajustar os arquivos para alimenta-los a partir do refatoramento e assim terá um site ou página otimizado.

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)](#file-insomnia)

## ➤ Dicas e avisos #LEIA!

* Uma vez que terminou o seu projeto recomendo fortemente que você unifique todos os arquivos em CSS para um só. Você pode utilizar o **composer** nele existe um repositório muito bom para compilar arquivos CSS, JS etc... Vá no **Packagist** e procure por **matthiasmullie/minify**, claro isso é uma maneira existem outras.

* Mais uma coisa a respeito de compilar seus arquivos e unifica-los dentro das páginas **header.php** e **footer.php** existe uma ordem a qual os arquivos está sendo executados na página quando for compilar siga essa ordem para não ter problemas com seu CSS, JS e etc...

* Eu utilizei uma nomenclatura **{SITE_NAME}**, **{SITE_URL}** etc ... Seria ótimo você utilizar o **PHP** para definir constantes com os valores das Tags dessa forma você evitaria a reescrita de código ou textos. Algumas dessas **nomenclatura** são de URL e em alguns casos você terá que substituir para a url da sua página para seu script funcionar. 

* Eu deixei alguns arquivos desativados ou pendentes no projeto, pois eu não achei ou não tive tempo para escreve-los/coloca-los fique a vontade para implementar ou aguarde a próxima **RELEASE**.

* To usando um **RESET.css** próprio, porém caso queira utilizar o **NORMALIZE.css** basta habilita-lo. Use apenas um deles de qualquer forma todos os arquivos foram adicionados para você neste projeto você tem o poder de escolha.

* **RSS** e **SITEMAP**, vou criar uma **RELEASE** com esses dois arquivos, porém o certo seria adiciona-los somente quando você já tiver implementado um loop com comunicação com banco de dados assim você puxa os valores dinamicamente e ficará muito mais fácil, pois a escrita manualmente é muito trabalhosa, porém vou criar a base eles e deixar como bônus também na próxima **RELEASE**.
