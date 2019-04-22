module.exports = {
    "extends": "airbnb-base",
    rules: {
    	'no-param-reassign': ['off'],
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
    }
};