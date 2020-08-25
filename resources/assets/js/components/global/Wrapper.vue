<template>
	<div>
		<site-header
			v-bind="$props.siteHeader"
		/>

		<pre v-text="$props.siteFooter" />
	</div>
</template>

<script>
	import SiteHeader from './SiteHeader';

	export default {
		components: {
			SiteHeader,
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
