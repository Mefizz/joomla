<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$input = JFactory::getApplication()->input;
?>
<li class="imgOutline thumbnail height-80 width-80 center">
	<a href="../../../../../index.php" target="imageframe">
		<div class="imgFolder">
			<span class="icon-folder-2"></span>
		</div>
		<div class="small">
			<?php echo JHtml::_('string.truncate', $this->escape($this->_tmp_folder->name), 10, false); ?>
		</div>
	</a>
</li>
