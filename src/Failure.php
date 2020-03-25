<?php declare( strict_types = 1 );
namespace Collins;

final class Failure {

	public static function failureExample(): void {
		$response = new CustomResponse();
		$response_rest = new \WP_REST_Response();
		$response_base = new \WP_HTTP_Response();
		/**
		 * ::get_status() is defined by WP_HTTP_Response
		 *
		 * Psalm error is UndefinedMethod
		 */
		$status = $response->get_status();

		/**
		 * Custom_Response extends WP_REST_Response
		 */
		$response_rest = $response_rest->get_status();

		/**
		 * WP_REST_Response extends WP_HTTP_Response
		 */
		$other_status = $response_base->get_status();

		/**
		 * Sanity check
		 */
		$custom = $response->custom_method();
	}

}