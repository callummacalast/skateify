<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactFormField extends Component
{
    public $fieldName;
    public $emailCheck;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $fieldName, $emailCheck = false)
    {
        $this->fieldName = $fieldName;
        $this->emailCheck = $emailCheck ? true : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-form-field');
    }
}
