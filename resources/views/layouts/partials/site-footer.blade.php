<footer class="relative z-site-footer bg-brand-light-grey">
	<div class="e-container py-20">
		<nav class="grid grid-cols-2 gap-8 md:grid-cols-4">
			<div class="relative col-span-2 md:col-span-1">
				<a href="{{ $links['home'] }}">
					<img class="w-20" src="/static/img/branding/logo-dark.png" alt="Stripe Logo">
				</a>

				@foreach ($site_footer['information']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="text-sm no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach

				@foreach ($site_footer['copyright']['items'] as $item)
					<li class="pt-5 md:pt-0 md:absolute bottom-0 list-none leading-normal">
						<a class="text-sm no-underline">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<section>
				<h1 class="mb-2 text-sm font-semibold">{{ $site_footer['products']['title'] }}</h1>

				@foreach ($site_footer['products']['items'] as $item)
					<li class="list-none leading-normal">
						<a class="text-sm no-underline hover:opacity-50">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</section>

			<div>
				<section>
					<h1 class="mb-2 text-sm font-semibold">{{ $site_footer['developers']['title'] }}</h1>

					@foreach ($site_footer['developers']['items'] as $item)
						<li class="list-none leading-normal">
							<a class="text-sm no-underline hover:opacity-50">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</section>

				<section>
					<h1 class="mb-2 text-sm font-semibold mt-8">{{ $site_footer['company']['title'] }}</h1>

					@foreach ($site_footer['company']['items'] as $item)
						<li class="list-none leading-normal">
							<a class="text-sm no-underline hover:opacity-50">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</section>
			</div>

			<div class="grid gap-8 grid-cols-2 md:grid-cols-1 col-span-2 md:col-span-1">
				<section>
					<h1 class="mb-2 text-sm font-semibold">{{ $site_footer['use_cases']['title'] }}</h1>

					@foreach ($site_footer['use_cases']['items'] as $item)
						<li class="list-none leading-normal">
							<a class="text-sm no-underline hover:opacity-50">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</section>

				<section>
					<h1 class="mb-2 text-sm font-semibold mt-0">{{ $site_footer['resources']['title'] }}</h1>

					@foreach ($site_footer['resources']['items'] as $item)
						<li class="list-none leading-normal">
							<a class="text-sm no-underline hover:opacity-50">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</section>
			</div>
		</nav>
	</div>
</footer>
