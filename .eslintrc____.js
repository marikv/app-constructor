module.exports = {
    "extends": ["airbnb-base", "plugin:vue/base"],
	// we need this to lint .vue files
	plugins: [
		"vue"
	],
	rules: {
		'no-tabs': ['off'],
		'no-mixed-spaces-and-tabs': ['off'],
		'no-console': ['off'],
		'indent': ["error", "tab"],
		'no-plusplus': ["error", { "allowForLoopAfterthoughts": true }],
		'no-eval': ['off'],
		'no-mixed-operators': ['off'],
		'no-alert': ['off'],
		'no-restricted-globals': ['off'],
		"linebreak-style": 0,
		'max-len': ['error', 120, 2, {
			ignoreUrls: true,
			ignoreComments: false,
			ignoreRegExpLiterals: true,
			ignoreStrings: true,
			ignoreTemplateLiterals: true,
		}],

		// we need this for state mutations
		'no-param-reassign': ["error", { "props": false }],

		'import/extensions': ['error', 'always', {
			js: 'never',
			vue: 'never'
		}],

		// allow debugger during development
		'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off'
	},
	"parserOptions": {
		"parser": "babel-eslint",
		"ecmaVersion": 6,
		"ecmaFeatures": {
			"experimentalObjectRestSpread": true
		}
	},
};
