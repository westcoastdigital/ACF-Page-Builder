module.exports = {
	main: {
		options: {
			mode: 'zip',
			archive: './release/<%= pkg.name %>.<%= pkg.version %>.zip'
		},
		expand: true,
		cwd: 'release/<%= pkg.version %>/',
		src: ['**/*'],
		dest: '<%= pkg.name %>/'
	}
};
