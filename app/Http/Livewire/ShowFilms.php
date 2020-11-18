<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;

class ShowFilms extends Component
{
    public $films;
    public $currentFilm = 0;

    public function mount()
    {
        $this->films = Film::where('id', '>', $this->currentFilm)->first();
    }
    public function render()
    {
        return view('livewire.show-films');
    }
}
