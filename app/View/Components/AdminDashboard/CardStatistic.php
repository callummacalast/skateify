<?php

namespace App\View\Components\AdminDashboard;

use Illuminate\View\Component;

class CardStatistic extends Component
{

    public $stat;
    public $title;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($stat, $title, $icon)
    {
        $this->stat = $stat;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-dashboard.card-statistic');
    }
}
