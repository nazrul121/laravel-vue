<div class="dc-navigationarea" id="navbar">
    <div class="container">
        <ul>
            <li v-if="isLoaded">Nazrul Islam</li>
        </ul>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <strong class="dc-logo">
                    <router-link to="/">
                    <img src="{{ asset('storage/images/logo.gif') }}" alt="logo" style="height:70px;"></router-link to="">
                </strong>
                <div class="dc-rightarea">
                    <nav id="dc-nav" class="dc-nav navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="lnr lnr-menu"></i>
                        </button>
                        
                        <div class="collapse navbar-collapse dc-navigation" id="navbarNav">
                            
                            <ul class="navbar-nav">
                                <li class="menu-item-has-children page_item_has_children dc-navactive">
                                    <a href="javascript:void(0);" >Doctors </a>
                                    <div class="sub-menu text-left" style="width:400px;">
                                        <select class="chosen-select locations" name="doc_category" onchange="location = this.value;">
                                            <option style="color:black">Search Doctors Category</option>
                                            <option value="">Cardiologist - হৃদরোগ বিশেষজ্ঞ</span></option>
                                        </select>
                                    </div>
                                </li>
                                <li class="menu-item-has-children page_item_has_children">
                                    <a href="javascript:void(0);">Hospitals</a>
                                    <div class="sub-menu text-left" style="width:350px;">
                                        <select class="chosen-select locations" name="doc_category">
                                            <option style="color:black">Search Hospital Category</option>
                                            <option value="United State">Cardiologist </span></option>
                                        
                                        </select>
                                    </div>
                                </li>
                                
                                <li class="menu-item-has-children page_item_has_children">
                                    <a href="javascript:void(0);">Blood</a>
                                    
                                    <div class="sub-menu text-left">
                                        <select class="chosen-select locations" name="doc_category">
                                            <option style="color:black">Search Blood Group</option>
                                            <option value="United State">A+ blood</option>
                                            <option value="United State">A- blood</option>
                                        </select>
                                    </div>
                                </li>
                                
                                <li class="menu-item-has-children page_item_has_children">
                                  <router-link to="/ambulance">Ambulance </router-link></li>

                                <li class="menu-item-has-children page_item_has_children ">
                                <span class="dc-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                    <a href="javascript:void(0);">Volunteers</a>
                                    <ul class="sub-menu">
                                        <li> <router-link to="/volunteers">Our  Volunteers</router-link></li>
                                        <li> <router-link to="/volunteers-form">Join Us as Volunteer</router-link></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children page_item_has_children ">
                                <span class="dc-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
                                    <a href="javascript:void(0);">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About admitdoctors</a></li>
                                        <li><a href="#">Newspaper Reports</a></li>
                                        <li><a href="#">Adviser panel</a></li>
                                        <li><a href="#">Directors panel</a></li>
                                        <li><a href="#">Video Documents</a></li>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">Statistics documents</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children page_item_has_children"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>
    </div>