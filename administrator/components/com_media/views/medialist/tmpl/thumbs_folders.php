<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<?php foreach ($this->folders as $i => $folder) : ?>
	<li class="imgOutline thumbnail height-80 width-80 center">
		<?php if ($this->canDelete) : ?>
			<a class="close delete-item" target="_top" href="../../../../../../index.php" rel="<?php echo $this->escape($folder->name); ?> :: <?php echo $this->escape($folder->files) + $this->escape($folder->folders); ?>" title="<?php echo JText::_('JACTION_DELETE'); ?>">&#215;</a>
			<div class="pull-left">
				<?php echo JHtml::_('grid.id', $i, $this->escape($folder->name), false, 'rm', 'cb-folder'); ?>
			</div>
			<div class="clearfix"></div>
		<?php endif; ?>

		<div class="height-50">
			<a href="../../../../../../index.php" target="folderframe">
				<span class="icon-folder-2"></span>
			</a>
		</div>

		<div class="small">
			<a href="../../../../../../index.php" target="folderframe">
				<?php echo JHtml::_('string.truncate', $this->escape($folder->name), 10, false); ?>
			</a>
		</div>
	</li>
<?php endforeach; ?>
