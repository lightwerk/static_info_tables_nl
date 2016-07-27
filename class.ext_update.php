<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005-2008 René Fritz (r.fritz@colorcube.de)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
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



require_once (t3lib_extMgm::extPath('static_info_tables').'class.tx_staticinfotables_encoding.php');

/**
 * Class for updating the db
 *
 * @author	 René Fritz <r.fritz@colorcube.de>
 */
class ext_update {
	/**
	 * Main function, returning the HTML content
	 *
	 * @return string HTML
	 */
	function main()	{
		$content = '';
		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

		// Clear the class cache
		$classCacheManager = $objectManager->get('SJBR\\StaticInfoTables\\Cache\\ClassCacheManager');
		$classCacheManager->reBuild();

		// Update the database
		$databaseUpdateUtility = $objectManager->get('SJBR\\StaticInfoTables\\Utility\\DatabaseUpdateUtility');
		$databaseUpdateUtility->doUpdate('static_info_tables_nl');

		$content.= '<p>' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables') . ' static_info_tables_nl.</p>';
		return $content;
	}

	function access() {
		return true;
	}
}

?>