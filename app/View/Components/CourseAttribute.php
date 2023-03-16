<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseAttribute extends Component
{
    public $course;
    public $courses;
    public function __construct($course,$courses)
    {
        $this->course = $course;
        $this->courses = $courses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course-attribute');
    }
    
}
