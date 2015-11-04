<?php

use \Illuminate\Support\Facades\File;

foreach(File::allFiles(app_path().'/Http/Routes') as $partial) {

	require_once $partial->getPathName();
	
}
