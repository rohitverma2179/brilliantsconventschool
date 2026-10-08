<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <meta name="description" content="">
  <!-- responsive tag -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    .pdf {
      width: 100%;
      aspect-ratio: 4 / 3;
      height: 100%;
    }
  </style>
  <?php
  error_reporting(0);


  //  .pdf,
  //     html,
  //     body {

  //               margin: 0;
  //         padding: 0;

  $page = $_GET["page"];

  $_REQUEST["meta_title"] = "Academics :: " . $page;

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/academics.php";

  if ($page == "calendar") {
    $b_banner = "Calendar.jpg";
    $b_title = "Calendar";
    $idac = "1";
  }
  if ($page == "faculty") {
    $b_banner = "faculty-banner.jpg";
    $b_title = "Faculty";
    $idac = "2";
  }
  if ($page == "curriculum") {
    $b_banner = "curriculum.jpg";
    $b_title = "Curriculum";
    $idac = "3";
  }
  if ($page == "handbook") {
    $b_banner = "Handbook-2018-19.jpg";
    $b_title = "Handbook";
    $idac = "4";
  }
  if ($page == "workshops-Webinar") {
    $b_banner = "subject-combination.jpg";
    $b_title = "Workshops & Webinar";
    $idac = "5";
  }
  if ($page == "examination-schedule") {
    $b_banner = "Examination-Schedule-2017.jpg";
    $b_title = "Examination Schedule";
    $idac = "6";
  }
  if ($page == "holidays-homework") {
    $b_banner = "Holidays-Homework-2018-19.jpg";
    $b_title = "Holidays Homework";
    $idac = "7";
  }
  if ($page == "result") {
    $b_banner = "achievement.jpg";
    $b_title = "Results";
    $idac = "8";
  }
  if ($page == "bcs-juniors") {
    $b_banner = "bcs-juniors.jpg";
    $b_title = "BCS Juniors";
    $idac = "9";
  }
  if ($page == "slc") {
    $b_banner = "Examination-Schedule-2017.jpg";
    $b_title = "SLC";
    $idac = "10";
  }

  include_once("header.php");
  ?>
  <!-- Header Top End -->

  </header>
  <!--Header End-->
  </div>
  <!--Full width header End-->

  <!-- Slider Area Start -->
  <!-- <div id="rs-slider" class="slider-overlay-2">
    <div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0"
      data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true"
      data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true"
      data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1"
      data-md-device-nav="true" data-md-device-dots="false">
      <div class="item active">
        <img src="images/academics/<?php echo $b_banner; ?>">
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">
                  <?php echo $b_title; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div> -->

  <div id="rs-slider" class="slider-overlay-2">
    <div class="item active">
      <img src="images/academics/<?php echo $b_banner; ?>" style="width: 100%;">
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
  <div class="rs-about sec-spacer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block">
          <ul class="list-group">
            <li class="list-group-item title text-uppercase">ACADEMICS</li>
            <li class="list-group-item list-group-item-action <?php echo $idac == '1' ? 'active' : '' ?>">
              <a href="academics.php?page=calendar">Calendar</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '2' ? 'active' : '' ?>">
              <a href="academics.php?page=faculty">Faculty</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '3' ? 'active' : '' ?>">
              <a href="academics.php?page=curriculum">Curriculum</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '4' ? 'active' : '' ?>">
              <a href="academics.php?page=handbook">Handbook</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '5' ? 'active' : '' ?>">
              <a href="academics.php?page=workshops-Webinar">Workshops & Webinar</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '6' ? 'active' : '' ?>">
              <a href="academics.php?page=examination-schedule">Examination Schedule</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '7' ? 'active' : '' ?>">
              <a href="academics.php?page=holidays-homework">Holidays Homework</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '8' ? 'active' : '' ?>">
              <a href="academics.php?page=result">Results</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '9' ? 'active' : '' ?>">
              <a href="academics.php?page=bcs-juniors">BCS Juniors</a>
            </li>

            <li class="list-group-item list-group-item-action <?php echo $idac == '10' ? 'active' : '' ?>">
              <a href="academics.php?page=slc">SLC</a>
            </li>

          </ul>
        </div>
        <div class="col-lg-9 col-md-12 bcs-card">
          <div class="card acd-card">
            <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
            <?php if ($page == "calendar") { ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <iframe class="pdf" src="pdf/academic-calender-2025-26.pdf" width="100%" height="450"></iframe>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($page == "faculty") { ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <tr>
                            <td style="text-align: center;" width="49"><strong>S.NO.</strong></td>
                            <td style="text-align: center;" width="224"><strong>NAME OF TEACHER</strong></td>
                            <td style="text-align: center;" width="163"><strong>DESIGNATION</strong></td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>DR. REETA HASHIA</td>
                            <td>PRINCIPAL</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>MS. SEEMA CHAWLA</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>MS. UPASANA</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>MS. GEETA JUNEJA</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>MR. DEEPAK JAIN</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>MS. NIDHI SINGH</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>MR. NIKHIL.KR SHARMA</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>MR. PRIYANKA CHAUDHARY</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>MS. VINITA YADAV</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>MS. GUNJAN MARWAH</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>MS. HEENA KAUSH</td>
                            <td>PGT</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>MS. SUDERSHAN SHOKEEN</td>
                            <td>PET</td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>MS. SHIKHA GOEL</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>MS. AARTI ARORA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>MS. DEEPTI SURI</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>MS. SHUCHI TANDON</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>17</td>
                            <td>MS. CHHAVI MALHOTRA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>18</td>
                            <td>MS. AYUSHI MITTAL</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>19</td>
                            <td>MS. RISHU CHAWLA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>20</td>
                            <td>MS. KANIKA KAUR SARAO</td>
                            <td>TGT</td>
                          </tr>

                          <tr>
                            <td>21</td>
                            <td>MS. CHARU SHARMA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>22</td>
                            <td>MS. SHIVANI VERMA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>23</td>
                            <td>MS. REVA SHARMA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>24</td>
                            <td>MS. SWATI SHARMA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>25</td>
                            <td>MS. SUCHI GULATI</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>26</td>
                            <td>MS. BHUMIKA CHAWLA</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>27</td>
                            <td>MS. DEEPSHIKHA KAUSHIK</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>28</td>
                            <td>MS. DEEPTI</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>29</td>
                            <td>MS. PAYAL CHAKRABORTY</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>30</td>
                            <td>MS. MANPREET KAUR</td>
                            <td>TGT</td>
                          </tr>
                          <tr>
                            <td>31</td>
                            <td>MS. SUNITA MALHOTRA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>32</td>
                            <td>MS. PARUL AHLAWAT</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>33</td>
                            <td>MS. SIMMI MALHOTRA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>34</td>
                            <td>MS. AMANDEEP KAUR</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>35</td>
                            <td>MS. NISHA GULWANI</td>
                            <td>PRT</td>
                          </tr>

                          <tr>
                            <td>36</td>
                            <td>MS. BHAWNA BINDRA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>37</td>
                            <td>MS. HARDEEP KAUR</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>38</td>
                            <td>MS. BHANU VAID</td>
                            <td>PRT</td>
                          </tr>

                          <tr>
                            <td>39</td>
                            <td>MS. NIDHI GARG</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>40</td>
                            <td>MS. SONAKSHI ARORA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>41</td>
                            <td>MS. POONAM BAMEL</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>42</td>
                            <td>MS. NUPUR GUPTA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>43</td>
                            <td>MS POOJA MALHOTRA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>44</td>
                            <td>MS. RENUKA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>45</td>
                            <td>MS. SHEFALI GUPTA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>46</td>
                            <td>MS. SUMAN SHARMA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>47</td>
                            <td>MS. NEHA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>48</td>
                            <td>MS. SHIVANI SAPRA</td>
                            <td>PRT</td>
                          </tr>
                          <tr>
                            <td>49</td>
                            <td>MS. JASPREET KAUR</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>50</td>
                            <td>MS. BHUMIKA KHURANA</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>51</td>
                            <td>MS. SHUBHNEET KAUR</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>52</td>
                            <td>MS. MEHAK ROHERA</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>53</td>
                            <td>MS. ANKITA BORA</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>54</td>
                            <td>MS. VANDANA</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>55</td>
                            <td>MS. JYOTI BISHT</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>56</td>
                            <td>MS. APOORVA JAIN</td>
                            <td>NT</td>
                          </tr>
                          <tr>
                            <td>57</td>
                            <td>MS. MEENAKSHI</td>
                            <td>ART TR.</td>
                          </tr>
                          <tr>
                            <td>58</td>
                            <td>MR. DINESH SOLANKI</td>
                            <td>COACH</td>
                          </tr>
                          <tr>
                            <td>59</td>
                            <td>MS. CHAKSHU</td>
                            <td>COMP.OPR.</td>
                          </tr>
                          <tr>
                            <td>60</td>
                            <td>MS. POONAM GAUR</td>
                            <td>LAB ASSISTANT</td>
                          </tr>
                          <tr>
                            <td>61</td>
                            <td>MR. SHIV NARAYAN MANDAL</td>
                            <td>LDC</td>
                          </tr>
                          <tr>
                            <td>62</td>
                            <td>MS. ANJALI CHUGH</td>
                            <td>LDC</td>
                          </tr>
                          <tr>
                            <td>63</td>
                            <td>MS. ANITA KUMARI</td>
                            <td>LIB</td>
                          </tr>
                          <tr>
                            <td>64</td>
                            <td>MS. ANTIMA</td>
                            <td>MUSIC TR</td>
                          </tr>
                          <tr>
                            <td>65</td>
                            <td>MS. KUSHA BHASIN</td>
                            <td>RECEPTIONIST</td>
                          </tr>
                          <tr>
                            <td>66</td>
                            <td>MS POOJA SINGLA</td>
                            <td>SPL.EDU.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>


                <div class="row" style="display:none;">
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-4">
                    <div class="fac-border">
                      <div class="fac-pic"><img src="images/faculty/2.jpg"></div>
                      <div class="pic-title">
                        <h3>MS. SEEMA CHAWLA</h3>
                        <p>PGT</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($page == "curriculum") { ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div id="accordion" class="rs-accordion-style1">
                      <div class="card border-0">
                        <div class="card-header" id="headingOne">
                          <h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            Nursery Curriculum: A Magical Journey of Discovery
                          </h3>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                          <div class="card-body bcs-bullets">
                            <p>Our <strong>Nursery Curriculum</strong> is carefully crafted to provide a nurturing and
                              exciting environment where children explore, learn, and grow through creative play, hands-on
                              experiences, and joyful learning. The curriculum focuses on the development of foundational
                              skills, making every moment a learning adventure!</p>
                            <div class="alert alert-bcs" role="alert">
                              Language Exploration: Words, Stories, and Imagination
                            </div>
                            <h4>English & Hindi Foundations</h4>
                            <ul>
                              <li><strong>Rhythms and Rhymes</strong> Explore the joy of language through catchy rhymes
                                and songs that build phonetic awareness.</li>
                              <li><strong>Story Time Adventures</strong> Immerse in picture books, and storytelling, while
                                encouraging children to retell stories in their own words.</li>
                              <li><strong>Alphabet Fun</strong> Introduce letters and sounds through engaging songs,
                                flashcards, and art activities.</li>
                              <li><strong>Hindi Fun</strong> Learn basic Hindi words, rhymes, and mantras through playful
                                songs and hands-on activities.</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Magical Math: Number Fun and Shape Play</div>
                            <h4>Exploring Numbers</h4>
                            <ul>
                              <li><strong>Count & Play</strong> Introduce numbers 1–10 through engaging activities like
                                counting toys, fingers, and everyday objects.</li>
                              <li><strong>Shapes in Our World</strong> Recognize and explore basic shapes (circle, square,
                                triangle) through block play, puzzles, and crafts.</li>
                              <li><strong>Patterns and Sequences</strong> Discover the beauty of patterns using colored
                                blocks, buttons, and other tactile materials.</li>
                              <li><strong>Simple Comparisons</strong> Big vs. small, tall vs. short, heavy vs. light using
                                fun, hands-on activities.</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Living Science: Nature, Growth, and Discovery</div>
                            <h4>Exploring the Outdoors</h4>
                            <ul>
                              <li><strong>Nature Walks</strong> Explore the school’s garden or nearby parks, identifying
                                plants, animals, and insects.</li>
                              <li><strong>Sensory Exploration</strong> Understand the world using the five senses—feeling
                                leaves, smelling flowers, or listening to bird songs.</li>
                              <li><strong>Hands-on Nature Activities</strong> Plant simple seeds, water plants, and watch
                                them grow as part of learning about the environment.</li>
                            </ul>
                            <h4>The Wonders of Our World</h4>
                            <ul>
                              <li><strong>Animal Friends</strong> Learn about common animals through sounds, pictures, and
                                movements.</li>
                              <li><strong>Water Wonders</strong> Learn about the importance of water, and explore simple
                                water experiments (e.g., floating and sinking).</li>
                              <li><strong>Weather Watch</strong> Talk about the different seasons and the weather changes.
                              </li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Physical Development: Play, Move, Grow</div>
                            <h4>Gross Motor Skills</h4>
                            <ul>
                              <li><strong>Active Play</strong> Running, jumping, and dancing to develop coordination and
                                balance.</li>
                              <li><strong>Obstacle Courses</strong> Fun movement-based activities like crawling under
                                tables, jumping over cushions, and balancing on beams.</li>
                              <li><strong>Ball Games</strong> Kicking, catching, and throwing with soft balls to enhance
                                hand-eye coordination.</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Creative Corners: Artistic Journeys</div>
                            <h4>Artistic Expression</h4>
                            <ul>
                              <li><strong>Free Drawing and Painting</strong> Encourage children to express their thoughts
                                and emotions through color, texture, and form.</li>
                              <li><strong>Nature Crafts</strong> Create art with natural elements like leaves, flowers,
                                and twigs to connect with the environment.</li>
                              <li><strong>Sensory Art</strong> Use materials like fabric, sponges, or clay to create
                                textured art experiences.</li>
                            </ul>
                            <h4>Music & Movement</h4>
                            <ul>
                              <li><strong>Sing-Along Sessions</strong> Learn simple songs and nursery rhymes that
                                incorporate actions and motions.</li>
                              <li><strong>Dancing Through Stories</strong> Move to the beat, telling a story through dance
                                and creative movement.</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Digital Play: Early Technology Exploration</div>
                            <h4>Technology Fun</h4>
                            <ul>
                              <li><strong>Interactive Learning</strong> Explore educational apps and games that teach
                                letters, numbers, shapes, and colors.</li>
                              <li><strong>Simple Tools</strong> Introduce basic computer skills like mouse control and
                                touch-screen navigation through fun games and digital art activities.</li>
                              <li><strong>Cyber Safety</strong> Teach basic principles of online safety in a simple and
                                engaging way.</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Festivals & Celebrations: Embracing Culture &
                              Traditions</div>
                            <ul>
                              <li><strong>Cultural Days</strong> Celebrate diverse festivals like Diwali, Christmas, Eid,
                                and others with traditional activities such as dressing up, sharing food, and learning
                                songs.</li>
                              <li><strong>Heritage Exploration</strong> Dress up in traditional costumes, try foods from
                                different cultures, and learn songs or dances from various parts of the world.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card border-0">
                        <div class="card-header" id="headingThree">
                          <h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Curriculum 1-5
                          </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                          data-bs-parent="#accordion">
                          <div class="card-body bcs-bullets">
                            <div class="alert alert-bcs" role="alert">The Future-Ready Learning Experience</div>
                            <p>At our school, we believe that education must spark curiosity, nurture creativity, and
                              build character. Our enriched curriculum blends best global practices with national
                              standards to offer a learning journey that is joyful, meaningful, and transformative.</p>
                            <div class="alert alert-bcs" role="alert">Language-Rich Classrooms (English & Hindi)</div>
                            <h4>Literacy Practices in English & Hindi</h4>
                            <h4>Classes 1–2</h4>
                            <ul>
                              <li>Daily read-aloud and shared reading sessions</li>
                              <li>Use of big books, flashcards, letter tiles</li>
                              <li>Rhymes, alphabet games, and mantra practice in Hindi</li>
                            </ul>
                            <h4>Classes 3–5</h4>
                            <ul>
                              <li><strong>Reading journals, character sketches, and story sequencing</strong></li>
                              <li>Hindi grammar integration (sangya, kriya, samas, etc.)</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Magical Maths: Where Numbers Come Alive</div>
                            <h4>Classes 1–2: Building Blocks of Numbers</h4>
                            <ul>
                              <li>Number recognition and counting up to 100</li>
                              <li>Basic addition and subtraction with visual aids and manipulatives</li>
                              <li>Introduction to shapes, patterns, and measurement (length, weight)</li>
                              <li>Fun math games: number puzzles, hopscotch math, counting songs</li>
                            </ul>
                            <h4>Classes 3–5: Exploring Numbers and Operations</h4>
                            <ul>
                              <li>Advanced addition, subtraction, multiplication, and division</li>
                              <li>Introduction to fractions, decimals, and place value concepts</li>
                              <li>Geometry basics: properties of 2D and 3D shapes</li>
                              <li>Measurement units: length, weight, volume, and time conversions</li>
                              <li>Data handling: reading and creating simple graphs and charts</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Living Science: Exploring Our Environment</div>
                            <h4>Classes 1–2: Discovering the World Around Us</h4>
                            <ul>
                              <li>Identifying common <strong>plants, animals, and insects</strong> in the environment</li>
                              <li>Exploring <strong>five senses</strong> and their role in observing nature</li>
                              <li>Importance of cleanliness, water, and plants for life</li>
                              <li>Activities: nature walks, sapling plantation, sensory games</li>
                            </ul>
                            <h4>Classes 3–5: Deepening Environmental Awareness</h4>
                            <ul>
                              <li>Structure and functions of plants and animals</li>
                              <li>Human body basics and health habits</li>
                              <li>Natural resources and their conservation</li>
                              <li>Activities: simple experiments (germination, water filtration), field trips, model
                                making</li>
                            </ul>
                            <p><strong>**Social Studies Adventure: Understanding Our World and How We Live</strong></p>
                            <p>🧭 Maps and Directions</p>
                            <p>👫 Being a Good Citizen</p>
                            <p>🎯 Fun Activities</p>
                            <p>🌍 Culture Day: Dress, food, or song from your heritage</p>
                            <div class="alert alert-bcs" role="alert">Life Skills for a Better World</div>
                            <h4>Classes 1–5: Strengthening Social & Emotional Skills</h4>
                            <ul>
                              <li>Setting personal goals and making responsible choices</li>
                              <li>Teamwork and leadership through group activities</li>
                              <li>Encourage responsible citizenship and respect for diversity</li>
                              <li>Instill values aligned with the United Nations Sustainable Development Goals (SDGs)</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Creative Corners: Artistic Expression & Imagination
                            </div>
                            <ul>
                              <li>Imagination in Motion: Exploring Art from Heart to Hand</li>
                              <li>Brush, Draw, Create: The Joy of Artistic Discovery</li>
                              <li>Artful Explorers: Drawing, Designing, and Discovering</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Fit Minds, Strong Bodies: Physical Education</div>
                            <ul>
                              <li>Develop motor skills and body awareness</li>
                              <li>Promote healthy lifestyle habits</li>
                              <li>Encourage regular participation in fitness and outdoor activities</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Digital Explorers: Computer Education</div>
                            <p>Students learn to navigate computers confidently—understanding basic operations,
                              keyboarding, and mouse control.</p>
                            <p>Emphasis is placed on cyber safety, screen etiquette, and the importance of balanced screen
                              time.</p>
                            <p>Early exposure to age-appropriate coding platforms helps students develop problem-solving
                              and computational thinking skills.</p>
                            <p>Learners explore tools for drawing, typing, and simple presentations, encouraging
                              creativity and tech fluency.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card border-0">
                        <div class="card-header mb-0" id="headingFour">
                          <h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            NEP-Based Curriculum: Middle, Secondary & Senior Secondary Levels
                          </h3>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                          <div class="card-body bcs-bullets">
                            <div class="alert alert-bcs" role="alert">Middle School Curriculum (Classes 6-8)</div>
                            <p>The Middle School curriculum is designed to bridge foundational knowledge with abstract
                              thinking. At this stage, students are introduced to complex concepts through interactive
                              methods. The focus is on building a strong base in core subjects while simultaneously
                              nurturing curiosity and creativity. Integration of SDGs encourages awareness of global
                              challenges and responsibility from an early age.</p>
                            <p>Aligned with NEP 2020 and CBSE/NCERT guidelines, the Middle School curriculum at
                              Brilliants’ Convent focuses on experiential learning, interdisciplinary approach, and life
                              skills development.</p>
                            <h4>Core Subjects</h4>
                            <ul>
                              <li>Languages (English, Hindi)</li>
                              <li>Mathematics (Applied and Conceptual)</li>
                              <li>Science (Integrated: Physics, Chemistry, Biology)</li>
                              <li>Social Science (History, Geography, Civics, Economics)</li>
                              <li>Computer Science and Coding (Python, Scratch, AI fundamentals)</li>
                            </ul>
                            <h4>Holistic Development</h4>
                            <ul>
                              <li>Art Education (Visual and Performing Arts)</li>
                              <li>Health and Physical Education (Yoga, Sports)</li>
                              <li>Life Skills (Decision-making, Emotional Intelligence)</li>
                              <li>Vocational Exposure (Crafts, Gardening, Local Skills)</li>
                            </ul>
                            <h4>Innovative Pedagogy</h4>
                            <ul>
                              <li>Experiential learning, Projects, and Peer Work</li>
                              <li>Integration of SDGs and Environmental Awareness</li>
                              <li>Assessment for learning, not just of learning</li>
                            </ul>
                            <div class="alert alert-bcs" role="alert">Secondary School Curriculum (Classes 9-10)</div>
                            <p>Secondary School marks a critical academic phase where students begin to streamline their
                              interests and build towards future specializations. The curriculum promotes independent
                              thinking, civic responsibility, and practical knowledge application. With increased academic
                              rigor, students are also introduced to a variety of career-related skills through optional
                              vocational and IT subjects.</p>
                            <p>The Secondary curriculum empowers students with analytical skills, vocational awareness,
                              and academic rigor while staying rooted in the NEP’s vision of flexibility and depth.</p>
                            <h4>Academic Structure</h4>
                            <ul>
                              <li><strong>Languages</strong> English (Core), Hindi</li>
                              <li><strong>Mathematics</strong> (Standard & Basic options in Class 10)</li>
                              <li><strong>Science</strong> (Physics, Chemistry, Biology)</li>
                              <li><strong>Social Science</strong> (History, Civics, Geography, Economics)</li>
                              <li><strong>Information Technology & Artificial Intelligence</strong> (optional)</li>
                            </ul>
                            <h4>Skill Development</h4>
                            <ul>
                              <li>Work Education and Skill Modules</li>
                              <li>Art Integration and Theatre-in-Education</li>
                              <li>Coding, Financial Literacy, Entrepreneurship basics</li>
                            </ul>
                            <h4>Assessment</h4>
                            <ul>
                              <li>Project-based internal assessments</li>
                              <li>Competency-based questions</li>
                              <li>Year-end board exams (Class 10)</li>
                            </ul>

                            <div class="alert alert-bcs" role="alert">Senior Secondary Curriculum (Classes 11-12)</div>
                            <p>Senior Secondary education at Brilliants’ Convent is guided by NEP’s vision of
                              multidisciplinarity and career readiness. Students have the flexibility to choose subject
                              combinations beyond the traditional stream boundaries, aligning education with passion and
                              future goals. Emphasis is placed on research, inquiry-based learning, and real-world
                              application to prepare students for university, professional paths, or entrepreneurship.</p>
                            <p>Brilliants’ Convent follows a stream-based yet flexible approach that supports NEP 2020’s
                              interdisciplinary vision and readiness for higher education or professional fields.</p>
                            <h4>Streams Offered</h4>
                            <ul>
                              <li><strong>Science</strong> Physics, Chemistry, Biology/Math, Computer Science/IP</li>
                              <li><strong>Commerce</strong> Business Studies, Accountancy, Economics, Math/IP</li>
                              <li><strong>Humanities</strong> History, Political Science, Geography, Sociology,
                                Psychology, etc.</li>
                            </ul>
                            <h4>Common Subjects</h4>
                            <ul>
                              <li>English Core (mandatory)</li>
                              <li>Physical Education, Entrepreneurship, Applied Maths, Fine Arts (optional)</li>
                            </ul>
                            <h4>Skill-Based Learning</h4>
                            <ul>
                              <li>Research Projects, Internships, Fieldwork</li>
                              <li>Artificial Intelligence, Financial Literacy, Legal Literacy</li>
                              <li>Career counseling and personality development</li>
                            </ul>
                            <h4>Assessment</h4>
                            <ul>
                              <li>Term-wise internal assessments and CBSE board exams</li>
                              <li>Integration of case-based and analytical questions</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            <?php } ?>

            <?php if ($page == "handbook") { ?>
              <div class="card-body">
                <div class="d-grid gap-2 ">
                  <a class="btn text-start btn-outline-secondary" href="handbook/BAL-VATIKA -1.pdf" target="blank">Bal Vatika - 1 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/PRE-PRIMARY.pdf" target="blank">Pre-Primary Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/Class-1-hand-book.pdf" target="blank">Class 1 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/Class-2-hand-book.pdf" target="blank">Class 2 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/Class-3-hand-book.pdf" target="blank">Class 3 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/Class-4-hand-book.pdf" target="blank">Class 4 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/Class-5-hand-book.pdf" target="blank">Class 5 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-6-final-handbook-26-27.pdf" target="blank">Class 6 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-7-final-handbook-26-27.pdf" target="blank">Class 7 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-8-final-handbook-26-27.pdf" target="blank">Class 8 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-9-final-handbook-26-27.pdf" target="blank">Class 9 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-10-final-handbook-26-27.pdf" target="blank">Class 10 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-11-final-handbook-26-27.pdf" target="blank">Class 11 Handbook</a>
                  <a class="btn text-start btn-outline-secondary" href="handbook/class-12-final-handbook-26-27.pdf" target="blank">Class 12 Handbook</a>
                </div>
                
              </div>
            <?php } ?>

            <?php if ($page == "workshops-Webinar") { ?>
              <div class="card-body">
                <ol>
                  <li>An online session was conducted with around 156 participants. The resource person highlighted the
                    importance of classroom management and explained its meaning as the actions taken by teachers to
                    create an environment that supports and facilitates both academic learning and the social-emotional
                    development of students.</li>
                  <li>An online session was conducted with around 160 participants. The resource person shared practical
                    insights on controlling anger and discussed common situations where people may lose their temper with
                    family members, relatives, children, friends, or students. Several effective strategies and solutions
                    for managing anger were also shared during the session.</li>
                  <li>An online session was conducted with around 150 participants. The resource person emphasized the
                    importance of being calm, optimistic, affirmative, and a good listener as a teacher. She explained how
                    to nurture a healthy teacher–student relationship and illustrated with examples how teachers can
                    respond effectively to various student behaviors in the classroom.</li>
                  <li>An online session was conducted with around 140 participants. The resource person discussed current
                    teaching practices adopted during the lockdown period and appreciated the efforts of schools and
                    teachers. She also guided participants on preparing online tests and introduced the Eclipse app, which
                    can be used to create crosswords for students.</li>
                  <li>This was a highly interactive session attended by 150 participants. The workshop emphasized how
                    teachers can integrate life skills into their teaching and instill these values in students. The
                    resource person highlighted that before planning lessons, teachers should inform students about the
                    associated life skills and their relevance in real life.</li>
                  <li>An comprehensive presentation was conducted on how schools can establish a self-assessment and
                    internal audit process to periodically evaluate compliance with standards. The resource person
                    explained key steps, such as: introducing appropriate methodologies for assessing performance,
                    documenting the processes, and training personnel to effectively carry out self-assessments.</li>
                  <li>Attended by 70–80 participants, the session was energetic and engaging, focusing on teacher
                    processes and teacher–student relationships. The workshop included self-reflection activities such as
                    guided visualization, where teachers imagined classroom situations and later discussed their
                    realizations through interactive activities.</li>
                  <li>A one-day capacity-building workshop was conducted on the theme of Inclusive Education. The session
                    focused on behavioral changes, strategic approaches, and methods to bring out the varied potential of
                    diverse learners.</li>
                  <li><strong>Resource Persons:</strong><br>
                    <ul>
                      <li>Ms. Pallavi Dhody Dwivedi</li>
                      <li>Ms. Gayatri Mehta</li>
                      <li>Ms. Lenny Dutton</li>
                      <li>Mr. Chaitanya Kolluri</li>
                      <li>Mr. Praveen Raju</li>
                      <li>Ms. Shobha Mishra Ghosh</li>
                      <li>Ms. Jyoti V. Kumar</li>
                    </ul>
                    <p class="card-text text-justify">This four-day webinar series was conducted separately for primary
                      and secondary levels. It was structured into four key segments:</p>
                    <ul>
                      <li><strong>Planning</strong> – Creating lesson plans for remote learning</li>
                      <li><strong>Delivering</strong> – Managing student engagement online</li>
                      <li><strong>Assessing</strong> – Designing online assessments</li>
                      <li><strong>Practicing Professionalism</strong> - Building parental involvement</li>
                    </ul>
                  </li>
                  <li>The workshop focused on adolescent development, with special emphasis on adolescent social networks
                    and communication. The resource person explained the difference between gender and sex, discussed
                    elements of a child-friendly school, and highlighted important aspects of adolescent growth in the
                    Indian context.</li>
                  <li>This session aimed at creating awareness about gender sensitivity. The resource person explained
                    that sex is biological, while gender is a socially constructed role and behavior. Key concepts such as
                    gender blindness, gender awareness, gender sensitivity, and gender empowerment were explained.
                    Practical approaches for teaching students without gender-based differentiation were also discussed.
                  </li>
                  <li>Organized by the Action Committee, this online webinar discussed challenges faced during the
                    lockdown period. Key issues included teacher salaries and increments, student fee structures, fee
                    hikes, and the handling of non-essential staff salaries during school closures.</li>
                  <li><strong>This session discussed recent updates in the Accountancy syllabus, including:</strong><br>
                    <ul>
                      <li>Changes in question paper pattern</li>
                      <li>Revision in proposed dividend</li>
                      <li>Updates in source-based questions (pending CBSE sample paper)</li>
                      <li>Revised chapter-wise marking scheme for Class XI</li>
                      <li>Interim dividend discussion</li>
                    </ul>
                  </li>
                  <li><strong>Attended by 70–80 participants, the workshop was divided into four key agendas:</strong><br>
                    <ul>
                      <li>Introduction to Design Thinking</li>
                      <li>Process of Design Thinking</li>
                      <li>Application of Design Thinking</li>
                      <li>Design Thinking tools and routines</li>
                      <li>The session helped participants clearly understand the stages of design thinking and its
                        practical use.</li>
                    </ul>
                  </li>
                  <li>Attended by around 150 participants, this session covered essential student life skills, including
                    effective communication, social etiquette, positive attitude, goal setting, and time management.
                    Interactive activities and real-life examples were used to help teachers understand the importance of
                    these skills.</li>
                  <li>This online session focused on the concept of Design Thinking as a tool for creativity, innovation,
                    and problem-solving. The resource person emphasized how the approach can be applied across various
                    fields of life.</li>
                  <li><strong>Attended by 70–80 participants, the workshop was divided into three segments:</strong><br>
                    <ul>
                      <li><strong>Segment A:</strong> Emotional Intelligence and Strategies for Self-Regulation</li>
                      <li><strong>Segment B:</strong> Integration of Happiness in the Classroom</li>
                      <li><strong>Segment C:</strong> Focusing on Feelings in the Classroom, Not Just Content</li>
                    </ul>
                  </li>
                  <li><strong>The session highlighted interpersonal relationship management between teachers and students.
                      Key factors influencing these relationships were:</strong><br>
                    <ul>
                      <li>Exhibiting appropriate levels of dominance</li>
                      <li>Exhibiting appropriate levels of cooperation</li>
                      <li>Being aware of students’ needs</li>
                    </ul>
                  </li>
                  <li>Attended by 70–80 participants, this session emphasized the importance of classroom management as a
                    means of creating an environment that supports both academic learning and social-emotional
                    development.</li>
                  <li>This session focused on empowering teachers to act as career counselors, equipping them with the
                    skills to guide students in making informed career choices.</li>
                  <li><strong>This session revisited interpersonal relationship management in classrooms. The resource
                      person reiterated three key factors:</strong><br>
                    <ul>
                      <li>Maintaining appropriate dominance</li>
                      <li>Demonstrating cooperation</li>
                      <li>Addressing high-priority needs of students</li>
                    </ul>
                  </li>
                  <li><strong>Resource Persons:</strong><br>
                    <ul>
                      <li>Ms. Pallavi Dhody Dwivedi</li>
                      <li>Ms. Barbara Bilgre</li>
                      <li>Ms. Payel Duttagupta</li>
                      <li>Dr. Archana Misra</li>
                    </ul>
                    <p class="card-text text-justify">Attended by 50–60 participants, this session discussed strategies
                      for making online classes more interactive. Key points included overcoming barriers to engagement,
                      sharing clear schedules and expectations, ensuring student visibility by sharing their work, and
                      creating opportunities for interaction.</p>
                  </li>
                  <li>The webinar focused on how school education shapes students into better individuals at both personal
                    and social levels. Different types of value education were discussed, along with their alignment to
                    Sustainable Development Goals (SDGs).</li>
                  <li>This session emphasized the changes that occur during adolescence and the roles of parents and
                    teachers in supporting children through puberty. Focus was given to hygiene, nutrition, and emotional
                    well-being.</li>
                  <li>The workshop discussed the evolving role of school libraries in modern education. It emphasized
                    their mission of supporting students as lifelong learners and promoting a love for books and
                    knowledge.</li>
                  <li>This 90-minute training workshop covered Bloom’s Taxonomy and effective questioning strategies in
                    assessments. The resource person explained the three learning domains—Cognitive, Affective, and
                    Psychomotor—and their applications in teaching.</li>
                </ol>
              </div>
            <?php } ?>

            <?php if ($page == "examination-schedule") { ?>
              <div class="card-body">
                <!-- <div class="d-grid gap-2">
                  <a class="btn btn-outline-secondary" href="pdf/939-8-11.pdf" target="blank">DATE SHEET OF FINAL TERM
                    EXAMINATION 2022-23</a>
                </div> -->
                <div class="d-grid gap-2">
                  <a class="btn btn-outline-secondary" href="#" target="blank">coming soon</a>
                </div>
              </div>
            <?php } ?>

            <?php if ($page == "holidays-homework") { ?>
              <div class="card-body">
                <div class="d-grid gap-2">
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-BAL-VATIKA-1.pdf" target="blank">Bal Vatika-1 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-PRE-PRIMARY.pdf" target="blank">Pre-Primary </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-I.pdf" target="blank">Class 1 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-II.pdf" target="blank">Class 2 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/Class-III.pdf" target="blank">Class 3 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/Class-IV.pdf" target="blank">Class 4 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/Class-V.pdf" target="blank">Class 5 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-VI.pdf" target="blank">Class 6 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-VII.pdf" target="blank">Class 7 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-VIII.pdf" target="blank">Class 8 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-IX.pdf" target="blank">Class 9 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-X.pdf" target="blank">Class 10 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-XI.pdf" target="blank">Class 11 </a>
                  <a class="btn btn-outline-secondary" href="holidays-homework/CLASS-XII.pdf" target="blank">Class 12 </a>
                </div>
              </div>
            <?php } ?>

            <?php if ($page == "result") { ?>
              <div class="card-body">
                <div class="d-grid gap-2 col-7 mx-auto">
                  <a class="btn btn-danger btn-lg" href="results.php?page=10">Class 10 Result</a>
                  <a class="btn btn-danger btn-lg" href="results.php?page=12">Class 12 Result</a>
                </div>
              </div>
            <?php } ?>

            <?php if ($page == "bcs-juniors") { ?>
              <div class="card-body">
                <h4>BCS Juniors</h4>
                <p class="card-text text-justify">At BCS Juniors, our little ones are nurtured with tender care and
                  affection. For them, the school becomes a dream home filled with laughter, excitement, adventure,
                  exploration, and celebration. Our primary focus is to satisfy every child’s inquisitive mind while
                  nurturing a clear and thorough understanding of concepts.
                  <br><br>
                  Brilliants’ Convent, with its fully air-conditioned classrooms, provides a well-structured and
                  thoughtfully designed environment. The strategically planned curriculum ensures that children learn and
                  grow joyfully and naturally. We emphasize hands-on learning experiences while integrating the latest
                  technological tools to promote holistic development—social, emotional, cognitive, and physical. Our
                  smart classes, equipped with advanced projectors and audio-visual systems, make learning truly
                  interactive and engaging.
                  <br><br>
                  At Brilliants, we celebrate national and regional festivals, special days, and various occasions
                  throughout the academic year to help children appreciate and embrace diverse values, beliefs, and
                  cultures.
                </p>

                <h5>Main Attractions of the Session</h5>
                <ul class="common__list">
                  <li> Friday Activity Days</li>
                  <li> Monthly Concepts (Colour-Based)</li>
                  <li> Presentations by Teachers & Students</li>
                  <li> Group Projects under Teacher Supervision</li>
                  <li> Monthly Inter-Class Competitions</li>
                  <li> Monthly Birthday Celebrations</li>
                  <li> Monthly Excursions (e.g., McDonald’s visit, Adventure Island)</li>
                  <li> Nature Walks & Educational Trips</li>
                  <li> Non-Fire Cooking Activities</li>
                  <li> Stage Exposure Opportunities</li>
                  <li> Basic Computer Literacy</li>
                  <li> Celebration of Events (Carnivals, Exhibitions, etc.)</li>
                  <li> Current Affairs Discussions</li>
                  <li> Sports Activities & Inter-Class Matches (Cricket, Races, etc.)</li>
                  <li> Puzzles & Carrom Board</li>
                  <li> Swings & Cycling</li>
                  <li> Taekwondo Classes</li>
                  <li> Dance & Music Classes</li>
                  <li> English Communication Skills</li>
                  <li> Art & Craft Activities</li>
                </ul>

                <h5>Special Features</h5>
                <ul class="common__list">
                  <li> Grand Festival Celebrations </li>
                  <li> Teej Mela </li>
                  <li> Rakhi </li>
                  <li> Baisakhi </li>
                  <li> Independence Day </li>
                  <li> Christmas Carnival </li>
                  <li> Theme Parties (Welcome Party, Monthly Birthday Parties, etc.) </li>
                </ul>

              </div>
            <?php } ?>

            <?php if ($page == "slc") { ?>
              <div class="card-body">
                <div class="d-grid gap-2">
                  <a class="btn btn-outline-secondary" href="pdf/sample-TC.pdf" target="blank">SCHOOL LEAVING
                    CERTIFICATE</a>
                  <!-- <a class="btn btn-outline-secondary" href="pdf/567.pdf" target="blank">School Leaving Certificate 2019-20</a> -->
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