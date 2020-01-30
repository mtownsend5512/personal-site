<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Zttp\Zttp;

class Packages extends Component
{
    public $packageNames;
    public $ready = false;

    public function mount($packageNames)
    {
        $this->packageNames = $packageNames;
    }

    public function fetchPackages()
    {
        $this->ready = true;
    }

    public function render()
    {
        if ($this->ready) {
            foreach ($this->packageNames as $packageName) {
                $response = Zttp::get("https://packagist.org/packages/{$packageName}.json");
                $packages[] = $response->json()['package'];
            }
            $packages = collect($packages)->sortByDesc('downloads.total')->toArray();
        } else {
            $packages = [];
        }

        return view('livewire.packages', [
            'packages' => $packages
        ]);
    }
}
