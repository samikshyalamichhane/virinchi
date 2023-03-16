<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseDetail extends Component
{
    public $course;
    public $coursecategories;
    public function __construct($course,$coursecategories)
   {
       $this->course = $course;
       $this->coursecategories = $coursecategories;
   }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course-detail');
    }
}
