<header class="relative z-site-header">
	<div class="e-container">
		<div class="flex items-center justify-between mt-4">
			<h1>
				<a href="{{ $links['home'] }}">Stripe</a>
			</h1>
	
			<div class="flex">
				@foreach ($site_header['nav'] as $item)
					<li class="list-none mx-4">
						<a class="no-underline" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<a class="e-button" href="{{ $site_header['nav_cta']['url'] }}">{{ $site_header['nav_cta']['title'] }}</a>
		</div>
	</div>
</header>
