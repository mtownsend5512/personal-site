@extends('layouts.default', ['title' => 'Mark Townsend\'s recent design and development portfolio'])

@section('content')
<div class="lg:w-3/5 md:w-5/6">

	<h2 class="text-2xl font-bold mb-5">Here's a few examples of my work</h2>

	<div class="mb-24">
		<div class="flex items-center mb-4">
			<div class="bg-black p-3 rounded-lg inline-block shadow border border-black">
				<img class="block w-10 h-10" src="{{ asset('img/dh-logo.svg') }}" alt="Dying Horizon" title="Dying Horizon">
			</div>
			<span class="block font-bold pl-4 text-2xl">Dying Horizon</span>
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
			<div class="bg-green-200 p-3 rounded-lg inline-block shadow border border-green-400">
				<img class="block w-10 h-10" src="{{ asset('img/rc-church.png') }}" alt="">
			</div>
			<span class="block font-bold pl-4 text-2xl">Rabon Chapel Church of Christ</span>
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