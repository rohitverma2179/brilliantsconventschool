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
  $page = $_GET["page"];
  $_REQUEST["meta_title"] = "Admission :: " . $page;

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/admissions.php";

  if ($page == "process") {
    $b_banner = "admission.jpg";
    $b_title = "Process";
    $idad = "1";
  }
  if ($page == "fees") {
    $b_banner = "fees.jpg";
    $b_title = "Fees";
    $idad = "2";
  }

  if ($page == "registration") {
    $b_banner = "enrollment.jpg";
    $b_title = "Registration";
    $idad = "3";
  }

  if ($page == "admission-inquiry") {
    $b_banner = "enrollment.jpg";
    $b_title = "Admission Inquiry";
    $idad = "4";
  }

  if ($page == "qr-code") {
    $b_banner = "enrollment.jpg";
    $b_title = "QR Code";
    $idad = "4";
  }


  ?>
  <title>Admission :: <?php echo $b_title; ?></title>

  <?php include_once("header.php"); ?>

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
        <img src="images/admission/<?php echo $b_banner; ?>">
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
        <div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block">
          <ul class="list-group">
            <li class="list-group-item title text-uppercase" aria-current="true">Admission</li>
            <li class="list-group-item list-group-item-action <?php echo $idad == '4' ? 'active' : '' ?>"><a href="admission.php?page=admission-inquiry">Admission Inquiry</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idad == '3' ? 'active' : '' ?>"><a href="admission.php?page=registration">Registration</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idad == '1' ? 'active' : '' ?>"><a href="admission.php?page=process">Process</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idad == '2' ? 'active' : '' ?>"><a href="admission.php?page=fees">Fees</a></li>
          </ul>
        </div>
        <div class="col-lg-9 col-md-12 bcs-card">
          <div class="card">
            <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
            <div class="card-body">

              <!-- Start process -->

              <?php if ($page == "process") { ?>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion" id="accordionPro">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            ADMISSION SCHEDULE (SESSION 2026 – 27)
                          </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPro">
                          <div class="accordion-body">
                            <table class="table table-bordered table-striped">
                              <tbody>
                                <tr>
                                  <th>S.NO.</th>
                                  <th>PARTICULARS</th>
                                  <th>TIME SCHEDULE</th>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Commencement of admission process and availability of forms </td>
                                  <td>04-12-2025 (Thursday)</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td><b>Last date for submission of Registration Form in the School</b></td>
                                  <td>27-12-2025 (Saturday)</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>List of registered candidates with secured points (as per point system) on the school website and notice board </td>
                                  <td>16-01-2026 (Friday)</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td><b>The date for displaying the first list of selected children (including waiting list) (along with marks allotted under points system)</b></td>
                                  <td><b>23-01-2026 (Friday)</b></td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Resolution of parents’ queries, if any, (by written/email/verbal interaction) regarding allotment of points to their ward for the first list.</td>
                                  <td>24-01-2026 (Saturday) to 03-02-2026 (Tuesday)</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td><b>The date for displaying the second list of selected children (if any) (including waiting list)(along with marks allotted under points system)</b></td>
                                  <td><b>09-02-2026 (Monday)</b></td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>Resolution of parents’ queries, if any, (by written/email/verbal interaction) regarding allotment of points to their ward.</td>
                                  <td>10-02-2026 (Tuesday) to 16-02-2026 (Monday) </td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>Subsequent list of admission (If any)</td>
                                  <td>05.03.2026(Thursday)</td>
                                </tr>
                                <tr>
                                  <td>9</td>
                                  <td>Closure of the admission process</td>
                                  <td>19-03-2026 (Thursday)</td>
                                </tr>
                              </tbody>
                            </table>

                            <h4 class="text-center">Regarding age limit</h4>
                            <p><b>The following age criteria will be applicable and implemented for the Academic Session 2026-27 onwards:</b></p>
                            <table class="table table-bordered table-striped">
                              <tr>
                                <th>Class</th>
                                <th>Minimum & Maximum age for Admission<br>(As on 31st March 2026 for the academic session 2026-27)</th>
                              </tr>
                              <tr>
                                <th>Nursery (Balvatika I)</th>
                                <td>3+ years upto 4 years</td>
                              </tr>
                              <tr>
                                <th>KG</th>
                                <td>4+ years upto 5 years</td>
                              </tr>
                              <tr>
                                <th>Class I</th>
                                <td>5+ years upto 6 years</td>
                              </tr>
                            </table>

                            <p>Admission to <strong>Nursery (Balvatika I) will be for the child with 3+ years age as on 31st March, 2026.</strong> The child will be promoted to next class <strong>Lower KG (Balvatika 2) in session 2027-28</strong> as per restructured Foundational stage. </p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Criteria Bal Vatika-I Admission 2026-27
                          </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionPro">
                          <div class="accordion-body">
                            <div>
                              <h3 class="text-center">Bal Vatika-I ADMISSION CRITERIA<br>SESSION 2026 – 27 </h3>
                              <table class="table table-bordered table-striped text-center">
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><strong>Category </strong></td>
                                  <td><strong>Pre - School / Bal Vatika-I Seats</strong></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="left">Total No. of Seats </td>
                                  <td align="left">80</td>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td align="left">EWS / Disadvantaged Group including children with special needs</td>
                                  <td align="left">20</td>
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td align="left">General (open seats) </td>
                                  <td align="left">48</td>
                                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td align="left">Management </td>
                                  <td align="left">12</td>
                                </tr>
                              </table>
                              <h3 class="text-center">ADMISSION CRITERIA <br> ACADEMIC SESSION 2026-27</h3>
                              <p style="text-align:center">Age : 3+ as on 31st March, 2026 (Bal Vatika I)<br>Upper age: Less than 4 years as on 31st March 2026 (Bal Vatika I)</p>
                              <h4 class="text-center">The Admission to open seats shall be made on the basis of fixed parameters and points as given below:- </h4>
                              <table class="table table-bordered table-striped">
                                <tr>
                                  <th> S.No </th>
                                  <th><strong>Parameter</strong></th>
                                  <th><strong>School Specific Criteria</strong></th>
                                  <th><strong>Maximum Points</strong></th>
                                </tr>
                                <tr>
                                  <td align="center" valign="top">1</td>
                                  <td rowspan="2"><strong>Neighbourhood</strong><br>(Road distance by Google map)</td>
                                  <td>a. 0 – 8 km 70</td>
                                  <td>70</td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top">&nbsp;</td>
                                  <td>b. 8.1 km onwards 60</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top">2</td>
                                  <td><strong>Sibling</strong></td>
                                  <td>Applicable to siblings of<br>
                                    Brilliants’ Convent West Enclave Pitampura Delhi.<br>(cousins not eligible)</td>
                                  <td>20</td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top">3</td>
                                  <td><strong>Alumni</strong></td>
                                  <td>Any Parent who has passed class XII Examination from BCS, West Enclave Pitampura Delhi.</td>
                                  <td>10</td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>Grand Total</td>
                                  <td>100</td>
                                </tr>
                              </table>

                              <h4 class="text-center">IMPORTANT INFORMATION FOR COMPLETION OF ADMISSION PROCESS FOR SELECTED APPLICANTS UNDER GENERAL CATEGORY</h4>
                              <ul class="common__list">
                                <li> The forms can be filled online &amp; may also be obtained from the school reception at a payment of Rs.25/- as registration charges.</li>
                                <li> Kindly ensure that you collect receipt &amp; acknowledgement for the registration form &amp; fee paid.</li>
                                <li> Registration Forms enclosed with the listed documents to be submitted at the reception
                                  within the stipulated dates.</li>
                                <li> Incomplete registration form will be rejected.</li>
                              </ul>

                              <h4 class="text-center">List of Documents to be enclosed with the Registration Form</h4>

                              <ul class="common__list">

                                <li> Recent coloured passport size photograph of the Child, mother and father duly pasted on the

                                  form in the space provided.</li>

                                <li> Self Attested photocopy of Date of Birth Certificate of the child.</li>

                                <li> Self Attested Residence Proof and photo ID of the Parent (Voter Identity card and Aadhar

                                  Card) of parent and the child also.</li>

                                <li> Self Attested copy of Aadhar Card of the child &amp; his/her Parents.</li>

                                <li> Domicile Certificate of the child or of his/her Parents.</li>

                                <li> Self attested copy of Id-Card or latest Fee Receipt of BCS Sibling</li>

                              </ul>
                              <h4 class="text-center">Instructions for filling up the Registration Form</h4>
                              <ul class="common__list">
                                <li>Parents should read the instruction carefully before filling in the Registration Form to avoid

                                  rejection.</li>

                                <li> In case of Offline Application, the form should be filled by the parent in their own

                                  handwriting using Blue /Black Colour Pen. Fill up the required information in Capital Letters.</li>

                                <li> Parent should fill in each entry of the form and should write NA for those entries which are

                                  not applicable. Kindly do not leave any entry blank.</li>

                                <li> Incomplete forms will not be accepted / entertained. No amendment in the entries in

                                  Registration Form will be acceptable.</li>

                                <li> Please enclose the required Attested / Self Attested documents along with the Registration Form as per mentioned list. Tick enclosed document in the list and fill the number of total

                                  enclosed documents.</li>
                                <li> Parents may attach extra sheet of paper as annexure (if required).</li>

                              </ul>
                              <h4>NOTE:</h4>
                              <ul class="common__list">
                                <li>Filling and submission of the Registration Form does not confirm and guarantee candidate's Admission to the school.</li>
                                <li>Discrepancy in information in Registration Form &amp; Documents provided at the time of Admission will lend to rejection of application for admission.</li>
                                <li>Kindly keep in touch with the school website <a href="https://www.brilliantsconvent.com/"><b>www.brilliantsconvent.com</b></a> regularly for the latest updates.</li>
                              </ul>
                              <h4 class="text-center">Category - EWS / Disadvantaged Group</h4>
                              <ul class="common__list">
                                <li>Kindly visit Directorate of Education <a href="http://www.edudel.nic.in" target="_blank">www.edudel.nic.in</a> for detailed information, instructions and <b>ONLINE Registration</b></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            List of Application Received for Bal Vatika-I (2026-27)
                          </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionPro">
                          <div class="accordion-body text-center">
                            <h4>LIST OF REGISTERED CANDIDATES FOR Bal Vatika-I UNDER GEN CATEGORY<br>
                              SESSION 2026 – 27 </h4>
                            <div class="d-grid gap-2">
                              <a class="btn btn-outline-secondary" href="pdf/LIST-OF-REGISTERED-CANDIDATE-FOR-BAL-VATIKA-1-2026-27.pdf" target="blank">Point Wise List of Registered Candidates For Bal Vatika-1 (2026-27)</a>
                              <!-- <a class="btn btn-outline-secondary" href="javascript:void(0);">Point Wise List of Registered Candidates For Pre-School (2026-27)</a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            First list of selected candidate for Bal Vatika-I in General Category (2026-27)
                          </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionPro">
                          <div class="accordion-body">
                            <div class="d-grid gap-2">
                              <a class="btn btn-outline-secondary" href="pdf/FIRST_LIST_OF_SELECTED_CANDIDATE_OF_BAL_VATIKA-1_2026-27.pdf" target="_blank">First List of Selected Candidates of Bal Vatika-I 2026-27</a>
                              <a class="btn btn-outline-secondary" href="pdf/FIRST_WAITING_LIST_OF_SELECTED_CANDIDAT_ OF_BAL_VATIKA-1_2026-27.pdf" target="_blank">First Waiting List of Selected Candidates of Bal Vatika-I 2026-27</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Second List of selected candidates for Bal Vatika-I in General Category 2026-27
                          </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionPro">
                          <div class="accordion-body">
                            <p class="card-text">COMING SOON ON 02.02.2026 (MONDAY)</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            CRITERIA FOR CLASS PRE-PRIMARY - IX
                          </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionPro">
                          <div class="accordion-body">

                            <h4>IMPORTANT INFORMATION FOR COMPLETION OF ADMISSION PROCESS FOR SELECTED APPLICANTS</h4>

                            <p>Limited seats are available for these classes against vacant seats only.
                              <br>
                              Registration and further proceedings are done as per the vacancy of seats.
                              <br>
                              Important Documents required at the time of admission:-
                            </p>

                            <ul class="common__list">
                              <li>Original Birth Certificate (Class-I)</li>
                              <li>School Leaving Certificate (Class-II to IX)</li>
                              <li>One Passport size Photograph.</li>
                              <li>One Passport size Photograph.</li>
                            </ul>
                            <h4> Eligibility</h4>
                            <p>A child who is 4+ years as on 1st April of a given year is eligible for admission to Class Pre-Primary (as per Old Education Policy Schedule), and similarly for all other classes with a subsequent difference of one year.</p>
                            <h4>Procedure</h4>
                            <p>The child has to undergo an admission test based on the basics of the previous class syllabus of English, Hindi and Maths and also Science for senior classes. A short meeting with both the parents and scrutiny of the documents is also required. The child must secure 70% marks in the admission test to ensure a seat for himself/herself.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            Criteria for Class-XI
                          </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionPro">
                          <div class="accordion-body">
                            <p><strong>Admissions Criteria for Classes XI</strong>
                              <br>
                              <strong>Eligibility and Procedure</strong>
                              <br>
                              Admission to Class-XI can be obtained on the basis of Class-X board results.
                            </p>
                            <h4>Stream offered:-</h4>
                            <p>
                              <strong>
                                Science:
                                <br>
                                Commerce:
                                <br>
                                Humanities:
                                <br>
                                Optional Subjects Combination:- </strong>
                            </p>
                            <div>
                              <table class="table table-bordered table-striped text-center">
                                <tr>
                                  <td align="left" valign="top" class="text-danger">Stream</td>
                                  <td class="text-danger">Science-Medical</td>
                                  <td class="text-danger">Science-Non-Medical</td>
                                  <td class="text-danger">Commerce</td>
                                  <td class="text-danger">Humanities</td>
                                </tr>
                                <tr>
                                  <td rowspan="5" align="left" valign="top" class="text-danger">Main Subjects</td>
                                  <td>English</td>
                                  <td>English</td>
                                  <td>English</td>
                                  <td>English</td>
                                </tr>
                                <tr>
                                  <td>Physics</td>
                                  <td>Physics</td>
                                  <td>Accounts</td>
                                  <td>Hindi</td>
                                </tr>
                                <tr>
                                  <td>Chemistry</td>
                                  <td>Chemistry</td>
                                  <td>B.Studies</td>
                                  <td>Pol.Science</td>
                                </tr>
                                <tr>
                                  <td>Biology</td>
                                  <td>Maths</td>
                                  <td>Eco</td>
                                  <td>Economics</td>
                                </tr>
                                <tr>
                                  <td>Physical Education</td>
                                  <td>Physical Education</td>
                                  <td>Physical Education</td>
                                  <td>Physical Education</td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" class="text-danger">Additional Subject</td>
                                  <td>Maths/I.P</td>
                                  <td>Economics/Biology</td>
                                  <td>Maths/I.P</td>
                                  <td>Maths/I.P</td>
                                </tr>
                              </table>
                            </div>
                            <p class="card-text text-justify">Minimum Percentage Required in X class Board Exam
                              <br>
                              <strong> For Science: 85% above
                                <br>
                                For Commerce: 75% above
                                <br>
                                For Humanities: 65% above
                              </strong>
                            </p>
                            <h4>Important Documents</h4>
                            <ul class="common__list">
                              <li>Pass Certificate and Marksheet from CBSE</li>
                              <li>Character certificate from the school last attended (SLC)</li>
                              <li>One Passport size Photograph.</li>
                            </ul>
                            <h4>Provisional Admission</h4>
                            <p>
                              Mark sheet of Pre-Board/Second Term Examination
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

              <!-- End process -->
              <!-- Start fees -->

              <?php if ($page == "fees") { ?>
                <div class="row">
                  <div class="col-lg-12">
                    <h4>Rules for Payment of Fees</h4>
                    <ol>
                      <li>Fee is payable for 12 months irrespective of the date of submission.</li>
                      <li>Payment should be made between the 1st and 10th of the 1st month of each quarter.</li>
                      <li>Late payment of fee will result in fine. Dishonoured cheque will call for a fine of Rs.100/-in addition to the late fee fine.</li>
                      <li>Students will be allowed to take their examination only after they have cleared their complete dues.</li>
                      <li>Please obtain a receipt for any payment made to the school. </li>
                      <li>Non payment of fee for more than one quarter of the year will lead to strike off the name of the student from the school Roll. Re-admission can be secured only with the approval of the Head of the School. Re-admission fee will be charged.</li>
                    </ol>
                    <h4>Mode of Payment of Fees</h4>
                    <p class="card-text text-justify">
                      Fees may be paid only through cheque or draft. Make your cheque in favour of "BRILLIANTS CONVENT". Please write the name of the student, class & Roll number.
                    </p>
                    <p class="card-text text-start"><a class="btn btn-outline-success" href="pdf/SLFRC-Approved-Fee-2026-2027-2028.pdf" target="blank">Fee Structure</a></p>
                  </div>
                </div>
              <?php } ?>

              <!-- End fees -->
              <!-- Start Registration -->

              <?php if ($page == "registration") { ?>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="d-grid gap-2">
                      <!-- <a class="btn btn-outline-secondary" href="https://ezyschooling.com/school/brilliants-convent-school-pitampura-north-west-delhi?id=6402af02-c611-4f4a-bf8d-fbb83445f9f2" target="blank">Apply Online</a> -->
                      <a class="btn btn-outline-secondary" href="https://console.helloparent.in/student_lifecycle/registration/add" target="blank">Apply Online</a>
                      <a class="btn btn-outline-secondary" href="pdf/Registration-Form-2026-27.pdf" target="blank">Apply Offline (Download Form)</a>
                      <!-- <a class="btn btn-outline-secondary" href="https://ezyschooling.com/school/brilliants-convent-school-pitampura-north-west-delhi?id=25f2ed98-d4a6-4863-95e8-b2eb55842121&visit_type=true" target="blank">Online Registration</a> -->
                      <a class="btn btn-outline-secondary" href="https://ezyschooling.com/school/brilliants-convent-school-pitampura-north-west-delhi?id=25f2ed98-d4a6-4863-95e8-b2eb55842121&visit_type=true" target="blank">Apply Through Ezyschooling Portal </a>
                    </div>
                  </div>
                </div>

              <?php } ?>


              <?php if ($page == "admission-inquiry") { ?>

                <div class="row text-center">
                  <div class="col-lg-12">
                    <div class="mb-4">
                      <div class="d-inline-block p-2 bg-white" style="border: 2px solid #225975; border-radius: 4px;">
                        <img src="images/admission/qrcode.jpeg" alt="QR Code" class="img-fluid" style="max-width: 450px; height: auto;">
                      </div>
                      <p class="mt-2 fw-bold" style="font-size: 1.15rem; color: #333;">Scan for Inquiry</p>
                    </div>
                    <div class="d-grid gap-2 col-md-8 mx-auto">
                      <a class="btn btn-outline-secondary" href="https://inquiry.helloparent.in/school/addLead/62137a89b4188b0eec812e5f/" target="_blank">Fill Inquiry Form Online</a>
                    </div>
                  </div>
                </div>

              <?php } ?>


              <?php if ($page == "qr-code") { ?>

                <div class="row text-center">
                  <div class="col-lg-12">
                    <div class="mb-4">
                      <div class="d-inline-block p-2 bg-white" style="border: 2px solid #205375; border-radius: 4px;">
                        <img src="images/admission/qrcode.jpeg" alt="QR Code" class="img-fluid" style="max-width: 450px; height: auto;">
                      </div>
                      <p class="mt-2 fw-bold" style="font-size: 1.15rem; color: #333;">Scan for Inquiry</p>
                    </div>
                  </div>
                </div>

              <?php } ?>

              <!-- End Registration -->

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- About Us End -->

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>