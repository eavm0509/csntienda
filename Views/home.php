
<?php headerTienda($data)?>
<?php 
	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];
	$arrProductos = $data['productos'];

?>
	
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">

				<?php
					for ($i=0; $i <count($arrSlider) ; $i++) { 
				?>	
				<div class="item-slick1" style="background-image: url(<?= $arrSlider[$i]['portada']?>);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<?= $arrSlider[$i]['descripcion']?>
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								<?= $arrSlider[$i]['nombre']?>
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="<?=base_url().'/tienda/categoria/'.$arrSlider[$i]['nombre']?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Ir a la tienda
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php	
					}
				?>
				

			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<?php
				for ($j=0; $j < count($arrBanner); $j++) { 
				?>
				<!-- m-lr-auto para centrar automaticamente el disenio de categorias -->
				<div class="col-md-6 col-xl-4 p-b-30 ">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="<?= $arrBanner[$j]['portada'] ?>" alt="<?= $arrBanner[$j]['portada']?>">

						<a href="<?=base_url().'/tienda/categoria/'.$arrBanner[$j]['nombre']?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
								<?= $arrBanner[$j]['nombre'] ?>
								</span>

								<!--<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>-->
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver productos
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php
				}
				?>
				

			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Productos Nuevos
				</h3>
			</div>

		
			

			<div class="row isotope-grid">
				<?php
					for ($k=0; $k < count($arrProductos); $k++) { 
						if(count($arrProductos[$k]['images'])>0){
							$portada = $arrProductos[$k]['images'][0]['url_image'];
						}else{
							$portada = media().'/images/uploads/product.png';
						}
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?=$portada?>" alt="<?=$arrProductos[$k]['nombre']?>">

							<a href="<?php echo base_url().'/tienda/producto/'.$arrProductos[$k]['nombre']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Producto
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?=base_url().'/tienda/producto/'.$arrProductos[$k]['nombre']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								<?=$arrProductos[$k]['nombre']?>
								</a>

								<span class="stext-105 cl3">
									<?=SMONEY.formatMoney($arrProductos[$k]['precio'])?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="<?= media() ?>tienda/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?= media() ?>tienda/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php		
					}
				?>
				

				
			</div>

			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		</div>
	</section>
<?php footerTienda($data)?>

	