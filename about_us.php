<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php

	error_reporting(0);

	$page = $_GET["page"];

	$_REQUEST["meta_title"] = "About us :: " . $page;

	$_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

	$_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/about-us.php";

	if ($page == "affiliation") {
		$b_banner = "Affiliation.jpg";
		$b_title = "Affiliation";
		$id = "1";
		$mid = '2';
	}
	if ($page == "mission-vision") {
		$b_banner = "MNVbanner.jpg";
		$b_title = "Mission & Vision";
		$id = "2";
	}
	if ($page == "our-management") {
		$b_banner = "Our-Management.jpg";
		$b_title = "Our Management";
		$id = "3";
	}
	if ($page == "aims-objective") {
		$b_banner = "Aims-Objective.jpg";
		$b_title = "Aims & Objective";
		$id = "4";
	}
	if ($page == "school-rules") {
		$b_banner = "srbanner.jpg";
		$b_title = "School Rules";
		$id = "5";
	}
	if ($page == "infrastructure") {
		$b_banner = "Iinfrastructure.jpg";
		$b_title = "Infrastructure";
		$id = "6";
	}
	if ($page == "song") {
		$b_banner = "song_banner.JPG";
		$b_title = "Song";
		$id = "7";
	}
	if ($page == "about-brilliant") {
		$b_banner = "about-banner.jpg";
		$b_title = "About Brilliants' Convent";
		$id = "8";
	}
	if ($page == "timings") {
		$b_banner = "Timing.jpg";
		$b_title = "Timings";
		$id = "9";
	}
	if ($page == "uniform") {
		$b_banner = "Uniform.jpg";
		$b_title = "Uniform";
		$id = "10";
	}

	include_once("header.php");
	?>
	<!-- Header Top End -->
	</header>
	<!--Header End-->
	</div>
	<!--Full width header End-->

	<div id="rs-slider" class="slider-overlay-2">
		<div class="item active">
			<img src="images/about/<?php echo $b_banner; ?>" style="width: 100%;">
			<div class="slide-content">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container text-center">
							<h1 class="slider-title"><?php echo $b_title; ?></h1>
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
				<div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block">
					<ul class="list-group">
						<li class="list-group-item title" aria-current="true">About BCS</li>
						<li class="list-group-item list-group-item-action <?php echo $id == '1' ? 'active' : '' ?>"><a
								href="about_us.php?page=affiliation">Affiliation</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '2' ? 'active' : '' ?>"><a
								href="about_us.php?page=mission-vision">Mission & Vision</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '3' ? 'active' : '' ?>"><a
								href="about_us.php?page=our-management">Our Management</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '4' ? 'active' : '' ?>"><a
								href="about_us.php?page=aims-objective">Aims & Objective</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '5' ? 'active' : '' ?>"><a
								href="about_us.php?page=school-rules">School Rules</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '6' ? 'active' : '' ?>"><a
								href="about_us.php?page=infrastructure">Infrastructure</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '7' ? 'active' : '' ?>"><a
								href="about_us.php?page=song">Song</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '8' ? 'active' : '' ?>"><a
								href="about_us.php?page=about-brilliant">About Brilliants' Convent</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '9' ? 'active' : '' ?>"><a
								href="about_us.php?page=timings">Timings</a></li>
						<li class="list-group-item list-group-item-action <?php echo $id == '10' ? 'active' : '' ?>"><a
								href="about_us.php?page=uniform">Uniform</a></li>

					</ul>
				</div>
				<div class="col-lg-9 col-md-12 bcs-card">
					<div class="card acd-card">
						<?php if ($page == "affiliation") { ?>
							<h5 class="card-header">Affiliation</h5>
							<div class="card-body">
								<p class="card-text text-justify">The School is affiliated up to Senior Secondary level with
									the Central Board of Secondary Education (C.B.S.E.), Delhi vide affiliation no. 2730565
									and recognized by the Directorate of Education, Govt. of NCT of Delhi with School ID
									1411205.</p>
							</div>
						<?php } ?>

						<?php if ($page == "mission-vision") { ?>
							<h5 class="card-header">Mission and Vision</h5>
							<div class="card-body">
								<p class="card-text text-justify">“Education is simply the soul of a society as it passes
									from one generation to another.”
									– G.K. Chesterton
									<br><br>
									Education plays a vital role in shaping society. A school, often considered a temple of
									education, forms the foundational base of knowledge essential for the growth and
									development of any community and its people.
									<br><br>
									At Brilliants’ Convent, our mission statement – “Learn to Serve” – is at the core of our
									unique curriculum and teaching approach. We strive continuously and sincerely to work in
									a manner that supports this mission.
									<br><br>
									We believe in harmonizing the collective aspirations of students, teachers, and parents.
									Schooling is more than just academics, and at BCS, we ensure that students experience
									practical and experiential learning. This empowers our proud Brilliantians to unlock
									their true potential and discover their unique identities. We encourage children to
									celebrate individuality, and to foster a purposeful learning environment. We focus on
									the holistic development of each child — intellectually, physically, culturally,
									socially, morally, and spiritually.
									<br><br>
									As it is rightly said, “The journey of a thousand miles begins with a single step.”
									With this meaningful thought in mind, BCS has already initiated programs aligned with
									the UN Sustainable Development Goals (SDGs). These initiatives aim to develop resources
									and implement activities in collaboration with different countries, promoting global
									citizenship and empowering students through quality education. At BCS, we firmly believe
									that children are the supreme assets of the nation. Therefore, we strive to cultivate a
									school culture that shapes their civic behavior, identity, skills, and values.
									<br><br>
									Beyond the academic curriculum, we provide our students with incredible learning
									opportunities and life-changing experiences.
									<br><br>
									As a school where quality matters the most, we have made every effort to reflect the
									kaleidoscope of learning, adventure, creativity, and positive thinking through our
									students’ writings and drawings. We hope this initiative will serve as a stepping stone
									towards the many milestones we aim to achieve in our pursuit of excellence.
									<br><br>
									To engage students in an active learning environment, it is essential for teachers to
									understand and respond to each student’s individual needs. In today’s ever-evolving
									educational landscape, effective teaching practices help us as educators to enhance our
									instructional methods.
									<br><br>
									Although these strategies may vary depending on students’ age groups and abilities, they
									allow us to tailor our teaching styles, recognizing that different students learn in
									different ways.
									<br><br>Teaching Strategies Followed at Our School
									<br><br>
									<strong>1. Encouraging Healthy Communication</strong><br>
									We regularly engage students in conversations about their daily routines, in addition to
									discussing the academic content being taught. Conducting various classroom activities
									help students develop confidence in speaking and expressing themselves.
									<br><br>
									<strong>2. Being a Role Model</strong>
									<br>
									To instill high morals and values, we understand that we must first embody them
									ourselves. We treat our students with the utmost respect and care, thereby building
									positive and nurturing relationships.
									<br><br>
									<strong>3. Beginning with a Short Recap</strong>
									<br>To ensure continuity and long-term learning, we begin lessons by revisiting previous
									knowledge. Asking inquiry-based questions help put past lessons into context, giving us
									an accurate picture of students’ understanding and identifying areas that need
									reinforcement.
									<br><br>By following these teaching strategies, we strive to create a Happy Classroom
									that fosters meaningful learning for every student.
								</p>
							</div>
						<?php } ?>

						<?php if ($page == "our-management") { ?>
							<h5 class="card-header">Our Management</h5>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr>
												<th>S.No.</th>
												<th>Name</th>
												<th>Designation</th>
											</tr>
											<tr>
												<td>1</td>
												<th>Ms. Amita Mann</th>
												<td>Chairperson</td>
											</tr>
											<tr>
												<td>2</td>
												<th>Sh. Dilbag Singh Mann</th>
												<td>Manager</td>
											</tr>
											<tr>
												<td>3</td>
												<th>Dr. Reeta Hashia</th>
												<td>Principal</td>
											</tr>
											<tr>
												<td>4</td>
												<th>Ms. Jyoti Arora</th>
												<td>Member</td>
											</tr>
											<tr>
												<td>5</td>
												<th>Mr. Jatin Mann</th>
												<td>Member</td>
											</tr>
											<tr>
												<td>6</td>
												<th>Mr. Rohit Hashia</th>
												<td>Member</td>
											</tr>
											<tr>
												<td>7</td>
												<th>Mr. Harshit</th>
												<td>Member</td>
											</tr>
											<tr>
												<td>8</td>
												<th>Mr. Prince Solanki </th>
												<td>Member</td>
											</tr>
											<tr>
												<td>9</td>
												<th>Mr. Vineet Singhal </th>
												<td>Member</td>
											</tr>
											<tr>
												<td>10</td>
												<th>Ms. Sunita Malhotra</th>
												<td>Staff Rep.</td>
											</tr>
											<tr>
												<td>11</td>
												<th>Ms. Seema Chawla </th>
												<td>Staff Rep.</td>
											</tr>
											<tr>
												<td>12</td>
												<th>Mr. Rajan Juneja</th>
												<td>PTA Rep.</td>
											</tr>
											<tr>
												<td>13</td>
												<th>Mr. Navneet Chhabra</th>
												<td>PTA Rep.</td>
											</tr>
											<tr>
												<td>14</td>
												<th>Dr. Anil Kumar</th>
												<td>D.E. Nominee</td>
											</tr>
											<tr>
												<td>15</td>
												<th>Mr. Tajender Singh</th>
												<td>D.E. Nominee</td>
											</tr>

											<tr>
												<td>16</td>
												<th>Ms. Rekha Sharma</th>
												<td>A.B. Nominee</td>
											</tr>

											<tr>
												<td>17</td>
												<th>Mr. Sunil Malik</th>
												<td>A.B. Nominee</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>

						<?php if ($page == "aims-objective") { ?>
							<h5 class="card-header">Aims & Objective</h5>
							<div class="card-body">
								<p class="card-text text-justify">
									The primary objective of Brilliants’ Convent is to provide students with modern,
									high-quality education that empowers them to pursue careers aligned with their
									individual potential, aptitude, and interests. This approach ensures their holistic
									development—physical, mental, and moral—while fostering a lifelong love for learning
									aimed at contributing to India’s progress as one of the world’s most advanced nations.
									Equal emphasis is placed on nurturing the personality of each child and instilling pride
									in Indian culture and heritage. We consider character formation and national integration
									essential, preparing our students to thrive and contribute meaningfully in a diverse and
									complex society. Our ultimate goal is to make Brilliants’ Convent a symbol of excellence
									through a pragmatic approach and a humanistic vision. <br>We humbly pray to the Almighty
									for the strength and willpower to fulfill our responsibilities and remain true to our
									commitments.
								</p>
							</div>
						<?php } ?>

						<?php if ($page == "school-rules") { ?>
							<h5 class="card-header">School Rules</h5>
							<div class="card-body">
								<div class="card-text ol_data">
									<ol class="ol1">
										<li>Every student must wear an identity card.</li>
										<li>Students who come to school by their own transport must arrive at the school 10
											minutes before the bell rings. No student is allowed to park his/her vehicle in
											the parking lot.</li>
										<li>Change of classroom between periods should be done in silence and in an orderly
											manner.</li>
										<li>Students should be neatly dressed. The school uniform is to be worn every day
											and for all school functions and activities.</li>
										<li>No slogan writing or scribbling is permitted either on the school uniform or on
											the person. The offence will be dealt with severely.</li>
										<li>No shouting or whistling is allowed/permitted in the school building.</li>
										<li>Throwing things at others is strictly forbidden.</li>
										<li>Students are expected to respect school property. No student should damage
											school furniture, write or draw anything on the walls, or in any way damage
											things belonging to others. Damage done, even by accident, should be reported at
											once to the class teacher, coordinator, or principal. The person causing the
											damage shall be liable to pay a penalty. If a student notices the damage, he/she
											must be vigilant enough to inform the school authorities.</li>
										<li>Students are not allowed to bring any sharp instruments to school or any kind of
											object that can cause injury to others.</li>
										<li>Students are advised to keep their classroom, school building, and campus as
											clean as possible, and to throw leftovers into the dustbins.</li>
										<li>No books (other than textbooks or library books) should be brought to school.
										</li>
										<li>The school is not responsible for lost goods. It is advised not to bring
											valuable articles (like expensive watches, fountain pens, jewellery, etc.) to
											school.</li>
										<li>The school reserves the right to suspend or take disciplinary action against a
											student whose diligence or progress in studies is constantly unsatisfactory or
											whose conduct is harmful to other students.</li>
										<li><strong>No student shall indulge in any of the following practices,
												namely:</strong><br>
											<ul>
												<li>Spitting in or near the school building.</li>
												<li>Rowdyism and rude behaviour.</li>
												<li>Use of violence in any form.</li>
												<li>Bursting crackers or throwing colours on each other / or painting faces
													within the school premises.</li>
											</ul>
										</li>
										<li>No student is permitted to bring a mobile phone to school.</li>
										<li>The roll number of students who do not follow the system inside or outside the
											campus, school rules, or behave in an indisciplined manner may be withheld,
											based on the Code of Conduct issued by the C.B.S.E.</li>
										<li>Parents are required to inform the school in case of any change in their address
											or telephone numbers. Such updates must be communicated through a written
											application addressed to the Principal. Relevant supporting documents (such as a
											copy of the new address proof) must be attached.</li>
										<li>No student is allowed to visit any of the kiosks around the school. Doing so
											will be subject to punishment.</li>
										<li>The school is not responsible for any problems related to the transport of
											students who avail transport other than the school bus.</li>
										<li>Parents or guardians are not allowed to meet their wards or teachers in the
											classroom. If any parent wants to meet their ward during school hours, he/she
											should contact the principal in her office.</li>
										<li>No student is allowed to leave the class or school premises during school hours
											without the permission of the class teacher and the Principal.</li>
										<li>Each absence must be entered in the leave record pages of the handbook and
											signed by the parent. If a student is unable to come to school for more than
											three days, the case must be reported to the principal.</li>
										<li>Repeated absence without leave or absence of more than six consecutive days
											renders a student liable to have his/her name struck off the rolls. Readmission,
											if granted, will be done on payment of a readmission fee.</li>
										<li>Parents are requested to regularly check the school website and the 'Hello
											Parents' app for important updates, circulars, and announcements to stay
											informed about their ward’s academic progress and school activities.</li>
									</ol>
								</div>
							</div>
						<?php } ?>

						<?php if ($page == "infrastructure") { ?>
							<h5 class="card-header">Infrastructure</h5>
							<div class="card-body">
								<p class="card-text text-justify">
									At Brilliants’ Convent, we believe that a nurturing, secure, and future-ready
									environment lays the foundation for holistic development. Spread across a spacious
									DDA-allotted campus, our school blends modern architecture with thoughtful design to
									create a vibrant space for learning, discovery, and growth.
									<br><br>
									The entire campus is monitored through CCTV surveillance to ensure student safety. Fire
									safety equipment, including water pipelines and fire extinguishers, is installed on
									every floor to maintain a safe environment and readiness for any emergency.
									<br><br>
									The school building comprises four well-planned floors and is fully air-conditioned,
									providing a comfortable and focused learning atmosphere for our global citizens.
									<br><br>
									Our spacious classrooms are equipped with smart boards, projectors, and audio systems
									that support interactive and play-based learning approaches. To nurture scientific
									thinking, the school features well-equipped Physics, Chemistry, and Biology
									laboratories. The library, a treasure trove of knowledge, houses an extensive collection
									of books that encourage students to develop a lifelong love for reading and learning.
									<br><br>
									Our two modern computer labs cater to students of all ages, helping them develop strong
									digital skills essential for today’s world. Additionally, dedicated labs for
									Mathematics, Social Science, and Languages, along with Audio-Visual rooms, enhance
									multi-sensory learning experiences. The auditorium serves as a vibrant venue for guest
									lectures, workshops, and cultural events.
									<br><br>
									Our expansive sports arena offers students a wide range of opportunities to engage in
									physical activities such as basketball, lawn tennis, badminton, skating, volleyball,
									cricket, kho-kho, athletics, gymnastics, chess, and carrom. The recent addition of
									exciting sports like box cricket and pickleball further broadens our offerings, ensuring
									every student finds a game they love.
									<br><br>
									At Brilliants’ Convent School, infrastructure is not just about facilities—it’s about
									creating a lively, inspiring space where learning becomes a joyful journey.
								</p>
							</div>
						<?php } ?>

						<?php if ($page == "song") { ?>
							<h5 class="card-header">School Song</h5>
							<div class="card-body">
								<ul>
									<li style="list-style:none; ">We care, We care</li>
									<li style="list-style:none; ">We are unique, special</li>
									<li style="list-style:none; ">Yes, we are Brilliantians</li>
									<br>

									<li style="list-style:none; ">We feel the heaven's flow on our side</li>
									<li style="list-style:none; ">Teachers say not to waste life</li>
									<li style="list-style:none; ">Your faith becomes a path forever</li>
									<li style="list-style:none; ">We keep on dreaming for our lives!</li>
									<br>

									<li style="list-style:none; ">We care, We care</li>
									<li style="list-style:none; ">We are unique, special</li>
									<li style="list-style:none; ">Yes, we are Brilliantians</li>
									<br>


									<li style="list-style:none; ">You guide to prove in our life</li>
									<li style="list-style:none; ">You show the path of light forever</li>
									<li style="list-style:none; ">You are Brilliantians' Driver</li>
									<li style="list-style:none; ">You make us the achiever.</li>
									<br>


									<li style="list-style:none; ">We care, We love</li>
									<li style="list-style:none; ">We are unique, special</li>
									<li style="list-style:none; ">Yes, we are Brilliantians</li>
									<br>
									<li style="list-style:none; ">You bestow us with power</li>
									<li style="list-style:none; ">You provide us such cover</li>
									<li style="list-style:none; ">We lead our healthy life</li>
									<li style="list-style:none; ">Brilliants' is our right choice</li>
									<br>
									<li style="list-style:none; ">We care, We love</li>
									<li style="list-style:none; ">We are unique, special</li>
									<li style="list-style:none; ">Yes, we are Brilliantians</li>
								</ul>
							</div>
						<?php } ?>

						<?php if ($page == "about-brilliant") { ?>
							<h5 class="card-header">About Brilliants' Convent</h5>
							<div class="card-body">
								<p class="card-text text-justify">At Brilliants’ Convent, we believe that every child is
									born with a joyful responsibility to help it shine. We cherish the individuality of each
									student.
									<br><br>
									Brilliants’ Convent is an NEP 2020-aligned institution committed to nurturing empowered,
									ethical, and future-ready learners. Blending traditional values with innovative
									pedagogy, we focus on foundational literacy, experiential learning, and 21st-century
									skills.
									<br><br>
									Our dynamic classrooms promote creativity, critical thinking, and joyful learning
									through art, sports, and technology integration. With a student-centric approach and
									dedicated educators, we strive to shape confident global citizens who lead with
									knowledge, compassion, and purpose.
									<br><br>
									With a strong focus on academic excellence, we offer enriching learning experiences that
									challenge and inspire. We celebrate curiosity, foster creativity, and empower students
									to become confident, independent thinkers. Our classrooms are vibrant spaces where
									joyful learning unfolds each day under the care of skilled and compassionate educators.
									<br><br>
									At Brilliants’ Convent, we believe in holistic development to make our students
									empathetic citizens of tomorrow.
									<br><br>
									Learning at our school extends far beyond the walls of a classroom. An exciting array of
									co-curricular clubs, events, competitions, and celebrations ensures that every student
									finds their passion and flourishes in their talents. Each day brings new opportunities
									to discover joy, build friendships, and create unforgettable memories.
									<br><br>
									Our strength lies in our dedicated team of educators, who are lifelong learners
									themselves. With regular professional development sessions, collaborative growth, and a
									passion for innovation, our teachers continuously strive to make learning meaningful and
									impactful. They not only educate—but inspire, uplift, and transform lives.
									<br><br>
									At Brilliants’ Convent, we don’t just teach lessons—we build legacies. We are more than
									a school—we are a family, a community, and a launchpad for dreams. Together, we are
									shaping a brighter, kinder, and a more brilliant tomorrow.
								</p>
							</div>
						<?php } ?>

						<?php if ($page == "timings") { ?>
							<h5 class="card-header">SCHOOL TIMINGS</h5>
							<div class="card-body bcs-bullets">
								<ul>
									<li>For kindergarten: 9:00 A.M. to 12:30 P.M. (Monday to Friday)</li>
									<li>For Classes I to XII: 8 A.M. to 2:15 P.M. (Monday to Friday)</li>
									<li>Every Saturday is a holiday unless announced otherwise.</li>
									<li>The students should be punctual to school. Late entry is not allowed.</li>
								</ul>
							</div>
						<?php } ?>

						<?php if ($page == "uniform") { ?>
							<h5 class="card-header">Uniform</h5>
							<div class="card-body">
								<div>
									<p class="card-text text-justify">
										All students are expected to attend the school in the prescribed uniform which can
										be procured from the various outlets in the market.
									</p>
								</div>
								<div class="pt-3">
									<H3>Nursery-wing, Primary, Middle, Secondary & Senior Secondary(Summer)</H3>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr>
												<th>Boys/Girls </th>
												<th></th>
											</tr>
											<tr>
												<th>Shirts</th>
												<td>Light Blue with School Logo</td>
											</tr>
											<tr>
												<th>Trousers</th>
												<td>Greyish Blue</td>
											</tr>
											<tr>
												<th>Socks</th>
												<td>Dark Blue with Stripes</td>
											</tr>
											<tr>
												<th>Shoes</th>
												<td>Black Shoes</td>
											</tr>
											<tr>
												<th>Belt</th>
												<td>Blue with White Stripes & School Logo</td>
											</tr>
											<tr>
												<th>Tie</th>
												<td>Blue with Grey Stripes</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="pt-3">
									<H3>Nursery-wing, Primary, Middle, Secondary & Senior Secondary(Winter)</H3>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr>
												<th>Boys/Girls </th>
												<th>Grey Blazer with School Logo</th>
											</tr>
											<tr>
												<th>Shirts</th>
												<td>Light Blue with School Logo</td>
											</tr>
											<tr>
												<th>Trousers</th>
												<td>Greyish Blue</td>
											</tr>
											<tr>
												<th>Tie</th>
												<td>Blue with Grey Stripes</td>
											</tr>
											<tr>
												<th>Socks</th>
												<td>Dark Blue with Stripes</td>
											</tr>
											<tr>
												<th>Shoes</th>
												<td>Black Shoes</td>
											</tr>
											<tr>
												<th>Belt</th>
												<td>Blue with White Stripes & School Logo</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
						<?php } ?>

					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- About Us End -->

	<!-- ======= Footer ======= -->
	<?php include_once("footer.php"); ?>