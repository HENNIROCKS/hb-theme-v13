// // Ensure Lightbox2 is included in your project
// // Example: Add <script src="path/to/lightbox.js"></script> in your HTML file

// if (typeof lightbox !== "undefined") {
//   lightbox.option({
//     // https://lokeshdhakar.com/projects/lightbox2/#options
//     resizeDuration: 0,
//   });
// } else {
//   console.error(
//     "Lightbox is not defined. Ensure the Lightbox2 library is included."
//   );
// }

// /* ++++++++++++++++++++ */

// const navigationSelector = document.querySelector(".js-navigation");

// if (navigationSelector) {
//   async function navigation() {
//     return await import("./components/navigation.js");
//   }

//   navigation()
//     .then((r) => {
//       r.toggleNavigation(navigationSelector);
//     })
//     .catch((r) => {
//       console.log(r);
//     });
// }

// const tagcloudSelector = document.querySelector(".js-tagcloud");

// if (tagcloudSelector) {
//   async function tagcloud() {
//     return await import("./components/tagcloud.js");
//   }

//   tagcloud()
//     .then((r) => {
//       r.toggleTagcloud(tagcloudSelector);
//     })
//     .catch((r) => {
//       console.log(r);
//     });
// }
