<template>
    <div class="dc-haslayout">
				<!-- User Listing Start-->
		<div class="container">
			<div class="row">
				<div id="dc-twocolumns" class="dc-twocolumns dc-haslayout">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-left">
						<div class="dc-docsingle-header" v-for="doc in doctor">
							<figure class="dc-docsingleimg">
							
								<img :src="$photoPath+ 'doctors/doc.photo'" :alt="doc.name">

								<figcaption v-if="doc.reg!=null">
									<span class="dc-featuredtag"><i class="fa fa-bolt"></i></span>
								</figcaption>
							</figure>
							<div class="dc-docsingle-content">
								<div class="dc-title">
									<a href="javascript:void(0)" class="dc-docstatus">Neurosurgeon</a>
									<h2><a href="javascript:void(0);">{{doc.name}} </a> 
										
										<i class="fa fa-check-circle dc-awardtooltip" v-if="doc.reg!=null"><em>BMDC Registration Verified</em></i></h2>
									<ul class="dc-docinfo">
										<li>
											<em>{{doc.education}}</em>
										</li>
									</ul>
									<a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
								</div>
								<div class="dc-description">
									<p>{{doc.other_details}}</p>
								</div>
								<div class="dc-btnarea">
									<a href="javascript:void(0);" class="dc-btn" data-toggle="modal" data-target="#feedbackmodal">Add Feedback</a>
									<a href="javascript:void(0);" class="dc-btn" data-toggle="modal" data-target="#appointment">Book Now</a>
								</div>
							</div>
						</div>

						<div class="dc-docsingle-holder">
							<ul class="dc-navdocsingletab nav navbar-nav">
								<li class="nav-item">
									<a class="active" id="locations-tab" data-toggle="tab" href="#locations">Chamber Locations</a>
								</li>
								<li class="nav-item">
									<a id="userdetails-tab" data-toggle="tab" href="#userdetails">Doctor` Details</a>
								</li>

								<li class="nav-item">
									<a id="userdetails-tab" data-toggle="tab" href="#comments">Comments view</a>
								</li>
							</ul>

							<div class="tab-content dc-haslayout">
								
								<div class="dc-contentdoctab dc-location-holder tab-pane fade active show" id="locations">
									<div class="dc-searchresult-holder">
										<div class="dc-searchresult-grid dc-searchresult-list dc-searchvlistvtwo">

											<div class="dc-docpostholder" v-for="chamber in chambers">
												<div class="dc-docpostcontent">
													<div class="dc-searchvtwo">
														<figure class="dc-docpostimg">
															<img :src="$photoPath+'searchlist/img-16.jpg'" alt="img ">
														</figure>
														<div class="dc-title">
															<span><i class="ti-alarm-clock"></i> <b> {{chamber.v_hours}} </b></span> <br>

															<span><i class="ti-money"></i> First Visiting Fee: <b>{{chamber.fee_first}}</b></span><br>

															<span><i class="ti-money"></i> Second Visiting Fee: <b>{{chamber.fee_second}}</b></span><br>
														</div>
													</div>
													<div class="dc-doclocation dc-doclocationvtwo">
														
														<span><i class="ti-mobile"></i> Phone: 
														{{chamber.phone}} </span>

														<span><i class="ti-email"></i> Email: 
														{{chamber.email}}  Housing Society</span>

														<span><i class="ti-map-alt"></i> Dhaka <i class="ti-arrow-right"></i> Moyonghing
														 </span>
													</div>
												</div>
												<p class="text-center"><i class="ti-location-pin"></i> Address: {{chamber.address}}</p>
											</div>
											

										</div>
									</div>
								</div>

								<div class="dc-contentdoctab dc-userdetails-holder tab-pane" id="userdetails">
									<div class="dc-aboutdoc dc-aboutinfo">
										<div class="dc-infotitle">
											<h3>About “Dr. Tenisha”</h3>
										</div>
										<div class="dc-description"><p>Consectetur adipisicing eliteiuim sete eiu tempor incidit utoreas etnalom dolore maena aliquae udiminimate veniam quis norud exercita ullamco laboris nisi aliquip commodo consequat Duis aute irure dolor </p></div>
									</div>
									
									<div class="dc-specializations dc-aboutinfo">
										<div class="dc-infotitle">
											<h3>Specializations <a href="javascript:void(0);">(more)</a></h3>
										</div>
										<ul class="dc-specializationslist">
											<li><span>Dentist</span></li>
											<li><span>Periodontist</span></li>
										</ul>
									</div>
								</div>


								<div class="dc-contentdoctab dc-consultation-holder tab-pane" id="comments">
									<div class="dc-consultation">
										<div class="dc-searchresult-head">
											<input type="text" name="search" class="form-control" placeholder="Type Your Query">
										</div>
										<div class="dc-consultation-content">
											<div class="dc-consultation-details">
												<figure class="dc-consultation-img dc-imgcolor1">
													<img :src="$photoPath+ 'images/icon-imgs/img-05.png'" alt="img description">
												</figure>
												<div class="dc-consultation-title">
													<h5><a href="javascript:void(0);">Mouth open while sleeping</a><em>Jun 27, 2018</em></h5>
													<span>Answered by “Dr. Tenisha”</span>
												</div>
												<div class="dc-description">
													<p>Eliteiuim sete eiu tempor incidit utoreas etnalom dolore maena aliqua udiminimate veniam quis norud exercita ullamco laboris nisi aliquip commodo consequat duis aute irure.</p>
												</div>
											</div>
											
											
										</div>
									</div>
								</div>

								<div class="dc-shareprofile">
									<ul class="dc-simplesocialicons dc-socialiconsborder" style="margin:0">
										<li class="dc-sharecontent"><span>Share Profile:</span></li>
										<li class="dc-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
										<li class="dc-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="dc-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="dc-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
										<li class="dc-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>

							</div>
							
						</div>

					</div>

					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 float-left">
						<aside id="dc-sidebar" class="dc-sidebar dc-sidebar-grid float-left mt-xl-0">
							<div class="dc-widget dc-onlineoptions">
								<figure class="dc-onlinuserimg">
									<img :src="$photoPath+ 'doctors/img-11.jpg'">
									<figcaption><span>Live</span></figcaption>
								</figure>
								<div class="dc-onlineoption-content">
									<div class="dc-title">
										<h3><span>Stop Waiting in Queue</span> Ask Query Online</h3>
									</div>
									<div class="dc-btnarea">
										<a href="javascript:void(0);" class="dc-btn dc-btnactive">Book Audio / Video Call</a>
										<span>50,000+<em>Consultation Served </em></span>
									</div>
								</div>
							</div>
						
							<div class="dc-widget dc-mobileappoptions">
								<figure class="dc-appimgs">
									<img :src="$photoPath+ 'doctors/img-12.jpg'">
								</figure>
								<div class="dc-mobileapp-content">
									<div class="dc-title">
										<h3><span>Care on the GO</span> Get Mobile App</h3>
									</div>
									<div class="dc-description">
										<p>A dipisicing sed dotem eiusmou tempor incididunt ut labore</p>
									</div>
									<div class="dc-appemail-form">
										<input type="email" name="email" value="" class="form-control" placeholder="Email ID" required="">
										<button type="submit"><i class="fa fa-paper-plane"></i></button>
									</div>
								</div>
							</div>
							<figure class="dc-searchresultad">
								<a href="javascript:void(0);">
									<img :src="$photoPath+ 'ads-img/img-02.jpg'" alt="img description">
								</a>
							</figure>
						</aside>
					</div>

				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>	
</template>

<script>
    export default {
        data(){
        	return {
        		id:this.$route.params.id,
                doctor:{},loading:true,
                chambers:{}
        	}
        },
        methods:{
            makeFavourite(){
                toast.fire({ icon: "info", title: "This portion is under development!!" });
            },
            get_doctor(){
                axios.get('http://127.0.0.1:8000/api/doctor/'+this.id)
                .then(response => {
                  this.doctor = response.data; 
                  this.loading=false;
                })
                .catch(()=>{
                    toast.fire({icon: "warning", title: "Please refresh the page !" });
                });
            },

          	doctor_chambers(){
          		axios.get('http://127.0.0.1:8000/api/doctor-chambers-info/'+this.id)
                .then(response => {
                  this.chambers = response.data; 
                })
                .catch(()=>{
                    toast.fire({icon:"warning", title:"Chamber info lading error" });
                });
          	}
        },
        created() {
            this.$Progress.finish();
            this.get_doctor();
            this.doctor_chambers();
            document.title = 'Doctors '; 
        }
    };
</script>