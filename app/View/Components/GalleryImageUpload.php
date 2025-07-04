<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Query\IndexHint;
use Illuminate\View\Component;

class GalleryImageUpload extends Component
{

    public $index;
    public $height;
    public $tour = [];

    /**
     * Create a new component instance.
     */
    public function __construct($index, $height, $tour = [])
    {
        $this->index = $index;
        $this->height = $height;
        $this->tour = $tour;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gallery-image-upload');
    }
}
