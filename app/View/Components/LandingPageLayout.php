<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LandingPageLayout extends Component
{
    public $artikel;
    public $galeri;
    /**
     * Create a new component instance.
     */
    public function __construct($artikel, $galeri)
    {
        $this->artikel = $artikel;
        $this->galeri = $galeri;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.landing-page');
    }
}
