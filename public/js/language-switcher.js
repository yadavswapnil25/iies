// Language dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const languageBtn = document.getElementById("languageBtn");
    const languageMenu = document.getElementById("languageMenu");

    // Toggle dropdown
    if (languageBtn && languageMenu) {
        languageBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            languageMenu.classList.toggle("show");
        });

        // When user selects a language
        languageMenu.querySelectorAll("div").forEach((item) => {
            item.addEventListener("click", () => {
                const lang = item.dataset.lang;
                switchLanguage(lang);
                languageMenu.classList.remove("show");
            });
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", (e) => {
            if (!languageMenu.parentElement.contains(e.target)) {
                languageMenu.classList.remove("show");
            }
        });
    }

    // Function to switch language
    function switchLanguage(lang) {
        // Set the lang attribute on the body
        document.body.setAttribute("lang", lang);
        document.documentElement.lang = lang;

        // Update language button text
        const languageBtn = document.getElementById("languageBtn");
        if (languageBtn) {
            const englishText = languageBtn.querySelector('.english-text');
            const hindiText = languageBtn.querySelector('.hindi-text');
            
            if (lang === 'en') {
                if (englishText) englishText.textContent = 'English';
                if (hindiText) hindiText.textContent = 'English';
            } else if (lang === 'hi') {
                if (englishText) englishText.textContent = 'हिन्दी';
                if (hindiText) hindiText.textContent = 'हिन्दी';
            }
        }

        // Update dynamic content if function exists
        if (typeof updateDynamicContent === 'function') {
            updateDynamicContent(lang);
        }

        // Save preference to localStorage
        localStorage.setItem("preferredLanguage", lang);
    }

    // Initialize language on page load
    const savedLanguage = localStorage.getItem("preferredLanguage") || "en";
    switchLanguage(savedLanguage);
});
