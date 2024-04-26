// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');

const isProduction = process.env.NODE_ENV == 'production';
const stylesHandler = isProduction ? MiniCssExtractPlugin.loader : 'style-loader';



const config = {
    entry: {
        "bootstrap": { import: './src/js/bootstrap.js', filename: 'js/[name].bundle.js' },
        "bootstrap-icons" : { import: './src/js/bootstrap-icons.js', filename: 'js/[name].bundle.js' },
        "custom" : { import: './src/js/custom.js', filename: 'js/[name].bundle.js' },
    },
    output: {
        path: path.resolve(__dirname, 'public/src'),
    },
    plugins: [
        new RemoveEmptyScriptsPlugin()
    ],
    optimization: {
        removeEmptyChunks: true,
        splitChunks: {
            chunks: 'all',
            minSize: 150000,
            maxAsyncSize: 190000,
            name(module, chunks, cacheGroupKey) {
                const allChunksNames = chunks.map((item) => item.name).join('~');
                return allChunksNames;
            },
        },
    },
    module: {
        rules: [
            {
                test: /\.(scss|css|sass)$/i,
                use: [stylesHandler, 'css-loader', 'postcss-loader', 'sass-loader'],
            },
            {
                test: /\.(eot|svg|ttf|png|jpg|gif)$/i,
                include: path.resolve(__dirname, './node_modules/bootstrap-icons/font/icons'),
                use: [
                    {
                      loader: 'file-loader',
                      options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts',
                        publicPath: 'fonts',
                      }
                    }
                  ]
                
            },
            {
                test: /\.(woff2|woff)$/i,
                type: 'asset/resource',
            }
        ],
    },
};

module.exports = () => {
    if (isProduction) {
        config.mode = 'production';
        config.plugins.push(new MiniCssExtractPlugin({ 
            filename: 'css/[name].css',
        }));
        config.performance = { hints : false }

    } else {
        config.mode = 'development';
    }
    return config;
};
