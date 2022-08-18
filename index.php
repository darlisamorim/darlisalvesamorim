<?php require 'partls/header.php'; ?>

<main class="main container">

  <section class="bio content">
    <h1 class="fz">Biografia | <?= DAA_NAME; ?></h1>

    <article class="article__bio">
      <h1>Bom te ver aqui</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea reiciendis itaque veritatis deserunt voluptas temporibus aliquid, placeat, ex vero omnis vel possimus voluptatem, debitis tempora eos. Voluptates consequatur deserunt quis!</p>
      <button><i class='bx bxs-download'></i> Download CV</button>
    </article>
  </section>
  <!-- Fim Section.bio -->

  <section class="resumo container">
    <h1 class="fz">Resumo</h1>

    <div class="content">
      <article class="article__resumo">
        <h1>Resumo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea reiciendis itaque veritatis deserunt voluptas temporibus aliquid, placeat, ex vero omnis vel possimus voluptatem, debitis tempora eos. Voluptates consequatur deserunt quis!</p>
      </article>

      <nav>
        <h3>Educação</h3>
        <ul>
          <li>
            <a title="" href="">
              <span class="school">SCHOOL OF INFORMATIONAL TECHNOLOGIES</span>
            </a>
            <span class="time">2005 - 2012</span>
            <span>Software Engineer end Full Stack Developer</span>
          </li>
          <li>
            <a title="" href="">
              <span class="school">SCHOOL OF INFORMATIONAL TECHNOLOGIES</span>
            </a>
            <span class="time">2005 - 2012</span>
            <span>Software Engineer end Full Stack Developer</span>
          </li>
          <li>
            <a title="" href="">
              <span class="school">SCHOOL OF INFORMATIONAL TECHNOLOGIES</span>
            </a>
            <span class="time">2005 - 2012</span>
            <span>Software Engineer end Full Stack Developer</span>
          </li>
          <li>
            <a title="" href="">
              <span class="school">SCHOOL OF INFORMATIONAL TECHNOLOGIES</span>
            </a>
            <span class="time">2005 - 2012</span>
            <span>Software Engineer end Full Stack Developer</span>
          </li>
          <li>
            <a title="" href="">
              <span class="school">SCHOOL OF INFORMATIONAL TECHNOLOGIES</span>
            </a>
            <span class="time">2005 - 2012</span>
            <span>Software Engineer end Full Stack Developer</span>
          </li>
        </ul>
      </nav>
      <!-- Fim Nav -->

    </div>
    <!-- Fim Div.content -->

    <div class="content">

      <article class="article__skills">
        <h1>Habilidades de Trabalho</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea reiciendis itaque veritatis deserunt voluptas temporibus aliquid, placeat, ex vero omnis vel possimus voluptatem, debitis tempora eos. Voluptates consequatur deserunt quis!</p>

        <footer class="article__skills__footer">
          <div class="progress__content">
            <p class="progress__title">Desenvolvimento</p>
            <div class="progress">
              <p>
                <span class="skill">HTML5</span>
                <span class="percent">80%</span>
              </p>
              <div class="progress__item">
                <div class="progress__bar"></div>
              </div>
            </div>

            <div class="progress">
              <p>
                <span class="skill">CSS3</span>
                <span class="percent">90%</span>
              </p>
              <div class="progress__item">
                <div class="progress__bar"></div>
              </div>
            </div>
          </div>
          <div class="progress__content">
            <p class="progress__title">Design</p>
            <div class="progress">
              <p>
                <span class="skill">Figma</span>
                <span class="percent">90%</span>
              </p>
              <div class="progress__item">
                <div class="progress__bar"></div>
              </div>
            </div>
          </div>
        </footer>
      </article>

    </div>
    <!-- Fim Div.content -->

  </section>
  <!-- Fim Section.resumo -->

  <section class="portfolios container">
    <div class="content">
      <h1>Meus Portfolios & Projetos Open Source</h1>
      <ul>
        <li><a title="" href="">Todos</a></li>
        <li><a title="" href="">Website</a></li>
        <li><a title="" href="">Aplicativos</a></li>
        <li><a title="" href="">CMS</a></li>
        <li><a title="" href="">Design</a></li>
      </ul>
    </div>
    <!-- Fim Div.content -->
    
    <div class="content__flex">
      <article class="article__portfolios">
        <figure>
          <img width="400" src="<?= DOMAIN; ?>/_storage/images/default.svg" title="" alt="">
          <figcaption>
            <p><i class='bx bxs-folder-open' ></i> Open Source</p>
          </figcaption>
        </figure>
        <div class="portfolios__content">
          <h1>Lorem ipsum dolor sit amet.</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum molestiae accusamus perferendis nihil, nulla recusandae voluptas, ea nemo quidem sit facilis. Pariatur, aliquid nemo. Suscipit, iusto ex. Nobis, molestias dicta!</p>
          
          <div>
            <p>Lorem, ipsum.</p>
            <span class="tags">HTML5</span>
          </div>
        </div>
        <a title="" href="">www.darlisalvesamorim.com</a>
      </article>
    </div>
    <!-- Fim Div.content -->

  </section>
  <!-- Fim Section.portfolios -->

</main>
<!-- Fim Main -->

<?php require 'partls/footer.php'; ?>