@extends('layouts.default', ['title' => 'Open source projects - Mark Townsend'])

@section('css')
@livewireStyles
@endsection()

@section('content')
<div class="lg:w-3/5 md:w-5/6">

	<h2 class="text-2xl font-bold mb-5">Open source projects</h2>

	@livewire('packages', $packages)
@endsection

@section('js')
 {!! NoCaptcha::renderJs() !!}
 @livewireScripts
@endsection