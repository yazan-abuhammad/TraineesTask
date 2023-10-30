<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/Default_logo_for_a_tour_website_named_Golden_Triangle_white_an_0_483908d5-0696-4f4a-956b-fd2fe2a86aa8_0.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Admin panal </h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('index') }}">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                
                </li>
               
                <li class="menu-label">Tours</li>
              
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-island'></i>
                        </div>
                        <div class="menu-title">Tours </div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('Tour-products') }}"><i class="bx bx-right-arrow-alt"></i>Tours card</a>
                        </li>
                        <li> <a href="{{ url('Tour-products-details') }}"><i class="bx bx-right-arrow-alt"></i>Tours Details</a>
                        </li>
                        <li> <a href="{{ url('touretable') }}"><i class="bx bx-right-arrow-alt"></i>Tours table</a>
                        </li>
                        <li> <a  href="{{ url('tourcategory') }}"><i class="bx bx-right-arrow-alt"></i>Tours category</a>
                        </li>
                        <li> <a href="{{ url('Tour-add-new-products') }}"><i class="bx bx-right-arrow-alt"></i>Add new Tours </a>
                        </li>
                      
                      
                    </ul>
                </li>
               
              
               
               
                
                <li class="menu-label">User</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">User</div>
                    </a>
                    <ul>
                        <li> <a href="{{ url('Resivation') }}"><i class="bx bx-right-arrow-alt"></i>Resivation</a>
                        </li>
                        <li> <a href="{{ url('Usertable') }}"><i class="bx bx-right-arrow-alt"></i>User</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="{{ url('user-profile') }}">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
              
                
           
         
             
                
                
              
     
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->