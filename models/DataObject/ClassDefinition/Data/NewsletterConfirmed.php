<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\DataObject\ClassDefinition\Data;

use Pimcore\Model;

class NewsletterConfirmed extends Model\DataObject\ClassDefinition\Data\Checkbox
{
    use Model\DataObject\Traits\SimpleComparisonTrait;

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = 'newsletterConfirmed';
}
