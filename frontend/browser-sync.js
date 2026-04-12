const bs = require("browser-sync").create();
const { createProxyMiddleware } = require('http-proxy-middleware');

bs.init({
    open: false,
    server: {
        baseDir: "./prebuild",
        middleware: [
            // Прокси для WordPress ajax
            createProxyMiddleware('/wp-admin/admin-ajax.php', {
                target: 'http://localhost:8080',
                changeOrigin: true,
                logLevel: 'debug'
            }),
        ]
    },
    port: 3000
});

bs.watch('prebuild/**/*.html').on('change', () => {
    bs.reload();
});

bs.watch('prebuild/css/**/*.css').on('change', () => {
    bs.reload('*.css');
});

bs.watch('prebuild/js/**/*.js').on('change', () => {
    bs.reload();
});