<template>
  <div class="container">
      <div class="row">
        <div id="dc-twocolumns" class="dc-twocolumns dc-haslayout">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-left">
            <div class="dc-questionsection">
              <div class="ambu-askquery">
                <div class="dc-postquestion">
                  <div class="dc-title">
                    <span href="javascript:void(0)">Do you need ambulacnce service provider?</span>
                    <h2>We have a solution</h2>
                  </div>
                  <div class="dc-description">
                   <p>নিচে দেয়া আমাদের এ্যাম্বুলেন্স সার্ভিসের নম্বরগুলো সারা দেশের প্রায় দু‘শ এ্যাম্বুলেন্স সার্ভিসের সাথে পরস্পর সংযুক্ত! যে কারনে, নির্দিষ্ট কোন ঠিকানা দেয়া হল না। আপনি ... <a href="#" data-target="#ambulance" data-toggle="modal">Read More</a></p>
    
                  </div>
                </div>
                <figure>
                  <img :src="imgLink+'howitswork/ambulance.png'" alt="image">
                </figure>                   
              </div>  
            </div>
          
            <div class="dc-docsingle-holder row text-left">
                <div v-if="!loading" class="col-md-12 text-center text-warning">Loading ...<br>Please wait a moment!!</div>
                <div  class="col-md-6" v-for="type in types" style="background:#f4f8fb;">
                    <div class="dc-consultation-details">
                      <figure class="dc-consultation-img">
                        <img :src="imgLink+'forum/img-01.jpg'">
                      </figure>
                      <div class="dc-consultation-title">
                        <h5>
                          <a href="javascript:void(0);">{{type.title}}</a>
                          <em>24/7 hours open services to all</em>
                          <em><i class="fas fa-phone-square"></i> 017490154272</em>
                        </h5>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
            <aside id="dc-sidebar" class="dc-sidebar dc-sidebar-grid float-left mt-md-0">
              <div class="dc-widget dc-onlineoptions">
                <figure class="dc-onlinuserimg">
                  <img :src="imgLink+'doctors/img-11.jpg'">
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
                  <img :src="imgLink+'doctors/img-12.jpg'">
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
                  <img :src="imgLink+'ads-img/img-02.jpg'" alt="img description">
                </a>
                <span>Advertisement  770px X 90px</span>
              </figure>
            </aside>
          </div>
        </div>
      </div>

      <div class="modal fade dc-appointmentpopup" tabindex="-1" role="dialog" id="ambulance"> 
        <div class="modal-dialog" role="document">
          <div class="dc-modalcontent modal-content">        
            <section id="sec1" class="sec1">
              <div class="dc-popuptitle">
                <h3>Know about our ambulance service</h3>
                <a href="#" class="dc-closebtn close dc-close"><i class="ti-close" data-dismiss="modal" aria-label="Close"></i></a>
              </div>
              <div id="dcModalBody" class="modal-body float-left">
                  <p class="alert alert-default">
                  নিচে দেয়া আমাদের এ্যাম্বুলেন্স সার্ভিসের নম্বরগুলো সারা দেশের প্রায় দু‘শ এ্যাম্বুলেন্স সার্ভিসের সাথে পরস্পর সংযুক্ত! যে কারনে, নির্দিষ্ট কোন ঠিকানা দেয়া হল না। আপনি যে অঞ্চলেরই হোন না কেন, প্রদত্ত নম্বরগুলো হতে যে কোন একটা নং এ কল করুন এবং আপনার এ্যাম্বুলেন্স প্রয়োজনের কথা বলুন। এ্যাম্বুলেন্স সার্ভিসের লোকেরা এ্যাম্বুলেন্স পাঠাতে রাজি হলে আপনার ঠিকানা এস এম এস করুন। </p>

                  <p class="alert alert-default"> এসি কিবা নন-এসি এ্যাম্বুলেন্স উল্লেখ করে দিন। প্রয়োজনে আপনি ভাড়া/চুক্তি সংক্রান্ত কথা বলে নিতে পারেন। পাঁচ থেকে দশ মিনিট পর পূনরায় কল করে এ্যাম্বুলেন্স আপনার বাসার উদ্দেশ্যে ছেড়ে এসেছে কিনা জেনে নিন। যদিও সার্ভিস প্রদানকারীগণই আপনাকে এ্যাম্বুলেন্স পাঠানো হয়েছি কিনা নিশ্চিত করবে। যদি কোন কারণে তিনি সার্ভিস প্রদানে ব্যার্থ হন সে ক্ষেত্রে আপনি দ্বিতীয় যে কোন একটা নম্বরে কল করুন! </p>
                  <p class="alert alert-default">  
                    <b class="text-left">বিঃদ্রঃ কথা বলা কালে আমাদের বরাত/Reference দিতে ভুলবেন না। </b></p>
              
              </div>
            </section>        
          </div>
        </div>
      </div> 
  
  </div>
</template>

<script>
export default {
    data(){
        return {
            types:{}, 
            imgLink:window.location.origin+'/storage/images/',
            loading:false,
        }
    },
    methods:{
        get_types() {
          axios.get('http://api.admitdoctors.com/get_types')
            .then(response => {
              this.types = response.data;
              this.loading = true;
          });
        },
    },
    created() {
      this.get_types();
    }
};
</script>
