import browserSync from 'browser-sync';
import config from '../config.js';

const server = (callback) => {
  browserSync.create().init({
    proxy: config.browserSyncOptions.proxy,
    notify: config.browserSyncOptions.notify,
    files: [
      `${config.dest.dest}/*.php`,
      `${config.dest.css}/*.css`,
      `${config.dest.js}/*.js`,
      // {
      //   match: `${config.dest.images}/**/*`,
      //   fn() {
      //     this.reload();
      //   },
      // },
    ],


  });

  callback();
};

export default server;
