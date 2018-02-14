module.exports = {
	dist: {
		options: {
			map: true,
			processors: [
				require( 'autoprefixer' )( {browsers: 'last 2 versions'} ),
			]
		},
		files: {
			'assets/css/project.css': [ 'assets/css/project.css' ]
		}
	}
};
