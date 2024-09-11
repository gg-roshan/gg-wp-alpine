//
import fluid, { extract, screens } from 'fluid-tailwind'

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: {
		// Ensure changes to PHP files trigger a rebuild.
		files: ['./theme/**/*.php'],
		// Utilise Tailwind Fluid Extractor Package
		extract
	},
	theme: {
		// Extend the default Tailwind theme.
		extend: {

			backgroundImage: {
				"midnight-pattern" :"url(/wp-content/themes/tykee-advisory/theme/resources/images/midnight-pattern.svg)",
				"arrow": "url(/wp-content/themes/tykee-advisory/theme/resources/images/tykeearrow.svg)"
			},
			backgroundSize: {
				'auto': 'auto',
				'cover': 'cover',
				'contain': 'contain',
				'md': '50%',
				'sm': '4rem',
			},
			aspectRatio: {
				'portait': '3 / 4',
				'landscape': '4 / 2.5',
			},
			boxShadow: {
				'gl': '0px 24px 24px -12px rgba(54, 74, 54, 0.06), 0px 1px 2px 0px rgba(87, 92, 86, 0.16), 0px 0px 0px 1px rgba(18, 105, 63, 0.08)',
				'menu': '0px 4px 13.9px 0px rgba(0, 0, 0, 0.15)'
			},
		},
		fontSize: {
			sm: '0.8rem',
			base: '1rem',
			xl: '1.25rem',
			'2xl': '1.563rem',
			'3xl': '1.953rem',
			'4xl': '2.441rem',
			'5xl': '3.052rem',
			'6xl': '3.75rem',
			'7xl': '4.5rem',
		  },
		fontFamily: {
			'franie': ['Franie', 'sans-serif'],
		},
		screens
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		fluid,
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
