<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Reactions extends Component
{

    private $post_id;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
    }

    public  function like($post_id)
    {

        DB::connection('mongodb')->collection('reactions')->where('post_id', $post_id)->increment('likes', 1);
        $this->post_id = $post_id;

    }

    public  function dislike($post_id)
    {
        DB::connection('mongodb')->collection('reactions')->where('post_id', $post_id)->increment('dislikes', 1);
        $this->post_id = $post_id;

    }




    public function render()
    {


        $reactions = DB::connection('mongodb')->collection('reactions')->where('post_id', $this->post_id)->first();
        $comments_number = Comment::where('post_id',$this->post_id)->count();
        return view('livewire.reactions', compact('reactions','comments_number'));
    }
}
