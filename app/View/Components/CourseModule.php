<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Modules\Course\Entities\Course;

class CourseModule extends Component
{
    public $course;
    public $courses;
    public function __construct($course,$courses)
   {
       $this->course = $course;
       $this->courses = $courses;
   }

    public function render()
    {
        // $course = Course::with('courseModules')->published()->first();
        return view('components.course-module');
        // return view('components.course-module',compact('course'));
    }
}
