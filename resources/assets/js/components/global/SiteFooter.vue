<template>
	<div
		class="flex"
	>
		<div>
			<ul>
				<li
					v-for="(item, index) in $props.information"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>

			<ul>
				<li
					v-for="(item, index) in $props.copyright"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>
		</div>

		<ul>
			<li
				v-for="(item, index) in $props.products"
				:key="index"
			>
				<a
					v-html="item.title"
				/>
			</li>
		</ul>

		<div>
			<ul>
				<li
					v-for="(item, index) in $props.developers"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>

			<ul>
				<li
					v-for="(item, index) in $props.company"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>
		</div>

		<div>
			<ul>
				<li
					v-for="(item, index) in $props.useCases"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>

			<ul>
				<li
					v-for="(item, index) in $props.resources"
					:key="index"
				>
					<a
						v-html="item.title"
					/>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			information: {
				type: Array,
				default: null,
			},

			copyright: {
				type: Array,
				default: null,
			},

			products: {
				type: Array,
				default: null,
			},

			developers: {
				type: Array,
				default: null,
			},

			company: {
				type: Array,
				default: null,
			},

			useCases: {
				type: Array,
				default: null,
			},

			resources: {
				type: Array,
				default: null,
			},
		},
	};
</script>
