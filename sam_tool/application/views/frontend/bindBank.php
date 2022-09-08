<div class="form-group">
	<label class="control-label">Bank</label><span style="color:red">*</span>
	
	<select id="bank_name" name="bank_name" class="form-control" onchange="selectBank(this.value)">
		<option value="">Select</option>
		<?php for($i=0;$i<count($bank);$i++){ ?>
		<option value="<?= $bank[$i]->id ?>"><?php echo $bank[$i]->bank_name; ?></option>
		<?php } ?>
	</select>
	
</div>