class bugerNavbar {
    constructor(bugerMenu, navList, navLinks) {
      this.bugerMenuMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.bugerMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.bugerMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.bugerMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const bugerNavbar = new MobileNavbar(
    ".buger-menu",
    ".nav-list",
    ".nav-list li",
  );
  mobileNavbar.init();