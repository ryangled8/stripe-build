<template>
	<div>
		<site-header
			v-bind="$props.siteHeader"
		/>

		<site-footer
			v-bind="$props.siteFooter"
		/>
	</div>
</template>

<script>
	import SiteHeader from './SiteHeader';
	import SiteFooter from './SiteFooter';

	export default {
		components: {
			SiteHeader,
			SiteFooter,
		},

		props: {
			siteHeader: {
				type: Object,
				default: null,
			},
			siteFooter: {
				type: Object,
				default: null,
			},
		},
	};
</script>
