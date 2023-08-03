<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Comments extends Component
{


    use WithFileUploads;

    private $post_id;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
    }


    public function render()
    {
        $comments = Comment::where('post_id', $this->post_id)->get();

        return view('livewire.comments', compact('comments'));
    }
}
