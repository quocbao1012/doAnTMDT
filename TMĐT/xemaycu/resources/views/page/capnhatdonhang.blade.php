<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đánh giá</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="source/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/util.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/main.css">

</head>
<body class="animsition">

<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		@include('header')

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="source/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="source/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="sec-title p-b-60">
			</div>
			<div class="row">
				<div class="p-b-30" style="width: 20%">
					<div style="width: 85%;margin:0 auto;">
						<div class="hov-img-zoom">
							<img src="source/images/avatar/{{$nguoimua->avatar}}" alt="IMG-ABOUT">
						</div>
					</div>
					<h6 class="p-t-20 t-center">THÔNG TIN NGƯỜI MUA</h6>
					<hr>
					<p><i class="fa fa-id-card" aria-hidden="true"></i><b> Họ tên: </b>{{$nguoimua->name}}</p>
					<hr>
					<p><i class="fa fa fa-map-marker" aria-hidden="true"></i><b> Địa chỉ: </b>{{$nguoimua->diachi}}</p>
					<hr>
					<p><i class="fa fa-pencil" aria-hidden="true"></i><b> Giới thiệu: </b>I'm pro</p>
					<hr>
					<p><i class="fa fa-calendar" aria-hidden="true"></i><b> Ngày tham gia: </b>{{$nguoimua->ngaydangky}}</p>
				</div>
				<span class="linedivide1" style="height: auto;"></span>
				<div class="t-center" style="width: 75%;">
					<h2 class="m-text5">Sản phẩm bán</h2>
					<div class="container-table-cart pos-relative">
						<div class="wrap-table-shopping-cart bgwhite">
							<table class="table-shopping-cart">
								<tr class="table-head">
									<th class="t-center"></th>
									<th class="t-center">Sản phẩm</th>
									<th class="t-center">Ngày đặt hàng</th>
									<th class="t-center">Giá</th>
									<th class="t-center">Tình trạng</th>
								</tr>
								<tr class="table-row" data-href="index">
									<td class="column-1">
										<div style="position: relative;width: 90px">
											<img src="source/images/tin/{{$thongtinsp->hinh1}}" alt="IMG-PRODUCT" style="width: 100%">
										</div>
									</td>
									<td class="">{{$thongtinsp->tenxe}}</td>
									<td class="">{{$thongtinsp->ngaydangtin}}</td>
									<td class="">{{number_format($thongtinsp->gia)}} VNĐ</td>
									<td class=""><font color="red">{{$tinhtrangdh->tinhtrang}}</font></td>
								</tr>
							</table>
						</div>
					</div>

					@if(Auth::check() && Auth::user()->id == $nguoiban->nguoiban)

					<h2 class="m-text5 m-t-50">Cập nhật tình trạng đơn hàng</h2>

					<form action="{{route('capnhatdonhang')}}" method="post" enctype="multipart/form-data" class ="formdanhgia">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="">
							</br>
							<select name="tinhtrang" id="tinhtrang"  style="margin:0 auto;">
  								<option value="Thành công">Thành công</option>
  								<option value="Thất bại">Thất bại</option> 								
							</select>
						
							<input type="hidden" name="matin" value="{{$thongtinsp->matin}}" />
							<input type="hidden" name="idnguoimua" value="{{$nguoimua->id}}" />
							<span></span>
						<button class="flex-c-m bg1 bo-rad-20 hov1 s-text1 trans-0-4 w-size19 m-t-10" style="height: 40px;margin:0 auto;">
						Gửi yêu cầu
						</button>			
						<hr>
					</div>
					</form>
					@endif

				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	@include('footer')



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});

	</script>
<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
