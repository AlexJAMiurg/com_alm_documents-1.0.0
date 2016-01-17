<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Alm_documents
 * @author     Alexander <jakimov_alex@mail.ru>
 * @copyright  © 2016. Все права защищены.
 * @license    GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;


?>
<?php if ($this->item) : ?>

	<div class="item_fields">
		<table class="table">
			<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_ID'); ?></th>
			<td><?php echo $this->item->id; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_SYS_CREATED_BY'); ?></th>
			<td><?php echo $this->item->sys_created_by; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_SYS_CREATED_AT'); ?></th>
			<td><?php echo $this->item->sys_created_at; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_SYS_MODIFIED_BY'); ?></th>
			<td><?php echo $this->item->sys_modified_by; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_SYS_MODIFIED_AT'); ?></th>
			<td><?php echo $this->item->sys_modified_at; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_ALM_DOCUMENTS_FORM_LBL_DOCUMENTSTABLE_TITLE'); ?></th>
			<td><?php echo $this->item->title; ?></td>
</tr>

		</table>
	</div>
	
	<?php
else:
	echo JText::_('COM_ALM_DOCUMENTS_ITEM_NOT_LOADED');
endif;
