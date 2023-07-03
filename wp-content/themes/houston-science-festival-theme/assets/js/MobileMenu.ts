class MobileMenu {
  private button: HTMLElement;
  private container: HTMLElement;
  private navigation: HTMLElement;
  private socialMedia: HTMLElement;
  private mobileMenuIcon: HTMLImageElement;
  private body: HTMLBodyElement;

  constructor() {
    this.button = document.querySelector("#header__mobile-menu-icon") as HTMLElement;
    this.container = document.querySelector("#header__container") as HTMLElement;
    this.navigation = document.querySelector("#navigation") as HTMLElement;
    this.socialMedia = document.querySelector("#header__social-media") as HTMLElement;
    this.mobileMenuIcon = document.querySelector("#header__mobile-menu-icon img") as HTMLImageElement;
    this.body = document.querySelector("body") as HTMLBodyElement;
    this.events();
  }

  private events(): void {
    this.button.addEventListener("click", () => this.openMenu());
  }

  private openMenu(): void {
    this.container.classList.toggle("overlay");
    this.navigation.classList.toggle("show");
    this.socialMedia.classList.toggle("show");
    if (this.container.classList.contains("overlay")) {
      this.mobileMenuIcon.src = "/wp-content/themes/houston-science-festival-theme/assets/img/header/close.webp";
      this.body.classList.add("no-scroll");
    } else {
      this.mobileMenuIcon.src = "/wp-content/themes/houston-science-festival-theme/assets/img/header/hamburger-menu.webp";
      this.body.classList.remove("no-scroll");
    }
  }
}

export default MobileMenu;
