<?php

namespace MelhorEnvio\Services;

use MelhorEnvio\Models\Seller;
use MelhorEnvio\Models\Session;
use MelhorEnvio\Models\ShippingService;
use MelhorEnvio\Helpers\SessionHelper;

class ClearDataStored {

	public function __construct() {
		SessionHelper::initIfNotExists();
	}
	/**
	 * Function to clear data about seller stored in session or database.
	 *
	 * @return void
	 */
	public function clear() {
		( new Seller() )->destroy();
		( new ShippingService() )->destroy();

		if ( ! empty( $_SESSION[ Session::ME_KEY ] ) ) {
			foreach ( $_SESSION[ Session::ME_KEY ] as $key ) {
				if ( $key != 'notices_melhor_envio' ) {
					if ( @isset( $_SESSION[ Session::ME_KEY ][ $key ] ) ) {
						unset( $_SESSION[ Session::ME_KEY ][ $key ] );
					}
				}
			}
		}
	}
}
