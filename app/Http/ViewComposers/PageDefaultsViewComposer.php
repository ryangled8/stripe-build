<?php

namespace App\Http\ViewComposers;

use Engage\LaravelFrontend\PageDefaultsViewComposer as BaseViewComposer;

class PageDefaultsViewComposer extends BaseViewComposer
{
	/**
	 * Returns developer-defined application default variables.
	 *
	 * @return array
	 */
	protected function app(): array
	{
		return [
			'page' => [
				'title' => trans('meta.default.title'),
				'description' => trans('meta.default.description'),
				'site_name' => 'Site Name',
				'social_image' => asset('/static/img/meta/share.png'),
				'url' => url()->current(),
				'creator_twitter_handle' => '@author_handle',
				'site_twitter_handle' => '@site_handle',
				'share_title' => trans('meta.default.share_title'),
				'share_description' => trans('meta.default.share_description'),
				'type' => 'article',
				'js' => [
					'sprite' => (string) mix('/compiled/img/sprite.svg'),
				],
			],
			'links' => [
				'home' => route('home.show'),
			],
		];
	}

	/**
	 * Returns developer-defined frontend default variables.
	 *
	 * @return array
	 */
	protected function templates(): array
	{
		return [
			'links' => [
				'home' => route('templates.show', 'home/index'),
			],
			'site_header' => [
				'nav' => [
					[
						'title' => 'Products',
						'url' => '/',
					],
					[
						'title' => 'Developers',
						'url' => '/',
					],
					[
						'title' => 'Company',
						'url' => '/',
					],
					[
						'title' => 'Pricing',
						'url' => '/',
					],
					[
						'title' => 'Sign in',
						'url' => '/',
					],
				],
			],
			'site_footer' => [
				'information' => [
					'title' => 'Information',
					'items' => [
						[
							'title' => 'United Kingdom',
						],
						[
							'title' => 'English (United Kingdom)',
						],
						[
							'title' => '&copy; Stripe',
						],
					],
				],
				'products' => [
					'title' => 'Products',
					'items' => [
						[
							'title' => 'Payments',
							'url' => '/'
						],
						[
							'title' => 'Billing',
							'url' => '/'
						],
						[
							'title' => 'Connect',
							'url' => '/'
						],
						[
							'title' => 'Payouts',
							'url' => '/'
						],
						[
							'title' => 'Atlas',
							'url' => '/'
						],
						[
							'title' => 'Radar',
							'url' => '/'
						],
						[
							'title' => 'Issuing',
							'url' => '/'
						],
						[
							'title' => 'Terminal',
							'url' => '/'
						],
						[
							'title' => 'Corporate Card',
							'url' => '/'
						],
						[
							'title' => 'Captial',
							'url' => '/'
						],
						[
							'title' => 'Sigma',
							'url' => '/'
						],
						[
							'title' => 'Pricing',
							'url' => '/'
						],
					],
				],
				'developers' => [
					'title' => 'Developers',
					'items' => [
						[
							'title' => 'Documentation',
							'url' => '/',
						],
						[
							'title' => 'API Reference',
							'url' => '/',
						],
						[
							'title' => 'API Status',
							'url' => '/',
						],
					],
				],
				'company' => [
					'title' => 'Company',
					'items' => [
						[
							'title' => 'About',
							'url' => '/',
						],
						[
							'title' => 'Customers',
							'url' => '/',
						],
						[
							'title' => 'Partners',
							'url' => '/',
						],
						[
							'title' => 'Environment',
							'url' => '/',
						],
						[
							'title' => 'Jobs',
							'url' => '/',
						],
						[
							'title' => 'Blog',
							'url' => '/',
						],
						[
							'title' => 'Newsroom',
							'url' => '/',
						],
					],
				],
				'use_cases' => [
					'title' => 'Use Cases',
					'items' => [
						[
							'title' => 'SaaS',
							'url' => '/',
						],
						[
							'title' => 'Platforms',
							'url' => '/',
						],
						[
							'title' => 'Marketplaces',
							'url' => '/',
						],
						[
							'title' => 'Enterprise',
							'url' => '/',
						],
					],
				],
				'resources' => [
					'title' => 'Resources',
					'items' => [
						[
							'title' => 'COVID-19 resources',
							'url' => '/',
						],
						[
							'title' => 'Support',
							'url' => '/',
						],
						[
							'title' => 'Contact',
							'url' => '/',
						],
						[
							'title' => 'Guides',
							'url' => '/',
						],
						[
							'title' => 'Privacy & terms',
							'url' => '/',
						],
						[
							'title' => 'Sitemap',
							'url' => '/',
						],
					],
				],
			],
		];
	}
}

