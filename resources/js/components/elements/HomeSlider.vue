<template>
    <div class="dc-homesliderholder dc-haslayout">
	    <div id="dc-homeslider" class="dc-homeslider">
	        <div id="dc-bannerslider" class="dc-bannerslider carousel slide" data-ride="false" data-interval="false">
	          <ol class="carousel-indicators dc-bannerdots">
	            <li data-target="#dc-bannerslider" data-slide-to="0" class="active"></li>
	            <li data-target="#dc-bannerslider" data-slide-to="1"></li>
	            <li data-target="#dc-bannerslider" data-slide-to="2"></li>
	          </ol>
	            <div class="carousel-inner">
	               
	                <div class="carousel-item active" id="carousel-item-1">
	                    <div class="d-flex justify-content-center dc-craousel-content">
	                        <div class="mx-auto container">
	                            <div class="row">
	                                <div class="col-md-5">
	                                    <img class="d-block dc-bannerimg" 
	                                    src="storage/images/slider/img-01.png" alt="First slide" />
	                                </div>
	                                <div class="col-md-7">
	                                    <div class="dc-bannercontent dc-bannercotent-craousel" >
	                                        <div class="dc-content-carousel">
	                                            <div class="dc-num"></div>
	                                            <h2>Justify the doctor you getting services</h2>
	                                            <p>আমাদের সন্মানিত উপদেষ্টা হিসেবে যোগদান করলেন বাংলাদেশ ক্যামিক্যাল ইন্ড্রাস্টিজ কর্পোরেশন (BCIC) 
	                                            এর পরিচালক (উৎপাদন ও গবেষণা) মোঃ শাহীন কামাল।</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	             
	                <a class="dc-carousel-control-prev" href="#dc-bannerslider" role="button" data-slide="prev">
	                    <span class="dc-carousel-control-prev-icon" aria-hidden="true"><span>PR</span><span class="d-block">EV</span></span>
	                    <span class="sr-only">Previous</span>
	                </a>
	                <a class="dc-carousel-control-next" href="#dc-bannerslider" role="button" data-slide="next">
	                    <span class="dc-carousel-control-next-icon " aria-hidden="true"><span>NE</span><span class="d-block">XT</span></span>
	                    <span class="sr-only">Next</span>
	                </a>
	            </div>              
	        </div>
	    </div>
	</div>
</template>

<script>
    export default {
        data(){
        	return {
        		sliders:{},
        	}
        },
        methods:{
        	get_home_sliders() {
              axios.get('api/home_sliders')
                .then(response => {
                  this.sliders = response.data;
              });
            }
        },
        creaed() {
           this.get_home_sliders();
        }
    };
</script>
