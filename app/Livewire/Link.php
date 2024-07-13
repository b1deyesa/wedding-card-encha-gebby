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
        $this->link = 'https://wedding-card.bideyesa.com/';
    }
    
    public function updatedName()
    {
        if ($this->name != NULL || $this->name != "") {
            $this->disabled = false;
        } else {
            $this->disabled = true;
        }
        $this->link = 'https://wedding-card.bideyesa.com/' . '?to=' . rawurlencode($this->name);
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
