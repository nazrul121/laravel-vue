<template>
    <div class="row">
        <div class="dc-haslayout dc-main-section dc-ourcontact-holder">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="dc-cntctfrmdetail">
                            <div class="dc-title">
                                <h3><span>Always Get In Touch</span> Our Contact Details</h3>
                            </div>
                            <div class="dc-description">
                                <p>Amet consectetur adipisicing eliteiuim sete eiuode tempor incint utoreas etnalom dolore maena aliqua udiminimate veniam quis norud exerciton ullamco laboris nisiquip commodo lokate.</p>
                            </div>
                            <ul class="dc-formcontactus">
                                <li><address><i class="lnr lnr-location"></i> 123 New Street, Melbourne location  Australia 54214</address></li>
                                <li><a href="javascript:void(0)"><i class="lnr lnr-envelope"></i> info@domainurl.com</a></li>
                                <li><span><i class="lnr lnr-phone-handset"></i> (0800) 1234 567891</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="dc-contactvone">
                            <div class="dc-title">
                                <h4>Say “Hello” To Us</h4>
                            </div>
                            <form class="dc-formtheme dc-medicalform">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="search" value="" class="form-control" placeholder="Your Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="search" value="" class="form-control" placeholder="Your Email*" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Type Your Query*"></textarea>
                                    </div>
                                    <div class="form-group dc-btnarea">
                                        <button type="submit" value="Submit" class="dc-btn">Send Now</button>
                                    </div>
                                </fieldset>
                            </form>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82560.53033264456!2d90.34452562745528!3d23.864982205697434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1575559918263!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
            document.title="Contact Us - Admitdoctors.com";
        }
    };
</script>
