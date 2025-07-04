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
    public $src = null;

    /**
     * Create a new component instance.
     */
    public function __construct($index, $height, $src = null)
    {
        $this->index = $index;
        $this->height = $height;
        $this->src = $src;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gallery-image-upload');
    }
}
