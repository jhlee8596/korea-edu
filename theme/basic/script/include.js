document.addEventListener("DOMContentLoaded", function () {
  const includeHTML = async () => {
    const elements = document.querySelectorAll("[data-include]");

    for (let el of elements) {
      const file = el.getAttribute("data-include");
      if (file) {
        try {
          const response = await fetch(file);
          if (response.ok) {
            const text = await response.text();
            el.innerHTML = text;
          } else {
            el.innerHTML = `Error: Could not load ${file}`;
          }
        } catch (error) {
          el.innerHTML = `Error: ${error.message}`;
        }
      }
    }
  };

  includeHTML();
});
