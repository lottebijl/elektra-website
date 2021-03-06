/*jslint browser: true, unparam: true, vars: true, plusplus: true, devel: true, nomen: true, indent: 2 */
/*global require */
(function () {
  'use strict';

  /* Require Gulp plugins */
  var fileinclude = require('gulp-file-include'),
    gulp        = require('gulp'),
    newer       = require('gulp-newer'),
    concat      = require('gulp-concat'),
    rename      = require('gulp-rename'),
    bulkSass    = require('gulp-sass-bulk-import'),
    notify      = require('gulp-notify'),
    del         = require('del'),
    runSequence = require('run-sequence'),
    browserSync = require('browser-sync').create(),
    svgmin      = require('gulp-svgmin'),
    image       = require('gulp-image'),
    uglify      = require('gulp-uglify'),
    useref      = require('gulp-useref'),
    sourcemaps  = require('gulp-sourcemaps'),
    cleanCSS    = require('gulp-clean-css'),
    sass        = require('gulp-sass'),
    php = require('gulp-connect-php'),
    phpipe = require('gulp-phpipe'),
    sassOptions = {errLogToConsole: true, outputStyle: 'expanded'};

  const directories = {
    src: 'app',
    dest: 'dist',
    node: 'node_modules'
  };

  const locations = {
    components: directories.src + '/views/modules/**'
  };
  const paths = {
  styles: {
    src: [
      directories.src + '/styles/'
    ],
    base: [
      directories.src + '/styles/vendor.scss',
      directories.src + '/styles/global.scss',
      directories.src + '/styles/modules.scss',
    ],
    vendor: [
      directories.node + '/magnific-popup/dist/magnific-popup.css',
      directories.node + '/foundation-sites/dist/css/foundation.css',
      directories.node + '/slick-carousel/slick/slick.css',
      directories.node + '/photoswipe/dist/photoswipe.css',
      directories.node + '/photoswipe/dist/default-skin/default-skin.css'
    ],
    dest: directories.dest + '/css'
  },
  scripts: {
    src: [
      directories.src + '/scripts/'
    ],
    components: [
      directories.src + '/scripts/modules/*.js'
    ],
    vendor: [
      directories.node + '/jquery/dist/jquery.js',
      directories.node + '/foundation-sites/dist/js/foundation.js',
      directories.node + '/slick-carousel/slick/slick.min.js',
      directories.node + '/photoswipe/dist/photoswipe.js',
      directories.node + '/photoswipe/dist/photoswipe-ui-default.js',
      directories.src + '/scripts/vendor/**/*.js',

    ],
    dest: directories.dest + '/js'
  },
  html: {
    src: [
      directories.src + '/templates/*.html',
      directories.src + '/templates/*.php'
    ],
    components_src: [
      locations.components + '/*.html',
      locations.components + '/*.php'
    ],
    components_dest: directories.dest + '/components'
  },
  api: {
    src: [
      directories.src + '/api/*.php'
    ],
    dest: directories.dest + '/api'
  },
  json: {
    src: [
      directories.src + '/*.json'
    ],
    dest: directories.dest + '/json'
  },
  assets: {
    fonts: {
      src: [
        directories.src + '/assets/fonts/**/*'
      ],
      dest: directories.dest + '/assets/fonts/'
    },
    images: {
      src: [
        directories.src + '/assets/images/**/*.png',
        directories.src + '/assets/images/**/*.jpg',
        directories.src + '/assets/images/**/*.gif'
      ],
      dest: directories.dest + '/assets/images/'
    },
    svg: {
      src: [
        directories.src + '/assets/svg/**/*.svg'
      ],
      dest: directories.dest + '/assets/svg/'
    },
    other: {
      src: [
        directories.src + '/assets/other/**/*'
      ],
      dest: directories.dest + '/assets/other/'
    }
  }
};

  // Clean dist
  gulp.task('clean', function () {
    return del('./dist');
  });
  // Build templates and export
  gulp.task('createTemplates', function () {
    return gulp.src(['app/*.php', 'app/*.html'])
      // .pipe(fileinclude({prefix: '@@'}))
      .pipe(phpipe())
      .pipe(rename(function (path) {
          path.extname = ".html";
          return path;
      }))
      .pipe(gulp.dest('dist'));
  });


  gulp.task('handlebarsTemplates', function() {
    return gulp.src(['app/views/*.handlebars'])
      .pipe(gulp.dest('dist/views'));
  });

  gulp.task('handlebarsPartials', function() {
    return gulp.src(['app/views/modules/**/*.handlebars'])
      .pipe(gulp.dest('dist/views/modules'));
  });

  gulp.task('handlebarsElements', function() {
    return gulp.src(['app/views/elements/*.handlebars'])
      .pipe(gulp.dest('dist/views/elements'));
  });

  // Combine and Minify the JS and CSS sources.
  gulp.task('combineSources', function () {
    return gulp.src(['dist/*.php', 'dist/*.html'])
      .pipe(useref())
      .pipe(gulp.dest('dist'));
  });

  gulp.task('assets:all', function() {
    return gulp.start('assets:fonts', 'assets:images', 'assets:svg', 'assets:other');
  });

  // Export the fonts to their appropriate locations
  gulp.task('assets:fonts', function () {
    return gulp.src(paths.assets.fonts.src)
      .pipe(newer(paths.assets.fonts.dest))
      .pipe(gulp.dest(paths.assets.fonts.dest));
  });

  // Optimizes Images (also SVG, but not using that extension)
  gulp.task('assets:images', function () {
    return gulp.src(paths.assets.images.src)
      .pipe(newer(paths.assets.images.dest))
      .pipe(image())
      .pipe(gulp.dest(paths.assets.images.dest));
  });


  // Minimize SVG images and export
  gulp.task('assets:svg', function () {
    return gulp.src(paths.assets.svg.src)
      .pipe(newer(paths.assets.svg.dest))
      .pipe(svgmin())
      .pipe(gulp.dest(paths.assets.svg.dest));
  });

  gulp.task('assets:other', function() {
    return gulp.src(paths.assets.other.src)
      .pipe(newer(paths.assets.other.dest))
      .pipe(gulp.dest(paths.assets.other.dest))
  });

gulp.task('css', ['css:vendor', 'css:global', 'css:modules'], function() {
  return gulp.src(paths.styles.base)
    .pipe(concat('style.scss'))
    .pipe(sass({}))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(rename({suffix: '.min'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(notify({message: 'css task done'}))
});

gulp.task('css:global', function() {
  // return gulp.src(paths.styles.src + 'global/*.scss')
  //   .pipe(concat('global.scss'))
  //   .pipe(gulp.dest(paths.styles.src + '/'))
  //   .pipe(bulkSass())
  //   .pipe(notify({message: 'css:global task done'}));
});

gulp.task('css:modules', function() {
  return gulp.src('app/views/modules/**/scss/*.scss')
    .pipe(concat('modules.scss'))
    .pipe(gulp.dest(paths.styles.src + '/'))
    .pipe(bulkSass())
    .pipe(notify({message: 'css:modules task done'}));
});

gulp.task('css:vendor', function() {
  return gulp.src(paths.styles.vendor)
    .pipe(concat('vendor.scss'))
    .pipe(gulp.dest(paths.styles.src + '/'))
    .pipe(bulkSass())
    .pipe(notify({message: 'css:vendor task done'}));
});

  gulp.task('js:all', function() {
    return gulp.start('js', 'js:vendor');
  });

  gulp.task('js', ['js:build'], function() {
    return gulp.src(['app/scripts/modules.js', 'app/scripts/base.js'])
      .pipe(concat('script.js'))
      .pipe(gulp.dest(paths.scripts.dest))
      .pipe(rename({suffix: '.min'}))
      .pipe(uglify())
      .pipe(gulp.dest(paths.scripts.dest))
      .pipe(notify({message: 'js task done'}))
  });

  gulp.task('js:build', function() {
    return gulp.src(paths.scripts.components)
      .pipe(concat('modules.js'))
      .pipe(gulp.dest(paths.scripts.src + '/'))
      .pipe(notify({message: 'js:build task done'}));
  });

  gulp.task('js:vendor', function() {
  return gulp.src(paths.scripts.vendor)
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(rename({suffix : '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(notify({message: 'js:vendor task done'}));
});

gulp.task('api', function() {
  return gulp.src(paths.api.src)
    .pipe(gulp.dest(paths.api.dest))
    .pipe(notify({message: 'api task done'}));
});


  // Run Browsersync html server
  gulp.task('php', function () {
    php.server({ base: './dist', port: 8010, keepalive: true});
  });
  gulp.task('watch', function () {
    gulp.watch(['app/views/modules/**/scss/*.scss', 'app/styles/modules/*.scss', 'app/styles/global/*.scss', paths.styles.src, directories.src + '/scss/*.scss'], ['styling']);
    gulp.watch([paths.scripts.src,'app/scripts/modules/*.js', directories.src + '/scripts/*.js'], ['js']);
    gulp.watch(['app/*.php', 'app/*.html', 'app/views/elements/*.handlebars', 'app/views/modules/**/*.handlebars'], ['html']);
    gulp.watch([paths.assets.fonts.src], ['assets:fonts']);
    gulp.watch([paths.assets.images.src], ['assets:images']);
    gulp.watch(['app/assets/svg/*.svg', paths.assets.svg.src], ['assets:svg']);
    gulp.watch([paths.assets.other.src], ['assets:other']);
  });

  // Actions run from the browser or from a Watcher
  gulp.task('default', ['clean'], function (cb) {
    runSequence('media', 'scripting', 'styling', cb);
  });
  gulp.task('all', function (cb) {
    runSequence('media','scripting', 'styling', cb);
  });
  gulp.task('media', function (cb) {
    runSequence('assets:all', cb);
  });
  gulp.task('styling', function (cb) {
    runSequence('css', 'html', cb);
  });
  gulp.task('scripting', function (cb) {
    runSequence('js:all', cb);
  });
  gulp.task('html', function (cb) {
    runSequence('api', 'createTemplates', 'handlebarsElements', 'handlebarsPartials', 'handlebarsTemplates', 'combineSources', cb);
  });
  gulp.task('files', function (cb) {
    runSequence('clean', 'sass', 'createTemplates', 'combineSources', 'scripts', cb);
  });
}());
