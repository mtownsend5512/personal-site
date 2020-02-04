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
		 <a class="lg:mr-16 md:mr-12 mr-5 hover:opacity-75" href="/">
			<img class="rounded-full shadow-lg hover:shadow-none inline-block w-24" src="{{ asset('img/mark-townsend.jpg') }}" alt="Mark Townsend" title="Mark Townsend">
		 </a>
		 <div class="flex flex-col justify-center mr-2">
			<a class="font-extrabold text-3xl block lg:-mt-4 mt-1 -mt-0 tracking-normal p-0 m-0 leading-none" href="/"><h1 class="">Mark Townsend</h1></a>
			<span class="lg:block md:block hidden text-indigo-400 text-sm tracking-normal uppercase font-bold pb-2 lg:max-w-full md:max-w-full max-w-xs"><span class="hidden lg:inline-block">&lt; &nbsp;</span>Husband, Father, lover of Mexican food and web developer<span class="hidden lg:inline-block">&nbsp; /&gt;</span></span>
			{{-- Desktop nav --}}
			<nav class="desktop-nav mt-2 -mb-4 font-bold text-sm tracking-wider hidden lg:block uppercase">
				@include('layouts.partials.nav')
			</nav>
			{{-- End desktop nav --}}
		 </div>
		 <div x-data="{ icon: 'hamburger' }" class="block flex items-center lg:hidden ml-auto mt-1">
		 	{{-- Hamburger --}}
			<a :class="{ 'hidden': icon === 'close' }" @click="icon = 'close'; toggleMobileNav()" class="hover:text-indigo-700" href="javascript:void(null)">
				<svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
				  <g data-name="menu">
				    <path d="M29 6H3a1 1 0 000 2h26a1 1 0 000-2zM3 17h13a1 1 0 000-2H3a1 1 0 000 2zM25 24H3a1 1 0 000 2h22a1 1 0 000-2z"/>
				  </g>
				</svg>
			</a>
			{{-- End hamburger --}}

			{{-- Close --}}
			<a :class="{ 'hidden': icon === 'hamburger' }" @click="icon = 'hamburger'; toggleMobileNav()" class="hover:text-indigo-700 hidden" href="javascript:void(null)">
				<svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
				  <g data-name="Layer 2">
				    <path d="M4 29a1 1 0 01-.71-.29 1 1 0 010-1.42l24-24a1 1 0 111.42 1.42l-24 24A1 1 0 014 29z"/>
				    <path d="M28 29a1 1 0 01-.71-.29l-24-24a1 1 0 011.42-1.42l24 24a1 1 0 010 1.42A1 1 0 0128 29z"/>
				  </g>
				  <path fill="none" d="M0 0h32v32H0z"/>
				</svg>
			</a>
			{{-- End close --}}
		 </div>
	</div>
	</header>
	{{-- Mobile nav --}}
	<nav id="mobile_nav" class="flex flex-col justify-start mt-8 px-4 h-screen overflow-y-auto tracking-loose font-semibold text-lg hidden">
		@include('layouts.partials.nav')
	</nav>
	{{-- End mobile nav --}}
	<main class="lg:pl-40 pt-12 text-gray-800 text-xl leading-loose">
		@yield('content')
	</main>

	<div class="flex lg:pl-40 pt-24 pb-12">
		{{-- Desktop nav --}}
		<nav class="desktop-nav mt-2 -mb-4 font-bold text-sm tracking-wider hidden lg:block uppercase">
			@include('layouts.partials.nav')
		</nav>
		{{-- End desktop nav --}}
	</div>
	@yield('js')
	<script src="https://polyfill.io/v3/polyfill.min.js?features=MutationObserver%2CArray.from%2CArray.prototype.forEach%2CMap%2CSet%2CArray.prototype.includes%2CString.prototype.includes%2CPromise%2CNodeList.prototype.forEach%2CObject.values%2CReflect%2CReflect.set"></script>
	<script src="https://cdn.jsdelivr.net/npm/proxy-polyfill@0.3.0/proxy.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.7/dist/alpine.js"></script>
	<script>
		function toggleMobileNav() {
			const body = document.querySelector('body');
			body.classList.toggle('fixed');
			body.classList.toggle('overflow-hidden');
			document.getElementById('mobile_nav').classList.toggle('hidden');
		}
	</script>
</body>
</html>