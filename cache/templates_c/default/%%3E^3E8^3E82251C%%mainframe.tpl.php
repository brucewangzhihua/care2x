<?php /* Smarty version 2.6.26, created on 2016-12-01 14:42:24
         compiled from common/mainframe.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width=100% border=0 cellspacing=0 height=100%>
<tbody class="main">
<?php if (! $this->_tpl_vars['bHideTitleBar']): ?>
	<tr>
		<td  valign="top" align="middle" height="35">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header_topblock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
<?php endif; ?>

	<tr>
		<td bgcolor=<?php echo $this->_tpl_vars['body_bgcolor']; ?>
 valign=top>
		
						<?php if ($this->_tpl_vars['sMainBlockIncludeFile'] != ""): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sMainBlockIncludeFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['sMainFrameBlockData'] != ""): ?>
				<?php echo $this->_tpl_vars['sMainFrameBlockData']; ?>

			<?php endif; ?>
			
		</td>
	</tr>
	


	</tbody>
 </table>

