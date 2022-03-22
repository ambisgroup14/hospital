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

            <h1 class="page-header-title">Add Visitors</h1>

           
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
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="Purpose" class="form-label">Purpose</label>

                    <select class="form-control" id="Purpose" name="Purpose">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Sugar Checkup</option>
                        <option value="2">Fever</option>
                    </select>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="visitorName" class="form-label">Name </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="visitorName" id="visitorName" placeholder="Visitor Name" aria-label="visitor Name">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="Phonenumber" class="form-label">Phone</label>

                    <div class="input-group">
                      <input type="Number" class="form-control" name="Phonenumber" id="Phonenumber" placeholder="Phone Number " aria-label="Phonenumber">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="row">
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="Idcard" class="form-label">ID Card</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Idcard" id="Idcard" placeholder="Id card" aria-label="Id card">
                     
                    </div>  
                   
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                <div class="mb-4">
                    <label for="Visitto" class="form-label">Visit To</label>

                    <select class="form-control" id="Visitto" name="Visitto">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Orthology</option>
                        <option value="2">Cardiologists</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-sm-4">
                  <div class="mb-4">
                    <label for="ipdopdstaff" class="form-label">IPD/OPD/STAFF</label>

                    <select class="form-control" id="ipdopdstaff" name="ipdopdstaff">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
                  </div>
                  

                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="RelatedTo" class="form-label">Related To </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="RelatedTo" id="RelatedTo" placeholder="Related To " aria-label="Related To  ">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="NumberOfPerson" class="form-label">Number Of Person </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="NumberOfPerson" id="NumberOfPerson" placeholder="Number Of Person" aria-label="Number Of Person">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="Tax" class="form-label">Date  </label>

                    <div class="input-group">
                      <input type="Date" class="form-control" name="date" id="date" placeholder="date " aria-label="date">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="row">
              <div class="col-sm-6">
              <div class="mb-2">
                    <label for="intime" class="form-label">In Time</label>

                    <div class="input-group">
                      <input type="Time" class="form-control" name="intime" id="intime" placeholder="In Time " aria-label="In time">
                     
                    </div>                    
                  </div>
                  </div>

                  <div class="col-sm-6">
                  <div class="mb-2">
                    <label for="outtime" class="form-label">Out Time</label>

                    <div class="input-group">
                      <input type="Time" class="form-control" name="outtime" id="outtime" placeholder="Out Time " aria-label="Out time">
                     
                    </div>                    
                  </div>
                  </div>
                  </div>
                  
            
                <div class="col-12">
                    <label class="form-label">Note <span class="form-label-secondary">(Optional)</span></label>
                    <div class="input-group">
                      <textarea class="form-control" name="Note" id="Note" placeholder="Note" aria-label="Note"></textarea>
                    </div>                    
                    </div>
                </div>
            </div>
           
              
            </div>
            
         
          
  </main>
<?php 
include('footer.php');
?>