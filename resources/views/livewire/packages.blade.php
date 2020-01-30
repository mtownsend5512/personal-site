<div wire:init="fetchPackages">
	<div class="flex w-full items-center relative" wire:loading>
        <div class="text-center text-indigo-500">
			<svg class="fill-current w-10 h-10 inline-block spin z-30" aria-hidden="true" data-prefix="far" data-icon="spinner-third" class="svg-inline--fa fa-spinner-third fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
			  <path fill="currentColor" d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z"/>
			</svg>
        </div>
    </div>
	@foreach ($packages as $package)
	<div class="flex flex-wrap mb-8">
		<div class="lg:w-4/5">
			<a target="_blank" href="{{ $package['repository'] }}" class="font-bold">{{ str_replace('mtownsend/', '', $package['name']) }}</a>
			<p class="mb-0">
				{{ $package['description'] }}
			</p>
			<p class="text-base font-semibold mt-2"><a target="_blank" href="{{ $package['repository'] }}">Check it out &rarr;</a></p>
		</div>
		<div class="lg:w-1/5 w-full flex flex-no-wrap lg:flex-col">
			{{-- Watchers --}}
			<div class="text-gray-500 text-center flex items-center lg:justify-start lg:flex-row-reverse lg:mr-0 mr-5">
				<svg class="w-4 h-4 fill-current mx-2" aria-hidden="true" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
				  <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 000 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 000-29.19zM288 400a144 144 0 11144-144 143.93 143.93 0 01-144 144zm0-240a95.31 95.31 0 00-25.31 3.79 47.85 47.85 0 01-66.9 66.9A95.78 95.78 0 10288 160z"/>
				</svg>
				<span class="text-xl font-semibold">{{ is_numeric($package['github_watchers']) ? number_format($package['github_watchers']) : '' }}</span>
			</div>

			{{-- Stars --}}
			<div class="text-gray-500 text-center flex items-center lg:justify-start lg:flex-row-reverse lg:mr-0 mr-5">
				<svg class="w-4 h-4 fill-current mx-2" aria-hidden="true" data-prefix="fas" data-icon="thumbs-up" class="svg-inline--fa fa-thumbs-up fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				  <path fill="currentColor" d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"/>
				</svg>
				<span class="text-xl font-semibold">{{ is_numeric($package['github_stars']) ? number_format($package['github_stars']) : '' }}</span>
			</div>

			{{-- Downloads --}}
			<div class="text-gray-500 text-center flex items-center lg:justify-start lg:flex-row-reverse lg:mr-0 mr-5">
				<svg class="w-4 h-4 fill-current mx-2" aria-hidden="true" data-prefix="fas" data-icon="comment" class="svg-inline--fa fa-comment fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				  <path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"/>
				</svg>
				<span class="text-xl font-semibold">{{ is_numeric($package['downloads']['total']) ? number_format($package['downloads']['total']) : '' }}</span>
			</div>
		</div>
	</div>
	@endforeach
</div>