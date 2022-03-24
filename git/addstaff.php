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

            <h1 class="page-header-title">Add Staff</h1>

           
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
            <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Case" class="form-label">Name</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Name" id="Name" placeholder="Name" aria-label="Name">
                      </div>   
                    </div> 
            </div>   
           

           
            <div class="col-sm-6 ">                
                 <div class="mb-4">
                     <label for="Roll" class="form-label">Roll</label>
 
                     <select class="form-control" id="Roll" name="Roll">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                     </select>
                 </div>
             </div>

             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Designation" class="form-label">Designation</label>
 
                     <select class="form-control" id="Designation" name="Designation">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div> 

             
             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Department" class="form-label">Department</label>
 
                     <select class="form-control" id="Department" name="Department">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div> 

             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Specialist" class="form-label">Specialist</label>
 
                     <select class="form-control" id="Specialist" name="Specialist">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div> 

             <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="epfno" class="form-label">EPF No</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="epfno" id="epfno" placeholder="EPF Number" aria-label="epfno">
                    </div>   
                    </div> 
            </div>   
           
            
            <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Basicsalary" class="form-label">Basic Salary</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Basicsalary" id="Basicsalary" placeholder="Basic Salary " aria-label="Basicsalary">
                    </div>   
                    </div> 
            </div>   

            <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Contracttype" class="form-label">Contract Type</label>
 
                     <select class="form-control" id="Contracttype" name="Contracttype">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div>

             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="workshift" class="form-label">Work Shift</label>
 
                     <select class="form-control" id="workshift" name="workshift">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">Day Shift </option>
                         <option value="2">Night Shift</option>
                     </select>
                 </div>
             </div>

             <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Worklocation" class="form-label">Work Location</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Worklocation" id="Worklocation" placeholder="Work Location" aria-label="Worklocation">
                    </div>   
                    </div> 
            </div>  
        
          
            <div class="col-sm-6">
                  <div class="mb-4">
                
                        <label for="Dateofjoining" class="form-label">Date of Joining </label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Dateofjoining" id="Dateofjoining" aria-label="Dateofjoining">
                     
                        </div>  
                  </div> 
            </div>
              
            
            <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Case" class="form-label">Phone No/E-Contact No</label>

                    <div class="input-group">
                      <input type="Number" class="form-control" name="Case" id="Case" placeholder="Phone No/E-Contact No" aria-label="Case">
                    </div>   
                  </div> 
            </div>   

            <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="EmailID" class="form-label">Email</label>

                    <div class="input-group">
                      <input type="email" class="form-control" name="EmailID" id="EmailID"  placeholder="Email Id"  aria-label="EmailID" require>
                    </div>   
                  </div> 
            </div>  
          
         
            <div class="col-sm-6">                
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

            <div class="col-sm-6">
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
            

            <div class="col-sm-6">
                  <div class="mb-4">
                
                        <label for="Dateofbirth" class="form-label">Date of Birth</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Dateofbirth" id="Dateofbirth" aria-label="Dateofbirth">
                     
                        </div>  
                    </div>
              </div>        
                    
              
              <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Fathername" class="form-label">Father Name</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Fathername" id="Fathername" placeholder="Father Name" aria-label="Fathername">
                    </div>   
                    </div> 
              </div>  
                

              <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Mothername" class="form-label">Mother Name</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Mothername" id="Mothername" placeholder="Mother Name" aria-label="Mothername">
                    </div>   
                  </div> 
              </div>  
               



              <div class="col-sm-6">                
                   <div class="mb-4">
                     <label for="Maritalstatus" class="form-label">Marital Status</label>
 
                     <select class="form-control" id="Maritalstatus" name="Maritalstatus">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">Married</option>
                         <option value="2">Un Married</option>
                     </select>
                 </div>
              </div>
              

              <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Qualification" class="form-label">Qualification</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Qualification" id="Qualification" placeholder="Qualification" aria-label="Qualification">
                    </div>   
                  </div> 
              </div>  

              <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Workexperience" class="form-label">Work Experience</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Workexperience" id="Workexperience" placeholder="Work Experience" aria-label="Workexperience">
                    </div>   
                  </div> 
              </div>  
             
              <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Specialization" class="form-label">Specialization</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Specialization" id="Specialization" placeholder="Specialization" aria-label="Specialization">
                    </div>   
                  </div> 
              </div>  

              <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="Pannumber" class="form-label">Pan Number</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Pannumber" id="Pannumber" placeholder="Pan Number" aria-label="Pannumber">
                     
                    </div>  
                  </div>
              </div>   
           

              <div class="col-sm-6">
                  <div class="mb-4">
                 
                        <label for="Bankdetails" class="form-label">Bank Details</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Bankdetails" id="Bankdetails" placeholder="Bank Details" aria-label="Bankdetails">
                    </div>   
                  </div> 
              </div>  
 
            
                                
  </main>
<?php 
include('footer.php');
?>