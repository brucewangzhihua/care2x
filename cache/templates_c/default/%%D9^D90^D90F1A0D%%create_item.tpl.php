<?php /* Smarty version 2.6.26, created on 2016-12-01 14:47:20
         compiled from ecombill/create_item.tpl */ ?>
<ul>
<div class="prompt"><?php echo $this->_tpl_vars['FormTitle']; ?>
</div>

<?php echo $this->_tpl_vars['sFormTag']; ?>

	<table cellpadding="5"  border="0" cellspacing=1>
		<tr>
			<td bgcolor=#dddddd >
				<?php echo $this->_tpl_vars['LDName']; ?>
:<br>
				<input type="text" name="LabTestName" size=30 maxlength=30><p>
				<?php echo $this->_tpl_vars['LDCode']; ?>
:<br>
				<input type="text" name="TestCode" size=30 maxlength=14><br>
			</td>

			<td bgcolor=#dddddd >
				<?php echo $this->_tpl_vars['LDPriceUnit']; ?>
:<br>
				<input type="text" name="LabPrice" size=30 ><p>
				<?php echo $this->_tpl_vars['LDEnterValueDiscount']; ?>
:<br>
				<input type="text" name="Discount" size=30>
			</td>
		</tr>
	</table>
<p>
<?php echo $this->_tpl_vars['sHiddenInputs']; ?>

<p>
<?php echo $this->_tpl_vars['pbSubmit']; ?>
 <?php echo $this->_tpl_vars['pbCancel']; ?>

</form>

</ul>