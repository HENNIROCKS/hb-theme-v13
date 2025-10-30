export function toggleTagcloud(tagcloudElement) {
  const detailsElement = tagcloudElement.closest("details");

  if (detailsElement) {
    const isMobile = window.innerWidth < 768; // Adjust the breakpoint as needed

    if (isMobile) {
      detailsElement.removeAttribute("open");
    } else {
      detailsElement.setAttribute("open", "");
    }
  }
}
