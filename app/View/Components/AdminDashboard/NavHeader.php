<?php

namespace App\View\Components\AdminDashboard;

use Illuminate\View\Component;

class NavHeader extends Component
{

    public  $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-dashboard.nav-header');
    }
}
