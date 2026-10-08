<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
  <script src="https://www.youtube.com/iframe_api"></script>
<?php 

error_reporting(0);

$page = $_GET["page"];

$_REQUEST["meta_title"]=$page." :: Testimonials";

$_REQUEST["meta_desc"]="Brilliants&#039; Convent Senior Secondary School";

$_REQUEST["link_cano"]="https://www.brilliantsconvent.com/testimonials.php";

if ($page=="STUDENT") {
 	 $b_banner="Affiliation.jpg";
 	 $b_title="STUDENTS";
 	 $id = "1";
 	}
 if ($page=="PARENT") {
 	 $b_banner="MNVbanner.jpg";
 	 $b_title="PARENTS";
 	 $id = "2";
 	}
 if ($page=="FACULTY") {
 	 $b_banner="faculty-banner.jpg";
 	 $b_title="FACULTY";
 	 $id = "3";
 	}
 if ($page=="ALUMNI") {
 	 $b_banner="Aims-Objective.jpg";
 	 $b_title="ALUMNI";
 	 $id = "4";
 	}

include_once("header.php");
?>

				<!-- Header Top End -->
			</header>
			<!--Header End-->
		</div>
        <!--Full width header End-->

		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">     
        	<div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
				<!-- Item 1 -->
				<div class="item active">
					<img src="images/about/<?php echo $b_banner; ?>">
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"><?php echo $b_title; ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>         
        </div>
        <!-- Slider Area End -->

		<!-- About Us Start -->
        <div class="rs-about sec-spacer wow fadeInUp" data-wow-delay="0.5s">
            <div class="container">
<div class="row">
	<div class="col-lg-2 col-md-12 bcs-list-group d-none d-lg-block">
	<ul class="list-group">
	  <li class="list-group-item title" aria-current="true">TESTIMONIAL</li>
	  <li class="list-group-item list-group-item-action <?php echo $id=='1'?'active':''?>"><a href="testimonials.php?page=STUDENT">STUDENT</a></li>
	  <li class="list-group-item list-group-item-action <?php echo $id=='2'?'active':''?>"><a href="testimonials.php?page=PARENT">PARENT</a></li>
	  <li class="list-group-item list-group-item-action <?php echo $id=='3'?'active':''?>"><a href="testimonials.php?page=FACULTY">FACULTY</a></li>
	  <li class="list-group-item list-group-item-action <?php echo $id=='4'?'active':''?>"><a href="testimonials.php?page=ALUMNI">ALUMNI</a></li>
	</ul>
</div>
	<div class="col-lg-10 col-md-12 bcs-card">
<div class="card acd-card">	
<h5 class="card-header"><?php echo $b_title; ?></h5>
<div class="card-body">

<?php if ($page=="STUDENT") { ?>
    <div id="rs-testimonial" class="rs-testimonial wow fadeInUp bcs-tst" data-wow-delay="0.5s">    	
		<div class="sec-title text-center">
					<h2>WHAT STUDENTS SAY</h2> 
				</div>
	 			<div class="row">
				        <div class="col-md-12 bcs-psay">
							<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="flase" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
								<div class="testimonial-item">				                	
									        	<iframe id="player_1" width="99%" height="270" src="https://www.youtube.com/embed/XBp9zYJFx_8?si=L1M5Rta2CJMxORT-" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				                </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_2" width="99%" height="270" src="https://www.youtube.com/embed/m8wo7Jfyc7g?si=798PPu5oZ65L_Y0D" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_3" width="99%" height="270" src="https://www.youtube.com/embed/HFYQBS2IB2M?si=djhtBB8_fDU-BnXa" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_4" width="99%" height="270" src="https://www.youtube.com/embed/VVukfR8pwwU?si=Ne4aAewzsSGNImI9" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_5" width="99%" height="270" src="https://www.youtube.com/embed/sdeGO9PLQHw?si=LJxtAXr4z9JMxWVW" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>

						        <div class="testimonial-item">				                	
									        	<iframe id="player_6" width="99%" height="270" src="https://www.youtube.com/embed/qNaO1p_rS1M?si=2Y6xChFgMGmXvAn5" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_7" width="99%" height="270" src="https://www.youtube.com/embed/x-ja767sKBQ?si=O2OjKafYi8kKQ5nZ" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_8" width="99%" height="270" src="https://www.youtube.com/embed/JtVb33nU8tU?si=bLHedKR2I5juGjal" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
						        <div class="testimonial-item">				                	
									        	<iframe id="player_9" width="99%" height="270" src="https://www.youtube.com/embed/-4Bj5wvTu9o?si=ql0U0cZuOO6gk_C6" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						        </div>
				            </div>
				        </div>
				    </div>
			  </div>
<?php } ?>

<?php if ($page=="PARENT") { ?>
	<div id="rs-partner" class="rs-partner wow fadeInUp bcs-tst" data-wow-delay="0.5s">
		<div class="sec-title text-center">
					<h2>WHAT PARENTS SAY</h2>
				</div>
 <div class="row">
			        <div class="col-md-12 bcs-psay">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="flase" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
					        <div class="testimonial-item">
			                	<iframe id="player_10" width="99%" height="270" src="https://www.youtube.com/embed/XSCjFW9H7Dw?si=cIvhUI8oMzvCJEX7" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			                </div>
					       <div class="testimonial-item">
					        	<iframe id="player_11" width="99%" height="270" src="https://www.youtube.com/embed/TwIjOxx9hxo?si=WEFB4nR5wCckHTvT" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_12" width="99%" height="270" src="https://www.youtube.com/embed/FFhHc7fsRes?si=SG-XuFrmOTGlN3bP" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_13" width="99%" height="270" src="https://www.youtube.com/embed/OJpt5TDZ3Ho?si=1GCIriGf38r69_BR" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_14" width="99%" height="270" src="https://www.youtube.com/embed/YgWGHZY_I2Y?si=xnwyPoF8BCvtemqE" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_15" width="99%" height="270" src="https://www.youtube.com/embed/EFHksv2queM?si=asuM7C3M6TRHDKNp" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_16" width="99%" height="270" src="https://www.youtube.com/embed/USsAA1nCnas?si=l11LsxeelqvlS4Lz" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
					        <div class="testimonial-item">
					        	<iframe id="player_17" width="99%" height="270" src="https://www.youtube.com/embed/m3arQ62dur4?si=P_YfrdpX1mEfDaiX" frameborder="0" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					        </div>
			            </div>
			        </div>
			    </div>
			  </div>
<?php } ?>

<?php if ($page=="FACULTY") { ?>
<div class="bcs-tst">
<div class="sec-title text-center">
					<h2>WHAT FACULTY SAYS</h2> 
				</div>	
   <div class="row wow fadeInUp" data-wow-delay="0.5s">
   	<div class="col-lg-12 p-3 fact">
   		<div class="regular slider">
   			<div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/nidhi-singh.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">Here at Brilliants’ Convent, excellence is not a goal — it is a culture. The constant motivation from the management and Principal Ma’am keeps us striving for the best. Be it lesson planning, student tracking, or school events, everything is executed with precision and passion. The school maintains high standards not only for students but for teachers as well, and this is what fuels continuous improvement and professional satisfaction. – Ms. Nidhi Singh</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/bhawna.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">Being a Language teacher at Brilliants’ Convent has been a truly rewarding experience. The school offers a supportive environment that encourages both teachers and students to grow. I’ve enjoyed the freedom to implement interactive, activity-based teaching methods, making literature and language more engaging for my students. What stands out most is the school’s balanced focus on academics, creativity, and values, fostering overall development. I’m especially thankful to our Principal, Dr. Reeta Hashia, for her inspiring leadership and constant support. It’s been a fulfilling journey, and I look forward to many more meaningful teaching moments. – Ms. Bhawna Bindra</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/shikha-goel.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">As a language teacher, I have found immense satisfaction in being able to nurture communication skills and literary appreciation among students. From well-planned English enrichment programs to thoughtful celebrations of Hindi Diwas, the school recognizes the importance of both global and native languages. The structured curriculum and co-curricular exposure help students build confidence and fluency, while teachers are given full autonomy to design creative and expressive lessons. – Ms. Shikha Goel</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/upasana.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">Teaching at Brilliants’ Convent is like being part of a futuristic vision. With the seamless integration of Artificial Intelligence, Robotics, and digital learning platforms, we are preparing our students for the world of tomorrow. The school not only encourages innovation in the classroom but also equips teachers with the necessary training and tools to make lessons more interactive and futuristic. It’s truly exciting to be part of an institution that prioritizes technological advancement in education. – Ms. Upasana </p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/deepti-suri.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">What truly sets Brilliants’ Convent apart is the dynamic leadership of our Principal, Dr. Reeta Hashia, whose vision extends beyond academics. Her encouragement, clarity of direction, and dedication to excellence constantly push us to evolve and give our best. Coupled with the unwavering support of the management, the school provides an environment where teachers are mentored, valued, and trusted. It’s a place where your potential is recognized and your efforts are celebrated. Ms. Deepti Suri</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/bhanu-vaid.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">At Brilliants’ Convent, I’ve experienced the perfect harmony of tradition and technology. While students are grounded in strong moral values and Indian culture, they also benefit from the use of smart classrooms, interactive apps, and e-content. The curriculum is thoughtfully curated to be contemporary, while still respecting time-honored teaching values. As a teacher, it’s empowering to be a part of such a forward-thinking yet culturally rooted institution. Ms. Bhanu Vaid</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/geeta-juneja.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">There is something deeply fulfilling about watching students evolve into confident, well-rounded individuals—and Brilliants’ Convent gives us the perfect platform for that. The school’s holistic approach helps us as teachers focus not only on academics but also on building character, empathy, and life skills in our students. Every child is given a chance to shine, and that makes every teaching moment valuable. – Ms. Geeta Juneja</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/vinita.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">Working under the progressive leadership of our Respected Principal ma'am, Dr. Reeta Hashia has been one of the highlights of my teaching career. Her attention to detail, commitment to quality, and openness to new ideas create an ecosystem where innovation is encouraged and growth is guaranteed. The school's constant evolution — from adopting digital citizenship models to introducing NEP-aligned practices — keeps us educators energized and future-ready. – Ms. Vinita Yadav</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/jaspreet-kaur.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">It gives me immense pride to speak about the world-class facilities that set Brilliants’ apart. With spacious smart classrooms, well-equipped labs, a rich library, and a fully air-conditioned campus, the school offers a perfect blend of comfort and innovation. Dedicated rooms for art, music, and dance foster creativity, while lush green playgrounds and top-notch sports amenities promote physical well-being. Technology-enabled teaching tools make learning truly engaging. These facilities reflect our school’s commitment to holistic education and student growth. We are proud to be Brilliantians. – Ms. Jaspreet Kaur</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/aanchal-tyagi.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">Working at Brilliants’ Convent has been a journey of constant growth. The management truly believes in empowering its teachers. Regular capacity-building sessions, workshops on modern pedagogy, and curriculum planning meetings make us feel prepared, involved, and professionally fulfilled. Here, we are not just educators — we are innovators, mentors, and lifelong learners. Ms. Aanchal Tyagi</p></div>
    </div>
  </div>
  </div>
   	</div>
    </div>
  </div>
<?php } ?>
<?php if ($page=="ALUMNI") { ?>
    <div class="bcs-tst">
<div class="sec-title text-center">
					<h2>WHAT ALUMNI SAYS</h2> 
				</div>	
   <div class="row wow fadeInUp" data-wow-delay="0.5s">
   	<div class="col-lg-12 p-3 fact">
   		<div class="regular slider">
   			<div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-01.jpg"/>
      	<p><strong>Dr. Ankit Suri</strong><br>
      		Ph.D. in Management, JNU<br>
      	Assistant Professor, Motilal Nehru College, University of Delhi</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Feeling nostalgic and grateful! <br>
It feels wonderful to look back at where it all began — Brilliants’ Convent Sr. Sec. School, New Delhi — where I completed my schooling in 2015 (Commerce stream). The lessons, values, and encouragement I received there truly shaped my academic and professional journey. <br><br>
Today, I’m serving as an Assistant Professor at Motilal Nehru College, University of Delhi. I recently completed my Ph.D. in Management from Jawaharlal Nehru University (JNU), where I was awarded both the Junior and Senior Research Fellowships (SRF).<br><br>
I hold a Master’s in Commerce (Finance & International Business) from the Delhi School of Economics and a Bachelor’s in Commerce from Ramjas College, University of Delhi. I’m also a UGC-NET & JRF qualifier in Commerce, Management, and Labour Welfare/HRM.<br><br>
In 2024, I had the enriching experience of undergoing formal training in Public Policy Research at the University of Campinas, Brazil. <br>
Forever grateful to my school, mentors, and teachers at Brilliants’ Convent for laying the foundation of everything I’ve achieved so far.</p>
</div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-02.jpg"/>
      	<p><strong>Ritika Singla </strong><br>
      		Marketing Manager, Branding & Strategic Insights<br>Godrej Enterprises Group<br>Former Summer Intern, Adani Group</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Brilliants Convent was the place where I first learned to communicate ideas with confidence, lead with empathy, and think creatively—skills that continue to define my journey in the world of marketing and branding. The school didn’t just teach lessons from textbooks; it taught me how to present, collaborate, and express myself with conviction. Whether it was through debates, cultural events, or everyday classroom discussions, I was constantly challenged to think beyond the obvious.<br><br>
Today, as a Marketing Manager in the Branding & Strategic Insights division at Godrej Enterprises, those early experiences continue to shape my professional instincts. The foundation laid at Brilliants Convent gave me not just knowledge—but the voice to make it count.</p></div>
    </div>
  </div>
  <!-- <div>
    <div class="row">
      <div class="col-md-4"><img src="images/testimonial/stud-03.jpg"/></div>
      <div class="col-md-8"><p class="card-text text-justify">As a language teacher, I have found immense satisfaction in being able to nurture communication skills and literary appreciation among students. From well-planned English enrichment programs to thoughtful celebrations of Hindi Diwas, the school recognizes the importance of both global and native languages. The structured curriculum and co-curricular exposure help students build confidence and fluency, while teachers are given full autonomy to design creative and expressive lessons. – Ms. Shikha Goel</p></div>
    </div>
  </div> -->
  <div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-04.jpg"/>
      	<p><strong>Dr. Mandeep Solanki</strong><br>
      		MBBS, Chief Medical Officer, Larsen & Toubro</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Brilliants Convent  wasn't just a place where I learned subjects—it was where I discovered my purpose. The school’s nurturing environment, disciplined approach, and focus on holistic development shaped my attitude towards life and learning. I fondly remember the unwavering support of my teachers—Seema Ma’am, Sunita Ma’am, and many others—who not only taught us but mentored us with patience and care.
      	<br><br>
Under the visionary leadership of Principal Dr. Reeta Hashia and the constant encouragement from the school’s progressive management, Brilliants Convent provided me with the confidence and values needed to pursue the medical field. Today, as the Chief Medical Officer at Larsen & Toubro, I carry with me the discipline, empathy, and determination that were instilled in me during those foundational years. I will always be proud to call myself a Brilliantian.
</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-05.jpg"/>
      	<p><strong>Praduman Verma</strong><br>
      		B.Tech (Computer Science), DTU<br>
MBA (FinTech), BITS Pilani (WILP)<br>
      	Senior Software Engineer C11, Citibank – Pune</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Brilliants Convent has been the place where my aspirations first took root. It wasn’t just about textbooks and exams—it was about discovering who I was and what I was capable of becoming. The school created an environment where ideas were welcomed, individuality was respected, and excellence was always encouraged. I still remember the countless moments when teachers went beyond the classroom to support, guide, and inspire us.<br><br>
It was here that I learned to dream big, think critically, and communicate confidently—skills that have proven invaluable in every step of my journey. From pursuing engineering at DTU to completing my MBA in FinTech from BITS Pilani, and now working at Citibank as a Senior Software Engineer, I carry with me the lessons and values nurtured at Brilliants Convent. Being a Brilliantian isn’t just a part of my identity—it’s the foundation of who I’ve become.
</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-06.jpg"/>
      	<p><strong>Jyotirmaya</strong><br>
      		Qualification: B.E. (Computer Engineering)</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Designation: Assistant Provident Fund Commissioner, Employees' Provident Fund Organisation, Ministry of Labour & Employment. <br><br>
Experience in BCS: From Under Kindergarten till i passed the Senior Secondary stage, i was the part of Brilliants' Convent fanily. It was a wonderful experience for me. I was mentored by excellent faculty, who not only facilitated academic growth but also helped me grow physically, socially and emotionally. The constant care and support that i received from them helped me grow personally and simultaneously groomed my personality. I am still indebted to my teachers for whatever i have been able to achieve in my life. On the other hand, i still cherish the friendships that i made during my time in the school. Those bonds have indeed stood the test of time. Overall, i would say, i had an enriching experience at the school and i take  pride in Brilliants' Convent being my alma mater!
</p></div>
    </div>
  </div>
  <div>
    <div class="row">
      <div class="col-md-4 name-desig"><img src="images/testimonial/stud-07.jpg"/>
      	<p><strong>Nikhil Kumar Chhikara</strong><br>
      		B.Tech (Computer Science), DTU<br>
      	Additional District Informatics Officer, NIC, Patan (Gujarat)</p>
      </div>
      <div class="col-md-8"><p class="card-text text-justify">Some lessons stay with you for life—and many of mine were taught at Brilliants Convent, not just from textbooks but through the unwavering dedication of my teachers. I still remember how patiently they answered every question, how they pushed us to think beyond the obvious, and how they believed in us even when we doubted ourselves.<br><br>
It was this constant encouragement that gave me the confidence to pursue a career in technology. Their belief in my abilities shaped not just my academics, but my attitude toward challenges. Today, as I serve as an Additional District Informatics Officer at the National Informatics Centre in Gujarat, I carry the wisdom, values, and strength they quietly instilled in me.<br><br>
Brilliants Convent will always be close to my heart—for the lessons, the memories, and most importantly, the mentors who made all the difference.
</p></div>
    </div>
  </div>
  </div>
   	</div>
    </div>
  </div>
<?php } ?>
  </div>
</div>
	</div>
</div>


            </div>
        </div>
        <!-- About Us End -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      
      $(".regular").slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>


<script>
    var players = [];
    function onYouTubeIframeAPIReady() {
        // Get all iframes inside the testimonial slider
        var iframes = document.querySelectorAll('.testimonial-item iframe');
        
        iframes.forEach(function(iframe, index) {
            // Assign auto id
            iframe.id = "player_" + index;

            // Create YT player
            players[index] = new YT.Player(iframe.id, {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        });
    }

    function onPlayerStateChange(event) {
        var owl = $('.rs-carousel');

        // ✔ Stop slider when video is playing
        if (event.data === YT.PlayerState.PLAYING) {
            owl.trigger('stop.owl.autoplay');
        }

        // ✔ Restart slider when video paused or ended
        if (event.data === YT.PlayerState.PAUSED || event.data === YT.PlayerState.ENDED) {
            owl.trigger('play.owl.autoplay');
        }
    }
</script>

<!-- ======= Footer ======= -->       
<?php include_once("footer.php");?>
