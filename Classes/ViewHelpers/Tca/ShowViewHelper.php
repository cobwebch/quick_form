<?php
namespace TYPO3\CMS\QuickForm\ViewHelpers\Tca;

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

/**
 * View helper which render a detail view of a TCA data type.
 */
class ShowViewHelper extends FormViewHelper {

	/**
	 * Computes a partial name for an item.
	 *
	 * @param array $item
	 * @return array
	 */
	protected function computePartialNameForItem($item) {
		$partial = $item['partial'];
		$searches = array('Form/');
		$replaces = array('Show/');
		return str_replace($searches, $replaces, $partial);
	}

	/**
	 * Computes a partial name for a field.
	 *
	 * @param string $section
	 * @return string
	 */
	protected function computePartialNameForField($section) {
		return 'Show/' . $section;
	}
}

?>