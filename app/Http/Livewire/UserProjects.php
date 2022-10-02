<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserProjects extends Component
{


    use AuthorizesRequests;


    protected $listeners = ['deleteP'];

    private $projects;

    public function mount($projects)
    {
        $this->projects = $projects;
    }



    public function deleteP($id)
    {
        $project = Project::findOrFail($id);
        $this->authorize('delete', $project);

        $workProject = DB::table('freelancer_project')->where('project_id', $project->id)->get();


        if (count($workProject) > 1)
        {
            $this->dispatchBrowserEvent('message', [
                'type' => 'error',
                'message' => 'You can\'t delete this project because it\'s in your purchase ',
            ]);
            return;
        }

        $project->delete();
        $this->dispatchBrowserEvent('message', [
            'type' => 'success',
            'message' => 'Project Deleted Successfully!',
        ]);
    }




    public function render()
    {
        $this->projects= Project::where('user_id',Auth::id())->get();
        return view('livewire.user-projects', ['projects' => $this->projects]);
    }
}
