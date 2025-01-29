<?php include 'includes/Header.php';?>

    <main class="main-content contactus-content">
      <section class="contact-us-banner home-banner">
        <div class="container">
          <div class="contact-us-wrapper d-flex justify-content-between">
            <div class="contact-us-banner-content">
              <h2 class="contact-us-title pe-4 fw-bold">Let's get to work</h2>
            </div>

            <!-- contact-us-banner-content -->
            <div class="contact-form">
              <form
                method="POST"
                action="https://api.web3forms.com/submit"
                name="signForm"
                class="form-main d-flex flex-column"
                data-message-success="Please Wait"
                data-message-invalid-email="Sorry, that email address looks invalid."
                data-message-required-field-missing="Please fill in the required fields."
                data-message-error="Oops. An error occurred."
              > 
                <input
                  type="hidden"
                  name="apikey"
                  value="b420d4a5-0f94-4817-a386-fd3b846d3db9"
                  
                />
                <!-- Hidden HoneyPot Field for Spam Protection -->
                <div style="display: none">
                  <input type="text" name="Webian World" value="" />
                </div>
                <div class="fields-wrap">
                  <div class="form-group name">
                    <input
                      class="form-input border-0 fw-semibold"
                      type="text"
                      id="name"
                      name="NAME"
                      required
                      placeholder="Enter your name.."
                    />
                    <label for="name" class="form-label overflow-hidden position-absolute w-100">Your name?</label>
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group email">
                    <input
                      class="form-input border-0 fw-semibold"
                      type="email"
                      id="inputEmail"
                      name="EMAIL"
                      required
                       placeholder="Enter email address..."
                    />
                    <label for="inputEmail" class="form-label overflow-hidden position-absolute w-100 font-weight-500"
                      >Email address?</label
                    >
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group phone-num">
                    <input
                      class="form-input border-0 fw-semibold phone-num"
                      type="number"
                      id="phonenumber"
                      name="NUMBER"
                      required
                       placeholder="Enter mobile no."
                    />
                    <label for="phonenumber" class="form-label overflow-hidden position-absolute w-100"
                      >Phone number?</label
                    >
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group text">
                    <input class="form-input border-0 fw-semibold" id="text" name="HELP"   placeholder="text here..."/>
                    <label for="text" class="form-label overflow-hidden position-absolute w-100"
                      >Tell us about your requirements</label
                    >
                  </div>

                  <button type="submit" class="submit btn btn-primary py-lg-2 px-lg-5 py-2 px-5 fs-5">
                    Submit
                  </button>
                  <noscript
                    >Please enable JavaScript for this form to work.</noscript
                  >
                </div>
              </form>
            </div>

            <!-- contact-form -->
          </div>
        </div>
      </section>
      <!-- contact-details-section -->
      <section class="contact-details">
        <div class="container">
          <div class="location-details d-flex justify-content-between">
            <h1 class="contact-details-title">Our offices</h1>
            <div class="office-locations">
              <div class="office-desc-wrapper d-flex flex-wrap">
                <div class="office-desc">
                  <div class="para-head">Noida</div>
                  <div class="office-loc-details">D-174</div>
                  <div class="office-loc-details">201301 Sector 73 ,Mahagun Appartment</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
 <?php include 'includes/Footer.php';?>
