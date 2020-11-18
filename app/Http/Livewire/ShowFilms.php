<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;

class ShowFilms extends Component
{
    public $films;
    public $currentFilm = 0;
    public $hasPrevious = true;
    public $hasNext = true;

    public function mount()
    {
        $this->films = Film::where('id', '>', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->first();
        $this->currentFilm = $this->films->id;
        $this->hasNext = Film::where('id', '>', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
        $this->hasPrevious = Film::where('id', '<', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
    }
    public function render()
    {
        return view('livewire.show-films');
    }

    public function getNext()
    {
        $this->films = Film::where('id', '>', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->first();
        $this->currentFilm = $this->films->id;
        $this->hasNext = Film::where('id', '>', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
        $this->hasPrevious = Film::where('id', '<', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
    }

    public function getPrevious()
    {
        $this->films = Film::where('id', '<', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->first();
        $this->currentFilm = $this->films->id;
        $this->hasNext = Film::where('id', '>', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
        $this->hasPrevious = Film::where('id', '<', $this->currentFilm)->where('status', 1)->orderBy('id', 'asc')->exists();
    }
}
