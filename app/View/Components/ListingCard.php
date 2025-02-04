<?php

namespace App\View\Components;

use Faker\Guesser\Name;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ListingCard extends Component
{
    public $item;
    public $price;
    public $qty;
    public $image;
    public $description;
    public function __construct($item, $price, $qty, $image, $description)
    {
        $this->item = $item;
        $this->price = $price;
        $this->qty = $qty;
        $this->image = $image;
        $this->description = $description;
    
  
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listing-card');
    }
}
