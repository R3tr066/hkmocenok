import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import '../css/app.css';

import { initFlowbite } from 'flowbite';
import { router } from '@inertiajs/vue3';

router.on('navigate', () => {
    setTimeout(() => initFlowbite(), 0);
});

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        return pages[`./Pages/${name}.vue`].default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);

        setTimeout(() => initFlowbite(), 0);
    },
});
