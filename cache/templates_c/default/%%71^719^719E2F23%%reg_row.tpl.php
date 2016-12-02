<?php /* Smarty version 2.6.26, created on 2016-12-01 14:43:07
         compiled from registration_admission/reg_row.tpl */ ?>
<tr>
  <td <?php if ($this->_tpl_vars['must']): ?> class="reg_input_must" <?php else: ?> class="reg_item" <?php endif; ?> <?php echo $this->_tpl_vars['sColSpan1']; ?>
><?php echo $this->_tpl_vars['sItem']; ?>
</td>
  <td <?php if ($this->_tpl_vars['must']): ?> class="reg_input_must" <?php else: ?> class="reg_input" <?php endif; ?> <?php echo $this->_tpl_vars['sColSpan2']; ?>
><?php echo $this->_tpl_vars['sInput']; ?>
</td>
</tr>