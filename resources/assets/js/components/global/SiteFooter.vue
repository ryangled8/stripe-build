<template>
	<div>
		<ul>
			<li
				v-for="(item, index) in $props.nav"
				:key="index"
			>
				<a
					v-html="item.information.title"
				/>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {
		props: {
			nav: {
				type: Array,
				default: null,
			},
		},
	};
</script>
