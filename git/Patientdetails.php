<?php 
include('header.php');
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">            

            <h1 class="page-header-title">Patient Details</h1>

           
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Basic Info</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <div class="row">
            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Case" class="form-label">Name</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Name" id="Name" placeholder="Name" aria-label="Name">
                      </div>   
                    </div> 
            </div>   
           
            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Guardianname" class="form-label">Guardian Name</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Guardianname" id="Guardianname" placeholder="Guardian Name" aria-label="Guardianname">
                      </div>   
                    </div> 
            </div>

            <div class="col-sm-4">                
                 <div class="mb-4">
                     <label for="Gender" class="form-label">Gender</label>
 
                     <select class="form-control" id="Gender" name="Gender">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">Male</option>
                         <option value="2">Female</option>
                         <option value="3">Others</option>

                     </select>
                 </div>
             </div> 
             </div> 

             <div class="row">
             <div class="col-sm-4">
                  <div class="mb-4">
                
                        <label for="Dateofbirth" class="form-label">Date of Birth</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Dateofbirth" id="Dateofbirth" aria-label="Dateofbirth">
                     
                        </div>  
                    </div>
              </div> 
              
              <div class="col-sm-4">
                  <div class="mb-4">
                
                        <label for="Age" class="form-label">Age</label>

                        <div class="input-group">
                            <input type="text" class="form-control" name="Age" id="Age" placeholder="Age" aria-label="Age">
                     
                        </div>  
                    </div>
              </div> 
              

              <div class="col-sm-4">
                  <div class="mb-4">
                     <label for="Bloodgroup" class="form-label">Blood Group</label>
 
                     <select class="form-control" id="Bloodgroup" name="Bloodgroup">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>

                     </select>
                  </div>
            </div>
            </div>

            <div class="row">
            <div class="col-sm-4">                
                   <div class="mb-4">
                     <label for="Maritalstatus" class="form-label">Marital Status</label>
 
                     <select class="form-control" id="Maritalstatus" name="Maritalstatus">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">Married</option>
                         <option value="2">Un Married</option>
                     </select>
                 </div>
              </div>
            
              <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Phonenumber" class="form-label">Phone Number</label>

                    <div class="input-group">
                      <input type="Number" class="form-control" name="Phonenumber" id="Phonenumber" placeholder="Phone Number" aria-label="Phonenumber">
                    </div>   
                    </div> 
              </div>

              <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="EmailID" class="form-label">Email</label>

                    <div class="input-group">
                      <input type="email" class="form-control" name="EmailID" id="EmailID"  placeholder="Email Id"  aria-label="EmailID" require>
                    </div>   
                  </div> 
            </div>
            </div>

            
            <div class="row">
            <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="Remark" class="form-label">Remark</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Remark" id="Remark"  placeholder="Remark"  aria-label="Remark">
                    </div>   
                  </div> 
            </div>

            <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="Anyknownalergies" class="form-label">Any Known Alergies</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Anyknownalergies" id="Anyknownalergies"  placeholder="Any Known Alergies"  aria-label="Anyknownalergies">
                    </div>   
                  </div> 
            </div>

            <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="Tpaid" class="form-label">TPA ID</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Tpaid" id="Tpaid"  placeholder="TPA ID"  aria-label="Tpaid">
                    </div>   
                  </div> 
            </div> 
            </div> 

            <div class="row">
            <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="TPAvalidity" class="form-label">TPA Validity</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="TPAvalidity" id="TPAvalidity"  placeholder="TPA Validity"  aria-label="TPAvalidity">
                    </div>   
                  </div> 
            </div> 
            
            <div class="col-sm-4">
                  <div class="mb-4">
                 
                        <label for="Nationidentificationnumber" class="form-label">Nation Identification Number</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Nationidentificationnumber" id="Nationidentificationnumber"  placeholder="Nation Identification Number"  aria-label="Nationidentificationnumber">
                    </div>   
                  </div> 
            </div>


            <div class="col-sm-4">
                  <div class="mb-4">
                    <label for="Alternatenumber" class="form-label">Alternate Number</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Alternatenumber" id="Alternatenumber" placeholder="Alternate Number" aria-label="Alternatenumber">
                     
                    </div>  
                  </div>
              </div>
              </div>


              <div class="col-sm-12">
                  <div class="mb-4">
                 
                        <label for="Address" class="form-label">Address</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Address" id="Address"  placeholder="Address"  aria-label="Address">
                    </div>   
                  </div> 
            </div>
           
            
                                
  </main>
<?php 
include('footer.php');
?>