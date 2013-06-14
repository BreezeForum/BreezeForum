<?php
/**
 * BreezeForum
 *
 * @author Jessica González <suki@missallsunday.com>
 * @copyright Copyright (c) 2013 Jessica González
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

class PageController extends \lithium\action\Controller {

	public function hello()
	{
		$data = 'Hello world!';

		return compact('data', 'data');
	}
}
