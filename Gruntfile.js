module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    compass: {
      options: {
        sassDir: 'media/scss',
        cssDir: 'media/css',
        javascriptsDir: 'media/js',
        imagesDir: 'media/img',
        require: [
          'zurb-foundation'
        ]
      },
      dist: {
        options: {
          environment: 'production'
        }
      },
      dev: {
        options: {
          environment: 'development'
        }
      }
    },

    jshint: {
      files: [
        'Gruntfile.js',
        'media/js/**/*.js'
      ],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },

    watch: {
      dev: {
        files: ['media/scss/**/*.scss'],
        tasks: ['compass:dev']
      }
    }

  });


  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.registerTask('test', ['jshint']);

  grunt.registerTask('default', ['watch:dev']);

};