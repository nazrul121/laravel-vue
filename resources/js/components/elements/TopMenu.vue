<template>
    <div class="dc-navigationarea" id="navbar">
        <div class="container">
           
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="dc-logo">
                        <router-link to="/">
                        <img :src="imgLink + 'logo.gif'" alt="logo" style="height:70px;"></router-link>
                    </strong>
                    <div class="dc-rightarea">
                        <nav id="dc-nav" class="dc-nav navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="lnr lnr-menu"></i>
                            </button>
                            
                            <div class="collapse navbar-collapse dc-navigation" id="navbarNav">
                                
                                <ul class="navbar-nav">
                                    

                                    <li class="menu-item-has-children page_item_has_children">
                                        <span class="dc-dropdowarrow">
                                        <i class="lnr lnr-chevron-right"></i></span>
                                        <a href="javascript:void(0);" @mouseover="showMenu()">Doctors</a>
                                        <ul class="sub-menu menuScroll" @click="hideMenu()">
                                            <p v-if="loading" class="text-center"><span class="text-info">Loading ...</span></p>
                                            <li v-for="doc_type in doc_categories"  v-if="!loading">
                                                <router-link :to="/category-doctors/+doc_type.id">
                                                {{doc_type.title}} - {{doc_type.title_bn}}</router-link>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                
                                    
                                    <li class="menu-item-has-children page_item_has_children">
                                        <span class="dc-dropdowarrow">
                                        <i class="lnr lnr-chevron-right"></i></span>
                                        <a href="javascript:void(0);" @mouseover="showMenu()">Blood Donors</a>
                                        <ul class="sub-menu menuScroll2" @click="hideMenu()">
                                            <p v-if="loading" class="text-center"><span class="text-info">Loading ...</span></p>
                                            <li v-for="blood in bloods" v-if="!loading">
                                                <router-link :to="/blood-donor/+blood.group">
                                                {{blood.title}}
                                                </router-link>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="menu-item-has-children page_item_has_children">
                                      <router-link to="/ambulance">Ambulance </router-link></li>

                                    <li class="menu-item-has-children page_item_has_children ">
                                        <span class="dc-dropdowarrow">
                                        <i class="lnr lnr-chevron-right"></i></span>
                                        <a href="javascript:void(0);" @mouseover="showMenu()">Volunteers</a>
                                        <ul class="sub-menu menuScroll2" @click="hideMenu()">
                                            <li @click="hideMenu()"> <router-link to="/volunteers">Our  Volunteers</router-link></li>
                                            <li @click="hideMenu()"> <router-link to="/volunteer-form">Join Us as Volunteer</router-link></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children page_item_has_children">
                                        <router-link to="/contact-us">Contact</router-link></li>
                                </ul>
                            </div>
                        </nav>
                        
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
            doc_categories:{}, hos_categories:{},

            bloods:[
                {group:'A+', title:'A+ Blood Donors'},
                {group:'A-', title:'A- Blood Donors'},
                {group:'B+', title:'B+ Blood Donors'},
                {group:'B-', title:'B- Blood Donors'},
                {group:'AB+', title:'AB+ Blood Donors'},
                {group:'AB-', title:'AB- Blood Donors'},
                {group:'O+', title:'O+ Blood Donors'},
                {group:'O-', title:'O- Blood Donors'},
                {group:'Others', title:'Other Blood Donors'},
            ],
            imgLink:window.location.origin+'/storage/images/',
            loading:true,
            
        }
    },
    methods:{
        showMenu(){
            $('.sub-menu').slideDown('fast');
        },
        hideMenu(){
            $('.sub-menu').slideUp('fast');
        },
    
        get_doctor_categories() {
          axios.get('http://api.admitdoctors.com/doctor_categories')
            .then(response => {
              this.doc_categories = response.data;
              this.loading=false;
            })
            .catch(()=>{
                toast.fire({
                   icon: "warning",
                   title: "Please refresh the page !"
                });
            });;
        },
        get_hospital_categories() {
          axios.get('http://api.admitdoctors.com/hospital_categories')
            .then(response => {
              this.hos_categories = response.data;
              this.loading=false;
            })
            .catch(()=>{
                toast.fire({
                   icon: "warning",
                   title: "Loading error!! Please refresh the page!!!"
                });
            });
        },
    },
    created() {
        this.get_doctor_categories();
        this.get_hospital_categories();
        // console.log('Component mounted.')
    }
};
</script>
