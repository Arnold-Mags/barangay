<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    if($_SESSION['account_type'] == 0){
        require APPROOT . '/views/includes/user/navigation.php'; 
    }
    if($_SESSION['account_type'] == 2){
        require APPROOT . '/views/includes/bhw/navigation.php'; 
    }
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-2">
                        <div class="card mb-2 col-12 offset-md-3 col-md-6 mt-3 mb-5">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-2"><a href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i></a></div>
                                    <div class="col-8 col-md-12 ">
                                    <h4 class="mx-auto text-center">Barangay Clearance</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body ">
                                <form action="<?php echo URLROOT; ?>/users/request_clearance" method="POST">
                                    <div class="row g-2 pb-3">
                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputLastName" class="col-form-label-sm">Last Name</label>
                                            <input type="text" value="<?php echo $_SESSION['lastname']?>" name="lastName" class="form-control" id="inputLastName"readonly>
                                            <div class="validation-invalid"><?php echo $data['last_nameError'] ?></div>
                                        </div>
                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputFirstName" class="col-form-label-sm">First Name</label>
                                            <input type="text" value="<?php echo $_SESSION['firstname'] ?>" name="firstName" class="form-control" id="inputFirstName"readonly>
                                            <div class="validation-invalid"><?php echo $data['first_nameError'] ?></div>
                                        </div>
                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputMiddleName" class="col-form-label-sm">Middle Name</label>
                                            <input type="text" value="<?php echo $_SESSION['middlename'] ?>" name="middleName" class="form-control" id="inputMiddleName"readonly>
                                            <div class="validation-invalid"><?php echo $data['middle_nameError'] ?></div>
                                        </div>
                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputSuffix" class="col-form-label-sm">Suffix</label>
                                            <input type="text" value="<?php echo $_SESSION['middlename'] ?>" name="suffix" class="form-control" id="inputSuffix"readonly>
                                        </div>
                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputContactNum" class="col-form-label-sm">Contact Number</label>
                                            <input type="text" value="<?php echo $data['contact_number'] ?>" name="contactNum" class="form-control" id="inputContactNum">
                                            <div class="validation-invalid"><?php echo $data['contact_numberError'] ?></div>
                                        </div>

                                        <div class="col-6 col-md-6 input-group-sm">
                                            <label for="inputFormType" class="col-form-label-sm">Type of Certificate</label>
                                            <input class="form-control" type="text" name="formType"  value="Barangay Clearance" id="inputFormType" readonly>
                                        </div>

                                        <div class="col-12 col-md-6 input-group-sm">
                                            <label for="inputPermitTo"  class="col-form-label-sm">Permit to</label>
                                            <select name="permitTo" class="form-select" id="inputPermitTo" onchange="if(this.options[this.selectedIndex].value=='customOption'){toggleField(this,this.nextSibling); this.selectedIndex='0';}">
                                                <option></option>
                                                <option>NEW</option>
                                                <option>RENEWAL TO OPERATE</option> 
                                                <option>BUSINESS</option>
                                                <option>OPERATE TRICYCLE</option>
                                                <option value="customOption">[OTHERS,SPECIFY]</option>
                                            </select><input class="form-control" name="permitTo" id="inputPermitTo" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
                                            <div class="validation-invalid"><?php echo $data['permit_toError'] ?></div>
                                        </div>
                                        
                                        <div class="col-6 col-md-4 input-group-sm">
                                            <label for="inputPurpose"  class="col-form-label-sm">Purpose</label>
                                            <select name="purpose" class="form-select" id="inputPurpose" onchange="if(this.options[this.selectedIndex].value=='customOption'){toggleField(this,this.nextSibling); this.selectedIndex='0';}">
                                                <option></option>
                                                <option>EMPLOYMENT</option>
                                                <option>BUSINESS</option> 
                                                <option>STUDENT</option>
                                                <option value="customOption">[OTHERS,SPECIFY]</option>
                                            </select><input class="form-control" name="purpose" id="inputPurpose" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
                                            <div class="validation-invalid"><?php echo $data['purposeError'] ?></div>
                                        </div>

                                        <div class="col-6 col-md-2 input-group-sm">
                                            <label for="inputQty"  class="col-form-label-sm">Quantity</label>
                                            <input type="text" value="<?php echo $data['qty'] ?>" name="qty" class="form-control" id="inputQty">
                                            <div class="validation-invalid"><?php echo $data['qtyError'] ?></div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 pt-3 mx-auto">
                                            <button class="btn btn-primary" type="submit"><h6 class="my-auto">Submit</h6></button>
                                        </div>
                                    </div>
                                </form>   
                            </div>
                        </div>  
                    </div>
                </main>





<?php
    require APPROOT . '/views/includes/footer.php';
?>