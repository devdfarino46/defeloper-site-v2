module.exports = {
    map: false,
    plugins: [
    require('postcss-preset-env')({
        stage: 2,
        autoprefixer: false
    }),
    require('autoprefixer')({
        overrideBrowserslist: ['> 0.5%', 'last 2 versions', 'not dead'],
        flexbox: 'no-2009', // дополнительная настройка для лучшей поддержки flexbox
    }),
    require('cssnano')({
        preset: ['default', {
            discardComments: {
                removeAll: true, // удаление всех комментариев
            },
        }],
    })
    ]
}