<?php

namespace App\View\Components\Master;

use Illuminate\View\Component;

use Illuminate\Support\Facades\Auth;

class Author extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {

      if (Auth::user()->type == 'admin') {
          return view('admin');
      } else if (Auth::user()->type == 'user') {
        return view('components.master.index');
      }

    }
}
