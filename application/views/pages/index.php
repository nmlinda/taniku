<main id="main" class="site-main">
	<div class="sideshow">
		<div class="container">
			<div class="sideshow-content">
				<h1 class="wow fadeInUp" data-wow-delay=".2s">Penghasilan tambahan PASTI melalui investasi pada penggemukan sapi (FC001)</h1>
				<div class="sideshow-description wow fadeInUp" data-wow-delay=".1s">Dimonitor oleh tenaga ahli dari Institut Pertanian Bogor.</div>
				<div class="process wow fadeInUp" data-scroll-nav="1">
					<div class="raised"><span></span></div>
					<div class="process-info">
						<div class="process-funded"><span>46%</span>funded</div>
						<div class="process-pledged"><span>$46.000</span>pledged</div>
						<div class="process-backers"><span>32</span>backers</div>
						<div class="process-time"><span>21</span>days ago</div>
					</div>
				</div>
				<div class="button wow fadeInUp" data-wow-delay="0.3s">
					<a href="#" class="btn-secondary">See Campaign</a>
					<a href="#" class="btn-primary">Buy Now</a>
				</div>
			</div><!-- .sideshow-content -->
		</div>
	</div><!-- .sideshow -->
	<div class="popular campaign">
		<div class="container">
			<h2 class="title wow fadeInUp" data-wow-delay=".1s">What's Popular</h2>
			<div class="description wow fadeInUp" data-wow-delay=".1s">Temukan dan bantu project yang sesuai dengan minat anda disini.</div>
			<div class="campaign-content" id="loading-content" style="display: none;">
				<center>Loading....</center>
			</div>					
			<div class="campaign-content" id="campaign-content" style="display: block;">						
				<div class="row">
					<?php
						$data = file_get_contents('http://api.taniku.onpremi.com/campaigns');
						$json = json_decode($data);
						$i = 0;
						foreach($json->data->campaign as $res){
							if($i > 2){ continue; }
						?>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay url-onimage" href="campaign_detail.html?id=<?=$res->id?>">
								<img src="<?php echo base_url(); ?>assets/<?=$res->image?>" alt="" class="campaign-images">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category popular-category"><?=$res->category?></a>
								<h3><a href="campaign_detail.html?id=<?=$res->id?>" class="url-ontitle"><?=$res->title?></a></h3>
								<div class="campaign-description"><?=$res->excerpt?></div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Deden Rochmanudin</a></div>
								<div class="process">
									<div class="raised"><span style="width: <?=$res->funding_progress?>"></span></div>
									<div class="process-info">
										<div class="process-pledged"><span class="amount_needed">Rp.<?=number_format($res->amount_needed)?></span>pledged</div>
										<div class="process-funded"><span class="amount_funded"><?=$res->funding_progress?>%</span>funded</div>
										<div class="process-time"><span class="days_left"><?=$res->days_left?></span>days left</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<?php
							$i++;
						}
					?>					
				</div>
			</div><!-- .section-content -->
		</div>
	</div><!-- .popular -->
	<div class="explore">
		<div class="container">
			<h2 class="title wow fadeInUp" data-wow-delay=".1s">Explore Ideas</h2>
			<div class="description wow fadeInUp" data-wow-delay=".1s">Yuk pilih kategori Taniku yang sesuai dengan minat anda.</div>
			<div class="explore-content">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/pengembangbiakan.png" alt="">
								<span>Pengembangbiakan Sapi</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/Penggemukan.png" alt="">
								<span>Penggemukan Sapi</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/Bakalan.png" alt="">
								<span>Bakalan Sapi</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/sapi.png" alt="">
								<span>Sapi Kurban</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/pakan.png" alt="">
								<span>Pakan Ternak</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/sorgum6.png" alt="">
								<span>Sweet Sorghum</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/Sorgum7.png" alt="">
								<span>Grain Sorghum</span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
							<a class="explore-overlay" href="#">
								<img src="images/placeholder/sorgumfoods.png" alt="">
								<span>Sorghumfoods</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .explore -->
	<div class="staff-picks">
		<div class="container">
			<div class="border-title">
				<h2 class="title left-title wow fadeInUp" data-wow-delay=".1s">Sorghumfoods Picks</h2>
				<div class="description left-description wow fadeInUp" data-wow-delay=".1s">Pilihan kami untuk produk hasil olahan taniku yang layak anda perhatikan.</div>
			</div>
			<div class="staff-picks-content">
				<div class="staff-picks-slider slider-controls-top owl-carousel">
					<div class="staff-picks-item clearfix">
						<a class="staff-picks-image" href="campaign_detail.html"><img src="images/placeholder/gula.png" alt=""></a>
						<div class="staff-picks-item-content staff-picks-box wow fadeInUp" data-wow-delay=".1s">
							<a href="#" class="category">Sorghumfoods</a>
							<h3><a href="campaign_detail.html">Gula kristal Sorghum</a></h3>
							<div class="staff-picks-description">Gula Kristal Sorghum dari Sorghum Food merupakan pilihan pemanis alami pengganti gula pasir untuk Anda yang ingin sehat namun tetap ingin merasakan rasa manis.</div>
							<div class="staff-picks-author">
								<div class="author-profile">
									<a class="author-avatar" href="#"><img src="images/placeholder/40x40.png" alt=""></a>by <a class="author-name" href="#">bonyhudi</a>
								</div>
								<div class="author-address"><span class=""></span>Buy Now</div>
							</div>
							<div class="process">
								<div class="raised"></div>
								<div class="process-info">
									<div class="process-Harga"><span>Rp30,000</span>Harga</div>
									<div class="process-Stock"><span>Available</span>Stock</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="staff-picks-item clearfix">
						<a class="staff-picks-image" href="campaign_detail.html"><img src="images/placeholder/sirup.png" alt=""></a>
						<div class="staff-picks-item-content staff-picks-box wow fadeInUp" data-wow-delay=".1s">
							<a href="#" class="category">Sorghumfoods</a>
							<h3><a href="campaign_detail.html">Sirup Sorghum</a></h3>
							<div class="staff-picks-description">Sorghum yang diolah menjadi sirup dengan kadar gluten minim, memiliki rasa yang tidak kalah lezat dengan sirup merah biasa.</div>
							<div class="staff-picks-author">
								<div class="author-profile">
									<a class="author-avatar" href="#"><img src="images/placeholder/40x40.png" alt=""></a>by <a class="author-name" href="#">Steffi Rahardjo</a>
								</div>
								<div class="author-address"><span class=""></span>Buy Now</div>
							</div>
							<div class="process">
								<div class="raised"></span></div>
								<div class="process-info">
									<div class="process-Harga"><span>Rp10,000</span>Harga</div>
									<div class="process-Stock"><span>Available</span>Stock</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .staff-picks -->
	<div class="latest campaign">
		<div class="container">
			<h2 class="title wow fadeInUp" data-wow-delay=".1s">Latest Projects</h2>
			<div class="description wow fadeInUp" data-wow-delay=".1s">Telusuri project Taniku baru yang seru dan menarik.</div>
			<div class="campaign-content">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/sapip1.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Penggemukan Sapi</a>
								<h3><a href="campaign_detail.html">Penggemukan Sapi (FC0002)</a></h3>
								<div class="campaign-description">Investasi pada penggemukan sapi dengan hasil terjamin dengan tingkat pengembalian hingga 13 persen setahun.</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Sabato Alterio</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$630</span>pledged</div>
										<div class="process-funded"><span>26%</span>funded</div>
										<div class="process-time"><span>2</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/sapip2.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Penggemukan Sapi</a>
								<h3><a href="campaign_detail.html">Penggemukan Sapi (FC0001)</a></h3>
								<div class="campaign-description">Investasi pada penggemukan sapi dengan hasil terjamin dengan tingkat pengembalian hingga 13 persen setahun.</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Samino</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$370</span>pledged</div>
										<div class="process-funded"><span>9%</span>funded</div>
										<div class="process-time"><span>9</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/pakan2.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Pakan Ternak</a>
								<h3><a href="campaign_detail.html">Pakan ternak (FS0001)</a></h3>
								<div class="campaign-description">Dengan rekayasa genetik yang baru, kini rasa Pakan Ternak lebih sehat, dengan tingkat resiko lebih rendah</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Andrew Noah</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$610</span>pledged</div>
										<div class="process-funded"><span>73%</span>funded</div>
										<div class="process-time"><span>14</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/sorgump1.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Sweet Sorghum</a>
								<h3><a href="campaign_detail.html">Sweet Sorghum (SS0002)</a></h3>
								<div class="campaign-description">Pengganti Gula yang tanamnya dilakukan di Jombang, dengan masa panen antara 8-12 bulan.</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Andrew Noah</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$3670</span>pledged</div>
										<div class="process-funded"><span>58%</span>funded</div>
										<div class="process-time"><span>21</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/sorgump2.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Grain Sorghum</a>
								<h3><a href="campaign_detail.html">Grain Sorghum (GS0003)</a></h3>
								<div class="campaign-description">Pengganti Gula yang tanamnya dilakukan di Jombang, dengan masa panen antara 8-12 bulan.</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Sabato Alterio</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$1950</span>pledged</div>
										<div class="process-funded"><span>70%</span>funded</div>
										<div class="process-time"><span>23</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
							<a class="overlay" href="campaign_detail.html">
								<img src="images/placeholder/bakalan2.png" alt="">
								<span class="ion-ios-search-strong"></span>
							</a>
							<div class="campaign-box">
								<a href="#" class="category">Bakalan Sapi</a>
								<h3><a href="campaign_detail.html">Bakalan Sapi (RC0001)</a></h3>
								<div class="campaign-description">Didukung permintaan yang tinggi dengan tingkat pengembalian yang stabil.</div>
								<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Samino</a></div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-pledged"><span>$3900</span>pledged</div>
										<div class="process-funded"><span>69%</span>funded</div>
										<div class="process-time"><span>33</span>days ago</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="latest-button wow fadeInUp" data-wow-delay=".1s"><a href="#" class="btn-primary">View all Campaigns</a></div>
		</div>
	</div><!-- .latest -->
	<div class="partners">
		<div class="container">
			<div class="partners-slider owl-carousel">
				<div><a href="#"><img src="images/partner-01.png" alt=""></a></div>
				<div><a href="#"><img src="images/partner-02.png" alt=""></a></div>
				<div><a href="#"><img src="images/partner-03.png" alt=""></a></div>
				<div><a href="#"><img src="images/partner-04.png" alt=""></a></div>
				<div><a href="#"><img src="images/partner-05.png" alt=""></a></div>
				<div><a href="#"><img src="images/partner-06.png" alt=""></a></div>
			</div>
		</div>
	</div><!-- .partners -->
</main><!-- .site-main -->