<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <title>Acclaims and Accolades</title>
  <meta name="description" content="">
  <!-- responsive tag -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .achievement h4 {
      margin: 21px 0 !important;
    }

    .space {
      margin-bottom: 15px;
      display: flex;
    }
  </style>
  <?php
  $_REQUEST["meta_title"] = "Acclaims and Accolades";

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/acclaim_accolades.php";

  include_once("header.php"); ?>
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
        <img src="images/achievement.jpg">
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Acclaims and Accolades</h1>
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
        <div class="col-lg-12 bcs-card">
          <div class="card">
            <h5 class="card-header">Acclaims and Accolades</h5>
            <div class="card-body">
              <div class="row acclaim_accolades">

                <?php
                for ($i = 100; $i > 0; $i--) {
                  if (file_exists('images/acclaim_accolades/' . $i . '.jpg')) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <figure class="figure">
                        <a href="javascript:void(0)" data-img-view="<?php echo $i ?>.jpg" data-bs-whatever="Acclaim and Accolades" data-bs-toggle="modal" data-bs-target="#techModal">
                          <img src="images/acclaim_accolades/<?php echo $i ?>.jpg" alt="thumb" class="figure-img img-fluid rounded">
                        </a>
                      </figure><!--thumb-->
                    </div><!--colms-4-->
                  <?php }
                  if (file_exists('images/acclaim_accolades/1-' . $i . '.png')) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <figure class="figure">
                        <a href="javascript:void(0)" data-img-view="1-<?php echo $i; ?>.png" data-bs-whatever="Acclaim and Accolades" data-bs-toggle="modal" data-bs-target="#techModal">
                          <img src="images/acclaim_accolades/1-<?php echo $i; ?>.png" alt="thumb" class="figure-img img-fluid rounded">
                        </a>
                      </figure><!--thumb-->
                    </div><!--colms-4-->
                <?php }
                } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Us End -->
  <!-- popup form -->
  <div class="modal fade" id="techModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="techModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-bold" id="techModalLabel">Know More</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div>
  <!-- End Popup Form .src -->
  <script type="text/javascript">
    const techModal = document.getElementById('techModal');
    if (techModal) {
      techModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const recipient = button.getAttribute('data-bs-whatever');
        const viewimg = button.getAttribute('data-img-view');
        const modalTitle = techModal.querySelector('.modal-title');
        const modalBody = techModal.querySelector('.modal-body');
        modalTitle.textContent = `${recipient}`;
        // Get file extension (case-insensitive)
        const extension = viewimg.split('.').pop().toLowerCase();
        // Set file path
        const filePath = "images/acclaim_accolades/" + viewimg;
        // Clear existing content
        modalBody.innerHTML = '';
        if (extension === 'pdf') {
          modalBody.innerHTML = `<object data="${filePath}" type="application/pdf" width="100%" height="700px">
          <p>PDF cannot be displayed. <a href="${filePath}" target="_blank">Download PDF</a></p>
        </object>`;
        } else {
          modalBody.innerHTML = `<img class="img-fluid" src="${filePath}" alt="${recipient}">`;
        }
      });
    }
  </script>

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>