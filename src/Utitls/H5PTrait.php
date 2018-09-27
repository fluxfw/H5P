<?php

namespace srag\Plugins\H5P\Utitls;

use srag\DIC\DICTrait;
use srag\Plugins\H5P\H5P\H5P;

/**
 * Trait H5PTrait
 *
 * @package srag\Plugins\H5P\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait H5PTrait {

	use DICTrait;


	/**
	 * @return H5P
	 */
	protected static function h5p()/*: H5P*/ {
		return H5P::getInstance();
	}
}
