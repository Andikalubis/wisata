
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-2 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Menu
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                                Home

                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                                Wisata
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                                Kategori
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                                Pesanan Tiket
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Sosial Media
                    </h4>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                            <i class="fab fa-facebook px-2"></i>
                            Go Camping Majalengka
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                            <i class="fab fa-instagram px-2"></i>
                            gocampmjl
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                            <i class="fab fa-whatsapp px-2"></i>
                            0857-2443-6682
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                            <i class="fab fa-twitter px-2"></i>
                            go camp majalengka
                        </a>
                    </li>                  
                </div>

                <div class="col-sm-6 col-lg-4 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        alamat E-mail
                    </h4>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl0 hov-cl1 trans-04">
                            <i class="far fa-envelope px-2"></i>
                            gocampmjl@gmail.com
                        </a>
                    </li> 
                     <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">Kirim Pesan</button>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="<?=base_url('assets2/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/animsition/js/animsition.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <script src="<?=base_url('assets2/');?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/slick/slick.min.js"></script>
    <script src="<?=base_url('assets2/');?>js/slick-custom.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <script src="<?=base_url('assets2/');?>vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <script src="<?=base_url('assets2/');?>vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url('assets2/');?>vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
    <script src="<?=base_url('assets2/');?>js/main.js"></script>
    <script src="<?=base_url('assets/');?>dist/js/adminlte.js"></script>
    <script>
        
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
    <script src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>
    <div id="currentDateTime" class="badge badge-secondary"></div>

<script>
$(document).ready(function() {
  var now = new Date();
  var formattedDate = now.toLocaleString('en-US', { timeZone: 'UTC' });
  $('#currentDateTime').text(formattedDate);
});
</script>


</body>
</html>