module.exports = function (grunt) {

    // Project configuration
    grunt.config('phplint', {
        options: {
            phpCmd: "/usr/bin/php",
            phpArgs: {
                '-ldf': true,
                '-d': ["display_errors", "display_startup_errors"]
            }
        },
        all: {
            src: '<%= paths.php.files %>'
        }
    });

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
                src: ['inc/js/src/theme-scripts.js'],
                dest: 'inc/js/theme-scripts.js'
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
                'inc/js/dev/**/*.js',
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
                boss: true,
                eqnull: true,
                globals: {
                    exports: true,
                    module: false,
                    $: false,
                    jQuery: false,
                    console: false,
                    document: false,
                    window: false,
                    google: false,
                    alert: false,
                    setInterval: false,
                    setTimeout: false
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
                    'inc/js/theme-scripts.js': ['inc/js/src/theme-scripts.js']
                }
            }
        },
        test: {
            files: ['assets/js/test/**/*.js']
        },
        less: {
            all: {
                // options: {
                //   compress: true,
                //   yuicompress: true,
                //   optimization: 2
                // },
                files: {
                    'inc/css/theme-style.css': 'inc/less/theme-style.less'
                }
            }
        },
        browserSync: {
            dev: {
                options: {
                    proxy: 'http://agalite.test/',
                    host: 'agalite.test',
                    open: 'external',
                    files: ['inc/css/theme-style.css', 'inc/js/**/*.js', '**/*.php'],
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
                cwd: 'inc/css/',
                src: ['*.css', '!*.min.css'],
                dest: 'inc/css/',
                ext: '.css'
            }
        },
        watch: {

            styles: {
                files: ['inc/less/**/*.less'],
                tasks: ['less'],
                options: {
                    debounceDelay: 500,
                    reload: true
                }
            },
            scripts: {
                files: ['inc/js/src/**/*.js'],
                tasks: ['jshint', 'concat', 'uglify'],
                tasks: ['jshint'],
                options: {
                    debounceDelay: 500,
                    reload: true
                }
            },
            phplint: {
                files: ['**/*.php'], // which files to watch,
                tasks: ['phplint'],
                options: {
                    spawn: false,
                    reload: true
                }
            }
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
                    '!nbproject/**',
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
        phplint: {
            options: {
                stdout: true,
                stderr: true,
                swapPath: '/tmp'
            },
            files: ['*.php', '**/*.php', '!node_modules/**/*.php'] // which files to watch
        }
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
    grunt.loadNpmTasks('grunt-phplint');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-browser-sync');
    // Default task.
    grunt.registerTask('default', ['jshint', 'clean', 'concat', 'uglify', 'less', 'cssmin', 'compress']);
    grunt.registerTask('build', ['default', 'copy']);
    grunt.registerTask('css', ['less', 'phplint']);
    grunt.registerTask('php', ['phplint']);
    grunt.registerTask('serve', ['browserSync', 'watch']);

    grunt.util.linefeed = '\n';
};
