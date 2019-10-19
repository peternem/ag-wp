module.exports = {
    mode: 'development',
    module: {
        rules: [
            {
                test: /.js$/,
                loader: 'babel-loader',
            },
        ],
    },
    externals: {
        jquery: 'jQuery'
    },
};
