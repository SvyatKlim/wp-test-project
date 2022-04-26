const theme = 'fit750';
const srcPath = 'src';
const destPath = `app/wp-content/themes/${theme}/`;
const assetsPath = `${destPath}/assets`

const config = {
  src: {
    sass: `${srcPath}/scss`,
    js: `${srcPath}/js`,
    // fonts: `${srcPath}/assets/fonts`,
    // images: `${srcPath}/assets/images`,
    // icons: `${srcPath}/assets/icons/`,
  },

  dest: {
    dest: destPath,
    css: `${assetsPath}/css`,
    js: `${assetsPath}/js`,
    // fonts: `${destPath}/fonts`,
    // images: `${destPath}/images`,
  },

  browserSyncOptions : {
    "proxy": "http://fit750.loc/",
    "notify": true
  },

  setEnv() {
    this.isProd = process.argv.includes('--prod');
    this.isDev = !this.isProd;
  },
};

export default config;
