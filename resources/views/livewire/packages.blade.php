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
			{{-- <span class="rounded-full bg-gray-300 text-xs leading-none px-3 py-1 font-semibold shadow ml-3 inline-block align-middle border border-gray-400">{{ $package['language'] }}</span> --}}
			<p class="mb-0">
				{{ $package['description'] }}
			</p>
			<p class="text-base font-semibold mt-2"><a target="_blank" href="{{ $package['repository'] }}">Learn more &rarr;</a></p>
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
				<svg class="w-4 h-4 fill-current mx-2" aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
				  <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
				</svg>
				<span class="text-xl font-semibold">{{ is_numeric($package['github_stars']) ? number_format($package['github_stars']) : '' }}</span>
			</div>

			{{-- Downloads --}}
			<div class="text-gray-500 text-center flex items-center lg:justify-start lg:flex-row-reverse lg:mr-0 mr-5">
				<svg class="w-4 h-4 fill-current mx-2" aria-hidden="true" data-prefix="fas" data-icon="cloud-download-alt" class="svg-inline--fa fa-cloud-download-alt fa-w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
				  <path fill="currentColor" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z"/>
				</svg>
				<span class="text-xl font-semibold">{{ is_numeric($package['downloads']['total']) ? number_format($package['downloads']['total']) : '' }}</span>
			</div>
		</div>
	</div>
	@endforeach
</div>