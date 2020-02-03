<!DOCTYPE html>
<html class="w-full h-full" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=1">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1">
	<link rel="manifest" href="/site.webmanifest">
	<title>{{ $title ?? 'Mark Townsend' }}</title>
	<link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	@yield('css')
</head>
<body class="w-full h-full subpixel-antialiased bg-indigo-100 border-indigo-600 border-t-8 lg:p-20 md:p-18 sm:p-16 p-6">
	<header class="flex items-top mb-2 lg:mt-3">
		 <a class="lg:mr-16 md:mr-12 mr-6 hover:opacity-75" href="/">
			<img class="rounded-full shadow-lg hover:shadow-none inline-block w-24" src="{{ asset('img/mark-townsend.jpg') }}" alt="Mark Townsend" title="Mark Townsend">
		 </a>
		 <div class="flex flex-col justify-center">
			<a class="font-extrabold text-3xl block lg:-mt-4 mt-1 -mt-0 tracking-normal p-0 m-0 leading-none" href="/"><h1 class="">Mark Townsend</h1></a>
			<span class="block text-indigo-400 text-sm tracking-normal uppercase font-bold pb-2 lg:max-w-full md:max-w-full max-w-xs"><span class="hidden lg:inline-block">&lt; &nbsp;</span>Husband, Father, lover of Mexican food and web developer<span class="hidden lg:inline-block">&nbsp; /&gt;</span></span>
			@include('layouts.partials.nav')
		 </div>
		 <div class="block lg:hidden ml-auto -mr-10 mt-1">
			<a class="hover:text-indigo-700" href="javascript:void(null)">
				<svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg">
				  <path d="M4 10h24a2 2 0 000-4H4a2 2 0 000 4zm24 4H4a2 2 0 000 4h24a2 2 0 000-4zm0 8H4a2 2 0 000 4h24a2 2 0 000-4z"/>
				</svg>
			</a>
		 </div>
	</header>
	<main class="lg:pl-40 pt-12 text-gray-800 text-xl leading-loose">
		@yield('content')
	</main>

	<div class="flex lg:pl-40 pt-24 pb-12">
		@include('layouts.partials.nav')
	</div>
	@yield('js')
	<script src="https://polyfill.io/v3/polyfill.min.js?features=MutationObserver%2CArray.from%2CArray.prototype.forEach%2CMap%2CSet%2CArray.prototype.includes%2CString.prototype.includes%2CPromise%2CNodeList.prototype.forEach%2CObject.values%2CReflect%2CReflect.set"></script>
	<script src="https://cdn.jsdelivr.net/npm/proxy-polyfill@0.3.0/proxy.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
</body>
</html>