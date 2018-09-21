<?php
/**
 * Created by PhpStorm.
 * User: fdoumet
 * Date: 9/21/18
 * Time: 9:20 AM
 */

namespace OCA\Piwik\Controller;

require_once __DIR__ . "/../matomo-php-tracker/PiwikTracker.php";

use PiwikTracker;

class PixelDriveTracker extends PiwikTracker{
	public function __construct(){
		$analyticsUrl = getenv('MLVX_ANALYTICS_URL');
		parent::__construct(1, $analyticsUrl);
	}
}