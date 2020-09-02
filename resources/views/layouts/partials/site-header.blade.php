<header class="relative z-site-header">
	<div class="e-container">
		<div class="flex items-center justify-between mt-4">
			<a href="{{ $links['home'] }}">
				<img class="w-20" src="/static/img/branding/logo-dark.png" alt="Stripe Logo">
			</a>
	
			<div class="flex">
				@foreach ($site_header['nav'] as $item)
					<li class="list-none mx-4">
						<a class="font-bold no-underline hover:opacity-50" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
					</li>
				@endforeach
			</div>

			<a class="e-button" href="{{ $site_header['nav_cta']['url'] }}">{{ $site_header['nav_cta']['title'] }}</a>
		</div>
	</div>
</header>
