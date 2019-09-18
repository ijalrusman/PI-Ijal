<?php $this->load->view('user/v_header'); ?>
<?php $this->load->view('user/v_menu'); ?>
 <div class="banner">
	       <div class="banner-inner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>PROVIDING A GREAT LEARNING PROGRESS FOR PLAYERS</h3>
								<p>Lorem ipsum dolor sit amet</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>WE PREPARE YOU TO BE THE BEST BASKETBALL PLAYER </h3>
								 <p>Lorem ipsum dolor sit amet</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>PROVIDING A GREAT LEARNING PROGRESS FOR PLAYERS</h3>
								<p>Lorem ipsum dolor sit amet</p>
								</div>	
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>
  </div>
    <!--//end-banner-->
     <!--/start-main-->
          <div class="main-content">
		      <!--/soccer-inner-->
	                 <div class="soccer-inner">
					  <!--/soccer-left-part-->
					  <div class="col-md-8 soccer-left-part">
						<div class="banner-slider">
						  <h3 class="tittle">Our News</h3>
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<?php foreach ($berita as $key): ?>
									<li>
									  <div class="blog-img">
										 <img src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" class="img-responsive" alt="" />
									  </div>
									   <div class="blog-info">
											<a class="news" href="#"><?php echo $key->judul; ?></a>
											  <div class="bog_post_info infoPost">
												   <span class="datePost"><a href="#" class="post_date"><?php echo  date('d-m-Y',strtotime($key->tanggal)) ?></a></span>
												    <div class="clearfix"></div>

												</div>
										  </div>
									</li>
									<?php endforeach ?>
								</ul>
						  </div>
					</div>
					<!--banner Slider starts Here-->
					<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 3
							  $("#slider3").responsiveSlides({
								auto: true,
								pager:false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
					 </div>
					<!--//soccer-left-part-->
							<!--/soccer-right-part-->
							<div class="col-md-4 soccer-right-part">
			                     <div class="modern">
							  <h4 class="side">New Players</h4>
							  <div id="example1">
								<div id="owl-demo" class="owl-carousel text-center">
								  <div class="item">
							
									<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
								 </div>
								 <div class="item">
							
									<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
								</div>
								<div class="item">
							
									<img class="img-responsive lot" src="images/p3.jpg" alt=""/>
								</div>
								<div class="item">
							
									<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
							</div>
							<div class="item">
							
									<img class="img-responsive lot" src="images/p3.jpg" alt=""/>
							</div>
								<div class="item">
							
									<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
							</div>
								<div class="item">
							
									<img class="img-responsive lot" src="images/p3.jpg" alt=""/>
							</div>
								<div class="item">
							
									<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
							</div>
						</div>
				    </div>
				<!-- requried-jsfiles-for owl -->
										<script src="js/owl.carousel.js"></script>
										  <script>
										  $(document).ready(function() {
											   $("#owl-demo").owlCarousel({
												items :1,
												lazyLoad : true,
												autoPlay : false,
												navigation : true,
												navigationText :  true,
												pagination : false,
												responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
												});
										  });
										</script>
						<!-- //requried-jsfiles-for owl -->
						</div>
										<div class="connect">
											<h4 class="side">STAY CONNECTED</h4>
											  <ul class="stay">
												<li class="c5-element-facebook"><a href="#"><span class="icon"></span><h5>700</h5><span class="text">Followers</span></a></li>
												<li class="c5-element-twitter"><a href="#"><span class="icon1"></span><h5>201</h5><span class="text">Followers</span></a></li>
												 <li class="c5-element-gg"><a href="#"><span class="icon2"></span><h5>111</h5><span class="text">Followers</span></a></li>
												
											  </ul>
										  </div>
										  	<!--//connect-->
		            </div>
			         <!--//soccer-right-part-->
		           <div class="clearfix"> </div>
	           </div>
			   <div class="time-bg" style="display: none">
			   <h4>Team 01 <span>Vs </span> Team 02</h4>
					<p id="demo"></p>
					
						<script>
						var myVar=setInterval(function(){myTimer()},1000);

						function myTimer() {
							var d = new Date();
							document.getElementById("demo").innerHTML = d.toLocaleTimeString();
						}
						</script>
		   	</div>
			</div>
		<!--//soccer-inner-->
	 </div>
	 <?php $this->load->view('user/v_footer'); ?>x`
</body>
</html>
