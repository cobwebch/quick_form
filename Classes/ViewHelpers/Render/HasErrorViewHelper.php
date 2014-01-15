<?php
namespace TYPO3\CMS\QuickForm\ViewHelpers\Render;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\QuickForm\Validation\ValidationService;
use TYPO3\CMS\QuickForm\ViewHelpers\AbstractValidationViewHelper;

/**
 * View helper which tells whether a property has an error.
 */
class HasErrorViewHelper extends AbstractValidationViewHelper {

	/**
	 * Returns whether a property has an error.
	 *
	 * @param string $property
	 * @return bool
	 */
	public function render($property) {

		$fieldNamePrefix = (string) $this->viewHelperVariableContainer->get('TYPO3\\CMS\\Fluid\\ViewHelpers\\FormViewHelper', 'fieldNamePrefix');
		$formObjectName = (string) $this->viewHelperVariableContainer->get('TYPO3\\CMS\\Fluid\\ViewHelpers\\FormViewHelper', 'formObjectName');

		$arguments = GeneralUtility::_GP($fieldNamePrefix);

		$result = '';
		if (isset($arguments[$formObjectName][$property])) {

			$value = $arguments[$formObjectName][$property];

			if (ValidationService::getInstance($this)->isRequired($property) && empty($value)) {
				$result = 'has-error';
			}
		}

		return $result;
	}
}

?>