
<?php 
session_start();
include 'includes/upper.php'; 
?>

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <div class="ui-btn-wrap">
                                    <ul>
                                        <!-- modal trigger! -->
                                        <li><button type="button" class="btn-fill-lmd radius-30 text-light shadow-dodger-blue bg-dodger-blue" data-toggle="modal" data-target="#large-modal">Add Student</button></li> 
                                    </ul>
                                </div>
                                <h3>All Students Data</h3>
                                <div class="modal-box">
                                    <!-- Large Modal -->
                                    <div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add New student</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card height-auto">
                                                        <div class="card-body">
                                                            <form class="new-added-form" action="all-student.php" method='post' enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>First Name *</label>
                                                                        <input name="fname" type="text" placeholder="" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Middle Name *</label>
                                                                        <input name="mname" type="text" placeholder="" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Last Name *</label>
                                                                        <input name="lname" type="text" placeholder="" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Gender *</label>
                                                                        <select name="gender" class="select2">
                                                                            <option value="">Please Select Gender *</option>
                                                                            <option>Male</option>
                                                                            <option>Female</option>
                                                                            <option>Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
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
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Section *</label>
                                                                        <select name="section" class="select2">
                                                                            <option value="">Please Select a Section *</option>
                                                                            <option >A</option>
                                                                            <option >B</option>
                                                                            <option >C</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Date Of Birth *</label>
                                                                        <input name="dob" type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                                                            data-position='bottom right'>
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
                                                                        <label>Place of birth</label>
                                                                        <input name="pob" type="text" placeholder="" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-4 col-8 form-group">
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
                                                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                                                                        <label>E-Mail</label>
                                                                        <input name="email" type="email" placeholder="" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4 col-lg-6 col-12 form-group">
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
                                                            <?php
                                                                    include 'dbConnection/connection.php'; 

                                                                if($_POST){
                                                                    //including database connection
                                                                    $target_dir = "images/uploaded/";
                                                                    $target_file = $_FILES["photo"]["name"];
                                                                    $targetFilePath = $target_dir.$target_file;
                                                                    $imageFileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
                                                                    $uploadOk = 1;
                                                                    try{
                                                                        $query = "INSERT INTO students set photo=:photo, fname=:fname, mname=:mname,". 
                                                                        " lname=:lname, gender=:gender, class=:class, section=:section, address=:address,".
                                                                        " date_of_birth=:dob, place_of_birth=:pob,phone=:phone,email=:email, joined=:joined";
                                                                        if($con){
                                                                            $stmt = $con->prepare($query);
                                                                            echo "connection established!";
                                                                        }
                                                                        else{
                                                                            echo "not succeeded!";
                                                                        }

                                                                        //allowed types
                                                                        $allowTypes = array('jpg', 'png', 'jpeg');
                                                                        if(in_array($imageFileType, $allowTypes)){
                                                                            //upload to server
                                                                            if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)){
                                                                                $photo=$target_file;
                                                                            }
                                                                        }
                                                                        //posted variables;
                                                                        $fname = htmlspecialchars(strip_tags($_POST['fname']));    
                                                                        $mname = htmlspecialchars(strip_tags($_POST['mname']));
                                                                        $lname = htmlspecialchars(strip_tags($_POST['lname']));
                                                                        $gender = htmlspecialchars(strip_tags($_POST['gender']));
                                                                        $class = htmlspecialchars(strip_tags($_POST['class']));
                                                                        $section = htmlspecialchars(strip_tags($_POST['section']));
                                                                        $address = htmlspecialchars(strip_tags($_POST['address']));
                                                                        $dob = htmlspecialchars(strip_tags($_POST['dob']));
                                                                        $pob = htmlspecialchars(strip_tags($_POST['pob']));
                                                                        $phone = htmlspecialchars(strip_tags($_POST['phone']));
                                                                        $email = htmlspecialchars(strip_tags($_POST['email']));
                                                                        $joined = date('Y-m-d H:i:s');

                                                                        //bindig parameters
                                                                        $stmt->bindParam(':photo',$target_file);
                                                                        $stmt->bindParam(':fname',$fname);
                                                                        $stmt->bindParam(':mname',$mname);
                                                                        $stmt->bindParam(':lname',$lname);
                                                                        $stmt->bindParam(':gender',$gender);
                                                                        $stmt->bindParam(':class',$class);
                                                                        $stmt->bindParam(':section',$section);
                                                                        $stmt->bindParam(':address',$address);
                                                                        $stmt->bindParam(':dob',$dob);
                                                                        $stmt->bindParam(':pob',$pob);
                                                                        $stmt->bindParam(':phone',$phone);
                                                                        $stmt->bindParam(':email',$email);
                                                                        $stmt->bindParam(':joined',$joined);

                                                                        //query execution
                                                                        if($stmt->execute()){
                                                                            echo "
                                                                            <div class='ui-alart-box'>".
                                                                                "<div class='icon-color-alart'>".
                                                                                    "<div class='alert icon-alart bg-light-green2' role='alert'>".
                                                                                        "<i class='far fa-hand-point-right bg-light-green3'></i>".
                                                                                        "Student added successfully!".
                                                                                    "</div>".
                                                                                "</div>".
                                                                            "</div>";
                                                                        }
                                                                        else{
                                                                            echo "<div class='alert icon-alart bg-light-red'>Unscesseful</div>";
                                                                        }
                                                                    }
                                                                    catch(PDOException $exception){
                                                                        die('ERROR: '.$exception->getMessage());
                                                                    }
                                                                }
                                                                ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="footer-btn bg-dark-low"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="footer-btn bg-linkedin">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Roll</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Parents</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query2 = "Select sno, photo, fname, mname, lname, gender, class, section, address, date_of_birth, phone, email from students order by sno asc";
                                        $stmt2 = $con->prepare($query2);
                                        $stmt2->execute();
                                        //get the number of rows
                                        $num = $stmt2->rowCount();
                                    
                                        if($num>0){
                                            while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                                //extract row in $ than $row['']
                                                extract($row);
                                                echo "<tr>" 
                                                        ."<td>"
                                                            ."<div class='form-check'>"
                                                                ."<input type='checkbox' class='form-check-input'>"
                                                                ."<label class='form-check-label'>{$sno}</label>"
                                                            ."</div>"
                                                        ."</td>"
                                                        ."<td class='text-center col-md-1'><img src='images/uploaded/{$photo}' alt='photo'></td>"
                                                        ."<td>{$fname} {$mname} {$lname}"
                                                        ."<td>{$gender}</td>"
                                                        ."<td>{$class}</td>"
                                                        ."<td>{$section}</td>"
                                                        ."<td>{$address}</td>"
                                                        ."<td>{$date_of_birth}</td>"
                                                        ."<td>{$phone}</td>"
                                                        ."<td>{$email}</td>"
                                                        ."<td>"
                                                            ."<div class='dropdown'>"
                                                                ."<a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>"
                                                                    ."<span class='flaticon-more-button-of-three-dots'></span>"
                                                                ."</a>"
                                                                ."<div class='dropdown-menu dropdown-menu-right'>"
                                                                    ."<a class='dropdown-item' href='#'><i class='fas fa-times text-orange-red'></i>Close</a>"
                                                                    ."<a class='dropdown-item' href='#'><i class='fas fa-cogs text-dark-pastel-greeen'></i>Edit</a>"
                                                                    ."<a class='dropdown-item' href='#'><i class='fas fa-redo-alt text-orange-peel'></i>Refresh</a>"
                                                                ."</div>"
                                                            ."</div>"
                                                        ."</td>"
                                                    ."</tr>";
                                                
                                           }
                                        }
                                    ?>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:54:35 GMT -->
</html>