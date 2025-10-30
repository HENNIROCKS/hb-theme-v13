export function toggleNavigation(navigationElement) {
  const iconClose = navigationElement.querySelector(".js-icon-close");
  const iconMenu = navigationElement.querySelector(".js-icon-menu");

  const navigationTarget = navigationElement.querySelector(
    ".js-navigation-target"
  );
  const navigationTrigger = navigationElement.querySelector(
    ".js-navigation-trigger"
  );

  navigationTrigger.addEventListener("click", (event) => {
    event.preventDefault();

    navigationTarget.classList.toggle("hidden");
    navigationTrigger.classList.toggle("open");

    if (navigationTrigger.classList.contains("open")) {
      iconClose.classList.remove("hidden");
      iconClose.classList.add("block");
      iconMenu.classList.remove("block");
      iconMenu.classList.add("hidden");
      // document.body.classList.add('before:absolute', 'before:bg-beige', 'before:bg-opacity-80', 'before:content-[\'\']', 'before:h-full', 'before:w-full', 'before:z-10', 'overflow-hidden');
    } else {
      iconClose.classList.remove("block");
      iconClose.classList.add("hidden");
      iconMenu.classList.remove("hidden");
      iconMenu.classList.add("block");
      // document.body.classList.remove('before:absolute', 'before:bg-beige', 'before:bg-opacity-80', 'before:content-[\'\']', 'before:h-full', 'before:w-full', 'before:z-10', 'overflow-hidden');
    }
  });
}
