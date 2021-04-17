@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h2 class="card-header text-center">
            CRUD de Estudiantes <br> con Buscador <br>
          </h2>
    
          <h5 class="text-center">
            <a href="https://www.youtube.com/watch?v=dkU1cgCjhIc&list=PLIeKz8l1eVaO6PE_k18HHHVyf0sbtceZm&index=2" target="_blank">Programming with Singhateh - How to Create Laravel Livewire Complete Step by Step CRUD Application (Livewire Installation)</a>
          </h5>
          <div class="card-header bg-dark text-white">
            <b style="text-transform: uppercase">Lista de Estudiantes</b>
            <div style="float:right">
              <input type="text" wire:model="search" wire:model="search"
                class="form-control ml:1px" placeholder="Buscar......"></div>

            @if(session()->has('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
            @endif
          </div>
          <div class="card-body">
            @livewire('student-crud')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection