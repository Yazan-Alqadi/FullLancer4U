<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Profession;
use Illuminate\Pagination\Paginator;
use Livewire\Component;

class ServiceCards extends Component
{

    private $services, $categories;

    public $searchText, $currentPage = 1, $category;

    public function mount($services, $categories)
    {
        $this->services = $services;
        $this->categories = $categories;
    }

    public function search()
    {
        $this->services = Profession::latest()
            ->where('title', 'LIKE', "%{$this->searchText}%")
            ->paginate(6);
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];

        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }


    public function render()
    {

        if ($this->services == null) {

            if ($this->category != null) {
                $this->services = cache()->remember('services' . $this->category, 60 + 60 + 24, function () {
                    return Profession::with('freelancer', 'category', 'freelancer.user')->where('category_id', $this->category)->paginate(6);
                });
            } else
                $this->services = cache()->remember('pageServices' . $this->currentPage, 60 + 60 + 24, function () {
                    return Profession::with('freelancer', 'category', 'freelancer.user')->paginate(6);
                });
        }
        if ($this->categories == null) {
            $this->categories = cache()->remember('categories', 60 * 60 + 24, function () {
                return Category::all();
            });
        }



        return view('livewire.service-cards', ['services' => $this->services, 'categories' => $this->categories]);
    }
}
