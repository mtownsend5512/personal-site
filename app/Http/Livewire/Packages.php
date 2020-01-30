<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Zttp\Zttp;

class Packages extends Component
{
    public $packageName;
    public $ready = false;

    public function mount($package)
    {
        $this->packageName = $package;
    }

    public function fetchPackages()
    {
        $this->ready = true;
    }

    public function render()
    {
        if ($this->ready) {
            $response = Zttp::get("https://packagist.org/packages/{$this->packageName}.json");
            $package = $response->json()['package'];
        } else {
        	$package = [
        		'name' => '',
        		'description' => '',
        		'time' => '',
        		'maintainers' => [],
        		'versions' => [],
        		'type' => '',
        		'repository' => '',
        		'github_stars' => '',
        		'github_watchers' => '',
        		'github_forks' => '',
        		'github_open_issues' => '',
        		'language' => '',
        		'dependents' => '',
        		'suggesters' => '',
        		'downloads' => [
        			'total' => '',
        			'monthly' => '',
        			'daily' => '',
        		],
        		'favers' => ''
        	];
        }

        return view('livewire.packages', [
            'package' => $package
        ]);
    }
}
