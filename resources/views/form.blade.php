@extends('layout.master')
@section('page-title')
    Form
@endsection
@section('main-content') 
  <!-- AI FORM START -->
  <div class="form__main__section">
    <div class="ai__form">
            <form id="msform">
              <fieldset class="saad">
                <div class="form-card">
                  <div class="form__title">
                    <h2>Let us know <span> About Your self </span></h2>
                  </div>
                  <div class="row">
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="individual">
                        <div class="item__image">
                          <img src="/assets/frontend/img/individual.png">
                        </div>
                        <div class="description">
                          <h6>Individual</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="individual" id="inputindividual" value="0">
                        <span>Press</span><span class="describe_border" id="form-a">A</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="freelancer">
                        <div class="item__image">
                          <img src="/assets/frontend/img/freelancer.png">
                        </div>
                        <div class="description">
                          <h6>Freelancer</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="freelancer" id="inputfreelancer" value="0">
                        <span>Press</span><span class="describe_border" id="form-b">B</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="employee">
                        <div class="item__image">
                          <img src="/assets/frontend/img/owner.png">
                        </div>
                        <div class="description">
                          <h6>Employee/Owner</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="employee" id="inputemployee" value="0">
                        <span>Press</span><span class="describe_border" id="form-c">C</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <input type="hidden" name="belong_to_agency" id="agency_popup">
                      <div id="display_popup">
                        <div class="form__product" id="agency">
                          <div class="item__image">
                            <img src="/assets/frontend/img/agency.png">
                          </div>
                          <div class="description">
                            <h6>Belong to agency</h6>
                            <span class="description__agency"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="agency" id="inputagency" value="0">
                        <span>Press</span><span class="describe_border" id="form-d">D</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="government">
                        <div class="item__image">
                          <img src="/assets/frontend/img/government.png">
                        </div>
                        <div class="description">
                          <h6>Government</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="government" id="inputgovernment" value="0">
                        <span>Press</span><span class="describe_border" id="form-e">E</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="partner">
                        <div class="item__image">
                          <img src="/assets/frontend/img/partner.png">
                        </div>
                        <div class="description">
                          <h6>Potential Partner</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="partner" id="inputpartner" value="0">
                        <span>Press</span><span class="describe_border" id="form-f">F</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="marketing">
                        <div class="item__image">
                          <img src="/assets/frontend/img/marketing.png">
                        </div>
                        <div class="description">
                          <h6>Marketing consultant</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="marketing" id="inputmarketing" value="0">
                        <span>Press</span><span class="describe_border" id="form-g">G</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container" id="popup_box">
                  <input type="button" id="cancel_button" value="X">
                  <div class="row popup__btn">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="popbtn1">
                        <input type="button" class="btn btn-light" onclick="myclass(this.value)" value="Employee">
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="popbtn2">
                        <input type="button" class="btn btn-light" onclick="myclass(this.value)" value="Owner">
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="steps">Steps: 1 / 5</h2>
                <input type="button" name="previous" class="previous saim action-button-previous back__btn" value="Previous" disabled="disabled" />
                <input type="button" name="next" class="next saim action-button next__btn" value="Next">
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="form__title">
                    <h2>Let us know <span> what we can do for you </span></h2>
                  </div>
                  <div class="row">
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="design">
                        <div class="item__image">
                          <img src="/assets/frontend/img/design.png">
                        </div>
                        <div class="description">
                          <h6>Design and creative services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="design" id="inputdesign" value="0">
                        <span>Press</span><span class="describe_border" id="design-a">A</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="web">
                        <div class="item__image">
                          <img src="/assets/frontend/img/web.png">
                        </div>
                        <div class="description">
                          <h6>Website design and development</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="web" id="inputweb" value="0">
                        <span>Press</span><span class="describe_border" id="design-b">B</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="online">
                        <div class="item__image">
                          <img src="/assets/frontend/img/online.png">
                        </div>
                        <div class="description">
                          <h6>E-commerce solutions</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="online" id="inputonline" value="0">
                        <span>Press</span><span class="describe_border" id="design-c">C</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="code">
                        <div class="item__image">
                          <img src="/assets/frontend/img/code.png">
                        </div>
                        <div class="description">
                          <h6>Mobile app development</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="code" id="inputcode" value="0">
                        <span>Press</span><span class="describe_border" id="design-d">D</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="analysis">
                        <div class="item__image">
                          <img src="/assets/frontend/img/analysis.png">
                        </div>
                        <div class="description">
                          <h6>SEO Services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="analysis" id="inputanalysis" value="0">
                        <span>Press</span><span class="describe_border" id="design-e">E</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="fill">
                        <div class="item__image">
                          <img src="/assets/frontend/img/fill.png">
                        </div>
                        <div class="description">
                          <h6>Social media marketing</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="fill" id="inputfill" value="0">
                        <span>Press</span><span class="describe_border" id="design-f">F</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="ppc">
                        <div class="item__image">
                          <img src="/assets/frontend/img/ppc.png">
                        </div>
                        <div class="description">
                          <h6>PPC, SEM & Digital Campaigns</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="ppc" id="inputppc" value="0">
                        <span>Press</span><span class="describe_border" id="design-g">G</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="surface">
                        <div class="item__image">
                          <img src="/assets/frontend/img/surface.png">
                        </div>
                        <div class="description">
                          <h6>Animation & Video Services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="surface" id="inputsurface" value="0">
                        <span>Press</span><span class="describe_border" id="design-h">H</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="content">
                        <div class="item__image">
                          <img src="/assets/frontend/img/content.png">
                        </div>
                        <div class="description">
                          <h6>Content Creation & Marketing</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="content" id="inputcontent" value="0">
                        <span>Press</span><span class="describe_border" id="design-i">I</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="b2b">
                        <div class="item__image">
                          <img src="/assets/frontend/img/b2b.png">
                        </div>
                        <div class="description">
                          <h6>B2B marketing</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="b2b" id="inputb2b" value="0">
                        <span>Press</span><span class="describe_border" id="design-j">J</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="artificial">
                        <div class="item__image">
                          <img src="/assets/frontend/img/artificial.png">
                        </div>
                        <div class="description">
                          <h6>Affiliate marketing</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="artificial" id="inputartificial" value="0">
                        <span>Press</span><span class="describe_border" id="design-k">K</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="trading">
                        <div class="item__image">
                          <img src="/assets/frontend/img/trading.png">
                        </div>
                        <div class="description">
                          <h6>E-commerce trading</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="trading" id="inputtrading" value="0">
                        <span>Press</span><span class="describe_border" id="design-l">L</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="multiple">
                        <div class="item__image">
                          <img src="/assets/frontend/img/multiple.png">
                        </div>
                        <div class="description">
                          <h6>Multiple Services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="multiple" id="inputmultiple" value="0">
                        <span>Press</span><span class="describe_border" id="design-m">M</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="outstanding">
                        <div class="item__image">
                          <img src="/assets/frontend/img/outstanding.png">
                        </div>
                        <div class="description">
                          <h6>Outsourcing</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="outstanding" id="inputoutstanding" value="0">
                        <span>Press</span><span class="describe_border" id="design-n">N</span>
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="steps">Steps: 2 / 5</h2>
                <input type="button" name="previous" class="previous saim action-button-previous back__btn" value="Previous" />
                <input type="button" name="next" class="next saim action-button next__btn" value="Next" />
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="form__title">
                    <h2>Let us know <span> what your business is </span></h2>
                  </div>
                  <div class="row">
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="estate">
                        <div class="item__image">
                          <img src="/assets/frontend/img/estate.png">
                        </div>
                        <div class="description">
                          <h6>Real Estate</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="estate" id="inputestate" value="0">
                        <span>Press</span><span class="describe_border" id="estate-a">A</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="automobile">
                        <div class="item__image">
                          <img src="/assets/frontend/img/automobile.png">
                        </div>
                        <div class="description">
                          <h6>Automobile</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="automobile" id="inputautomobile" value="0">
                        <span>Press</span><span class="describe_border" id="estate-b">B</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="business">
                        <div class="item__image">
                          <img src="/assets/frontend/img/business.png">
                        </div>
                        <div class="description">
                          <h6>business Services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="business" id="inputbusiness" value="0">
                        <span>Press</span><span class="describe_border" id="estate-c">C</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="customer">
                        <div class="item__image">
                          <img src="/assets/frontend/img/customer.png">
                        </div>
                        <div class="description">
                          <h6>Consumer & Retail</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="customer" id="inputcustomer" value="0">
                        <span>Press</span><span class="describe_border" id="estate-d">D</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="shopping">
                        <div class="item__image">
                          <img src="/assets/frontend/img/shopping.png">
                        </div>
                        <div class="description">
                          <h6>E-Commerce</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="shopping" id="inputshopping" value="0">
                        <span>Press</span><span class="describe_border" id="estate-e">E</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="finance">
                        <div class="item__image">
                          <img src="/assets/frontend/img/finance.png">
                        </div>
                        <div class="description">
                          <h6>Financial Services</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="finance" id="inputfinance" value="0">
                        <span>Press</span><span class="describe_border" id="estate-f">F</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="health">
                        <div class="item__image">
                          <img src="/assets/frontend/img/health.png">
                        </div>
                        <div class="description">
                          <h6>Healthcare</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="health" id="inputhealth" value="0">
                        <span>Press</span><span class="describe_border" id="estate-g">G</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="industrial">
                        <div class="item__image">
                          <img src="/assets/frontend/img/industrial.png">
                        </div>
                        <div class="description">
                          <h6>Industrial</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="industrial" id="inputindustrial" value="0">
                        <span>Press</span><span class="describe_border" id="estate-h">H</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="corporate">
                        <div class="item__image">
                          <img src="/assets/frontend/img/corporate.png">
                        </div>
                        <div class="description">
                          <h6>B2B/Corporate</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="corporate" id="inputcorporate" value="0">
                        <span>Press</span><span class="describe_border" id="estate-i">I</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="education">
                        <div class="item__image">
                          <img src="/assets/frontend/img/education.png">
                        </div>
                        <div class="description">
                          <h6>Training & Education</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="education" id="inputeducation" value="0">
                        <span>Press</span><span class="describe_border" id="estate-j">J</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="food">
                        <div class="item__image">
                          <img src="/assets/frontend/img/food.png">
                        </div>
                        <div class="description">
                          <h6>Food</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="food" id="inputfood" value="0">
                        <span>Press</span><span class="describe_border" id="estate-k">K</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="entertainment">
                        <div class="item__image">
                          <img src="/assets/frontend/img/entertainment.png">
                        </div>
                        <div class="description">
                          <h6>Entertainment</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="entertainment" id="inputentertainment" value="0">
                        <span>Press</span><span class="describe_border" id="estate-l">L</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="officer">
                        <div class="item__image">
                          <img src="/assets/frontend/img/officer.png">
                        </div>
                        <div class="description">
                          <h6>Government</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="officer" id="inputofficer" value="0">
                        <span>Press</span><span class="describe_border" id="estate-m">M</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="fashion">
                        <div class="item__image">
                          <img src="/assets/frontend/img/fashion.png">
                        </div>
                        <div class="description">
                          <h6>Fashion</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="fashion" id="inputfashion" value="0">
                        <span>Press</span><span class="describe_border" id="estate-n">N</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="hospitality">
                        <div class="item__image">
                          <img src="/assets/frontend/img/hospitality.png">
                        </div>
                        <div class="description">
                          <h6>Hospitality</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="hospitality" id="inputhospitality" value="0">
                        <span>Press</span><span class="describe_border" id="estate-o">O</span>
                      </div>
                    </div>
                    <div class="col-xl-2 form_width">
                      <div class="form__product form__product1" id="other">
                        <div class="item__image">
                          <img src="/assets/frontend/img/other.png">
                        </div>
                        <div class="description">
                          <h6>Other</h6>
                        </div>
                      </div>
                      <div class="form__description">
                        <input type="hidden" name="other" id="inputother" value="0">
                        <span>Press</span><span class="describe_border" id="estate-p">P</span>
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="steps">Steps: 3 / 5</h2>
                <input type="button" name="previous" class="previous saim action-button-previous back__btn" value="Previous" />
                <input type="button" name="next" class="next saim action-button next__btn" value="Next" />
              </fieldset>
        <fieldset>
          <div class="form-card">
            <div class="map-back">
              <div class="container max-con">
                <div class="form-map">
                  <div class="form-map-main">
                    <h2>Let us know <strong>your target audience</strong></h2>
                  </div>
                  <div class="row">
                    
                    <div class="col-12">
                      <div class="maptop">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="custom-map">
                              <h6>Your Location</h6>
                              <div class="custom-select-map">
                                <select onchange="selectArea(this);" id="select">
                                  <option value="">select your location</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AO">Angola</option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BY">Belarus</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BA">Bosnia and Herzegovina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island</option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British</option>
                                  <option value="BN">Brunei Darussalam</option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi</option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CA">Canada</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CO">Colombia</option>
                                  <option value="CG">Congo</option>
                                  <option value="CD">Congo</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote D'Ivoire</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark</option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="EC">Ecuador</option>
                                  <option value="EG">Egypt</option>
                                  <option value="SV">El Salvador</option>
                                  <option value="GQ">Equatorial Guinea</option>
                                  <option value="ER">Eritrea</option>
                                  <option value="EE">Estonia</option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="TF">French Southern Territories</option>
                                  <option value="GA">Gabon</option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia</option>
                                  <option value="DE">Germany</option>
                                  <option value="GH">Ghana</option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland</option>
                                  <option value="GT">Guatemala</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran, Islamic Republic of</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KP">Korea</option>
                                  <option value="KR">Korea, Republic of</option>
                                  <option value="XK">Kosovo</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MK">Macedonia</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="ML">Mali</option>
                                  <option value="MX">Mexico</option>
                                  <option value="MD">Moldova, Republic of</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PS">Palestinian Territory, Occupied</option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico</option>
                                  <option value="QA">Qatar</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russia</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal</option>
                                  <option value="RS">Serbia</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SK">Slovakia</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands</option>
                                  <option value="SO">Somalia</option>
                                  <option value="ZA">South Africa</option>
                                  <option value="SS">South Sudan</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan, Province of China</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania, United Republic</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TT">Trinidad and Tobago</option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="US">United States</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Viet Nam</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="custom-map">
                              <h6>Target Audience</h6>
                              <div class="custom-select-map">
                                <select onchange="selectArea(this);" id="select2">
                                  <option value="">select your location</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AO">Angola</option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BY">Belarus</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BA">Bosnia and Herzegovina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island</option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British</option>
                                  <option value="BN">Brunei Darussalam</option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi</option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CA">Canada</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CO">Colombia</option>
                                  <option value="CG">Congo</option>
                                  <option value="CD">Congo</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote D'Ivoire</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark</option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="EC">Ecuador</option>
                                  <option value="EG">Egypt</option>
                                  <option value="SV">El Salvador</option>
                                  <option value="GQ">Equatorial Guinea</option>
                                  <option value="ER">Eritrea</option>
                                  <option value="EE">Estonia</option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="TF">French Southern Territories</option>
                                  <option value="GA">Gabon</option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia</option>
                                  <option value="DE">Germany</option>
                                  <option value="GH">Ghana</option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland</option>
                                  <option value="GT">Guatemala</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran, Islamic Republic of</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KP">Korea</option>
                                  <option value="KR">Korea, Republic of</option>
                                  <option value="XK">Kosovo</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MK">Macedonia</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="ML">Mali</option>
                                  <option value="MX">Mexico</option>
                                  <option value="MD">Moldova, Republic of</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PS">Palestinian Territory, Occupied</option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico</option>
                                  <option value="QA">Qatar</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russia</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal</option>
                                  <option value="RS">Serbia</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SK">Slovakia</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands</option>
                                  <option value="SO">Somalia</option>
                                  <option value="ZA">South Africa</option>
                                  <option value="SS">South Sudan</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan, Province of China</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania, United Republic</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TT">Trinidad and Tobago</option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="US">United States</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Viet Nam</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div id="mapdiv"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2 class="steps">Steps: 4 / 5</h2>
          <input type="button" name="previous" class="previous saim action-button-previous back__btn" value="Previous" />
          <input type="button" name="next" class="next saim action-button next__btn" value="Next" />
        </fieldset>
        <fieldset>
          <div class="map-back">
            <div class="container max-con">
              <div class="form-map">
                <div class="form-map-main">
                  <h2>Let us know <strong>how we can contact you</strong></h2>
                  <!-- GET A QUOTE SECTION START -->
                  <!-- <div class="container max-con"> -->
                    <div class="get__quote">
                      <div class="quote__form__input">
                        <form>
                          <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                <p>Full Name*</p>
                                <input type="text" class="form-control" placeholder="Your Full Name">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                <p>Your Company Name*</p>
                                <input type="text" class="form-control" placeholder="Your Company Name">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                <p>Your Email Address*</p>
                                <input type="text" class="form-control" placeholder="Your Full Name">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                <p>Your Phone*</p>
                                <input class="form-control input-phone" name="phone_no" id="phone_no" type="number" placeholder="1234567890" onKeyPress="if(this.value.length==10) return false;" required="">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                <p>Your Website</p>
                                <input type="text" class="form-control" placeholder="Your Full Name">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <p>My Budget*</p>
                              <div class="custom-select field__select">
                                <select>
                                  <option>Select Your Field</option>
                                  <option>$2500 to $3000 </option>
                                  <option>$2500 to $3000 </option>
                                  <option>$2500 to $3000 </option>
                                  <option>$2500 to $3000 </option>
                                  <option>$2500 to $3000 </option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <p>Attach Your Project Brief *</p>
                              <div class="form-group mb-0">
                                <input type="file" class="form-control-file choose-file ai-choose" id="exampleFormControlFile1">
                              </div>
                            </div>
                          </div>
                          <div class="form-group mt-lg-5">
                            <p>Your Message</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your Message"></textarea>
                          </div>
                          <div class="quote__button">
                            <a href="next.html"><button type="button" class="btn btn-outline-light">Send Inquiry</button></a>
                          </div>
                        </form>
                      </div>
                    </div>
                  <!-- </div> -->
                  <!-- GET A QUOTE SECTION END -->
                </div>
              </div>
            </div>
          </div>
          <h2 class="steps">Steps: 5 / 5</h2>
          <input type="button" name="previous" class="previous saim action-button-previous back__btn" value="Previous" />
        </fieldset>
        <div class="progress progess__bar__split">
          <div class="progress-bar custom__progress progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- AI FORM END -->
<!-- END FGOOTER SECTION -->
<script src="/assets/frontend/js/lity.min.js"></script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="/assets/frontend/js/aos.js"></script>
<script src="/assets/frontend/js/jquery.isonscreen.min.js"></script>

<script>
var map = AmCharts.makeChart("mapdiv", {
"type": "map",
"theme": "light",
"addClassNames": true,
"dataProvider": {
"map": "worldHigh",
"getAreasFromMap": true,
"areas": []
},
"areasSettings": {
"autoZoom": false,
"selectable": true
}
});
function selectArea(select) {
var id = select.options[select.selectedIndex].value;
if ( '' == id ) {
map.clickMapObject(map.dataProvider);
}
else {
map.clickMapObject(map.getObjectById(id));
}
}
function selectArea(select2) {
var id = select2.options[select2.selectedIndex].value;
if ( '' == id ) {
map.clickMapObject(map.dataProvider);
}
else {
map.clickMapObject(map.getObjectById(id));
}
}

$('.saim').on("click",function(){
      $(window).scrollTop(0);
});
</script>
@endsection