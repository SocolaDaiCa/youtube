<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once __DIR__ . '/view/css.php'; ?>
		<?php require_once __DIR__ . '/view/js.php'; ?>
		<link rel="stylesheet" href="css/search.css">
		
		<!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
	</head>
	<body>
		<?php require_once __DIR__ . '/view/navbar.php'; ?>
		<div>
			<?php require_once __DIR__ . '/view/sidebar.php'; ?>
			<div id="content">
				<div class="result-search">
					<!-- Header sort -->
					<div class="head-sort">
						<div class="result"><p>Khoảng 1.700.000.00 kết quả</p></div>
						<a href="#"><div id="sort" class="btn-sort"><div class="icon-sort"><i class="material-icons">sort</i><span>Lọc</span></div></div></a>
						</div><div class="clear"></div>
						<div id="type" class="type-sort">
							<!-- Ngày tải lên -->
							<div class="colum">
								<div class="title"><b>NGÀY TẢI LÊN</b></div>
								<!-- List -->
								<a href="#"><a href="#"><div class="element">Giờ qua</div></a>
								<a href="#"><a href="#"><div class="element">Hôm nay</div></a>
								<a href="#"><div class="element">Tuần này</div></a>
								<a href="#"><div class="element">Tháng này</div></a>
								<a href="#"><div class="element">Năm nay</div></a>
							</div>
							<!-- Loại -->
							<div class="colum">
								<div class="title"><b>LOẠI</b></div>
								<!-- List -->
								<a href="#"><div class="element">Video</div></a>
								<a href="#"><div class="element">Kênh</div></a>
								<a href="#"><div class="element">Danh sách phát</div></a>
								<a href="#"><div class="element">Phim</div></a>
								<a href="#"><div class="element">Hiển thị</div></a>
							</div>
							<!-- Thời lượng -->
							<div class="colum">
								<div class="title"><b>THỜI LƯỢNG</b></div>
								<!-- List -->
								<a href="#"><div class="element">Ngắn(< 4 phút)</div></a>
								<a href="#"><div class="element">Dài(> 20 phút)</div></a>
							</div>
							<!-- Video nổi bật -->
							<div class="colum">
								<div class="title"><b>VIDEO NỔI BẬT</b></div>
								<!-- List -->
								<a href="#"><div class="element">4K</div></a>
								<a href="#"><div class="element">HD</div></a>
								<a href="#"><div class="element">HDR</div></a>
								<a href="#"><div class="element">Phụ đề</div></a>
								<a href="#"><div class="element">Giấy phép Creative Commons</div></a>
								<a href="#"><div class="element">3D</div></a>
								<a href="#"><div class="element">Trực tiếp</div></a>
								<a href="#"><div class="element">Đã mua</div></a>
								<a href="#"><div class="element">360 <sup>o</sup></div></a>
							</div>
							<!-- Sắp xếp theo -->
							<div class="colum">
								<div class="title"><b>SẮP XẾP THEO</b></div>
								<!-- List -->
								<a href="#"><div class="element">Mức độ liên quan</div></a>
								<a href="#"><div class="element">Ngày tải lên</div></a>
								<a href="#"><div class="element">Lượt xem</div></a>
								<a href="#"><div class="element">Xếp hạng</div></a>
							</div>
							<!--  -->
							</div><div class="clear"></div>
							<!-- Kết quả tìm kiếm -->
							<div class="content">
								<?php for ($i=0; $i <10 ; $i++): ?>
								<div class="video-result">
									<!-- Images video -->
									<a href="#"><div class="img-video" class="img"><img src="images/image_video.jpg" alt=""></div></a>
									<!-- Info video -->
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<a href="#"><div class="info-video">
											<div class="name-video"><p><b>Hello world</b></p></div>
											<!-- Note's video -->
											<div class="note">
												<ul>
													<li>youtube chanel</li>
													<li>69 Tr lượt xem</li>
													<li>1 ngày trước</li>
												</ul>
											</div>
											<!-- Describe's video -->
											<div class="describe">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit enim vitae, illum cupiditate explicabo commodi quidem, adipisci.
											</div>
											<!-- Sub -->
											<div class="sub">Phụ đề</div>
										</div></a>
									</div>
								</div>
								<div class="clear"></div>
								<?php endfor ?>
							</div>
						</div>
						
					</div>
				</div>
				<script>
							$(document).ready(function(){
								$("#sort").click(function(){
									$("#type").toggle(300);
								});
							});
				</script>
			</body>
		</html>