<footer class="relative z-site-footer">
	<div class="e-container">
		<div class="flex justify-between">
			<div class="relative">
				@foreach ($site_footer['information']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach

				@foreach ($site_footer['copyright']['items'] as $item)
					<li class="absolute bottom-0 list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<div>
				<p class="font-semibold">{{ $site_footer['products']['title'] }}</p>

				@foreach ($site_footer['products']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<div>
				<p class="font-semibold">{{ $site_footer['developers']['title'] }}</p>

				@foreach ($site_footer['developers']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach

				<p class="font-semibold mt-8">{{ $site_footer['company']['title'] }}</p>

				@foreach ($site_footer['company']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<div>
				<p class="font-semibold">{{ $site_footer['use_cases']['title'] }}</p>

				@foreach ($site_footer['use_cases']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach

				<p class="font-semibold mt-8">{{ $site_footer['resources']['title'] }}</p>

				@foreach ($site_footer['resources']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>
		</div>
	</div>
</footer>
