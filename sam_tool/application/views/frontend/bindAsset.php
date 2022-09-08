<div class="form-group">
	<label class="control-label">Asset Category</label><span style="color:red">*</span>
	
	<select id="property_name" name="property_name" class="form-control" onchange="selectAsset(this.value)">
		<option value="">Select</option>
		<?php for($i=0;$i<count($property_types);$i++){ ?>
		<option value="<?= $property_types[$i]->id ?>"><?php echo $property_types[$i]->property_name; ?></option>
		<?php } ?>
	</select>
	
</div>