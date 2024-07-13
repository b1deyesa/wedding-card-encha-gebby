<?php

namespace App\Livewire;

use Livewire\Component;

class Link extends Component
{
    public $name;
    public $link;
    public $disabled = true;
    
    public function mount()
    {
        $this->link = env('APP_URL');
    }
    
    public function updatedName()
    {
        if ($this->name != NULL) {
            $this->disabled = false;
        }
        $this->link = env('APP_URL'). '?to=' . rawurlencode($this->name);
    }
    
    public function clear()
    {
        $this->name = null;
        $this->disabled = true;
    }
    
    public function render()
    {
        return view('livewire.link');
    }
}