
<section class="sec-product bg0 p-t-150">
	<div class="container">
		<div class="p-b-32">
			<h3 class="ltext-105 cl5 txt-center">
				KATEGORI WISATA
			</h3>
		</div>

		<div class=" panel-search w-full p-t-5 p-b-10">
			<div class="bor8 dis-flex p-l-15">
				<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
			</div>	
		</div>

		<div class="flex-w flex-sb-m p-b-30 pt-30">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<?php foreach($kategori_wisata as $ktw) : ?>
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?php echo $ktw->kode_kategori_wisata ?>">
					 <?php echo $ktw->nama_kategori_wisata ?>
				</button>
				<?php endforeach; ?>				
			</div>
		</div>
	</div>
</section>

	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="row isotope-grid">

				<?php foreach($admin_wisata as $aw) : ?>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $aw->kode_kategori_wisata ?>">
					<div class="block2">
						<div class="card" style="width: 18rem;">
							<img src="<?php echo base_url('assets/img/profile/'.$aw->image) ?>" class="card-img-top" alt="..." style="width: 268px; height: 180px; object-fit: cover;">
							<div class="card-body">
								<h5 class="card-title-center pb-2 txt-center mtext-101 cl2"><?php echo $aw->nama_wisata ?></h5>
								<p class="card-text mb-3 stext-102 trans-04"><?php echo $aw->alamat ?></p>
								<a href="<?= base_url('wisatawan/detail_wisata/').$aw->id_wisata ?>"  class="flex-c-m stext-109 cl0 size-301 bg3 bor13 hov-btn3 p-lr-15 trans-04 pointer" >Lihat Detail Wisata</a>
							</div>
						</div>
					</div>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>