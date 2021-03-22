<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\paystack\common\components;

// Yii Imports
use Yii;

/**
 * The Payment Factory component initialise the services available in Payment Module.
 *
 * @since 1.0.0
 */
class Factory extends \cmsgears\core\common\base\Component {

	// Global -----------------

	// Public -----------------

	// Protected --------------

	// Private ----------------

	// Constructor and Initialisation ------------------------------

	public function init() {

		parent::init();

		// Register services
		$this->registerServices();

		// Register service alias
		$this->registerServiceAlias();
	}

	// Instance methods --------------------------------------------

	// Yii parent classes --------------------

	// CMG parent classes --------------------

	// Factory -------------------------------

	public function registerServices() {

		$this->registerResourceServices();

		$this->registerSystemServices();
	}

	public function registerServiceAlias() {

		$this->registerResourceAliases();

		$this->registerSystemAliases();
	}

	/**
	 * Registers resource services.
	 */
	public function registerResourceServices() {

		$factory = Yii::$app->factory->getContainer();

		$factory->set( 'cmsgears\paystack\common\services\interfaces\resources\ITransactionService', 'cmsgears\paystack\common\services\resources\TransactionService' );
	}

	/**
	 * Registers system services.
	 */
	public function registerSystemServices() {

		$factory = Yii::$app->factory->getContainer();

		$factory->set( 'cmsgears\paystack\common\services\interfaces\system\IPaystackService', 'cmsgears\paystack\common\services\system\PaystackService' );
	}

	/**
	 * Registers resource aliases.
	 */
	public function registerResourceAliases() {

		$factory = Yii::$app->factory->getContainer();

		$factory->set( 'paystackTransactionService', 'cmsgears\paystack\common\services\resources\TransactionService' );
	}

	/**
	 * Registers system aliases.
	 */
	public function registerSystemAliases() {

		$factory = Yii::$app->factory->getContainer();

		$factory->set( 'paystackService', 'cmsgears\paystack\common\services\system\PaystackService' );
	}

}
