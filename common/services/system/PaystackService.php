<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\paystack\common\services\system;

// CMG Imports
use cmsgears\paystack\common\config\PaystackProperties;

use cmsgears\paystack\common\services\interfaces\system\IPaystackService;

/**
 * PaystackService provide methods specific to Stripe APIs to handle transactions.
 *
 * @since 1.0.0
 */
class PaystackService extends \cmsgears\core\common\services\base\SystemService implements IPaystackService {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	// Protected --------------

	// Private ----------------

	private $properties;

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	public function __construct( $config = [] ) {

		$this->properties = PaystackProperties::getInstance();

		parent::__construct( $config );
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// PaystackService -----------------------

    public function createPayment() {

		$publicKey = $this->properties->getPublicKey();

		if( isset( $publicKey ) && $this->properties->isActive() ) {

			// Create Payment
		}
	}

}
