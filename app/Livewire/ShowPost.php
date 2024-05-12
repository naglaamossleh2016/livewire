<?php

namespace App\Livewire;

use Livewire\Component;

class ShowPost extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
<<<<<<< HEAD
            Hello from inline livewire
=======
            Hello from inline component
>>>>>>> 7832588c032bd5456cf3b34a1469eadaabdc609f
        </div>
        HTML;
    }
}
