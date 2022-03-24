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

            <h1 class="page-header-title">TPA Management</h1>

           
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
                 
                        <label for="Name" class="form-label">Name</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Name" id="Name" placeholder="Name" aria-label="Name">
                      </div>   
                    </div> 
            </div>  
            
            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Code" class="form-label">Code</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Code" id="Code" placeholder="Code" aria-label="Code">
                      </div>   
                    </div> 
            </div>   
           
            <div class="col-sm-4">
                  <div class="mb-4">
                    <label for="Contactno" class="form-label">Contact No</label>

                    <div class="input-group">
                      <input type="Number" class="form-control" name="Contactno" id="Contactno" placeholder="Contact No" aria-label="Contactno">
                     
                    </div>  
                  </div>
            </div>   


            <div class="col-sm-4">
                  <div class="mb-4">
                    <label class="form-label">Address</label>
                    <div class="input-group">
                      <textarea class="form-control" name="Address" id="Address" placeholder="Address" aria-label="Address"></textarea>
                    </div>                    
                  </div>
            </div>

            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Contactpersonname" class="form-label">Contact Person Name</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Contactpersonname" id="Contactpersonname" placeholder="Contact Person Name" aria-label="Contactpersonname">
                      </div>   
                    </div> 
            </div>

            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Contactpersonphone" class="form-label">Contact Person Phone</label>

                      <div class="input-group">
                        <input type="Text" class="form-control" name="Contactpersonphone" id="Contactpersonphone" placeholder="Contact Person Phone" aria-label="Contactpersonphone">
                      </div>   
                    </div> 
            </div>
         
  </main>
<?php 
include('footer.php');
?>