<template>
    <div class="container">
        <div class="row">
            <div id="dc-twocolumns" class="dc-twocolumns dc-haslayout">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-9 float-left">
                    <div class="dc-searchresult-holder">
                        <div class="dc-searchresult-grid dc-searchresult-list"> 
                            <div class="dc-docpostholder" v-for="(doctor,i) in doctors.data" :key='doctor.doctor_id'>
                                <figure class="dc-docpostimg">
                                    <img v-if="doctor.photo==null && doctor.sex=='male'" :src="$photoPath +'doctors/thumbs/male.jpg'" :alt="doctor.name">

                                    <img v-if="doctor.photo==null && doctor.sex=='female'" :src="$photoPath +'doctors/thumbs/female.jpg'" :alt="doctor.name">

                                    <img v-if="doctor.photo!=null" :src="$photoPath +'doctors/thumbs/doctor.photo'" :alt="doctor.name">

                                    <figcaption v-if="doctor.reg!=null">
                                        <span class="dc-featuredtag text-danger"><i class="fa fa-check-circle"></i></span>
                                    </figcaption>
                                </figure>
                                <div class="dc-docpostcontent">
                                    <div class="dc-title">
                                        <a href="javascript:void(0)" class="dc-docstatus">{{doctor.title}}</a>
                                       <h3>
                                            <a href="javascript:void(0);"> {{ doctor.name }} </a> 
                                            <i class="fa fa-check-circle dc-awardtooltip" v-if="doctor.reg !=null"> <em>BMDC Registration Verified</em></i>
                                        </h3>
                                        <ul class="dc-docinfo">
                                            <li>
                                                <em>{{doctor.education}}</em>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="dc-doclocation dc-doclocationvtwo">
                                        <span><i class="ti-direction-alt"></i> Total of 
                                            <b> {{ getDoctorChameberNum(doctor.doctor_id) }} </b> 
                                            chambers</span>
                                        <div class="dc-btnarea">
                                            <router-link :to="/doctor-details/+ doctor.doctor_id" class="dc-btn">View More Details</router-link>
                                            <a href="javascript:void(0);" @click="makeFavourite()" class="dc-like"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

    </div>          
</template>

<style scoped>
    .bloodLink a{
        color: #3078ef;
        padding: 1em;
        background: #daedfb
    }
    .bloodLink a:hover{
        background: #e7f1f9
    }
    .page-item{
        list-style: none;float: left
    }
</style>

<script>
    export default {
        data(){
        	return {
        		id:this.$route.params.category,
                doctors:{},loading:true,
                resultCount:0,chamber_num:{}
        	}
        },
        methods:{
            makeFavourite(){
                toast.fire({
                   icon: "info",
                   title: "This portion is under development!!"
                });
            },
            get_doctors(){
                axios.get('http://127.0.0.1:8000/api/doctors-with-category/'+this.id)
                .then(response => {
                  this.doctors = response.data;
                  this.loading=false;
                })
                .catch(()=>{
                    toast.fire({icon: "warning", title: "Please refresh the page !"});
                });
            },

            getDoctorsPagination(page = 1) {
                this.loading = true
                axios.get('http://127.0.0.1:8000/api/doctors-with-category/'+this.id+'/?page=' + page)
                .then(response => {
                  this.doctors = response.data;
                  this.loading=false;
                })
                .catch(()=>{
                    toast.fire({icon: "warning", title: "Please refresh the page !"});
                });
            },
            getDoctorChameberNum(doctorID){
                axios.get('http://127.0.0.1:8000/api/doctor-chamber-number/'+ doctorID)
                .then(response => {
                    return response.data;
                })
                .catch(()=>{
                    toast.fire({
                       icon: "warning",title: "Phamber identification errors!"
                    });
                });
            }
        },
        created() {
            this.get_doctors();
            this.getDoctorChameberNum();
        }
    };
</script>
