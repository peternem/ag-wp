module.exports = function (grunt) {

    var AutoPrefix = require('less-plugin-autoprefix');

    // Project configuration
    // grunt.config('phplint', {
    //     options: {
    //         phpCmd: "/usr/bin/php",
    //         phpArgs: {
    //             '-ldf': true,
    //             '-d': ["display_errors", "display_startup_errors"]
    //         }
    //     },
    //     all: {
    //         src: '<%= paths.php.files %>'
    //     }
    // });

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                separator: '\n\n\n\n',
                stripBanners: false,
                banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
                ' * <%= pkg.homepage %>\n' +
                ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
                ' * Licensed GPLv2+' +
                ' */\n\n\n\n'
            },
            roosterpark: {
                src: ['dist/js/src/theme-scripts.js'],
                dest: 'dist/js/theme-scripts.js'
            },
            // extras: {
            //     src: ['assets/js/src/plugin-staticheader.js'],
            //     dest: 'assets/js/panorama-plugins.js'
            // },
            // extras1: {
            //     src: ['assets/js/src/plugin-parallax.js'],
            //     dest: 'assets/js/theme-plugins.js'
            // },
            // extras2: {
            //     src: ['assets/js/src/isotope-masonary-work.js'],
            //     dest: 'assets/js/isotope-masonary-work.js'
            // }
        },
        //        shell: {
        //            options: {
        //                stderr: false
        //            },
        //            target: {
        //                command: 'cp -a ~/Sites/panorama/wp-content/themes/panorama/release/panorama-park-theme'
        //            }
        //        },
        jshint: {
            all: [
                'Gruntfile.js',
                'dist/js/src/**/*.js',
            ],
            options: {
                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                unused: true,
                boss: true,
                eqnull: true,
                reporterOutput: '',
                globals: {
                    'module': true,
                    'jQuery': true,
                    'window': true,
                    'document': true,
                    'alert': true,
                    'console': true,
                    'require': true,
                }
            }
        },
        uglify: {
            options: {
                mangle: false,
                separator: '\n\n',
                report: 'min',
                banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
                ' * <%= pkg.homepage %>\n' +
                ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
                ' * Licensed GPLv2+' +
                ' */\n'
            },
            my_target_1: {
                files: {
                    'dist/js/theme-scripts.js': ['dist/js/src/theme-scripts.js']
                }
            }
        },
        test: {
            files: ['dist/js/test/**/*.js']
        },
        less: {
            all: {
                options: {
                    compress: true,
                    yuicompress: true,
                    sourceMap: true,
                    optimization: 2,
                    plugins: [
                        new AutoPrefix({browsers: '> 1%, last 2 versions, Firefox ESR, Opera 12.1'})
                    ]
                },
                files: {
                    'dist/css/theme-style.css': 'dist/less/theme-style.less'
                },
            }
        },
        browserSync: {
            dev: {
                options: {
                    proxy: 'http://agalite.test/',
                    host: 'agalite.test',
                    open: 'external',
                    files: ['dist/css/theme-style.css', 'dist/js/**/*.js', '**/*.php'],
                    watchTask: true,
                }
            }
        },
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1,
                banner: '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' +
                ' * <%= pkg.homepage %>\n' +
                ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
                ' * Licensed GPLv2+' +
                ' */\n'
            },
            target: {
                expand: true,
                cwd: 'dist/css/',
                src: ['*.css', '!*.min.css'],
                dest: 'dist/css/',
                ext: '.css'
            }
        },
        watch: {

            styles: {
                files: ['dist/less/**/*.less'],
                tasks: ['less'],
                options: {
                    debounceDelay: 500,
                    reload: true
                }
            },
            scripts: {
                files: ['dist/js/src/**/*.js'],
                tasks: ['jshint', 'concat', 'uglify'],
                options: {
                    debounceDelay: 500,
                    reload: true
                }
            },
            // phplint: {
            //     files: ['**/*.php'], // which files to watch,
            //     tasks: ['phplint'],
            //     options: {
            //         spawn: false,
            //         reload: true
            //     }
            // }
        },
        clean: {
            main: ['release/<%= pkg.name %>']
        },
        copy: {
            // Copy the plugin to a versioned release directory
            main: {
                src: [
                    '**',
                    '!bower_components/**',
                    '!node_modules/**',
                    '!release/**',
                    '!.git/**',
                    '!js/src/**',
                    '!img/src/**',
                    '!Gruntfile.js',
                    '!package.json',
                    '!.gitignore',
                    '!.gitmodules'
                ],
                dest: 'release/<%= pkg.name %>/'
            }
        },
        compress: {
            main: {
                options: {
                    mode: 'zip',
                    archive: './release/<%= pkg.name %>.<%= pkg.version %>.zip'
                },
                expand: true,
                cwd: 'release/<%= pkg.name %>/',
                src: ['**/*'],
                dest: '<%= pkg.name %>/'
            }
        },
        // phplint: {
        //     options: {
        //         stdout: true,
        //         stderr: true,
        //         swapPath: '/tmp'
        //     },
        //     files: ['*.php', '**/*.php', '!node_modules/**/*.php'] // which files to watch
        // }
    });

    // Load other tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-modernizr');

    // Default task.
    grunt.registerTask('default', ['jshint', 'clean', 'concat', 'uglify', 'less', 'cssmin', 'compress']);
    grunt.registerTask('build', ['default', 'copy']);
    grunt.registerTask('css', ['less']);
    grunt.registerTask('serve', ['browserSync', 'watch']);

    grunt.util.linefeed = '\n';
};
