<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $search = '';
    public function render()
    {
        $users = User::where('name', 'like', "%{$this->search}%")->get();
        
        return view('livewire.users')->with([
            'users' => $users, 
        ]);
    }
}
