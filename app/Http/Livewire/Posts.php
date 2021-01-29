<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
  use WithPagination;

  protected $paginationTheme = 'bootstrap';
  public $perPage = 10;

  public $title;
  public $content;

  // public $prompt;

  protected $listeners = [
    'refreshParent' => '$refresh'
  ];

  /* public function refreshParent()
  {
    $this->prompt = "El principal puede ser rerefrescado";
  } */
  public function hydrate()
  {
    $this->validate = [
      'title' => 'required|min:10|max:20|unique:posts',
      'content' => 'required',
    ];
  }

  public function save()
  {
    $data = [
      'title' => $this->title,
      'content' => $this->content,
    ];

    Post::create($data);
    $this->emit('refreshParent');
    $this->dispatchBrowserEvent('closeModal');
    $this->cleanVars();

    session()->flash('success', 'Publicación creada satisfactoriamente 😁!');
  }

  private function cleanVars()
  {
    $this->title = null;
    $this->content = null;
  }

  public function render()
  {
    return view('posts.posts', [
      'posts' => Post::orderBy('id', 'desc')->paginate($this->perPage)
    ]);
  }
}
