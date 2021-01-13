<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\paystack\common\services\interfaces\system;

// CMG Imports
use cmsgears\core\common\services\interfaces\base\ISystemService;

/**
 * IPaystackService declares methods specific to Stripe APIs.
 *
 * @since 1.0.0
 */
interface IPaystackService extends ISystemService {

	public function createPayment( $order, $token );

}
