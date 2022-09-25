<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Pagination\Paginator;
use Livewire\Component;

class ProjectCards extends Component
{
    private $projects, $categories;

    public $searchText, $currentPage = 1, $category;

    // public $perPage = 6;
    // protected $listeners = [
    //     'load-more' => 'loadMore'
    // ];

    // public function loadMore()
    // {
    //     $this->perPage = $this->perPage + 6;
    // }

    public function mount($projects, $categories)
    {

        $this->projects = $projects;
        $this->categories = $categories;
    }


    public function search()
    {
        $this->projects = Project::latest()
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
        if ($this->projects == null) {

            if ($this->category != null) {
                $this->projects = cache()->remember('projects' . $this->category, 60 + 60 + 24, function () {
                    return Project::with('user', 'category')->where('category_id', $this->category)->paginate(6);
                });
            } else
                $this->projects = cache()->remember('pageProjects'.$this->currentPage, 60 + 60 + 24, function () {
                    return Project::with('user', 'category')->paginate(6);
                });
        }
        if ($this->categories == null) {
            $this->categories = cache()->remember('categories', 60 + 60 + 24, function () {
                return Category::all();
            });
        }



        return view('livewire.project-cards', ['projects' => $this->projects, 'categories' => $this->categories]);
    }
}
