<template>
	<component
		:is="cElement"
		:class="[
			'e-button',
			`e-button--${$props.type}`,
			$props.icon
				? 'pl-6 pr-4'
				: 'px-6',
		]"
		:href="$props.url"
	>
		<span
			v-html="$props.title"
		/>

		<icon
			v-if="$props.icon"
			class="ml-1"
			:name="$props.icon"
		/>
	</component>
</template>

<script>
	export default {
		props: {
			title: {
				type: String,
				required: true,
			},

			url: {
				type: String,
				default: null,
			},

			type: {
				type: String,
				default: 'dark',
			},

			icon: {
				type: String,
				default: null,
			},
		},

		computed: {
			cElement: function () {
				return this.href ? 'a' : 'button';
			},
		},
	};
</script>
