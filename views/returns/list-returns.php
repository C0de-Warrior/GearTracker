<!doctype html>
<?php
require('../../includes/validations/geart_validation.php');
require ("../../config/db-config.php");
?>
<html lang="en">

<?php
  require("../../includes/header.php");
    ?>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="../dashboard/main-dash.php" class="header-logo">
                    <img src="../../assets/images/favicon.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <h5 class="logo-title light-logo ml-3">GearTracker</h5>
                </a>
                <div class="iq-menu-bt-sidebar ml-0">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class="active">
                                <a href="../dashboard/main-dash.php" class="svg-icon">
                                    <svg class="svg-icon" id="p-dash1" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                    <span class="ml-4">Dashboards</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="../equipment/list-equipment.php" class=" ">
                                    <svg class="svg-icon" id="p-dash3" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                    <span class="ml-4">Equipment</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="../take_out/equipment-taken.php" class=" ">
                                    <svg class="svg-icon" id="p-dash3" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                    <span class="ml-4">Take out</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="../returns/list-returns.php" class=" ">
                                    <svg class="svg-icon" id="p-dash6" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="4 14 10 14 10 20"></polyline>
                                        <polyline points="20 10 14 10 14 4"></polyline>
                                        <line x1="14" y1="10" x2="21" y2="3"></line>
                                        <line x1="3" y1="21" x2="10" y2="14"></line>
                                    </svg>
                                    <span class="ml-4">Returns</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="../users/list-users.php" class=" ">
                                    <svg class="svg-icon" id="p-dash8" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <span class="ml-4">Users</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../report/report.php" class="">
                                    <svg class="svg-icon" id="p-dash4" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                        <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                    </svg>
                                    <span class="ml-4">Reports</span>
                                </a>
                                <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="p-3"></div>
                </div>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="../dashboard/main-dash.php" class="header-logo">
                            <img src="../../assets/images/favicon.png" class="img-fluid rounded-normal" alt="logo">
                            <h5 class="logo-title ml-3">GearTracker</h5>

                        </a>
                    </div>

                    <div class="d-flex align-items-center" style="margin-left: auto;">
                        <!--<div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                      <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                  </label>
                              </div>
                          </div>
                      </div>-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">

                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5 class="mb-0">All Messages</h5>
                                                        <a class="badge badge-primary badge-card" href="#">3</a>
                                                    </div>
                                                </div>
                                                <div class="px-3 pt-0 pb-0 sub-card">
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Emma Watson</h6>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Ashlynn Franci</h6>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Kianna Carder</h6>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                    href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                        <span class="bg-primary "></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5 class="mb-0">Notifications</h5>
                                                        <a class="badge badge-primary badge-card" href="#">3</a>
                                                    </div>
                                                </div>
                                                <div class="px-3 pt-0 pb-0 sub-card">
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Emma Watson</h6>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Ashlynn Franci</h6>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small"
                                                                    src="../assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h6 class="mb-0">Kianna Carder</h6>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                    href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../../assets/images/user/1.png" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 text-center">

                                                <div class="p-3">
                                                    <h5 class="mb-1"><?php echo $_SESSION['name']; ?></h5>

                                                    <div class="d-flex align-items-center justify-content-center mt-3">

                                                        <a href="../auth/login.php" class="btn border">Sign Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <h4 class="mb-3">New Order</h4>
                            <div class="content create-workform bg-body">
                                <div class="pb-3">
                                    <label class="mb-2">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Name or Email">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">Returns List</h4>
                                <p class="mb-0">Returns dashboard shows the graphical representation of the channel
                                    and Reference <br>wise returns with the comparison to the total units sold..</p>
                            </div>
                            <a href="../returns/add-return.php" class="btn btn-primary add-list"><i
                                    class="las la-plus mr-3"></i>Add Returns</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive rounded mb-3">
                            <table class="data-table table mb-0 tbl-server-info">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">
                                        <th>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                <label for="checkbox1" class="mb-0"></label>
                                            </div>
                                        </th>
                                        <th>Date</th>
                                        <th>Reference No</th>
                                        <th>Biller</th>
                                        <th>Customer</th>
                                        <th>Grand Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="ligth-body">
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                <label for="checkbox2" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>01 jan 2021</td>
                                        <td>RETURN2001</td>
                                        <td>Test Biller</td>
                                        <td>Pete Sariya</td>
                                        <td>20.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                <label for="checkbox3" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>08 jan 2021</td>
                                        <td>RETURN2002</td>
                                        <td>Test Biller</td>
                                        <td>Monty Carlo</td>
                                        <td>25.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                <label for="checkbox4" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>15 jan 2021</td>
                                        <td>RETURN2003</td>
                                        <td>Test Biller</td>
                                        <td>Ira Membrit</td>
                                        <td>20.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox5">
                                                <label for="checkbox5" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>20 jan 2021</td>
                                        <td>RETURN2004</td>
                                        <td>Test Biller</td>
                                        <td>Greta Life</td>
                                        <td>23.0</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox6">
                                                <label for="checkbox6" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>23 jan 2021</td>
                                        <td>RETURN2005</td>
                                        <td>Test Biller</td>
                                        <td>Barb Ackue</td>
                                        <td>30.0</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox7">
                                                <label for="checkbox7" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>23 feb 2021</td>
                                        <td>RETURN2006</td>
                                        <td>Test Biller</td>
                                        <td>Bob Frapples</td>
                                        <td>18.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox8">
                                                <label for="checkbox8" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>28 feb 2021</td>
                                        <td>RETURN2021</td>
                                        <td>Test Biller</td>
                                        <td>Paige Turner</td>
                                        <td>16.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox9">
                                                <label for="checkbox9" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>01 mar 2021</td>
                                        <td>RETURN2007</td>
                                        <td>Test Biller</td>
                                        <td>Anna Mull</td>
                                        <td>20.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox d-inline-block">
                                                <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                <label for="checkbox10" class="mb-0"></label>
                                            </div>
                                        </td>
                                        <td>07 mar 2021</td>
                                        <td>RETURN2021</td>
                                        <td>Test Biller</td>
                                        <td>Ira Membrit</td>
                                        <td>18.5</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge badge-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="View" href="#"><i
                                                        class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Delete"
                                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
            <!-- Modal Edit -->
            <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="popup text-left">
                                <div class="media align-items-top justify-content-between">
                                    <h3 class="mb-3">Product</h3>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                                <div class="content edit-notes">
                                    <div class="card card-transparent card-block card-stretch event-note mb-0">
                                        <div class="card-body px-0 bukmark">
                                            <div
                                                class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                                <div class="quill-tool">
                                                </div>
                                            </div>
                                            <div id="quill-toolbar1">
                                                <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                                    Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                                <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                                <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
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
    </div>
    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    <script src="../../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../../assets/js/table-treeview.js></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src=" ../../assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="../../assets/js/app.js"></script>
</body>

</html>