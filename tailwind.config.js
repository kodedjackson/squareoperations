import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary': '#EC7063',
                'primary-dark': '#C0392B',
                'accent': '#F39C12',
                'accent-light': '#F8B739',
                'bg-light': '#FAFAF9',
                'bg-dark': '#1A1A19',
                'text-dark': '#2D2D2D',
                'text-light': '#F5F5F4',
                'border': '#E8E8E7',
                'success': '#27AE60',
                'warning': '#E74C3C',
                'info': '#3498DB',
            },
        },
    },

    plugins: [forms, typography],
};
