import gulp from 'gulp';
import config from './gulp/config.js';
import clean from './gulp/tasks/clean.js';
import server from './gulp/tasks/server.js';
import { scriptsBuild, scriptsWatch } from './gulp/tasks/scripts.js';
import { sassBuild, sassWatch } from './gulp/tasks/styles.js';
// import { htmlBuild, htmlWatch } from './gulp/tasks/html';
// import { assetsBuild, assetsWatch } from './gulp/tasks/assets';


config.setEnv();

export const build = gulp.series(
  clean,
  gulp.parallel(
    scriptsBuild,
    sassBuild,
    // htmlBuild,
    // assetsBuild,
  ),
);

export const watch = gulp.series(
  build,
  server,
  gulp.parallel(
    scriptsWatch,
    sassWatch,
    // htmlWatch,
    // assetsWatch,
  ),
);

gulp.task('default', watch);