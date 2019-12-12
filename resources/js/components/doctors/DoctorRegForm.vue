<template>
    <div class="row">
        <div class="dc-haslayout dc-main-section dc-ourcontact-holder">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="dc-contactvone">
                            <div class="dc-title">
                                <h4>Doctor application form</h4>
                            </div>
                            <form class="dc-formtheme dc-medicalform">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="fname" value="" class="form-control" placeholder="First Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" value="" class="form-control" placeholder="Last Name" required="">
                                    </div>
                                </fieldset>

                                <fieldset>
                                	<div class="row">
                                		<div class="col-md-3">
                                			<div class="form-group">
		                                        <span class="dc-select">
													<select data-placeholder="Gender" name="sex">
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="other">Other</option>
													</select>
												</span>
		                                    </div>
                                		</div>
                                		<div class="col-md-4">
                                			<div class="form-group">
		                                        <span class="dc-select">
													<select data-placeholder="Your profession" name="visit">
														<option value="">Profession</option>
														<option value="student">Student</option>
														<option value="business">Business</option>
                                                        <option value="employee">Employee</option>
														<option value="other">Other</option>
													</select>
												</span>
		                                    </div>
                                		</div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <span class="dc-select">
                                                    <select data-placeholder="District" name="sex">
                                                        <option value="male">District</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                	</div>
                                </fieldset>

                                <fieldset>
                                    <div class="form-group">
                                        <input type="number" name="phone" class="form-control" placeholder="Phone No" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="search" value="" class="form-control" placeholder="Your Email*" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Address" style="height:70px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Why you interestd ??" style="height:100px"></textarea>
                                    </div>
                                    <div class="form-group dc-btnarea">
                                        <button type="submit" value="Submit" class="dc-btn">Submit form</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="dc-cntctfrmdetail">
                            <div class="dc-title">
                                <h3><span>Always Get In Touch</span> Our Contact Details</h3>
                            </div>
                            <div class="dc-description">
                                <p>বিপদের কাছে আমরা সবাই অসহায়। কারণ, বিপদে আমরা সবাই একা। অন্যরা আমার বিপদে এগিয়ে আসে না কারণ আমি অন্যের বিপদে এগিয়ে যায়নি।</p>

								<p>আমরা সবাই যদি একে অন্যের বিপদে এগিয়ে আসতে পারি তাহলে হয়ত অভিধান থেকে ‘অসহায়’ শব্দটা উঠিয়ে দেয়া সম্ভব হবে। 
								
								<p> আসুন, আমি আমার না হয়ে আমরা আমাদের হই। কারোর জন্য অপেক্ষা না করে আপনিই শুরু করুন</p>

								<p class="text-primary">মানতার সেবায় স্বেচ্ছাশ্রমের বিকল্প নাই। স্বেচ্ছাসেবক হিসেবে যোগদিন। অনুগ্রহ পূর্বক নিচের প্রদত্ব ফর্মট পূরণ করুন।</p>

                            </div>
                            <ul class="dc-formcontactus">
                                <li><address><i class="lnr lnr-location"></i> 123 New Street, Melbourne location  Australia 54214</address></li>
                                <li><a href="javascript:void(0)"><i class="lnr lnr-envelope"></i> info@domainurl.com</a></li>
                                <li><span><i class="lnr lnr-phone-handset"></i> (0800) 1234 567891</span></li><br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="dc-haslayout dc-shadedmap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row" >
                           <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
        
    </div>
</template>

<script>
    export default {
        data(){
        	return {
        		//id:this.$route.params.category,
        	}
        },
        methods:{

        },
        created() {
            document.title="Volunteer form - Admitdoctors.com";
        }
    };
</script>
