module.exports = {
	options: {
		stripBanners: true,
			banner: '/*! <%= pkg.title %> - v<%= pkg.version %>\n' +
		' * <%= pkg.homepage %>\n' +
		' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
		' * Licensed GPL-2.0+' +
		' */\n'
	},
	main: {
		src: [
			'assets/js/vendor/responsiveTabs.js',
			'assets/js/vendor/stellar.js',
			'assets/js/vendor/slick.js',
			'assets/js/vendor/modaal.js',
			'assets/js/vendor/masonry.js',
			'assets/js/vendor/equalHeights.js',
			'assets/js/src/project.js'
		],
		dest: 'assets/js/project.js'
	}
};
