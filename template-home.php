<?php

/**
 * Template Name: Home
 */
get_header();
?>
<section id="hero" class="hero bg__secondary py__2rem">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__content">
                <div class="hero__img__wrapper">
                    <img src="https://darlyagostinho.com/wp-content/uploads/2021/12/resume-photo.jpg"
                        alt="Foto Darly Agostinho" class="rounded img__responsive">
                </div>
                <h1 class="hero__title mt__1rem">Darly Agostinho</h1>
                <p class="hero__desc mt__half__rem">Desenvolvedor PHP Fullstack</p>
                <ul class="social__media__list flex__container">
                    <li class="social__media__item mr__1rem">
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5562982741818" class="footer__link"
                            target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                class="footer__icon">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__media__item mr__1rem">
                        <a href="mailto:darlyagostinho@gmail.com" class="footer__link" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                class="footer__icon">
                                <path
                                    d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__media__item mr__1rem">
                        <a href="tel:62982741818" class="footer__link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-telephone footer__icon" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </a>
                    </li>

                    <li class="social__media__item mr__1rem">
                        <a href="https://www.linkedin.com/in/darly-agostinho-45682722/" class="footer__link"
                            target="_blank" rel="noopener">
                            <svg width="28" height="28" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.73719 5.39775C4.64349 5.39775 5.37819 4.66305 5.37819 3.75675C5.37819 2.85045 4.64349 2.11575 3.73719 2.11575C2.83089 2.11575 2.09619 2.85045 2.09619 3.75675C2.09619 4.66305 2.83089 5.39775 3.73719 5.39775Z"
                                    fill="#c4c4c4" />
                                <path
                                    d="M6.92779 6.64126V15.7455H9.75454V11.2433C9.75454 10.0553 9.97804 8.90476 11.451 8.90476C12.9038 8.90476 12.9218 10.263 12.9218 11.3183V15.7463H15.75V10.7535C15.75 8.30101 15.222 6.41626 12.3555 6.41626C10.9793 6.41626 10.0568 7.17151 9.67954 7.88626H9.64129V6.64126H6.92779ZM2.32129 6.64126H5.15254V15.7455H2.32129V6.64126Z"
                                    fill="#c4c4c4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <nav class="hero__nav">
                <ul class="hero__nav__list mt__1rem">
                    <li class="nav__item py__1rem">
                        <a href="<?php echo get_home_url(); ?>" class="nav__link active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="nav__icon active">
                                <path
                                    d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
                            </svg>
                            <span class="ml__half__rem">Home</span>
                        </a>
                    </li>
                    <li class="nav__item py__1rem">
                        <a href="#about" class="nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="nav__icon">
                                <path
                                    d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
                            </svg>
                            <span class="ml__half__rem">Sobre</span>
                        </a>
                    </li>
                    <li class="nav__item py__1rem">
                        <a href="#resume" class="nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="nav__icon">
                                <path
                                    d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z" />
                            </svg>
                            <span class="ml__half__rem">Currículo</span>
                        </a>
                    </li>
                    <li class="nav__item py__1rem">
                        <a href="https://darlyagostinho.com/wp-content/uploads/2023/01/Curriculo-Darly-Agostinho-pt-br.pdf"
                            class="nav__link" download="curriculo-Darly-Agostinho" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="nav__icon">
                                <path d="m12 16 4-5h-3V4h-2v7H8z" />
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z" />
                            </svg>
                            <span class="ml__half__rem">Baixar Currículo</span>
                        </a>
                    </li>
                    <li class="nav__item py__1rem">
                        <a href="#portfolio" class="nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="nav__icon">
                                <path
                                    d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z" />
                                <path d="M15 7h3v2h-3zm0 4h3v2h-3z" />
                            </svg>
                            <span class="ml__half__rem">Portfolio</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <?php echo do_shortcode('[language-switcher]'); ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<section id="about" class="about bg__light py__2rem">
    <div class="container">
        <header class="about__header">
            <div class="about__title flex__container flex__align__items__center">
                <h2 class="about__primary__title m__0">Sobre</h2>
                <div class="line ml__half__rem"></div>
            </div>
            <h3 class="about__secondary__title mt__half__rem">Minha Trajetória</h3>
        </header>

        <div class="row g-0 about__item reverse">
            <article class="col-lg-7 about__content bg__white mt__half__rem">
                <h4 class="about__tertiary__title">Experiência</h4>
                <p>Tenho mais de 10 anos de experiência na área de Tecnologia e sou Bacharel em Sistemas de Informação
                    desde
                    2013. Iniciei os meus estudos aos 12 anos fazendo cursos voltados para a área de informática
                    (hardware e
                    software)
                    e ao longo dos anos trabalhei em empresas de Marketing, Criação de Software Web/Desktop,
                    Análise/Otimização de
                    Banco de Dados, Ponto Eletrônico além de ministrar treinamentos para clientes, equipes e colegas de
                    trabalho.
                </p>
                <p>Em 2018 eu abri a minha empresa e tenho atuado em duas vertentes: Desenvolvimento Web e Aulas
                    Particulares de
                    Programação.</p>
            </article>
            <div class="col-lg-5 about__img__wrapper mb__2rem">
                <img src="https://darlyagostinho.com/wp-content/uploads/2021/12/about.jpg"
                    alt="Foto Darly Agostinho Trabalhando com o Notebook" class="img__responsive">
            </div>
        </div>

        <div class="row g-0 about__item">
            <article class="col-lg-7 about__content bg__white mt__half__rem">
                <h4 class="about__tertiary__title">Desenvolvimento Web</h4>
                <div class="color__primary__medium mb__half__rem fw__medium">Criação de Sites, Sistemas e Lojas Virtuais
                </div>
                <p>Crio sites, sistemas e lojas virtuais do zero passando por todas as etapas do processo: briefing, web
                    design, frontend, backend, versionamento, revisão, deploy e treinamento para o usuário final.
                    Utilizo no dia a dia Figma, PHP, MySQL, WordPress, Laravel, Git, Github, HTML, CSS, Sass,
                    Bootstrap, Javascript, Node.js. Tudo o que desenvolvo segue boas práticas de programação, padrões
                    web, recomendações como PSR (PHP), documentações e padrões recomendados pelas equipes do WordPress,
                    WooCommerce e Laravel.
                </p>
            </article>
            <div class="col-lg-5 about__img__wrapper">
                <img src="https://darlyagostinho.com/wp-content/uploads/2022/01/about-03.jpg"
                    alt="Foto Darly Agostinho Trabalhando com o Notebook" class="img__responsive">
            </div>
        </div>

        <div class="row g-0 about__item reverse">
            <article class="col-lg-7 about__content bg__white mt__half__rem">
                <h4>Aulas Particulares de Programação</h4>
                <p>Ministro aulas de programação particulares onde ensino HTML, CSS, javascript, padrões web, PHP e
                    MySQL para
                    todos os níveis: do iniciante ao avançado. Nas aulas de frontend eu ensino noções de Web Design,
                    HTML
                    Semântico e Design Responsivo. Nas aulas de PHP após entendermos o
                    essencial da linguagem, desenvolvo um projeto utilizando o padrão MVC, OOP e Design
                    Patterns.
                </p>
            </article>
            <div class="col-lg-5 about__img__wrapper">
                <img src="https://darlyagostinho.com/wp-content/uploads/2022/01/about-02.jpg"
                    alt="Foto Darly Agostinho Trabalhando com o Notebook" class="img__responsive">
            </div>
        </div>
    </div>
</section>
<section id="resume" class="py__2rem">
    <div class="container">
        <div class="resume__header row">
            <div class="resume__img__wrapper col-lg-2 ">
                <img src="https://darlyagostinho.com/wp-content/uploads/2021/12/resume-photo.jpg"
                    alt="Foto Darly Agostinho" class="rounded img__responsive">
            </div>
            <div class="resume__title__wrapper col-lg-9">
                <h2 class="resume__title mt__2rem mb__0">Darly Agostinho</h2>
                <h3 class="resume__subtitle mt__half__rem mb__0">Desenvolvedor PHP Fullstack</h3>
            </div>
            <div class="btn__download__wrapper col-lg-1 pt__1rem">
                <a href="https://darlyagostinho.com/wp-content/uploads/2023/01/Curriculo-Darly-Agostinho-pt-br.pdf"
                    class="nav__link btn__download flex__justify__content__center" download="curriculo-Darly-Agostinho"
                    target="_blank" rel="noopener" title="Baixar Currículo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="m12 16 4-5h-3V4h-2v7H8z" />
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z" />
                    </svg>
                </a>
            </div>
            <ul class="resume__contact__list offset-lg-2 col-lg-10 mt__1-5rem">
                <li class="resume__contact__item mt__1rem">
                    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5562982741818" class="resume__contact__link"
                        target="_blank" rel="noopener">
                        <div class="resume__contact__icon__wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="#fff">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263" />
                            </svg>
                        </div>
                        <span class="ml__half__rem">(62) 98274-1818</span>
                    </a>
                </li>
                <li class="resume__contact__item mt__1rem"><a href="mailto:darlyagostinho@gmail.com"
                        class="resume__contact__link" target="_blank" rel="noopener">
                        <div class="resume__contact__icon__wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="#fff">
                                <path
                                    d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" />
                            </svg>
                        </div>
                        <span class="ml__half__rem">darlyagostinho@gmail.com</span>
                    </a>
                </li>
                <li class="resume__contact__item mt__1rem">
                    <a href="https://www.linkedin.com/in/darly-agostinho-45682722/" class="resume__contact__link"
                        target="_blank" rel="noopener">
                        <div class="resume__contact__icon__wrapper">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.73719 5.39775C4.64349 5.39775 5.37819 4.66305 5.37819 3.75675C5.37819 2.85045 4.64349 2.11575 3.73719 2.11575C2.83089 2.11575 2.09619 2.85045 2.09619 3.75675C2.09619 4.66305 2.83089 5.39775 3.73719 5.39775Z"
                                    fill="#fff" />
                                <path
                                    d="M6.92779 6.64126V15.7455H9.75454V11.2433C9.75454 10.0553 9.97804 8.90476 11.451 8.90476C12.9038 8.90476 12.9218 10.263 12.9218 11.3183V15.7463H15.75V10.7535C15.75 8.30101 15.222 6.41626 12.3555 6.41626C10.9793 6.41626 10.0568 7.17151 9.67954 7.88626H9.64129V6.64126H6.92779ZM2.32129 6.64126H5.15254V15.7455H2.32129V6.64126Z"
                                    fill="#fff" />
                            </svg>
                        </div>
                        <span
                            class="ml__half__rem resume__contact__link__desc">linkedin.com/in/darly-agostinho-45682722/</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="resume__body mt__2rem">
            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper pt__quarter__rem">
                        <svg width="22" height="22" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23 2H4.33333C3.0465 2 2 3.0465 2 4.33333V18.3333C2 19.6202 3.0465 20.6667 4.33333 20.6667H7.83333V25.0615L15.1565 20.6667H23C24.2868 20.6667 25.3333 19.6202 25.3333 18.3333V4.33333C25.3333 3.0465 24.2868 2 23 2ZM23 18.3333H14.5102L10.1667 20.9385V18.3333H4.33333V4.33333H23V18.3333Z"
                                fill="#2DFF2C" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Resumo</h4>
                </header>
                <div class="resume__item__body">
                    <p>Desenvolvedor PHP com mais de 4 anos de experiência na criação de sites, lojas virtuais, blogs e
                        sistemas para pequenas empresas. Aulas particulares de programação frontend e backend do nível
                        básico ao avançado.</p>
                    <p>Os projetos que eu desenvolvi ajudaram os clientes a aumentarem o faturamento, facilitaram a
                        análise de vendas, marketing e melhoraram os processos internos de divulgação do negócio.</p>
                    <p>As aulas de programação ajudaram os estudantes a conhecer novas ferramentas de desenvolvimento
                        web e planejar os estudos e carreira como programador corporativo ou freelancer.</p>
                </div>
            </article>

            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512"
                            fill="#2DFF2C">
                            <path
                                d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 456c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Desenvolvimento Web</h4>
                </header>
                <div class="resume__item__body">
                    <ul class="resume__item__list">
                        <li>Front-end: JavaScript, Node.js, jQuery, HTML, CSS, Bootstrap, Sass.</li>
                        <li>Back-end: PHP, Laravel, WordPress, MySQL, SQL Server, Oracle.</li>
                        <li>Ferramentas e Metodologias: Git, GitHub, Figma, VSCode, MVC, OOP, UI/UX, Windows, Linux.
                        </li>
                    </ul>
                </div>
            </article>

            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="#2DFF2C">
                            <path
                                d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Habilidades</h4>
                </header>
                <div class="resume__item__body">
                    <ul class="resume__item__list">
                        <li>- Autodidata.</li>
                        <li>- Trabalho em Equipe.</li>
                        <li>- Inteligência Emocional.</li>
                        <li>- Planejamento e organização.</li>
                    </ul>
                </div>
            </article>
            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="22"
                            fill="#2DFF2C">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Experiência</h4>
                </header>
                <div class="resume__item__body">
                    <h5 class="resume__item__subtitle">Desenvolvedor PHP Fullstack</h5>
                    <div class="resume__item__company">Darly Agostinho Websites</div>
                    <div class="resume__item__period">Novembro de 2018 - presente</div>
                    <div class="resume__item__city">Goiânia - GO</div>
                    <ul class="resume__item__list">
                        <li>- Web design, protótipo e desenvolvimento de lojas virtuais, blogs e sistemas do zero
                            utilizando boas práticas de programação, design patterns, padrão MVC e Orientação a Objetos.
                        </li>
                        <li>- Desenvolvimento e manutenção de plugins WordPress.</li>
                        <li>- Integração do WooCommerce com as APIs do Shopee e Omie.</li>
                        <li>- Desenvolvimento e manutenção de painel administrativo com Laravel.</li>
                        <li>- Mentoria para mais de 35 alunos na plataforma Superprof.</li>
                        <li>- Mentoria voluntária para alunos do projeto social mais1code.</li>
                    </ul>
                    <h5 class="resume__item__subtitle">Programador de Sistemas de Informação</h5>
                    <div class="resume__item__company">Globaltec S/A</div>
                    <div class="resume__item__period">Setembro de 2014 - Dezembro de 2014 - 3 meses</div>
                    <div class="resume__item__city">Goiânia - GO</div>
                    <ul class="resume__item__list">
                        <li>- Desenvolvimento de projetos em VB6 e VB.NET para os módulos de suprimentos e obras do ERP
                            UAU;</li>
                        <li>- Documentação dos projetos no TFS;</li>
                        <li>- Publicação das alterações realizadas no portal web.</li>
                    </ul>

                    <h5 class="resume__item__subtitle">Analista DBM/BI</h5>
                    <div class="resume__item__company">MarketData</div>
                    <div class="resume__item__period">Junho de 2012 - Junho de 2014 - 2 anos</div>
                    <div class="resume__item__city">São Paulo - SP</div>
                    <ul class="resume__item__list">
                        <li>- Automatização, desenvolvimento e documentação de processos de carga, extração,
                            enriquecimento e homologação de dados utilizando os bancos de dados SQL Server, Oracle e
                            SAS.</li>
                        <li>- Desenvolvimento de procedures, views, functions, triggers e packages para fornecer dados
                            estruturados/higienizados para campanhas de marketing, portais e cubos analíticos.</li>
                        <li>- Prestação de Serviços durante 1 ano na matriz do Banco Santander na área de CRM realizando
                            automatização de processos, otimização de banco de dados e treinamento de colegas de equipe.
                        </li>
                    </ul>
                </div>
            </article>
            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="22"
                            fill="#2DFF2C">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Formação Acadêmica</h4>
                </header>
                <div class="resume__item__body">
                    <h5 class="resume__item__subtitle">Universidade Paulista</h5>
                    <div class="resume__item__company">Bacharel em Sistemas de Informação</div>
                    <div class="resume__item__period">2009-2013</div>
                    <div class="resume__item__city">São Paulo - SP</div>

                    <h5 class="resume__item__subtitle mt__2rem">ETEC Albert Einstein</h5>
                    <div class="resume__item__company">Técnico em Eletrônica</div>
                    <div class="resume__item__period">2000-2002</div>
                    <div class="resume__item__city">São Paulo - SP</div>
                </div>
            </article>
            <article class="resume__item">
                <header class="resume__item__header flex__container flex__align__items__center">
                    <div class="resume__item__icon__wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="22"
                            viewBox="0 0 24 24" width="22" fill="#2DFF2C">
                            <rect fill="none" height="24" width="24" />
                            <path
                                d="M9.68,13.69L12,11.93l2.31,1.76l-0.88-2.85L15.75,9h-2.84L12,6.19L11.09,9H8.25l2.31,1.84L9.68,13.69z M20,10 c0-4.42-3.58-8-8-8s-8,3.58-8,8c0,2.03,0.76,3.87,2,5.28V23l6-2l6,2v-7.72C19.24,13.87,20,12.03,20,10z M12,4c3.31,0,6,2.69,6,6 s-2.69,6-6,6s-6-2.69-6-6S8.69,4,12,4z M12,19l-4,1.02v-3.1C9.18,17.6,10.54,18,12,18s2.82-0.4,4-1.08v3.1L12,19z" />
                        </svg>
                    </div>
                    <h4 class="resume__item__title ml__1rem">Cursos e Certificados</h4>
                </header>
                <div class="resume__item__body">
                    <h5 class="resume__item__subtitle">FrontEnd do Zero ao Profissional</h5>
                    <div class="resume__item__company">B7Web</div>
                    <div class="resume__item__period">20h - Concluído em Maio de 2020</div>

                    <h5 class="resume__item__subtitle mt__2rem">Curso Javascript completo: Do iniciante ao mestre</h5>
                    <div class="resume__item__company">Udemy</div>
                    <div class="resume__item__period">35h - Concluído em Abril de 2020</div>

                    <h5 class="resume__item__subtitle mt__2rem">PHP Básico</h5>
                    <div class="resume__item__company">B7Web</div>
                    <div class="resume__item__period">10h - Concluído em Agosto de 2019</div>
                    <br>
                    <p>Possuo outros cursos de Web Designer, WordPress, HTML, CSS, Git, Automação de FrontEnd entre
                        outros. Todos
                        os cursos e certificados estão disponíveis no Linkedin. <a
                            href="https://www.linkedin.com/in/darly-agostinho-45682722/" class="color__primary__medium"
                            target="_blank" rel="noopener">Ver Perfil Linkedin.</a></p>
                </div>
            </article>
        </div>
    </div>
</section>
<section id="portfolio" class="bg__light py__2rem">
    <div class="container">
        <header class="portfolio__header">
            <div class="portfolio__title flex__container flex__align__items__center">
                <h2 class="portfolio__title m__0">Portfólio</h2>
                <div class="line ml__half__rem"></div>
            </div>
            <h3 class="portfolio__subtitle mt__half__rem">Trabalhos Recentes</h3>
        </header>
        <div class="row">
            <div class="col-lg-3 mt__2rem">
                <a href="https://elizrabelo.com.br/erdreams" class="portfolio__item__link" target="_blank"
                    rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="https://darlyagostinho.com/wp-content/uploads/2022/01/eliz-rabelo-dreams.jpg"
                            alt="Capa Site Eliz Rabelo Dreams" class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Loja Virtual</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">Eliz Rabelo Dreams</h4>
                        <div class="portfolio__item__business">Trabalho em andamento - Homewear</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt__2rem">
                <a href="https://labmine.com.br/" class="portfolio__item__link" target="_blank" rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="http://darlyagostinho.com/wp-content/uploads/2022/12/labmine.jpg"
                            alt="Capa Site Labmine" class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Site e Blog</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">Labmine</h4>
                        <div class="portfolio__item__business">Consultoria na área de mineração</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt__2rem">
                <a href="https://mukau.com.br/" class="portfolio__item__link" target="_blank" rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="http://darlyagostinho.com/wp-content/uploads/2022/12/mukau.jpg" alt="Capa Site Mukaú"
                            class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Site</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">Mukaú</h4>
                        <div class="portfolio__item__business">Turismo</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt__2rem">
                <a href="https://aaaoir.com.br/" class="portfolio__item__link" target="_blank" rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="http://darlyagostinho.com/wp-content/uploads/2022/12/aaaoir.jpg"
                            alt="Capa Site AAAOIR" class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Sistema</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">AAAOIR</h4>
                        <div class="portfolio__item__business">Associação Atlética</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt__2rem">
                <a href="https://petiscoseciaalimentos.com.br/" class="portfolio__item__link" target="_blank"
                    rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="https://darlyagostinho.com/wp-content/uploads/2022/01/petiscos-cia-capa.jpg"
                            alt="Capa Site Petiscos e Cia" class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Loja Virtual</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">Petiscos e Cia</h4>
                        <div class="portfolio__item__business mt__quarter__rem">Petiscos Congelados</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt__2rem">
                <a href="https://reataxi.darlyagostinho.com/" class="portfolio__item__link" target="_blank"
                    rel="noopener">
                    <div class="portfolio__item__img__wrapper">
                        <img src="https://darlyagostinho.com/wp-content/uploads/2022/01/reataxi-capa.jpg"
                            alt="Capa Site Rea Taxi SP" class="img__responsive portfolio__item__img">
                    </div>
                    <div class="portfolio__item__info mt__1rem">
                        <div class="portfolio__item__category">Site</div>
                        <h4 class="portfolio__item__title mt__quarter__rem mb__0">REA TAXI SP</h4>
                        <div class="portfolio__item__business mt__quarter__rem">Serviços Transfer</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>