<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GalleryItem extends Component
{

    public function __construct($placeholder, $photo)
    {
        $this->placeholder = $placeholder;
        $this->photo = $photo;
    }
    
    public $placeholder;
    public $photo;

    public function render(): View|Closure|string{
        return view('components.gallery-item');
    }

}
