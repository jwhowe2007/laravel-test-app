import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import mdx from '@mdx-js/rollup';

export default defineConfig({
    plugins: [
        { enforce: 'pre', ...mdx() },
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
        react({ include: /\.(mdx|js|jsx|ts|tsx)$/ }),
    ],
});
