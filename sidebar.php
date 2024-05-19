                  <!-- ========== Topbar Start ========== -->

                  <div class="navbar-custom">
                      <div class="topbar container-fluid">
                          <div class="d-flex align-items-center gap-1">

                              <!-- Topbar Brand Logo -->
                              

                              <!-- Sidebar Menu Toggle Button -->
                              <button class="button-toggle-menu">
                                  <i class="ri-menu-line"></i>
                              </button>

                              <!-- Horizontal Menu Toggle Button -->
                              <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                  <div class="lines">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                  </div>
                              </button>

                              <!-- Topbar Search Form -->
                              <div class="app-search d-none d-lg-block">
                                  <form>
                                      <div class="input-group">
                                          <input type="search" class="form-control" placeholder="Search...">
                                          <span class="ri-search-line search-icon text-muted"></span>
                                      </div>
                                  </form>
                              </div>
                          </div>

                          <ul class="topbar-menu d-flex align-items-center gap-3">
                              <!-- menu and search -->
                              <li class="dropdown d-lg-none">
                                  <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                      <i class="ri-search-line fs-22"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                      <form class="p-3">
                                          <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                      </form>
                                  </div>
                              </li>

                              <!-- language -->
                              

                              <!-- drop down emails-->
                              

                              <!-- drop down notifications -->
                              

                              <!-- setting -->
                              

                              <!-- dark mode -->
                              <li class="d-none d-sm-inline-block">
                                  <div class="nav-link" id="light-dark-mode">
                                      <i class="ri-moon-line fs-22"></i>
                                  </div>
                              </li>

                              <!--  profile -->
                              <li class="dropdown">
                                  <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                      <span class="account-user-avatar">
                                          <img src="assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                                      </span>
                                      <span class="d-lg-block d-none">
                                          <h5 class="my-0 fw-normal">Surafel <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                                      </span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                      <!-- item-->
                                      <div class=" dropdown-header noti-title">
                                          <h6 class="text-overflow m-0">Welcome !</h6>
                                      </div>

                                      <!-- item-->
                                      <!-- <a href="pages-profile.html" class="dropdown-item">
                                          <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                          <span>My Account</span>
                                      </a> -->

                                      <!-- item-->
                                      <!-- <a href="pages-profile.html" class="dropdown-item">
                                          <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                                          <span>Settings</span>
                                      </a> -->

                                      <!-- item-->
                                      <!-- <a href="pages-faq.html" class="dropdown-item">
                                          <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                                          <span>Support</span>
                                      </a> -->

                                      <!-- item-->
                                      <!-- <a href="auth-lock-screen.html" class="dropdown-item">
                                          <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                          <span>Lock Screen</span>
                                      </a> -->

                                      <!-- item-->
                                      <!-- <a href="auth-logout-2.html" class="dropdown-item">
                                          <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                          <span>Logout</span>
                                      </a> -->
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>



                  <!-- ========== Left Sidebar Start ========== -->

                  <div class="leftside-menu">

                      <!-- Brand Logo Light -->

                      <a href="index.php" class="logo logo-light">
                          <span class="logo-lg">
                              <img src="assets/images/GenPro.png" alt="logo">
                          </span>
                          <span class="logo-sm">
                              <img src="assets/images/GenPro1.png" alt="small logo">
                          </span>
                      </a>

                      <!-- Brand Logo Dark -->
                      <a href="index.html" class="logo logo-dark">
                          <span class="logo-lg">
                              <img src="assets/images/logo-dark.png" alt="dark logo">
                          </span>
                          <span class="logo-sm">
                              <img src="assets/images/logo-sm.png" alt="small logo">
                          </span>
                      </a>

                      <!-- Sidebar -left -->
                      <div class="h-100" id="leftside-menu-container" data-simplebar>

                          <!--- Sidemenu -->
                          <ul class="side-nav">
                              <li class="side-nav-item">
                                  <a href="index.php" class="side-nav-link">
                                      <i class="ri-dashboard-3-line"></i>
                                      <span class="badge bg-success float-end">9+</span>
                                      <span> Dashboard </span>
                                  </a>
                              </li>

                              <!-- sidebar Generator -->
                              <li class="side-nav-item">
                                  <a data-bs-toggle="collapse" href="#sidebarGenerator" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                      <i class="ri-pages-line"></i>
                                      <span> Home Care </span>
                                      <span class="menu-arrow"></span>
                                  </a>
                                  <div class="collapse" id="sidebarGenerator">
                                      <ul class="side-nav-second-level">
                                          <li>
                                              <a href="add_Homecare.php">Add Home Care</a>
                                          </li>
                                          <li>
                                              <a href="list_Homecare.php">Manage Quantities</a>
                                      </ul>
                                  </div>
                              </li>

                              <!-- sidebar Spharepart -->
                              <li class="side-nav-item">
                                  <a data-bs-toggle="collapse" href="#sidebarSpharePart" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                                      <i class="ri-group-2-line"></i>
                                      <span> Personal Care </span>
                                      <span class="menu-arrow"></span>
                                  </a>
                                  <div class="collapse" id="sidebarSpharePart">
                                      <ul class="side-nav-second-level">
                                          <li>
                                              <a href="add_Personalcare.php">Add Personal Care</a>
                                          </li>
                                          <li>
                                              <a href="list_Personalcare.php">Manage Quantities</a>
                                          </li>
                                      </ul>
                                  </div>
                              </li>

                              <!-- sidebar Rental -->
                              <li class="side-nav-item">
                                  <a data-bs-toggle="collapse" href="#sidebarRental" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                                      <i class="ri-group-2-line"></i>
                                      <span> Orders </span>
                                      <span class="menu-arrow"></span>
                                  </a>
                                  <div class="collapse" id="sidebarRental">
                                      <ul class="side-nav-second-level">
                                          <li>
                                              <a href="Orders.php">List Of Orders</a>
                                          </li>
                                          <li>
                                              <a href="approved.php">Approved Orders</a>
                                          </li>
                                      </ul>
                                  </div>
                              </li>
                          </ul>
                          <div class="clearfix"></div>
                      </div>
                  </div>