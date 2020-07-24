<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');

?>
<a rel="{handler: 'iframe', size: {x: <?php echo $displayData['height']; ?>, y: <?php echo $displayData['width']; ?>}}"
	href="../../../../../../../index.php"
	title="<?php echo $displayData['title']; ?>" class="toolbar modal_jform_contenthistory">
	<span class="icon-32-restore"></span> <?php echo $displayData['title']; ?>
</a>
