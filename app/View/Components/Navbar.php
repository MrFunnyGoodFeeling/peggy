<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{

    public function __construct($page = null){
        $this->page = $page;
    }

    public $page;

    public function render(): View|Closure|string{
        return view('components.navbar');
    }

}
