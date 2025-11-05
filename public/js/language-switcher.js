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
    const i18nCache = {};

    async function loadDictionary(lang) {
        if (i18nCache[lang]) return i18nCache[lang];
        try {
            const res = await fetch(`/js/i18n/${lang}.json?v=${Date.now()}`, { cache: 'no-store' });
            if (!res.ok) throw new Error('dict load failed');
            const dict = await res.json();
            i18nCache[lang] = dict;
            return dict;
        } catch (_) {
            i18nCache[lang] = {};
            return {};
        }
    }

    async function applyDictionary(dict) {
        document.querySelectorAll('[data-i18n]').forEach((el) => {
            const key = el.getAttribute('data-i18n');
            if (!key) return;
            const value = key.split('.').reduce((o, k) => (o && o[k] != null ? o[k] : undefined), dict);
            if (typeof value === 'string') {
                el.textContent = value;
            }
        });
        document.querySelectorAll('[data-i18n-html]').forEach((el) => {
            const key = el.getAttribute('data-i18n-html');
            if (!key) return;
            const value = key.split('.').reduce((o, k) => (o && o[k] != null ? o[k] : undefined), dict);
            if (typeof value === 'string') {
                el.innerHTML = value;
            }
        });
    }

    async function switchLanguage(lang) {
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

        // Apply i18n dictionary
        const dict = await loadDictionary(lang);
        await applyDictionary(dict);

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
