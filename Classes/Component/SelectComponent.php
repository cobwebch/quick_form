<?php

namespace Vanilla\QuickForm\Component;

/**
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

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * A multi file upload form component to be rendered in a Quick Form.
 */
class SelectComponent extends GenericComponent
{

    /**
     * Constructor
     *
     * @param string $property
     * @param string $label
     * @param string $items
     * @param string $itemsDataType
     */
    public function __construct($property, $label = '', $items = '', $itemsDataType = '')
    {
        $partialName = 'Form/Select';
        $arguments['property'] = $property;

        if (empty($label)) {
            $label = GeneralUtility::camelCaseToLowerCaseUnderscored($property);
        }
        $arguments['label'] = $label;
        $arguments['items'] = $items;
        $arguments['itemsDataType'] = $itemsDataType;

        parent::__construct($partialName, $arguments);
    }

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @return string
     */
    public function getPartialName()
    {
        return $this->partialName;
    }

}
