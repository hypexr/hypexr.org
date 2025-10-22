// Common JavaScript for all pages

// Function to load top navigation
function loadTopNav() {
  fetch('top_nav.html')
    .then(response => response.text())
    .then(html => {
      const topNavElement = document.getElementById('top_nav');
      if (topNavElement) {
        topNavElement.innerHTML = html;
      }
    })
    .catch(error => {
      console.error('Error loading top_nav.html:', error);
    });
}

// Function to set random logo (for index page)
function setRandomLogo() {
  // Available logos: 0, 3, 6, 7
  const logos = ["0", "3", "6", "7"];
  const randomIndex = Math.floor(Math.random() * logos.length);
  const logoNumber = logos[randomIndex];

  const logoImg = document.getElementById('randomLogo');
  if (logoImg) {
    logoImg.src = "gfx/logo" + logoNumber + ".png";
    console.log("Set logo to: gfx/logo" + logoNumber + ".png");

    // Add error handling
    logoImg.onerror = function() {
      console.error("Failed to load logo image: " + this.src);
      console.log("Trying default logo0.png");
      this.src = "gfx/logo0.png";
    };

    logoImg.onload = function() {
      console.log("Successfully loaded logo: " + this.src);
    };
  } else {
    console.log("randomLogo element not found");
  }
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', function() {
    loadTopNav();
    setRandomLogo(); // Will only work if element exists
  });
} else {
  // DOM is already loaded
  loadTopNav();
  setRandomLogo();
}