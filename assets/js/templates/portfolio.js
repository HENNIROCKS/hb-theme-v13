const element = document.querySelector(".js-articles");
const button = document.querySelector(".js-more");

let page = parseInt(element.getAttribute("data-page"));

const fetchArticles = async () => {
  let url = `${window.location.href.split("#")[0]}.json/page:${page}`; // see info
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    button.hidden = !more;
    element.insertAdjacentHTML("beforeend", html);
    page++;
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

button.addEventListener("click", fetchArticles);
