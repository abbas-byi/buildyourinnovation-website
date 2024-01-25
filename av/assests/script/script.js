// Fonts Dropdown Script
document.addEventListener("DOMContentLoaded", function () {
  const fontDropdown = document.getElementById("fontDropdown");
  const iframeContainer = document.getElementById("iframeContainer");
  const fontHeading = document.getElementById("fontsHeading");

  function toggleDropdown() {
      fontDropdown.classList.toggle("hidden");
      iframeContainer.classList.toggle("hidden");

      if (!fontDropdown.classList.contains("hidden")) {
          const rect = fontHeading.getBoundingClientRect();
          fontDropdown.style.left = `0`;
          fontDropdown.style.top= `37.5%`;

          document.addEventListener("click", handleDocumentClick);
          document.addEventListener("keydown", handleEscapeKey);
      } else {
          document.removeEventListener("click", handleDocumentClick);
          document.removeEventListener("keydown", handleEscapeKey);
      }
  }

  fontHeading.addEventListener("click", function (event) {
      event.stopPropagation();
      toggleDropdown();
  });

  function handleDocumentClick(event) {
      if (!fontDropdown.contains(event.target) && !fontHeading.contains(event.target)) {
          toggleDropdown();
      }
  }

  function handleEscapeKey(event) {
      if (event.key === "Escape") {
          toggleDropdown();
      }
  }
});


// Fonts Dropdown Script End

// Color Dropdown Script Start
document.addEventListener("DOMContentLoaded", function () {
    const colorsDropdown = document.getElementById("colorsDropdown");
    const iframeContainer = document.getElementById("colorIframeContainer");
    const colorsHeading = document.getElementById("colorsHeading");
  
    function toggleDropdown() {
        colorsDropdown.classList.toggle("hidden");
        iframeContainer.classList.toggle("hidden");
  
        if (!colorsDropdown.classList.contains("hidden")) {
            const rect = colorsHeading.getBoundingClientRect();
            colorsDropdown.style.left = `0`;
            colorsDropdown.style.top= `60%`;
  
            document.addEventListener("click", handleDocumentClick);
            document.addEventListener("keydown", handleEscapeKey);
        } else {
            document.removeEventListener("click", handleDocumentClick);
            document.removeEventListener("keydown", handleEscapeKey);
        }
    }
  
    colorsHeading.addEventListener("click", function (event) {
        event.stopPropagation();
        toggleDropdown();
    });
  
    function handleDocumentClick(event) {
        if (!colorsDropdown.contains(event.target) && !colorsHeading.contains(event.target)) {
            toggleDropdown();
        }
    }
  
    function handleEscapeKey(event) {
        if (event.key === "Escape") {
            toggleDropdown();
        }
    }
  });
  