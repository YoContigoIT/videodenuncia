/**
 * Físcalia General del Estado de Baja California
 *
 * Its a starter for application  development of codeigniter framework 
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2022 Yo Contigo IT
 *
 * @package    Físcalia General del Estado de Baja California
 * @author     Yo Contigo IT
 * @copyright  2022 Yo Contigo IT
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://yocontigo-it.mx
 * @since      Version 1.0.0
 * @filesource
 * 
 */
const path    = require('path')
const webpack = require('webpack')

// Plugins
const isDevelopment          = process.env.NODE_ENV === 'development'
const MiniCssExtractPlugin   = require('mini-css-extract-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const { VueLoaderPlugin }    = require('vue-loader')

module.exports = {
    // "production" | "development" | "none"
    mode : isDevelopment ? 'production' : 'development',
    entry: {
        app  : path.resolve(__dirname, 'src/js/app'),
        dash : path.resolve(__dirname, 'src/js/dashboard/index'),
        auth : path.resolve(__dirname, 'src/js/auth/index')
    },
    output: {
        path     : path.resolve(__dirname, 'dist/'),
        filename : 'js/[name].js'
    },
    resolve: {
        modules: [
            "node_modules",
            path.resolve(__dirname, 'dist/')
        ],
        // directories where to look for modules
        extensions: [
            '.js', '.json', '.jsx',
            '.ts', '.tsx',
            '.scss', '.css', '.less', '.styl',            
            '.gif', '.png', '.jpg', '.jpeg', '.svg',
            '.vue'
        ],
        alias: {
            vue: 'vue/dist/vue.js'
        }
    },
    module: {
        rules: [
            {
                test   : /\.(t|j)sx?$/,
                loader : 'babel-loader',
                exclude: /(node_modules|bower_components)/
            },
            {
                test   : /\.vue$/,
                loader : 'vue-loader'
            },
            {
                test   : /\.s[ac]ss$/i,
                loader : [
                    isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url      : true,
                            modules  : false,
                            sourceMap: isDevelopment
                        }
                    },
                    {
                        loader: 'resolve-url-loader',
                        options: {
                            url      : true,
                            modules  : false,
                            sourceMap: isDevelopment
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap  : isDevelopment,
                            sassOptions: {
                                fiber         : false,
                                implementation: require('node-sass'),
                                outputStyle   : 'compressed',
                                minimize      : true
                            }
                        }
                    }
                ]
            },
            {
                test    : /\.s[ac]ss$/i,
                exclude : /\.s[ac]ss$/i,
                loader  : [
                    isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader : 'sass-loader',
                        options: {
                            sourceMap : isDevelopment,
                        }
                    }
                ]
            },
            {   
                // Less config
                test: /\.less$/,
                use : [
                    'style-loader',
                    {
                        loader : 'css-loader',
                        options: {
                            url      : true,
                            sourceMap: true
                        }
                    },
                    'less-loader'
                ]
            },
            {
                // Stylus Config
                test: /\.styl$/,
                use : [
                    'style-loader',
                    {
                        loader : 'css-loader',
                        options: {
                            url      : true,
                            sourceMap: true
                        }
                    },
                    'stylus-loader'
                ]
            },
            {
                // Postcss Config
                test: /\.css$/,
                use : [
                    'style-loader',
                    {
                        loader : 'css-loader',
                        options: {
                            url          : true,
                            sourceMap    : true,
                            importLoaders: 1
                        }
                    },
                    'postcss-loader'
                ]
            },
            {
                test   : /\.(gif|png|jpe?g|mp3|svg)$/i,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name          : '[name].[ext]',
                            publicPath    : '../img',
                            outputPath    : '/img/',
                            bypassOnDebug : true, // webpack@1.x
                            disable       : true, // webpack@2.x and newer
                            esModule      : false,
                            context       : 'project'
                        }
                    }
                ]
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?[a-z0-9]+)?$/,
                use: [
                    {
                        loader : 'url-loader',
                        options: {
                            limit     : 100000,
                            name      : '[name].[ext]',
                            publicPath: '../fonts',
                            outputPath: '/fonts/'
                        }
                    }
                ]
            }
        ]
    },
    devServer: {
        hot : true,
        open: true,
        port: 9000,
        contentBase: path.join(__dirname, 'public'),
        headers: { "Access-Control-Allow-Origin": "*" }
    },
    devtool: isDevelopment === 'development' ? 'soure-map' : 'none',
    plugins: [
        new VueLoaderPlugin(),
        new CleanWebpackPlugin({ cleanStaleWebpackAssets: false }),
        new MiniCssExtractPlugin({
            filename: isDevelopment ? 'src/scss/[name].scss' : 'css/[name].css',
            chunkFilename: isDevelopment ? 'src/scss/[id].scss' : 'css/[name].css'
        }),
        // provide jQuery and Popper.js dependencies
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            jquery: 'jquery',
            'window.jQuery': 'jquery',
            Popper: ['popper.js', 'default']
        })
    ],
    optimization: {
        minimize   : true,
        splitChunks : {
            chunks  : 'all',
            minSize : 0,
            name    : 'commons'
        }
    }
}
