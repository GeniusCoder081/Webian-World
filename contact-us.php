<?php include 'includes/header.php';?>

    <main class="main-content contactus-content">
      <section class="contact-us-banner home-banner">
        <div class="container">
          <div class="contact-us-wrapper d-flex justify-content-between">
            <div class="contact-us-banner-content">
              <h2 class="contact-us-title">Let's get to work</h2>
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
                  value="26b5796d-9649-4171-9997-d2eb69f6eaeb"
                />
                <!-- Hidden HoneyPot Field for Spam Protection -->
                <div style="display: none">
                  <input type="text" name="Genius_Londa" value="" />
                </div>
                <div class="fields-wrap">
                  <div class="form-group name">
                    <input
                      class="form-input"
                      type="text"
                      id="name"
                      name="NAME"
                      required
                      placeholder="Enter your name.."
                    />
                    <label for="name" class="form-label">Your name?</label>
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group email">
                    <input
                      class="form-input"
                      type="email"
                      id="inputEmail"
                      name="EMAIL"
                      required
                       placeholder="Enter email address..."
                    />
                    <label for="inputEmail" class="form-label font-weight-500"
                      >Email address?</label
                    >
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group phone-num">
                    <input
                      class="form-input phone-num"
                      type="number"
                      id="phonenumber"
                      name="NUMBER"
                      required
                       placeholder="Enter mobile no."
                    />
                    <label for="phonenumber" class="form-label"
                      >Phone number?</label
                    >
                    <div class="error-txt">*required</div>
                  </div>

                  <div class="form-group text">
                    <input class="form-input" id="text" name="HELP"   placeholder="text here..."/>
                    <label for="text" class="form-label"
                      >Tell us about your requirements</label
                    >
                  </div>

                  <button type="submit" class="submit btn btn-primary">
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
                  <p class="para-head">United States</p>
                  <p class="office-loc-details">#1041</p>
                  <p class="office-loc-details">20289 Stevens Creek Blvd</p>
                  <p class="office-loc-details">Cupertino, CA 95014</p>
                </div>
                <div class="office-desc">
                  <p class="para-head">Calicut</p>
                  <p class="office-loc-details">Sahya building</p>
                  <p class="office-loc-details">Govt. Cyberpark</p>
                  <p class="office-loc-details">Calicut - 673014</p>
                  <a href="tel:+91 6235611222" class="office-loc-details"
                    >+91 623 561 1222</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
 <?php include 'includes/footer.php';?>
