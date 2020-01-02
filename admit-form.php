<?php include 'includes/upper.php'?>
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Students</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="insertion/add-students.php" method='post' enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>First Name *</label>
                                    <input name="fname" type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Middle Name *</label>
                                    <input name="mname" type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Last Name *</label>
                                    <input name="lname" type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Gender *</label>
                                    <select name="gender" class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select name="class" class="select2">
                                        <option value="">Please Select Class *</option>
                                        <option >Play</option>
                                        <option >Nursery</option>
                                        <option >One</option>
                                        <option >Two</option>
                                        <option >Three</option>
                                        <option >Four</option>
                                        <option >Five</option>
                                        <option >six</option>
                                        <option >seven</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Section *</label>
                                    <select name="section" class="select2">
                                        <option value="">Please Select a Section *</option>
                                        <option >A</option>
                                        <option >B</option>
                                        <option >C</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Date Of Birth *</label>
                                    <input name="dob" type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Place of birth</label>
                                    <input name="pob" type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" placeholder="" class="form-control">
                                </div>
                                <!-- <div class="col-xl-2 col-lg-4 col-8 form-group">
                                    <label>Religion *</label>
                                    <select class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="3">Buddish</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input name="email" type="email" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input name="phone" type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea name="bio" class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input  type="file" name="photo" id="photo" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button name="submit" type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button name="reset" type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
            </div>
<?php include 'includes/downer.php'?>