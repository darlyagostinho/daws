(function () {
  const hamburgerMenuBtn = document.querySelector('.hamburger__menu__btn');
  const hamburgerMenuBar = document.querySelectorAll('.hamburger__menu__bar');
  const hamburgerMenu = document.querySelector('.header__mobile__menu');
  const subMenus = document.querySelectorAll('.menu-item-has-children');
  const headerMain = document.querySelector('.header__main');
  const btnFloatWhatsApp = document.querySelector('.btn__float__whatsapp');

  function isHamburgerBtnActive() {
    return hamburgerMenuBtn.classList.contains('active');
  }

  function toggleMobileMenu() {
    hamburgerMenuBtn.classList.toggle('active');
    hamburgerMenu.classList.toggle('active');
    hamburgerMenuBar[0].classList.toggle('top');
    hamburgerMenuBar[1].classList.toggle('middle');
    hamburgerMenuBar[2].classList.toggle('bottom');

  }

  function mobileMenuAcessibility() {
    const ariaExpanded = isHamburgerBtnActive();
    isHamburgerBtnActive() ? hamburgerMenuBtn.setAttribute('aria-label', "Fechar Menu") : hamburgerMenuBtn.setAttribute('aria-label', "Abrir Menu");
    ;
    hamburgerMenuBtn.setAttribute('aria-expanded', ariaExpanded);
  }

  function toggleHeaderMenuFixed() {
    headerMain.classList.toggle('fixed');
  }

  function toggleFloatWhatsAppBtn() {
    btnFloatWhatsApp.classList.toggle('hide');
  }


  function removeActiveSubmenu(activeSubMenu) {
    for (let i = 0; i < subMenus.length; i++) {
      if (activeSubMenu.classList.contains('active')) {
        continue;
      } else{
        subMenus[i].classList.remove('active');
      }
    }
  }

  hamburgerMenuBtn.addEventListener("click", () => {
    toggleMobileMenu();
    mobileMenuAcessibility();
    toggleHeaderMenuFixed();
    toggleFloatWhatsAppBtn();
  });

  for (let i = 0; i < subMenus.length; i++) {
    subMenus[i].addEventListener("click", (e) => {
      removeActiveSubmenu(e.currentTarget);
      e.currentTarget.classList.toggle('active');
    })
  }
})();