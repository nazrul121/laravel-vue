<template>
  <section class="dc-haslayout dc-main-section">
    <div class="container">
      <div class="row justify-content-center align-self-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="dc-sectionhead dc-text-center">
            <div class="dc-sectiontitle">
              <h2>Meet <em>Our Volunteers</em></h2>
            </div>
            <div class="dc-description">
              <p>আমাদের সম্মানিত স্বেচ্ছাসেবক বৃন্দ যাদের সহযোগীতার হাত ও মানব সেবার মহান আদর্শই আমাদের আগামী দিনের পথ চলার পাথেয়! </p>
            </div>
          </div>
        </div>
        <div class="dc-ourteamholder">
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
            <div class="dc-ourteam">
              <figure class="dc-ourteamimg"><img :src="imgLink+'ourteam/img-01.jpg'" alt="img description"></figure>
              <div class="dc-ourteamcontent">
                <div class="dc-title">
                  <a href="javascript:void(0)">Founder, C.E.O</a>
                  <h3><a href="javascript:void(0);">Maryland Nicolosi</a></h3>
                </div>
                <ul class="dc-simplesocialicons dc-socialiconsborder">
                  <li class="dc-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="dc-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                  <li class="dc-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="dc-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                  <li class="dc-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
            <div class="dc-ourteam">
              <figure class="dc-ourteamimg"><img :src="imgLink+'ourteam/img-02.jpg'" alt="img description"></figure>
              <div class="dc-ourteamcontent">
                <div class="dc-title">
                  <a href="javascript:void(0)">Marketing Manager</a>
                  <h3><a href="javascript:void(0);">Lawerence Scarborough</a></h3>
                </div>
                <ul class="dc-simplesocialicons dc-socialiconsborder">
                  <li class="dc-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="dc-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                  <li class="dc-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="dc-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                  <li class="dc-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
            <div class="dc-ourteam">
              <figure class="dc-ourteamimg"><img :src="imgLink+'ourteam/img-03.jpg'" alt="img description"></figure>
              <div class="dc-ourteamcontent">
                <div class="dc-title">
                  <a href="javascript:void(0)">Administrator</a>
                  <h3><a href="javascript:void(0);">Lucien Grindstaff</a></h3>
                </div>
                <ul class="dc-simplesocialicons dc-socialiconsborder">
                  <li class="dc-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="dc-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                  <li class="dc-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="dc-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                  <li class="dc-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
    export default {
      data(){
       	return {
          imgLink:window.location.origin+'/storage/images/'
       	}
      },
      methods:{

      },
      created(){
       	document.title="Our volunteers - Admitdoctors.com"
      }
    };
</script>
