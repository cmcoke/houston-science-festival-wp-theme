class MobileMenu {
  constructor() {
    this.button = document.querySelector('#header__mobile-menu-icon');
    this.container = document.querySelector('#header__container');
    this.navigation = document.querySelector('#navigation');
    this.socialMedia = document.querySelector('#header__social-media');
    this.mobileMenuIcon = document.querySelector('#header__mobile-menu-icon img');
    this.body = document.querySelector('body');
    this.events();
  }

  events() {
    this.button.addEventListener('click', () => this.openMenu());
  }

  openMenu() {
    this.container.classList.toggle('overlay');
    this.navigation.classList.toggle('show');
    this.socialMedia.classList.toggle('show');
    if (this.container.classList.contains('overlay')) {
      this.mobileMenuIcon.src = '/wp-content/themes/houston-science-festival-theme/assets/img/header/close.webp';
      this.body.classList.add('no-scroll');
    } else {
      this.mobileMenuIcon.src = '/wp-content/themes/houston-science-festival-theme/assets/img/header/hamburger-menu.webp';
      this.body.classList.remove('no-scroll');
    }
  }
}

export default MobileMenu;
