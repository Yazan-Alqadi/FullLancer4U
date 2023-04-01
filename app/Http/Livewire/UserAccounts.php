<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class UserAccounts extends Component
{

    private $accounts;
    protected $listeners = ['deleteAccount'];


    public function mount($accounts)
    {
        $this->accounts = $accounts;
    }

    public function deleteAccount($id)
    {
        $collection = DB::connection('mongodb')->collection('accounts');

        // Delete the document with the specified _id field value
        $result = $collection->where(['_id' => $id])->delete();

        if ($result>  0) {
            $this->dispatchBrowserEvent('message', [
                'type' => 'success',
                'message' => 'Account Deleted Successfully!',
            ]);
        } else {
            $this->dispatchBrowserEvent('message', [
                'type' => 'fail',
                'message' => 'Account Deleted Failed!',
            ]);
        }
    }


    public function render()
    {
        $this->accounts = DB::connection('mongodb')->collection('accounts')->where('user_id', Auth::id())->get();

        return view('livewire.user-accounts', ['accounts' => $this->accounts]);
    }
}
