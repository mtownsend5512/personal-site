@extends('layouts.default', ['title' => 'Open source projects - Mark Townsend'])

@section('css')
@livewireStyles
@endsection()

@section('content')
<div class="lg:w-3/5 md:w-5/6">

	<h2 class="text-2xl font-bold mb-5">Open source projects</h2>

	<blockquote class="text-gray-700 text-xl bg-indigo-200 border-l-4 border-indigo-700 pl-8 py-4 rounded mb-8 italic">
		"Kindness, like a boomerage, always returns."
	</blockquote>

	@livewire('packages', $packages)
@endsection

@section('js')
 {!! NoCaptcha::renderJs() !!}
 @livewireScripts
@endsection