<?php
namespace CommerceTeam\Commerce\Domain\Repository;
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Database Class for tx_commerce_products. All database calle should
 * be made by this class. In most cases you should use the methodes
 * provided by tx_commerce_product to get informations for articles.
 * Inherited from \CommerceTeam\Commerce\Domain\Repository\Repository
 *
 * Class \CommerceTeam\Commerce\Domain\Repository\AttributeValueRepository
 *
 * @author 2005-2011 Ingo Schmitt <is@marketing-factory.de>
 */
class AttributeValueRepository extends Repository {
	/**
	 * Database table
	 *
	 * @var string
	 */
	public $databaseTable = 'tx_commerce_attribute_values';
}
