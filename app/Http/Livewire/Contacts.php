<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class Contacts extends Component
{
    public function index() {
        return view('livewire.contacts');
    }

}
