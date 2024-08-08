<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $title;
    public $image;

    public function mount($title, $image)
    {
        $this->title = $title;
        $this->image = $image;
    }

    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
