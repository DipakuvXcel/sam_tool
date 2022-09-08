<div class="form-group">
	<label class="control-label">City</label><span style="color:red">*</span>
	
	<select name="city_name"  id="city_name"  class="form-control selectsearch" onchange="selectCity(this.value)">
<option value="0" <?php if($city_name=='') echo 'selected'; ?>> </option>
	<?php for($i=0;$i<count($city);$i++){ ?>
		<option value="<?= $city[$i]->id ?>"><?php echo $city[$i]->city_name; ?></option>
		<?php } ?>
	</select>
	
</div>