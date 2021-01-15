<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersModal extends Component
{
  use WithPagination;

  protected $paginationTheme = 'bootstrap';

  public function render()
  {
    return view('livewire.users-modal', [
      'users' => User::orderBy('name')->paginate(),
    ]);
  }
}
