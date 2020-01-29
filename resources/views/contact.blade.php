@extends('layouts.default')

@section('content')

@if (session()->has('message'))
{{-- Alert message --}}
<div class="flex flex-col lg:flex-row md:flex-row items-center justify-center w-full px-8 py-5 bg-orange-500 mb-8 text-white text-xl text-center font-medium shadow-lg">
	{!! session()->get('message') !!}
</div>
{{-- End alert message --}}
@endif

<div class="lg:w-3/5 md:w-5/6">

	<h2 class="text-2xl font-bold mb-5">Contact me</h2>

	<div class="mb-6">
		<form action="/contact" method="post" accept-charset="utf-8">
			{{ csrf_field() }}
		  <div class="flex flex-wrap -mx-3 mb-6">
		    <div class="w-full px-3 mb-4 md:mb-0">
		      <label class="block uppercase tracking-wide text-sm font-bold mb-2 {{ $errors->has('name') ? 'text-red-500' : 'text-gray-700' }}" for="name">
		        Name
		      </label>
		      <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white {{ $errors->has('name') ? 'border-red-500' : 'border-gray-200' }}" id="name" name="name" type="text" placeholder="" value="{{ old('name') }}">
		      @error('name')
		      <p class="text-red-500 font-semibold -mt-3 text-sm italic">{{ $message }}</p>
		      @enderror
		    </div>
		  </div>
		  <div class="flex flex-wrap -mx-3 mb-4">
		    <div class="w-full px-3">
		      <label class="block uppercase tracking-wide text-sm font-bold mb-2 {{ $errors->has('email') ? 'text-red-500' : 'text-gray-700' }}" for="email">
		        E-mail
		      </label>
		      <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }}" id="email" name="email" type="email" value="{{ old('email') }}">
		      @error('email')
		      <p class="text-red-500 font-semibold -mt-3 text-sm italic">{{ $message }}</p>
		      @enderror
		    </div>
		  </div>
		  <div class="flex flex-wrap -mx-3 mb-4">
		    <div class="w-full px-3">
		      <label class="block uppercase tracking-wide text-sm font-bold mb-2 {{ $errors->has('message') ? 'text-red-500' : 'text-gray-700' }}" for="message">
		        Message
		      </label>
		      <textarea class="resize-y appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }}" id="message" name="message">{{ old('message') }}</textarea>
  		      @error('message')
		      <p class="text-red-500 font-semibold -mt-3 text-sm italic">{{ $message }}</p>
		      @enderror
		    </div>
		  </div>
		  <div class="md:flex md:items-center">
		  	{!! NoCaptcha::display(['data-theme' => 'dark']) !!}
  		      @error('g-recaptcha-response')
		      <p class="text-red-500 font-semibold -mt-3 text-sm italic">{{ $message }}</p>
		      @enderror
		  </div>
		  <div class="md:flex md:items-center">
		    <div class="md:w-1/3">
		      <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-1 px-10 rounded focus:shadow-outline focus:outline-none" type="submit">
		        Send
		      </button>
		    </div>
		    <div class="md:w-2/3"></div>
		  </div>
		</form>
	</div>
@endsection