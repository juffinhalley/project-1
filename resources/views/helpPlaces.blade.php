<?php
	$navPlaces = [
		[
			'typeOfPlaces' => 'Места помощи',
			'numbOfPlaces' => '1247',
			'sortOfPlaces' => 'мест',
			'tab-active' => 'places',
			'withMenu' => ''
		]
	];
	$helpPlaces = [
		[
			'typePlaces' => 'places',
			'name' => 'Гараж #113',
			'geo' => 'Херсон,UA'
		],
		[
			'typePlaces' => 'places',
			'name' => 'Кирпичный дом',
			'geo' => 'Херсон,UA'
		],
		[
			'typePlaces' => 'places',
			'name' => 'Гараж #1 на окраине Херсона, тут есть все что нужно для быстрого ремонта',
			'geo' => 'Херсон,UA'
		],
		[
			'typePlaces' => 'places',
			'name' => 'Паб Закат',
			'geo' => 'Херсон,UA'
		]
	]
?>
@extends('layouts.main')

@section('content')
<div class="section">
	<div class="container">
		<div class="page-content-wrapper__content">
			<aside class="page-aside-block">

				@include('block.sideMenu')

				@include('block.asideMap')

			</aside>

			<div class="page-content">
				<div class="container container--no-gap">

					@foreach ($navPlaces as $item)
					@include('block.placesNav', $item)
					@endforeach

					<div class="grid grid-1 grid--psh-2 grid--vspace-xl grid--hspace-xl _pt-xl _flex _justify-center _psh-justify-start">
						@foreach ($helpPlaces as $item)
							<div class="gcell">
								@include('block.placeItem', $item)
							</div>
						@endforeach
					</div>

					<div class="grid grid--1 _mb-def">
						<div class="gcell _flex _justify-center _items-center">
							<button class="button paper-button paper-button--hover button--showmore button--mds button--sb-content js-show-more-button" data-params="" data-url="" data-show-more-id="1" data-ripple-color="#b7b7b7" style="color: rgb(183, 183, 183);">
								<div class="button__content">
									<span class="button__text">Показать ещё 15</span>
									<span class="button__icon">
										@svg('arrowBottom')
									</span>
								</div>
								<div class="paper-ripple">
									<div class="paper-ripple__background"></div>
									<div class="paper-ripple__waves"></div>
								</div>
							</button>
						</div>
					</div>

					<hr class="_spacer1eee _mb-xl">

					<div class="grid grid--1 _mb-xl">
						<div class="gcell">
							@include('widget.pagination')
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
@endsection
