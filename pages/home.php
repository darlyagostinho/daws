<?php 
/**
 * Template Name: Home Template
 */
get_header(); 
?>
<!-- https://darlyagostinho.com/wp-content/uploads/2021/12/resume-photo.jpg
https://darlyagostinho.com/wp-content/uploads/2021/12/hero-bg.jpg
https://darlyagostinho.com/wp-content/uploads/2021/12/about-img.jpg -->
<section id="hero" class="hero  bg__secondary py__2rem">
  <div class="container">
    <div class="hero__wrapper">
      <div class="hero__img__wrapper">
        <img src="https://darlyagostinho.com/wp-content/uploads/2021/12/resume-photo.jpg" alt="Foto Darly Agostinho"
          class="hero__img img__responsive">
      </div>

      <h1 class="hero__title mt__1rem">Darly Agostinho</h1>
      <p class="hero__desc mt__half__rem">Desenvolvedor Web Fullstack</p>

      <ul class="social__media__list flex__container">
        <li class="social__media__item circle bg__medium__gray mr__1rem">
          <a href="#" class="social__media__link">
            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13.2247 2.99775C13.2345 3.129 13.2345 3.2595 13.2345 3.39C13.2345 7.38375 10.1947 11.9858 4.6395 11.9858C2.928 11.9858 1.338 11.49 0 10.629C0.243 10.6568 0.477 10.6665 0.72975 10.6665C2.08949 10.6698 3.41073 10.2151 4.4805 9.37575C3.85007 9.36434 3.23893 9.15634 2.73243 8.7808C2.22593 8.40526 1.84934 7.88092 1.65525 7.281C1.842 7.30875 2.0295 7.3275 2.226 7.3275C2.49675 7.3275 2.769 7.29 3.02175 7.22475C2.33757 7.08661 1.72236 6.71576 1.28071 6.17527C0.839073 5.63477 0.59827 4.95799 0.59925 4.26V4.2225C1.002 4.44675 1.46925 4.587 1.96425 4.60575C1.54957 4.33019 1.20954 3.95627 0.974505 3.51734C0.73947 3.07842 0.616735 2.58814 0.61725 2.09025C0.61725 1.52925 0.7665 1.01475 1.02825 0.566252C1.78735 1.50002 2.73413 2.26392 3.80725 2.8085C4.88038 3.35307 6.05592 3.66616 7.25775 3.7275C7.21125 3.5025 7.18275 3.26925 7.18275 3.03525C7.18255 2.63847 7.26056 2.24555 7.41231 1.87893C7.56406 1.51232 7.78658 1.17921 8.06714 0.898643C8.34771 0.618078 8.68082 0.39556 9.04743 0.243811C9.41404 0.0920609 9.80697 0.0140549 10.2037 0.0142521C11.0737 0.0142521 11.859 0.378752 12.411 0.968252C13.0873 0.837465 13.7359 0.590569 14.328 0.238502C14.1026 0.936614 13.6303 1.52858 12.9998 1.9035C13.5996 1.83509 14.1858 1.67734 14.739 1.4355C14.3258 2.03783 13.8139 2.56601 13.2247 2.99775Z"
                fill="#14252D" />
            </svg>
          </a>
        </li>
        <li class="social__media__item circle bg__medium__gray mr__1rem">
          <a href="#" class="social__media__link">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.0478 15.7478V9.60075H12.1215L12.4298 7.19401H10.0478V5.66101C10.0478 4.9665 10.2413 4.49101 11.238 4.49101H12.501V2.34525C11.8865 2.2794 11.2688 2.2476 10.6508 2.25C8.81777 2.25 7.55927 3.369 7.55927 5.42326V7.18951H5.49902V9.59626H7.56377V15.7478H10.0478Z"
                fill="#14252D" />
            </svg>

          </a>
        </li>
        <li class="social__media__item circle bg__medium__gray mr__1rem">
          <a href="#" class="social__media__link">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.99925 5.53275C8.07948 5.53275 7.19738 5.89812 6.547 6.5485C5.89663 7.19888 5.53125 8.08097 5.53125 9.00075C5.53125 9.92052 5.89663 10.8026 6.547 11.453C7.19738 12.1034 8.07948 12.4687 8.99925 12.4687C9.91902 12.4687 10.8011 12.1034 11.4515 11.453C12.1019 10.8026 12.4672 9.92052 12.4672 9.00075C12.4672 8.08097 12.1019 7.19888 11.4515 6.5485C10.8011 5.89812 9.91902 5.53275 8.99925 5.53275V5.53275ZM8.99925 11.253C8.40172 11.253 7.82866 11.0156 7.40614 10.5931C6.98362 10.1706 6.74625 9.59753 6.74625 9C6.74625 8.40246 6.98362 7.8294 7.40614 7.40688C7.82866 6.98436 8.40172 6.747 8.99925 6.747C9.59678 6.747 10.1698 6.98436 10.5924 7.40688C11.0149 7.8294 11.2523 8.40246 11.2523 9C11.2523 9.59753 11.0149 10.1706 10.5924 10.5931C10.1698 11.0156 9.59678 11.253 8.99925 11.253V11.253Z"
                fill="#14252D" />
              <path
                d="M12.6045 6.21374C13.051 6.21374 13.413 5.85176 13.413 5.40524C13.413 4.95872 13.051 4.59674 12.6045 4.59674C12.158 4.59674 11.796 4.95872 11.796 5.40524C11.796 5.85176 12.158 6.21374 12.6045 6.21374Z"
                fill="#14252D" />
              <path
                d="M15.3997 4.58325C15.2261 4.13489 14.9608 3.72772 14.6207 3.3878C14.2807 3.04788 13.8734 2.78271 13.425 2.60925C12.9002 2.41227 12.3458 2.30576 11.7855 2.29425C11.0632 2.26275 10.8345 2.25375 9.00297 2.25375C7.17147 2.25375 6.93672 2.25375 6.22047 2.29425C5.66051 2.30517 5.10653 2.4117 4.58247 2.60925C4.13392 2.7825 3.72654 3.04761 3.38647 3.38755C3.04639 3.72749 2.78114 4.13477 2.60771 4.58325C2.41069 5.10796 2.30443 5.66238 2.29346 6.22275C2.26121 6.94425 2.25146 7.173 2.25146 9.00525C2.25146 10.8368 2.25146 11.07 2.29346 11.7878C2.30471 12.3488 2.41046 12.9023 2.60771 13.428C2.78162 13.8763 3.04714 14.2834 3.38729 14.6233C3.72745 14.9632 4.13476 15.2284 4.58322 15.402C5.10629 15.6069 5.66049 15.721 6.22196 15.7395C6.94421 15.771 7.17297 15.7808 9.00447 15.7808C10.836 15.7808 11.0707 15.7808 11.787 15.7395C12.3473 15.7281 12.9016 15.6219 13.4265 15.4253C13.8748 15.2514 14.2819 14.986 14.6219 14.646C14.962 14.306 15.2274 13.8988 15.4012 13.4505C15.5985 12.9255 15.7042 12.372 15.7155 11.811C15.7477 11.0895 15.7575 10.8608 15.7575 9.0285C15.7575 7.19625 15.7575 6.96375 15.7155 6.246C15.7067 5.67771 15.5999 5.11519 15.3997 4.58325V4.58325ZM14.4862 11.7323C14.4814 12.1645 14.4025 12.5927 14.253 12.9983C14.1403 13.2899 13.9679 13.5548 13.7468 13.7758C13.5256 13.9968 13.2607 14.169 12.969 14.2815C12.5679 14.4303 12.1442 14.5092 11.7165 14.5148C11.004 14.5478 10.803 14.556 8.97597 14.556C7.14747 14.556 6.96072 14.556 6.23472 14.5148C5.80716 14.5095 5.38371 14.4306 4.98297 14.2815C4.69023 14.1697 4.42422 13.9978 4.20213 13.7767C3.98005 13.5557 3.80684 13.2905 3.69372 12.9983C3.5463 12.597 3.46745 12.1739 3.46046 11.7465C3.42821 11.034 3.42071 10.833 3.42071 9.006C3.42071 7.17825 3.42071 6.9915 3.46046 6.26475C3.46531 5.83277 3.54421 5.40482 3.69372 4.9995C3.92247 4.40775 4.39122 3.942 4.98297 3.7155C5.38391 3.56711 5.80723 3.48823 6.23472 3.48225C6.94797 3.45 7.14822 3.441 8.97597 3.441C10.8037 3.441 10.9912 3.441 11.7165 3.48225C12.1443 3.4874 12.568 3.56631 12.969 3.7155C13.2607 3.82821 13.5256 4.00066 13.7467 4.22178C13.9678 4.4429 14.1403 4.70781 14.253 4.9995C14.4004 5.40072 14.4792 5.82387 14.4862 6.25125C14.5185 6.9645 14.5267 7.16475 14.5267 8.9925C14.5267 10.8195 14.5267 11.016 14.4945 11.733H14.4862V11.7323Z"
                fill="#14252D" />
            </svg>

          </a>
        </li>
        <li class="social__media__item circle bg__medium__gray mr__1rem">
          <a href="#" class="social__media__link">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.73719 5.39775C4.64349 5.39775 5.37819 4.66305 5.37819 3.75675C5.37819 2.85045 4.64349 2.11575 3.73719 2.11575C2.83089 2.11575 2.09619 2.85045 2.09619 3.75675C2.09619 4.66305 2.83089 5.39775 3.73719 5.39775Z"
                fill="black" />
              <path
                d="M6.92779 6.64126V15.7455H9.75454V11.2433C9.75454 10.0553 9.97804 8.90476 11.451 8.90476C12.9038 8.90476 12.9218 10.263 12.9218 11.3183V15.7463H15.75V10.7535C15.75 8.30101 15.222 6.41626 12.3555 6.41626C10.9793 6.41626 10.0568 7.17151 9.67954 7.88626H9.64129V6.64126H6.92779ZM2.32129 6.64126H5.15254V15.7455H2.32129V6.64126Z"
                fill="#14252D" />
            </svg>

          </a>
        </li>
      </ul>
    </div>
    <nav>
      <ul class="nav__list mt__1rem">
        <li class="nav__item py__1rem">
          <a href="#" class="nav__link active">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="nav__icon active">
              <path
                d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
            </svg>
            <span class="ml__half__rem">Home</span>
          </a>
        </li>
        <li class="nav__item py__1rem">
          <a href="#" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="nav__icon">
              <path
                d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
            </svg>
            <span class="ml__half__rem">Sobre</span>
          </a>
        </li>
        <li class="nav__item py__1rem">
          <a href="#" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="nav__icon">
              <path
                d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z" />
            </svg>
            <span class="ml__half__rem">Currículo</span>
          </a>
        </li>
        <li class="nav__item py__1rem">
          <a href="#" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="nav__icon">
              <path
                d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z" />
              <path d="M15 7h3v2h-3zm0 4h3v2h-3z" />
            </svg>
            <span class="ml__half__rem">Portfolio</span>

          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<?php get_footer(); ?>