<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserSkills extends Component
{

    use AuthorizesRequests;


    protected $listeners = ['deleteS'];


    private $skills;

    public $input;

    protected $rules = [
        'input' => 'required',
    ];

    public function mount($skills)
    {
        $this->skills = $skills;
    }


    public function addSkill()
    {
        $this->validate();

        $this->skills = DB::table('skills')->where('user_id',  Auth::id())->get();

        if (count($this->skills)>4)
        {
            $this->dispatchBrowserEvent('message', [
                'type' => 'error',
                'message' => 'You Cannot added more than 5 Skills',
            ]);
            return;

        }

        Skill::create([
            'title' => $this->input,
            'user_id' => Auth::id(),
        ]);
        $this->dispatchBrowserEvent('message', [
            'type' => 'success',
            'message' => 'Your Skill added Successfully!',
        ]);

        $this->input=null;


    }



    public function deleteS($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        $this->skills = DB::table('skills')->where('user_id',  Auth::id())->get();

        $this->dispatchBrowserEvent('message', [
            'type' => 'success',
            'message' => 'SKill Deleted Successfully!',
        ]);
    }


    public function render()
    {
        $this->skills = DB::table('skills')->where('user_id',  Auth::id())->get();

        return view('livewire.user-skills', ['skills' => $this->skills]);
    }
}
