(() => {
  // resources/js/app.js
  (() => {
    window.addEventListener("load", function() {
      let e = document.querySelector("#primary-menu");
      document.querySelector("#primary-menu-toggle").addEventListener("click", function(n) {
        n.preventDefault(), e.classList.toggle("hidden");
      });
    });
  })();
})();
