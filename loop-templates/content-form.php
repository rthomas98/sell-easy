<div class="container-fluid form-container p-0 m-0 h-100">
<div class="row h-100">
<div class="col-sm-12 col-md-4 col-lg-4 h-100" >
   <div class="form-sidebar h-100 p-5 text-white">
      <a class="navbar-brand mt-3 position-relative" href="<?php echo site_url("/"); ?>">
      <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/SellEasyLogo-white.png" alt="" width="150">
      </a>
      <h1>Find out if you qualify.</h1>
      <p>
         We need to gather some basic information in order to perform a preliminary analysis of your policy. This will only a take a couple minutes. 
      </p>
      <div class="row">
         <div class="col">
            <ul id="progressbar">
               <li class="progress-step progress-step-active">
                  <h4><span>1</span> Contact Information</h4>
                  <p>Please provide basic contact information in case we have any follow-up questions regarding your policy. We don’t sell your information and we’ll only contact you in reference to selling your life insurance policy.</p>
               </li>
               <li class="progress-step">
                  <h4><span>2</span> Policy Information</h4>
                  <p>Please provide basic contact information in case we have any follow-up questions regarding your policy. We don’t sell your information and we’ll only contact you in reference to selling your life insurance policy.</p>
               </li>
               <li class="progress-step">
                  <h4><span>3</span> Insured Information</h4>
                  <p>Please provide basic contact information in case we have any follow-up questions regarding your policy. We don’t sell your information and we’ll only contact you in reference to selling your life insurance policy.</p>
               </li>
               <li class="progress-step">
                  <h4><span>4</span> Health Information</h4>
                  <p>Please provide basic contact information in case we have any follow-up questions regarding your policy. We don’t sell your information and we’ll only contact you in reference to selling your life insurance policy.</p>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="col-sm-12 col-md-4 col-lg-8">
<div class="form-content h-100 d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="col">
            <form>
               <fieldset class="form-step form-step-active">
                  <h2 class="mb-5">Let’s get started.</h2>
                  <div class="row mb-3">
                     <p>What’s your name?</p>
                     <div class="col">
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <p>How do we contact you?</p>
                     <div class="col">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone">
                     </div>
                     <div class="col">
                        <input type="email" class="form-control" id="emailAddress" placeholder="Email">
                     </div>
                  </div>
                  <div class="row mb-5">
                     <p>Are you insured on this policy? <a href=""><i class="fa-light fa-question"></i></a></p>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                           <label class="form-check-label" for="flexRadioDefault1">
                           Yes
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                           <label class="form-check-label" for="flexRadioDefault2">
                           No
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-5">
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                           <label class="form-check-label" for="flexCheckIndeterminate">
                           I agree to the terms & conditions and privacy policy.
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col text-center">
                        <a class="btn btn-primary btn-next">Next</a>
                     </div>
                  </div>
               </fieldset>
               <fieldset class="form-step">
                  <h2 class="mb-5">Policy Info.</h2>
                  <div class="row mb-3">
                     <div class="col">
                        <p>What is the death benefit?</p>
                        <input type="text" class="form-control" id="benifts" placeholder="$">
                     </div>
                     <div class="col">
                        <p>What is the policy type?</p>
                        <select class="form-select" aria-label="Default select example">
                           <option selected></option>
                           <option value="1"></option>
                           <option value="2"></option>
                           <option value="3"></option>
                        </select>
                     </div>
                  </div>
                  <div class="col mb-3">
                     <div class="col">
                        <p>How long have you owned this policy?</p>
                        <select class="form-select" aria-label="Default select example">
                           <option selected></option>
                           <option value="1"></option>
                           <option value="2"></option>
                           <option value="3"></option>
                        </select>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <p>Was this policy provided by a current or former employer? <a href=""><i class="fa-light fa-question"></i></a></p>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                           <label class="form-check-label" for="flexRadioDefault1">
                           Yes
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                           <label class="form-check-label" for="flexRadioDefault2">
                           No
                           </label>
                        </div>
                     </div>
                  </div>				  
                  <div class="additional-policy" style="display: none;">
                     <h2 class="mb-5">Additional Policy Info.</h2>
                     <div class="row mb-3">
                        <div class="col">
                           <p>What is the death benefit?</p>
                           <input type="text" class="form-control" id="benifts" placeholder="$">
                        </div>
                        <div class="col">
                           <p>What is the policy type?</p>
                           <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1"></option>
                              <option value="2"></option>
                              <option value="3"></option>
                           </select>
                        </div>
                     </div>
                     <div class="col mb-3">
                        <div class="col">
                           <p>How long have you owned this policy?</p>
                           <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1"></option>
                              <option value="2"></option>
                              <option value="3"></option>
                           </select>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <p>Was this policy provided by a current or former employer? <a href=""><i class="fa-light fa-question"></i></a></p>
                        <div class="col">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                              Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                              No
                              </label>
                           </div>
                        </div>
                     </div>					 
				   </div>
				   <a href="#" class="addition-details" data-addition-class="additional-policy" data-addition-text="Add Another Policy" data-remove-text="Remove Addition Policy">Add Another Policy</a>
				   <div class="row">
					   <div class="col text-center">
						   <a href="#" class="btn-prev btn btn-secondary">Back</a>
						   <a href="#" class="btn-next btn btn-primary">Next</a>
					   </div>
				   </div>
               </fieldset>
               <fieldset class="form-step">
				   <h2 class="mb-5">Insured Info.</h2>
				   <div class="row mb-3">
					  <div class="col">
						 <p>What is your birthdate?</p>
						 <input type="date" name="bday">
					  </div>
				   </div>
				   <div class="row mb-3">
					  <div class="col">
						 <p>What is your sex?</p>
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							Male
							</label>
						 </div>
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							Female
							</label>
						 </div>
					  </div>
				   </div>
				   <div class="row mb-3">
					   <div class="col">
						  <p>How would you rate your current health?</p>
						  <div class="form-check">
							 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							 <label class="form-check-label" for="flexRadioDefault1">
							 Terminal
							 </label>
						  </div>
						  <div class="form-check">
							 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							 <label class="form-check-label" for="flexRadioDefault1">
							 Poor
							 </label>
						  </div>
						  <div class="form-check">
							 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							 <label class="form-check-label" for="flexRadioDefault1">
							 Fair
							 </label>
						  </div>
						  <div class="form-check">
							 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							 <label class="form-check-label" for="flexRadioDefault1">
							 Good
							 </label>
						  </div>
						  <div class="form-check">
							 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							 <label class="form-check-label" for="flexRadioDefault1">
							 Excellent
							 </label>
						  </div>
					   </div>
				   </div>
				   <div class="additional-insured" style="display: none;">
					  <h2 class="mb-5">Addition Insured Info.</h2>
					  <div class="row mb-3">
						 <div class="col">
							<select class="form-select" aria-label="Default select example">
							   <option selected></option>
							   <option value="1"></option>
							   <option value="2"></option>
							   <option value="3"></option>
							</select>
						 </div>
					  </div>
					  <div class="row mb-3">
						 <p>Is the second insured deceased?</p>
						 <div class="col">
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							   <label class="form-check-label" for="flexRadioDefault1">
							   Yes
							   </label>
							</div>
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							   <label class="form-check-label" for="flexRadioDefault2">
							   No
							   </label>
							</div>
						 </div>
					  </div>
					   <div class="row mb-3">
						  <p>What is the second insured’s name?</p>
						  <div class="col">
							 <input type="text" class="form-control" id="firstName" placeholder="First Name">
						  </div>
						  <div class="col">
							 <input type="text" class="form-control" id="lastName" placeholder="Last Name">
						  </div>
					   </div>
					   <div class="row mb-3">
						  <p>How do we contact them?</p>
						  <div class="col">
							 <input type="text" class="form-control" id="" placeholder="Phone">
						  </div>
						  <div class="col">
							 <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
					   </div>
					   <div class="row mb-3">
						  <div class="col">
							 <p>What is your birthdate?</p>
							 <input type="date" name="bday">
						  </div>
					   </div>
					   <div class="row mb-3">
						  <p>What is their sex?</p>
						  <div class="col">
							 <div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
								Male
								</label>
							 </div>
							 <div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
								<label class="form-check-label" for="flexRadioDefault2">
								Female
								</label>
							 </div>
						  </div>
					   </div>
					   <div class="row mb-3">
						   <div class="col">
							  <p>How would you rate your current health?</p>
							  <div class="form-check">
								 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								 <label class="form-check-label" for="flexRadioDefault1">
								 Terminal
								 </label>
							  </div>
							  <div class="form-check">
								 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								 <label class="form-check-label" for="flexRadioDefault1">
								 Poor
								 </label>
							  </div>
							  <div class="form-check">
								 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								 <label class="form-check-label" for="flexRadioDefault1">
								 Fair
								 </label>
							  </div>
							  <div class="form-check">
								 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								 <label class="form-check-label" for="flexRadioDefault1">
								 Good
								 </label>
							  </div>
							  <div class="form-check">
								 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								 <label class="form-check-label" for="flexRadioDefault1">
								 Excellent
								 </label>
							  </div>
						   </div>
					   </div>
				   </div>
				   <a href="#" class="addition-details" data-addition-class="additional-insured" data-addition-text="Add Another Insured Person" data-remove-text="Remove Insured Person">Add Addition Insured Person</a>
				   <div class="row">
					  <div class="col text-center">
						 <a href="#" class="btn btn-secondary btn-prev">Back</a>
						 <a href="#" class="btn btn-primary btn-next">Next</a>
					  </div>
				   </div>
				</fieldset>
               <fieldset class="form-step">
				   <h2 class="mb-5">Health Info for John Smith.</h2>
				   <div class="row mb-3">
					  <div class="col">
						 <p>Have you ever been diagnosed with any of the following conditions?</p>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">ALS (Lou Gehrig’s Disease)</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Alzheimer’s Disease or Dementia</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Cancer</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Chronic Lung or Respiratory Disease (excluding Asthma)</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Heart Disease, including pulse or rhythm issues</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Insulin Dependent Diabetes</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Kidney or Renal Disease</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Liver Disease</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Multiple Sclerosis (MS)</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Parkinson’s Disease</label>
						 </div>
						 <div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							<label class="form-check-label" for="flexSwitchCheckDefault">Stroke / Cerebrovascular Disease</label>
						 </div>
					  </div>
				   </div>
				   <div class="row mb-3">
					  <p>Do you use any assistive devices or require ongoing medical support?</p>
					  <div class="col">
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							Yes
							</label>
						 </div>
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
							No
							</label>
						 </div>
					  </div>
				   </div>
				   <div class="row mb-3">
					  <p>Is there anything else we should know about your health history?</p>
					  <div class="col">
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							Yes
							</label>
						 </div>
						 <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
							No
							</label>
						 </div>
					  </div>
				   </div>
				   <div class="additional-health-info" style="display: none;">
					  <h2 class="mb-5">Health Info for Jane Smith.</h2>
					  <div class="row mb-3">
						 <div class="col">
							<p>Have you ever been diagnosed with any of the following conditions?</p>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">ALS (Lou Gehrig’s Disease)</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Alzheimer’s Disease or Dementia</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Cancer</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Chronic Lung or Respiratory Disease (excluding Asthma)</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Heart Disease, including pulse or rhythm issues</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Insulin Dependent Diabetes</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Kidney or Renal Disease</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Liver Disease</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Multiple Sclerosis (MS)</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Parkinson’s Disease</label>
							</div>
							<div class="form-check form-switch">
							   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
							   <label class="form-check-label" for="flexSwitchCheckDefault">Stroke / Cerebrovascular Disease</label>
							</div>
						 </div>
					  </div>
					  <div class="row mb-3">
						 <p>Do you use any assistive devices or require ongoing medical support?</p>
						 <div class="col">
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							   <label class="form-check-label" for="flexRadioDefault1">
							   Yes
							   </label>
							</div>
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							   <label class="form-check-label" for="flexRadioDefault2">
							   No
							   </label>
							</div>
						 </div>
					  </div>
					  <div class="row mb-5">
						 <p>Is there anything else we should know about your health history?</p>
						 <div class="col">
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							   <label class="form-check-label" for="flexRadioDefault1">
							   Yes
							   </label>
							</div>
							<div class="form-check">
							   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							   <label class="form-check-label" for="flexRadioDefault2">
							   No
							   </label>
							</div>
						 </div>
					  </div>
					  <div class="row mb-5">
						 <div class="mb-3">
							<textarea class="form-control" id="" rows="3" placeholder="Please use this space to tell us…"></textarea>
						 </div>
					  </div>					  
				   </div>
				   <a href="#" class="addition-details" data-addition-class="additional-health-info" data-addition-text="Add Health Information for Jane Smith" data-remove-text="Remove Health Information for Jane Smith">Add Health Information for Jane Smith</a>
				   <div class="row">
					   <div class="col text-center">
						   <a href="#" class="btn-prev btn btn-secondary">Back</abs>
						   <a href="#" class="btn-next btn btn-primary">Next</a>
					   </div>
				   </div>
				</fieldset>
               <fieldset class="form-step">
               <div class="row">
               <div class="col text-center">
               <a href="#" class="btn-next btn btn-secondary">Skip for Now</a>
               <p>
               <small>not recommended as this will delay your life settlement.</small>
               </p>
               </div>
               </div>
               </fieldset>
               <fieldset class="form-step">
               <div class="row">
               <div class="col">
               <h2 class="text-center">Thank You</h2>
               <p>
               Based on a preliminary review of the information you’ve provided, it looks like your policy may qualify. We still need to figure out what your policy may be worth, but there’s a very good chance you’ll be rolling in dough soon–but not without the signed Authorization.
               </p>
               <p>
               Next Steps: We will reach out to discuss your policy information shortly and answer any questions you may have. However, we are unable to assist any further until we receive your completed Authorization. We highly recommend that you go ahead and complete this step now so that we may expedite your settlement.
               </p>
               <div class="row">
               <div class="col text-center">
               <a href="#" class="btn btn-primary">Sign the Authorization Now</a>
               </div>
               </div>
               </div>
               </div>
               </fieldset>
            </form>
            </div>
            </div>
            </div>
         </div>
      </div>
   </div>
</div>