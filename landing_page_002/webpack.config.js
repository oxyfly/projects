const path = require('path');

module.exports = {
  mode: "production",
  entry: [
    './js/scripts.js',
  ],
  output: {
    filename: './js/bundle.js'
  },
  devtool: "source-map",
  module: {
    rules: [{
      test: /\.js$/,
      include: path.resolve(__dirname, 'js'),
      use: {
        loader: 'babel-loader',
        options: {
          presets: 'env'
        }
      }
    },
    ]
  },
  plugins: [
  ]
};