@extends("layouts.spacedcustomlayout")

@section("body")

            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
              <div class="container">
                  <div class="section-header text-left">
                      <p>CONTACT US</p>
                      <h2>SEND US A MESSAGE</h2>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="contact-info">
                              <div class="contact-item">
                                  <i class="flaticon-address"></i>
                                  <div class="contact-text">
                                      <h2>Location</h2>
                                      <p>{{$company_features? $company_features->companylocation :"No company address set"}}</p>
                                  </div>
                              </div>
                              <div class="contact-item">
                                  <i class="flaticon-call"></i>
                                  <div class="contact-text">
                                      <h2>Phone</h2>
                                      <p>{{$company_features? $company_features->companyphone :"No company phone set"}}</p>
                                  </div>
                              </div>
                              <div class="contact-item">
                                  <i class="flaticon-send-mail"></i>
                                  <div class="contact-text">
                                      <h2>Email</h2>
                                      <p>{{($company_features)? $company_features->companyemail :"No company email set"}}</p> 
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="contact-form">
                              <div id="success"></div>
                              <form  method="post" name="sentMessage" id="contactForm" novalidate="novalidate">

                                                  

                                  <div class="control-group">
                                      <input type="text" class="form-control" name="f1" placeholder="Enter Fullname" required data-validation-required-message="Please enter your name" />
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="control-group">
                                      <input type="email" class="form-control" name="f2" placeholder="Enter Mail" required data-validation-required-message="Please enter your email" />
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="control-group">
                                      <input type="text" class="form-control" name="f3" placeholder="Enter Subject" required data-validation-required-message="Please enter a subject" />
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="control-group">
                                      <textarea class="form-control" name="f4" placeholder="Message" required data-validation-required-message="Please enter your message"></textarea>
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div>
                                      <button name="send_mail" class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Contact End --> 


@endsection()


