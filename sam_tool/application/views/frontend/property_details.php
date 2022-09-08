<?php $this->load->view('frontend/_includes/header');?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap");

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Open Sans", sans-serif;
}
.margin{
	margin-left: 20px!important;
	font-weight: 100!important;
}
.card-wrapper {
  max-width: 1100px;
  margin: 0 6%;
}
img {
  display: block;
}
.img-display {
  overflow: hidden;
}
.img-showcase {
  display: flex;
  width: 100%;
  transition: all 0.5s ease;
}
.img-showcase img {
  min-width: 100%;
}
.img-select {
  display: flex;
}
.img-item {
  margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3) {
  margin-right: 0;
}
.img-item:hover {
  opacity: 0.8;
}
.product-content {
  padding: 2rem 4rem;
}
.product-title {
  font-size: 22px;
  text-transform: capitalize;
  font-weight: 500;
  position: relative;
  color: #12263a;
  margin: 1.3rem;
}
.flex-content-product{
	display: flex;
}
.product-link {
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 0.9rem;
  display: inline-block;
  margin-bottom: 0.5rem;
  background: #256eff;
  color: #fff;
  padding: 0 0.3rem;
  transition: all 0.5s ease;
}
.product-link:hover {
  opacity: 0.9;
}
.product-price {
  margin: 1rem 0;
  font-size: 1rem;
  font-weight: 700;
}
.product-price span {
  font-weight: 400;
}
.product-detail h2 {
  text-transform: capitalize;
  color: #12263a;
  padding-bottom: 0.6rem;
}
.purchase-info {
  margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn {
  border: 1.5px solid #ddd;
  border-radius: 25px;
  text-align: center;
  padding: 0.45rem 0.8rem;
  outline: 0;
  margin-right: 0.2rem;
  margin-bottom: 1rem;
}
.purchase-info .btn {
  cursor: pointer;
  color: #fff;
}
.purchase-info .btn:first-of-type {
  background: #256eff;
  font-size:30px;
}
.purchase-info .btn:hover {
  opacity: 0.9;
}

@media screen and (min-width: 992px) {
  .card {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.5rem;
  }
  .card-wrapper {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .product-imgs {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .product-content {
    padding-top: 0;
  }
}

.container .slider {
  animation: slidein 30s linear infinite;
  white-space: nowrap;
}
.container .slider .logos {
  width: 25%;
  display: inline-block;
  margin: 0px 0;
}
.container .slider .logos .fab {
  /* width: calc(100% / 5); */
  animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
  animation: mymove 5s infinite;
}
@keyframes mymove {
  from {right: 0px;}
  to {right: 25%;}
}

@keyframes slidein {
  from {
    transform: translate3d(0, 0, 0);
  }
  to {
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Property Details</h3>
		<div class = "card-wrapper">
			<div class = "card">
				<!-- card left -->
				<div class = "product-imgs">
				<div class = "img-display">
					<div class = "img-showcase">
					<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image" style="width: 80%;">
					<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image" style="width: 80%;">
					<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image" style="width: 80%;">
					<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image" style="width: 80%;">
					</div>
				</div>
				<div class = "img-select">
					<div class = "img-item">
					<a href = "#" data-id = "1">
						<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt = "shoe image" style="width: 80%;">
					</a>
					</div>
					<div class = "img-item">
					<a href = "#" data-id = "2">
						<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt = "shoe image" style="width: 80%;">
					</a>
					</div>
					<div class = "img-item">
					<a href = "#" data-id = "3">
						<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt = "shoe image" style="width: 80%;">
					</a>
					</div>
					<div class = "img-item">
					<a href = "#" data-id = "4">
						<img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt = "shoe image" style="width: 80%;">
					</a>
					</div>
				</div>
				</div>
				<?php
				$typepro=$order[0]->property_id;	
				$banknm=$order[0]->bank_id;	

				$whered = array('id' => $typepro);
				$property = $this->user_model->get_common('property_types', $whered,'*',1);
				$ci=$property->property_name;

				$whered = array('id' => $banknm);
				$bandt = $this->user_model->get_common('bank_details', $whered,'*',1);
				$bnk=$bandt->bank_name;
				?>
				<!-- card right -->
				<div class = "product-content">
					<div class = "flex-content-product">
						<h2 class = "product-title">Owner:</h2>
						<h2 class = "product-title margin">_____________   ___________</h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Property Type:</h2>
						<h2 class = "product-title margin"><?= $ci ?></h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Area:</h2>
						<h2 class = "product-title margin">____________</h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Price:</h2>
						<h2 class = "product-title margin"><?= $order[0]->property_value; ?></h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Market Price:</h2>
						<h2 class = "product-title margin"><?= $order[0]->property_current_mak_val; ?></h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Address:</h2>
						<h2 class = "product-title margin">______________________________________</h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Property Age:</h2>
						<h2 class = "product-title margin">____________</h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Bank:</h2>
						<h2 class = "product-title margin"><?= $bnk ?></h2>
					</div>
					<div class = "flex-content-product">
						<h2 class = "product-title">Document:</h2>
						<h2 class = "product-title margin"><a href="<?php echo upload_path; ?>document_listing/title_search/<?=$order[0]->property_title_search; ?>"target="_blank" style="font-weight: 100;">&nbsp;Download Title </a></h2>
					</div>
				<div class = "product-detail">
					<h2> </h2>
					<p></p>
					</div>
					<div class = "product-detail">
					<h2> </h2>
					<p></p>
					</div>
				
				<div class = "purchase-info">
					<button type = "button" class = "btn">
					Contact
					</button>
				</div>
				</div>
			</div>
			</div>
	<!-- END CONTENT BODY -->
<div class="container h-100">
	<div class="row align-items-center h-100">
		<div class="container rounded">
		<h1 class="text-left">Other Properties in same area:</h1>
			<div class="slider">
			<div class="logos">
				<img class="img-circle username_id" src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" />
				</div>
				<div class="logos">
				<img class="img-circle username_id" src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" />
				</div>
				<div class="logos">
				<img class="img-circle username_id" src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" />
				</div>
				<div class="logos">
				<img class="img-circle username_id" src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" />
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
<!-- END CONTENT -->
<script>
const imgs = document.querySelectorAll(".img-select a");
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
  imgItem.addEventListener("click", (event) => {
    event.preventDefault();
    imgId = imgItem.dataset.id;
    slideImage();
  });
});

function slideImage() {
  const displayWidth = document.querySelector(".img-showcase img:first-child")
    .clientWidth;

  document.querySelector(".img-showcase").style.transform = `translateX(${
    -(imgId - 1) * displayWidth
  }px)`;
}

window.addEventListener("resize", slideImage);
</script>
<?php
$data ['script'] = "dashboard.js";
$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer', $data );
?>
