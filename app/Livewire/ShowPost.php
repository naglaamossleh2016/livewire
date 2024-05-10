<?php

namespace App\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            Hello from inline component
        </div>
        HTML;
    }
}
