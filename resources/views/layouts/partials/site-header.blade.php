<header class="relative z-site-header">
	<div class="e-container">
		<nav class="hidden md:block">
			<div class="flex items-center justify-between my-4">
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
	
				<a class="e-button" href="{{ $site_header['nav_cta']['url'] }}">
					{{ $site_header['nav_cta']['title'] }}

					<icon
						name="chevron-right"
					/>
				</a>
			</div>
		</nav>

		{{-- Mobile nav overlay --}}
		<nav class="rounded-lg bg-white my-4 block md:hidden">
			<div class="px-8 pt-6 flex items-center justify-between">
				<p class="uppercase text-sm text-brand-dark-grey">{{ $site_overlay['title'] }}</p>

				<icon
					class="cursor-pointer"
					name="close"
				/>
			</div>

			<div class="flex px-8 py-6">
				<div class="w-1/2">
					@foreach ($site_overlay['products_top_left']['items'] as $item)
						<li class="text-sm my-2">
							<a class="no-underline" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</div>

				<div>
					@foreach ($site_overlay['products_top_right']['items'] as $item)
						<li class="text-sm my-2">
							<a class="no-underline" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</div>
			</div>

			<div class="flex px-8 py-6 border-t border-dashed border-brand-light-grey">
				<div class="w-1/2">
					@foreach ($site_overlay['products_bottom_left']['items'] as $item)
						<li class="text-sm my-2">
							<a class="no-underline" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</div>

				<div>
					@foreach ($site_overlay['products_bottom_right']['items'] as $item)
						<li class="text-sm my-2">
							<a class="no-underline" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
						</li>
					@endforeach
				</div>
			</div>

			<div class="p-1">
				<div class="bg-brand-light-grey rounded-bl-lg rounded-br-lg">
					<div class="py-4">
						<a href="{{ $site_overlay['nav_cta']['url'] }}" class="w-32 text-center mx-auto block e-button">
							{{ $site_overlay['nav_cta']['title'] }}

							<icon
								name="chevron-right"
							/>
						</a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
