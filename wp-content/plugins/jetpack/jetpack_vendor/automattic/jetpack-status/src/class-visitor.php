<?php
/**
 * Status and information regarding the site visitor.
 *
 * @package automattic/jetpack-status
 */

namespace Automattic\Jetpack\Status;

/**
 * Visitor class.
 */
class Visitor {

	/**
	 * Gets current user IP address.
	 *
	 * @param  bool $check_all_headers Check all headers? Default is `false`.
	 *
	 * @return string                  Current user IP address.
	 */
	public function get_ip( $check_all_headers = false ) {
		if ( $check_all_headers ) {
			foreach ( array(
				'HTTP_CF_CONNECTING_IP',
				'HTTP_CLIENT_IP',
				'HTTP_X_FORWARDED_FOR',
				'HTTP_X_FORWARDED',
				'HTTP_X_CLUSTER_CLIENT_IP',
				'HTTP_FORWARDED_FOR',
				'HTTP_FORWARDED',
				'HTTP_VIA',
			) as $key ) {
				if ( ! empty( $_SERVER[ $key ] ) ) {
					// @todo Some of these might actually be lists of IPs (e.g. HTTP_X_FORWARDED_FOR) or something else entirely (HTTP_VIA).
					return filter_var( wp_unslash( $_SERVER[ $key ] ) );
				}
			}
		}

		return ! empty( $_SERVER['REMOTE_ADDR'] ) ? filter_var( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	}

	/**
	 * Simple gate check for a11n feature testing purposes using AT_PROXIED_REQUEST constant.
	 * IMPORTANT: Only use it for internal feature test purposes, not authorization.
	 *
	 * The goal of this function is to help us gate features by using a similar function name
	 * we find on simple sites: is_automattician().
	 *
	 * @return bool True if the current request is PROXIED, false otherwise.
	 */
	public function is_automattician_feature_flags_only() {
		return ( defined( 'AT_PROXIED_REQUEST' ) && AT_PROXIED_REQUEST );
	}
}
