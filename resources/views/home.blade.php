@extends('layouts.default', ['title' => "Mark Townsend - Web Developer & Designer"])

@section('content')
<div class="lg:w-3/5 md:w-5/6">
	<h2 class="text-2xl font-bold mb-5"><span class="pr-2 text-3xl align-text-bottom leading-none">👋</span> Let's get to know each other. I'll start...</h2>
	<p>
		My name is Mark Townsend. I'm a <span class="font-semibold text-black">{{ now()->diffInYears(Carbon\Carbon::parse('July 1, 1989')) }}</span> year old full-stack developer/designer with <span class="font-semibold text-black">{{ now()->diffInYears(Carbon\Carbon::parse('Jan 1, 2004')) }}</span> years of experience in the industry. I've been a Texan all my life, and Houston, Texas is where I call home. My kryptonite is tacos &mdash; really, any Mexican food. When I'm not creating you can find me playing Switch with my kids, camping, hiking, tinkering with new development projects and PC gaming.
	</p>
	<p>
		My passion for development started at the age of 14 when my father sat me down, handed me a cd <em class="text-gray-600 font-semibold text-base tracking-tight">(remember those?!)</em> on web development and told me I was responsible for making our church's web site. Little did I know, that task was the seed which grew into a career I love.
	</p>
	<p>
		 I believe a job is only half done if it only looks and functions well for the end user. That's why I'm passionate about writing clean, readable, quality code on everything I work on. I've had experience working with Javascript, PHP, Laravel, jQuery, Vue, Bootstrap, Foundation, Tailwind and much more. I've been a web developer in the non-profit, eCommerce (Woocommerce, Magento, Shopify) and worked on content management platforms including Wordpress, Grav, and Concrete5.
	</p>
	<p>
		These days, I hang around with the totally awesome crew at <a target="_blank" href="https://dieselcore.com?ref=mtownsend_portfolio">DieselCore</a> working as the Web Department Manager and lead developer for their API-driven ecosystem.
	</p>
	<p class="font-semibold">
		<a class="align-text-baseline" href="/contact">Contract me for your next development project <span class="pl-2 align-text-baseline">&rarr;</span></a>
	</p>
	<h2 class="text-2xl font-bold mb-5">But enough about me. Your turn! <span class="pl-1 -mb-1 inline-block text-3xl align-text-bottom leading-none">👇</span></h2>
	<p>
		You can introduce yourself by finding me on any of these platforms.
		<br>
		I'm looking forward to meeting you!
	</p>
	<div class="flex items-center justify-between max-w-xs text-indigo-700">
		{{-- LinkedIn --}}
		<a target="_blank" class="hover:text-indigo-400" href="https://www.linkedin.com/in/mark-townsend-766ba053/">
			<svg class="w-10 h-10 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
			  <path d="M437 0H75C33.645 0 0 33.645 0 75v362c0 41.355 33.645 75 75 75h362c41.355 0 75-33.645 75-75V75c0-41.355-33.645-75-75-75zm45 437c0 24.813-20.188 45-45 45H75c-24.813 0-45-20.188-45-45V75c0-24.813 20.188-45 45-45h362c24.813 0 45 20.188 45 45zm0 0"/>
			  <path d="M91 422h90V210H91zm30-182h30v152h-30zm0 0M331.086 210H331c-10.371 0-20.473 1.734-30 5.102V210h-90v212h90V315c0-8.27 6.73-15 15-15s15 6.73 15 15v107h90V304.687c0-48.546-39.383-94.64-89.914-94.687zM391 392h-30v-77c0-24.813-20.188-45-45-45s-44.996 20.188-45 44.996V392h-30V240h30v30.02l24.008-18.032C305.449 244.145 317.895 240 331 240h.059c31.93.031 59.941 30.258 59.941 64.688zm0 0M91 180h90V90H91zm30-60h30v30h-30zm0 0"/>
			</svg>
		</a>

		{{-- GitHub --}}
		<a target="_blank" class="hover:text-indigo-400" href="https://github.com/mtownsend5512">
			<svg class="w-10 h-10 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
			  <path d="M256 0C115.3 0 0 116.3 0 257c0 139.883 114.25 255 256 255 141.574 0 256-114.945 256-255C512 116.3 396.7 0 256 0zm45 477.5c-14.398 3-29.7 4.5-45 4.5s-30.602-1.5-45-4.5v-70.2c0-16.8 4.5-22.8 10.5-30.902 3.055-3.492 4.898-6.625 18.598-27.296L217 345.5c-59.402-8.7-82.8-39.602-92.102-63.602-12-32.097-5.699-72.3 15.903-97.796 3.3-3.903 6-10.504 3.601-17.403-4.504-13.8-3.902-35.699-.902-44.101 15.906 2.273 32.262 13.668 45.902 21.902 6.286 3.668 9.582 2.7 12.598 3 10.96-2.281 28.059-7.8 54.3-7.8 16.2 0 33.302 2.398 50.102 7.198 3.004-.07 7.832 2.485 16.2-2.398 14.257-8.687 30.058-19.691 45.898-21.902 3 8.402 3.602 30.3-.898 44.101-2.403 6.899.296 13.5 3.601 17.403 21.598 25.5 27.899 65.699 15.899 97.796-9.301 24-32.7 54.903-92.102 63.602l-23.098 3.602c14.16 21.367 15.653 23.93 18.602 27.296C296.5 384.5 301 390.5 301 407.301zm30-8.7v-61.5c0-17.1-3.602-28.5-8.402-36.902 45.601-12.296 78.004-39.3 92.402-78 15.3-40.796 8.402-89.398-17.102-123 4.504-20.097 4.504-52.199-6.296-67.199C386.8 95.602 380.199 92 371.8 92h-.301c-23.262 1.258-41.57 12.973-61.2 24.898-18-4.8-36.3-7.199-54.6-7.199-18.598 0-37.2 2.7-53.696 7.2C181.34 104.437 163.207 93.226 139.3 92c-7.5 0-14.102 3.602-18.903 10.2-10.796 15-10.796 47.1-6.296 67.198-25.504 33.602-32.403 82.5-17.102 123 14.398 38.7 46.8 65.704 92.402 78-3.722 6.512-6.668 14.915-7.828 26.286-9.21 3.175-17.199 4.21-24.629 2.027-7.836-2.316-13.941-7.547-19.246-16.469-11.914-20.015-32.207-36.355-55.312-34.23l2.636 29.883c10.7-.98 21.348 10.34 26.88 19.671 9.124 15.368 21.417 25.446 36.546 29.914 11.23 3.31 21.496 3.23 32.551.872V468.8C93.7 438.199 30 354.8 30 257 30 132.8 131.8 30 256 30s226 102.8 226 227c0 97.8-63.7 181.2-151 211.8zm0 0"/>
			</svg>
		</a>

		{{-- Twitter --}}
		<a target="_blank" class="hover:text-indigo-400" href="https://twitter.com/mtownsend5512">
			<svg class="w-10 h-10 fill-current" viewBox="0 -47 512 512" xmlns="http://www.w3.org/2000/svg">
			  <path d="M512 55.965c-32.207 1.484-31.504 1.363-35.145 1.668L495.93 3.16s-59.54 21.902-74.633 25.82c-39.64-35.628-98.563-37.203-140.688-11.312-34.496 21.207-53.011 57.625-46.836 100.191C166.637 108.543 110.07 76.72 65.41 23.07L51.285 6.105 40.73 25.488C27.39 49.98 22.96 77.984 28.254 104.34A113.287 113.287 0 0039.23 135.12l-12.117-4.695-1.437 20.246c-1.457 20.566 5.39 44.574 18.32 64.215a114.185 114.185 0 0014.27 17.597l-6.262-.96 7.64 23.199c10.043 30.48 30.903 54.062 57.973 67.172-27.035 11.472-48.875 18.793-84.773 30.601L0 363.293l30.336 16.586c11.566 6.324 52.437 27.445 92.82 33.781 89.766 14.078 190.832 2.613 258.871-58.664 57.309-51.613 76.114-125.031 72.207-201.433-.59-11.567 2.579-22.606 8.922-31.079 12.707-16.964 48.766-66.406 48.844-66.52zm-72.832 48.55c-10.535 14.067-15.813 32.032-14.867 50.579 3.941 77.066-17.028 136.832-62.328 177.629-52.918 47.66-138.274 66.367-234.172 51.324-17.367-2.723-35.317-8.82-50.172-14.91 30.098-10.356 53.34-19.586 90.875-37.352l52.398-24.8-57.851-3.704c-27.711-1.773-50.785-15.203-64.969-37.008a103.763 103.763 0 0022.023-3.671l55.176-15.368-55.636-13.625c-27.036-6.62-42.446-22.797-50.614-35.203-5.363-8.152-8.867-16.504-10.969-24.203 5.579 1.496 12.083 2.563 22.57 3.602l51.497 5.093-40.8-31.828c-29.4-22.93-41.18-57.379-32.544-90.496 91.75 95.164 199.477 88.012 210.32 90.528-2.386-23.184-2.449-23.239-3.074-25.446-13.886-49.09 16.547-74.015 30.274-82.453 28.672-17.621 74.183-20.277 105.707 8.754 6.808 6.266 16.015 8.73 24.633 6.59 7.734-1.922 14.082-3.957 20.296-6.172L434.004 89.32l16.516.012a8240.32 8240.32 0 01-11.352 15.184zm0 0"/>
			</svg>
		</a>

		{{-- Facebook --}}
		<a target="_blank" class="hover:text-indigo-400" href="https://www.facebook.com/marktownsend89">
			<svg class="w-10 h-10 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
			  <path d="M75 512h167V330h-60v-60h60v-75c0-41.355 33.645-75 75-75h75v60h-60c-16.543 0-30 13.457-30 30v60h87.293l-10 60H302v182h135c41.355 0 75-33.645 75-75V75c0-41.355-33.645-75-75-75H75C33.645 0 0 33.645 0 75v362c0 41.355 33.645 75 75 75zM30 75c0-24.813 20.188-45 45-45h362c24.813 0 45 20.188 45 45v362c0 24.813-20.188 45-45 45H332V360h72.707l20-120H332v-30h90V90H317c-57.898 0-105 47.102-105 105v45h-60v120h60v122H75c-24.813 0-45-20.188-45-45zm0 0"/>
			</svg>
		</a>

		{{-- Email --}}
	{{-- 	<a target="_blank" class="hover:text-indigo-400" href="#">
			<svg class="w-10 h-10 fill-current" viewBox="1 -35 512 511" xmlns="http://www.w3.org/2000/svg">
			  <path d="M121.453 253.172l63.555 158.887 82.75-82.754 141.535 112.504L512 .5 0 205.98zm-39.933-47.64l244.046-97.946-194.074 117.363zm287.535-89.25l-161.98 148.187-19.485 73.426-36.035-90.086zm-149.852 219.23l9.817-36.996 15.144 12.035zm171.656 53.394L243.473 271.754 465.375 68.746zm0 0"/>
			</svg>
		</a> --}}

		{{-- Instagram --}}
		<a target="_blank" class="hover:text-indigo-400" href="https://www.instagram.com/mtownsend5512/">
			<svg class="w-10 h-10 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
			  <path d="M75 512h362c41.355 0 75-33.645 75-75V75c0-41.355-33.645-75-75-75H75C33.645 0 0 33.645 0 75v362c0 41.355 33.645 75 75 75zM30 75c0-24.813 20.188-45 45-45h362c24.813 0 45 20.188 45 45v362c0 24.813-20.188 45-45 45H75c-24.813 0-45-20.188-45-45zm0 0"/>
			  <path d="M256 391c74.438 0 135-60.563 135-135s-60.563-135-135-135-135 60.563-135 135 60.563 135 135 135zm0-240c57.898 0 105 47.102 105 105s-47.102 105-105 105-105-47.102-105-105 47.102-105 105-105zm0 0M406 151c24.813 0 45-20.188 45-45s-20.188-45-45-45-45 20.188-45 45 20.188 45 45 45zm0-60c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"/>
			</svg>
		</a>
	</div>

</div>
@endsection