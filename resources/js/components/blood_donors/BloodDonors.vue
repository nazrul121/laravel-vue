<template>
    <div class="container">
        <div class="row">
            <div id="dc-twocolumns" class="dc-twocolumns dc-haslayout">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-left">

                    <div class="dc-docsingle-holder">
                        <div class="tab-content dc-haslayout">
                            <div class="dc-contentdoctab dc-feedback-holder" id="feedback">
                                <div class="dc-feedback">
                                    <div class="dc-consultation-content dc-forumcontent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="dc-consultation-details">
                                                    <figure class="dc-consultation-img ">
                                                        <img :src="imgLink+'forum/img-04.jpg'" alt="img">
                                                    </figure>
                                                    <div class="dc-consultation-title">
                                                        <h5>
                                                            <a href="javascript:void(0);">Dr. Nubia Riccardi </a>
                                                            <i class="fa fa-tint text-danger"> AB+</i>
                                                            <em>Registration VerifiedRe gistration Verified</em>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="dc-pagination">
                                            
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
                    
                </div>
            </div>
        </div>

       
    </div>
</template>

<style scoped="">
    .bloodLink a{
        color: #3078ef;
        padding: 1em;
        background: #daedfb
    }
    .bloodLink a:hover{
        background: #e7f1f9
    }
</style>


<script>
    export default {
        data(){
        	return {
                blood_group:this.$route.params.blood,
                imgLink:window.location.origin+'/storage/images/'
        	}
        },
        methods:{

        },
        afterRouteUpdate(){
            blood_group=this.$route.params.blood;
        },
        created() {
          document.title=  this.blood_group +" Blood Donors - Admitdoctors.com";

        }  
    };
</script>