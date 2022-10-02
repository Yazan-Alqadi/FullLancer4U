<?php

namespace App\Http\Livewire;

use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserServices extends Component
{

    use AuthorizesRequests;


    protected $listeners = ['delete'];

    private $services;

    public function mount($services)
    {
        $this->services = $services;
    }




    public function render()
    {

        return view('livewire.user-services', ['services' => $this->services]);
    }


    public function delete($id)
    {
        $service = Profession::findOrFail($id);

        $this->authorize('delete', $service);

        $workService = DB::table('client_service')->where('service_id', $service->id)->where('status', 'work')->get();


        if (count($workService) > 0) {
            $this->dispatchBrowserEvent('message', [
                'type' => 'error',
                'message' => 'You can\'t delete this service because it\'s in your work ',
            ]);
            return;
        }
        $services = Profession::where('freelancer_id', $service->freelancer_id)->get();

        if (count($services) < 2) {
            $freelancer = Freelancer::findOrFail($service->freelancer_id);

            $workProject = DB::table('freelancer_project')->where('freelancer_id', $freelancer->id)->get();
            if (count($workProject) > 0) {
                $this->dispatchBrowserEvent('message', [
                    'type' => 'error',
                    'message' => 'You can\'t delete this service because You have projects in your work',
                ]);
                return;
            }

            $user = User::findOrFail($freelancer->user_id);
            $user->is_freelancer = false;
            $user->save();
            $freelancer->delete();
            $this->services = [];
            $service->delete();
        } else {
            $service->delete();
            $this->services = DB::table('professions')->where('freelancer_id', Auth::user()->freelancer->id)->get();
        }

        $this->dispatchBrowserEvent('message', [
            'type' => 'success',
            'message' => 'Service Deleted Successfully!',
        ]);
    }
}
