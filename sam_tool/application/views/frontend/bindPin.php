<div class="form-group">
	<label class="control-label">Locality</label><span style="color:red">*</span>
	
	<select name="area_name"  id="area_name"  class="form-control selectsearch" onchange="selectArea(this.value)">
		<option value="0" <?php if($area_name=='') echo 'selected'; ?>> </option>
		<!-- <option value="">Select</option> -->
		<?php for($i=0;$i<count($pincode);$i++){ ?>
		<option value="<?= $pincode[$i]->id ?>"><?php echo $pincode[$i]->area_name; ?></option>
		<?php } ?>
	</select>
	
</div>