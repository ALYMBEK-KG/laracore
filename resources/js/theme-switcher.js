class ThemeSwitcher {
    constructor(element, switcherElement) {
        this.element = element;
        this.switcherElement = switcherElement;

        this.switcherElement.addEventListener('click', () => this.switchTheme(), true);

        const settings = this.getSettings();

        if (!settings.theme) {
            settings.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        this.element.classList.remove('dark', 'light');
        this.element.classList.add(settings.theme);

        this.saveSettings(settings);
    }

    switchTheme() {
        const settings = this.getSettings();

        if (this.element.classList.contains('light')) {
            settings.theme = 'dark';
            this.element.classList.remove('light');
            this.element.classList.add('dark');
        } else {
            settings.theme = 'light';
            this.element.classList.remove('dark');
            this.element.classList.add('light');
        }

        this.saveSettings(settings);
    }

    getSettings() {
        return JSON.parse(localStorage.getItem('settings') || '{}');
    }

    saveSettings(settings) {
        localStorage.setItem('settings', JSON.stringify(settings));

        return true;
    }
};

const themeSwitcherButton = document.getElementById('theme-switcher');
if (themeSwitcherButton) {
    window.themeSwitcher = new ThemeSwitcher(document.documentElement, themeSwitcherButton);
}
