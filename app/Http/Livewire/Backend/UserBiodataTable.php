<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Auth\Models\User;
use Livewire\Component;

class UserBiodataTable extends Component
{
    public $users;
    public User $currentUser;

    protected $rules = [
        'currentUser.address' => 'required|string',
        'currentUser.phone_number' => 'required|string',
    ];

    public function showEditModal($id)
    {
        $this->currentUser = User::find($id);
        $this->emit('toggleUserEditModal');
    }

    public function update()
    {
        $this->validate();

        $this->currentUser->save();

        $this->emit('toggleUserEditModal');
        $this->users = User::query()->orderBy('name')->get();
    }

    public function mount()
    {
        $this->users = User::query()->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.backend.user-biodata-table');
    }
}
