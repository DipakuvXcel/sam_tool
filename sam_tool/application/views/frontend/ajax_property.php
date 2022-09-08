<?php  
		if($results['Details'] > 0){ foreach($results['Details'] as $result){ ?>
			<a href="<?= base_url('frontend/property_details')?>" style="margin-bottom:1px;" id="dixc">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat" style="border:solid 1px;" type_id="<?php echo $result['type_id']; ?>" propert_id="<?php echo $result['propert_id']; ?>">
						<div class="visual">	</div>
							<div class="details">
								<div class="number">
								 <?php  $property = $result['type_id'];
								  if($property == 1) 
									  { echo $result['property_type']; } 
								  else if($property == 2) 
									  {	echo $result['property_type']; }
								  elseif($property == 3) 
									  {	echo $result['property_type']; }
								  elseif($property == 4) 
									  {	echo $result['property_type']; }
									  ?> in 
								<?php echo $result['city_name']; ?> 
								<?php echo $result['locality']; ?> area
								<br>Ranging from 
								<?php 	
								  $num = $result['market_price'];
								  $ext="";//thousand,lac, crore
								  $number_of_digits = strlen($num); //this is call :)
								  if($number_of_digits>3)
								   {
									  if($number_of_digits%2!=0)
									  $divider=divider($number_of_digits-1);
									  else
									  $divider=divider($number_of_digits);
									  }
									  else
									  $divider=1;
									  $fraction=$num/$divider;
									 // $fraction=number_format($fraction,2);
									 //echo$fraction;
									  if($number_of_digits==6 ||$number_of_digits==7)
									  if($fraction >= 10&&$fraction <= 30) 
									  	{ echo '10 Lakh. to 30 Lakh.'; } 
									  else if($fraction >= 30&&$fraction <= 50) 
										  {	echo '30 Lakh. to 50 Lakh.'; }
									  elseif($fraction >= 50&&$fraction <= 70) 
										  {	echo '50 Lakh. to 70 Lakh.'; }
									  else if($fraction >= 70&&$fraction <= 90) 
										  {	echo '70 Lakh. to 90 Lakh.'; }
									  if($number_of_digits==8 ||$number_of_digits==9)
										 if($fraction >= 1&&$fraction <= 11) 
											{	echo '90 Lakh. to 1.1 Cr.'; }
										else if($fraction >= 11&&$fraction <= 15) 
											{	echo '1.1 Cr. to 1.5 Cr.'; }
										else if($fraction >= 15&&$fraction <= 2) 
											{	echo '1.5 Cr. to 2 Cr.'; }
										else if($fraction >= 2&&$fraction <= 25) 
											{	echo '2 Cr. to 2.5 Cr.'; } 
										else if($fraction >= 25&&$fraction <= 3) 
											{	echo '2.5 Cr. to 3 Cr.'; }
										else if($fraction >= 3&&$fraction <= 35) 
											{	echo '3 Cr. to 3.5 Cr.'; }
										else if($fraction >= 35&&$fraction <= 4) 
											{	echo '3.5 Cr. to 4 Cr.'; }
										else if($fraction >= 4&&$fraction <= 45) 
											{	echo '4 Cr. to 4.5 Cr.'; }
										else if($fraction >= 45&&$fraction <= 5) 
											{	echo '4.5 Cr. to 5 Cr.'; }
										else if($fraction >= 5) 
											{	echo '5 Cr. to More than 5 Cr.'; }?>
									</div>
								</div>
							</div>
						<a href="<?php // base_url('frontend/property_details')?>" class="btn blue">
							view
						</a>
					</div>
				</a>
				<!-- <div id="load_data"></div> -->
				<!-- <div id="load_data_message"></div> -->
		<?php  }}?>
         