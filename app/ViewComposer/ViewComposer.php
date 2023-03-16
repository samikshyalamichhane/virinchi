<?php
namespace App\ViewComposer;
use Illuminate\View\View;
use Modules\Site\Entities\Site;
use Modules\Address\Entities\Address;
use Modules\Machine\Entities\Machine;
use Modules\Project\Entities\Project;

class ViewComposer {
	private $dashboard;
	public function __construct() {
	}
	public function compose(View $view) {
        $site = Site::latest()->first();
		// $machines = Machine::where('publish',1)->latest()->take(3)->get();
		// $projects = Project::where('publish',1)->latest()->take(3)->get();`
		$view->with([
			'dashboard_site'=>$site,
			// 'dashboard_machines'=>$machines,
			// 'dashboard_projects'=>$projects,
		]);
	}

}
