<?php declare( strict_types = 1 );
namespace Collins;

use WP_REST_Response;

final class CustomResponse extends WP_REST_Response {

	/**
	 * @param boolean $arg
	 * @return string
	 */
	public function custom_method() {
		return 1;
	}
}
