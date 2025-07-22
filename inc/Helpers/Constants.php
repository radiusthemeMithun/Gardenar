<?php

namespace RT\Gardenar\Helpers;

class Constants {

	const GARDENAR_VERSION = '1.0.0';

	public static function get_version() {
		return WP_DEBUG ? time() : self::GARDENAR_VERSION;
	}
}

