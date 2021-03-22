<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\paystack\common\config;

// CMG Imports
use cmsgears\paystack\common\config\PaystackGlobal;

/**
 * PaystackProperties provide methods to access the properties specific to paystack.
 *
 * @since 1.0.0
 */
class PaystackProperties extends \cmsgears\core\common\config\Properties {

	// Variables ---------------------------------------------------

	// Global -----------------

	const PROP_STATUS	= 'status';
	const PROP_PAYMENTS	= 'payments';
	const PROP_CURRENCY	= 'currency';

    const PROP_TEST_SECRET_KEY	= 'test_secret_key';
    const PROP_TEST_PUBLIC_KEY	= 'test_public_key';

    const PROP_LIVE_SECRET_KEY	= 'live_secret_key';
    const PROP_LIVE_PUBLIC_KEY	= 'live_public_key';

	// Public -----------------

	// Protected --------------

	// Private ----------------

	private static $instance;

	// Constructor and Initialisation ------------------------------

	/**
	 * Return Singleton instance.
	 */
	public static function getInstance() {

		if( !isset( self::$instance ) ) {

			self::$instance	= new PaystackProperties();

			self::$instance->init( PaystackGlobal::CONFIG_PAYSTACK );
		}

		return self::$instance;
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// PaystackProperties --------------------

	/**
	 * Return the status among live or test.
	 *
	 * @return string
	 */
	public function getStatus() {

		return $this->properties[ self::PROP_STATUS ];
	}

	/**
	 * Check whether payments are enabled for Paystack.
	 *
	 * @return boolean
	 */
	public function isPayments() {

		return $this->properties[ self::PROP_PAYMENTS ];
	}

	/**
	 * Check whether status is set to either test or live.
	 *
	 * @return boolean
	 */
	public function isActive() {

		$status = $this->properties[ self::PROP_STATUS ];

		return $this->isPayments() && in_array( $status, [ 'test', 'live' ] );
	}

	/**
	 * Returns the default currency configured for Paystack transactions.
	 *
	 * @return string
	 */
	public function getCurrency() {

		return $this->properties[ self::PROP_CURRENCY ];
	}

	/**
	 * Returns the secret key for test mode.
	 *
	 * @return string
	 */
    public function getTestSecretKey() {

        return $this->properties[ self::PROP_TEST_SECRET_KEY ];
    }

	/**
	 * Returns the public key for test mode.
	 *
	 * @return string
	 */
    public function getTestPublicKey() {

        return $this->properties[ self::PROP_TEST_PUBLIC_KEY ];
    }

	/**
	 * Returns the secret key for live mode.
	 *
	 * @return string
	 */
    public function getLiveSecretKey() {

        return $this->properties[ self::PROP_LIVE_SECRET_KEY ];
    }

	/**
	 * Returns the public key for live mode.
	 *
	 * @return string
	 */
    public function getLivePublicKey() {

        return $this->properties[ self::PROP_LIVE_PUBLIC_KEY ];
    }

	/**
	 * Returns the secret key according to the mode configured for Paystack.
	 *
	 * @return string
	 */
	public function getSecretKey() {

		switch( $this->properties[ self::PROP_STATUS ] ) {

			case 'test': {

				return $this->properties[ self::PROP_TEST_SECRET_KEY ];
			}
			case 'live': {

				return $this->properties[ self::PROP_LIVE_SECRET_KEY ];
			}
		}
	}

	/**
	 * Returns the public key according to the mode configured for Paystack.
	 *
	 * @return string
	 */
	public function getPublicKey() {

		switch( $this->properties[ self::PROP_STATUS ] ) {

			case 'test': {

				return $this->properties[ self::PROP_TEST_PUBLIC_KEY ];
			}
			case 'live': {

				return $this->properties[ self::PROP_LIVE_PUBLIC_KEY ];
			}
		}
	}

}
