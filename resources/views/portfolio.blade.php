@extends('layouts.default', ['title' => 'Mark Townsend\'s recent design and development portfolio'])

@section('content')
<div class="lg:w-3/5 md:w-5/6">

	<h2 class="text-2xl font-bold mb-5">Here's a few examples of my work</h2>

	<div class="mb-24">
		<div class="flex items-center mb-4">
			<div class="bg-black p-3 rounded-lg inline-block shadow border border-black relative">
				<img class="block w-10 h-10" src="{{ asset('img/dh-logo.svg') }}" alt="Dying Horizon" title="Dying Horizon">
			</div>
			<span class="block font-bold pl-4 text-2xl leading-none">Dying Horizon</span>
		</div>
		<p>
			Dying Horizon is a free apocalypse role-playing browser game that throws you into a bleak and unforgiving alternate reality. Experience a multiplayer turn-based image and text game of survival and conquest.
		</p>
		<p>
			Dying Horizon was a fun hobby project I made several years ago to really dive deep into the Laravel PHP framework.
		</p>
		<span class="block text-sm text-gray-600 leading-none uppercase font-bold tracking-wide pb-3">Some of what I used...</span>
		<ul class="mb-6">
			<li>Laravel</li>
			<li>Zurb's Foundation</li>
			<li>Intercooler.js</li>
		</ul>
		<p>
			<a target="_blank" href="http://dyinghorizon.com?ref=marktownsend.rocks">Check it out &rarr;</a>
		</p>
	</div>

	<div class="mb-24">
		<div class="flex items-center mb-4">
			<div class="bg-red-700 p-3 rounded-lg inline-block shadow border border-red-800 relative">
				<span class="text-white font-semibold text-sm tracking-wider leading-none absolute top-0 right-0 left-0 w-full text-center mt-1">HEB</span>
				<div class="w-8 h-8 text-center relative">
					<svg class="fill-current text-white w-7 h-6 inline-block" aria-hidden="true" data-prefix="fal" data-icon="barcode-scan" class="svg-inline--fa fa-barcode-scan fa-w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
					  <path fill="currentColor" d="M160 8c0-4.4-3.6-8-8-8H72c-4.4 0-8 3.6-8 8v152h96V8zm128 0c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v152h64V8zm96 0c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v152h32V8zm96 0c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v152h64V8zm96 0c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v152h64V8zM416 504c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V352h-64v152zm-64 0c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V352h-32v152zm-288 0c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V352H64v152zm160 0c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V352h-64v152zm288 0c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V352h-64v152zm120-264H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h624c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8z"/>
					</svg>
				</div>
			</div>
			<span class="block font-bold pl-4 text-2xl leading-none">H-E-B barcode scanner web app</span>
		</div>
		<p>
			I built this web app solely to solve first-world grocery shopping problems for my wife. She loves knowing the total before checkout because she's a frugal shopper, but ordering online causes you to miss out on so many recipe ideas.
		</p>
		<p>
			I was able to access H-E-B's private API to retrieve product data. This app mostly uses vanilla Javascript, but sprinkles in a tiny bit of PHP for the API calls to overcome CORs issues.
		</p>

		<span class="block text-sm text-gray-600 leading-none uppercase font-bold tracking-wide pb-3">Some of what I used...</span>
		<ul class="mb-6">
			<li>Vanilla Javascript</li>
			<li>Quagga.js (barcode scanning)</li>
			<li>Tailwind CSS</li>
			<li>H-E-B's API</li>
		</ul>
		<p>
			<a target="_blank" href="https://dev.to/mtownsend5512/learning-javascript-barcode-scanning-and-wiggling-into-private-grocery-store-apis-30bh">Read more about it &rarr;</a>
		</p>
	</div>

	<div class="mb-24">
		<div class="flex items-center mb-4">
			<div class="bg-green-200 p-3 rounded-lg inline-block shadow border border-green-400 relative">
				<img class="block w-10 h-10" src="{{ asset('img/rc-church.png') }}" alt="">
			</div>
			<span class="block font-bold pl-4 text-2xl leading-none">Rabon Chapel Church of Christ</span>
		</div>
		<p>
			When I went to work designing and creating the Rabon Chapel Church of Christ site the goal was minimalism with a strong emphasis on a clean mobile experience. Traditional contact methods are reduced in favor of a more modern live chat approach of communication.
		</p>
		<span class="block text-sm text-gray-600 leading-none uppercase font-bold tracking-wide pb-3">Some of what I used...</span>
		<ul class="mb-6">
			<li>Laravel</li>
			<li>Tailwind CSS</li>
			<li>Scout (Laravel Package)</li>
			<li>Wink (Laravel Package)</li>
		</ul>
		<p>
			<a target="_blank" href="https://rabonchapelcoc.com?ref=marktownsend.rocks">Check it out &rarr;</a>
		</p>
	</div>
@endsection

@section('js')
 {!! NoCaptcha::renderJs() !!}
@endsection