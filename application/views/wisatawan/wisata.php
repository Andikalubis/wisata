<div class="bg0 m-t-150 p-b-100">
	<div class="container">			
		<div class="flex-w flex-sb-m p-b-52 ">
			<div class="p-b-10 text-center">
			<h3 class="ltext-103 cl5">
				wisata perkemahan
			</h3>
		</div>
		<div class="flex-w flex-c-m m-tb-10">
			<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
				<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
				<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
				Search
			</div>
		</div>

		<div class="dis-none panel-search w-full p-t-10 p-b-15">
			<div class="bor8 dis-flex p-l-15">
				<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
			</div>
		</div>
	</div>

	<div class="row isotope-grid">
		<?php foreach ($admin_wisata as $aw) : ?>
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
			<div class="block2">
				<div class="card" style="width: 18rem;">
					<img src="<?php echo base_url('assets/img/profile/'.$aw->image) ?>" class="card-img-top" alt="..." style="width: 268px; height: 180px; object-fit: cover;">
					<div class="card-body" style="width: 18rem;">
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