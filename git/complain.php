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

            <h1 class="page-header-title">Complain</h1>

           
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

            <div class="col-sm-3">
                
                <div class="mb-3">
              
                    <label for="Complaintype<<" class="form-label">Complaint Type</label>

                    <select class="form-control" id="Complaintype" name="Complaintype">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-3">
                
                <div class="mb-3">
              
                    <label for="Source" class="form-label">Source</label>

                    <select class="form-control" id="Source" name="Source">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-3">
                
                <div class="mb-3">
                    <label for="Complainby" class="form-label">Complain By</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Complainby" id="Complainby"  placeholder="Complain By" aria-label="Complainby">
                     
                    </div>  
                </div>
            </div>   


            <div class="col-sm-3">
                
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>

                    <div class="input-group">
                      <input type="Number" class="form-control" name="Phone" id="Phone"  placeholder="Phone" aria-label="Phone">
                     
                    </div>  
                </div>
            </div> 

            
            <div class="col-sm-3">
                    <div class="mb-3">
                
                        <label for="Date" class="form-label">Date</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Date" id="Date" aria-label="Date">
                     
                        </div>  
                    </div>
            </div> 

            
            <div class="col-3">
                    <label class="form-label">Action Taken</label>
                    <div class="input-group">
                      <Input class="form-control" name="Actiontaken" id="Actiontaken" placeholder="Action Taken" aria-label="Actiontaken">
                    </div>                    
            </div>


            <div class="col-sm-3">
                    <div class="mb-3">
                
                        <label for="Assigned" class="form-label">Assigned</label>

                        <div class="input-group">
                            <input type="Text" class="form-control" name="Assigned" placeholder="Assigned" id="Assigned" aria-label="Assigned">
                     
                        </div>  
                    </div>
            </div> 

            <div class="col-sm-3">
                    <div class="mb-3">
                
                        <label for="Note" class="form-label">Note</label>

                        <div class="input-group">
                            <input type="Text" class="form-control" name="Note" id="Note" placeholder="Note" aria-label="Note">
                     
                        </div>  
                    </div>
            </div> 

            <div class="col-sm-6">
                    <div class="mb-4">
                
                        <label for="Attachdocument" class="form-label">Attach Document</label>

                        <div class="input-group">
                            <input type="Text" class="form-control" name="Attachdocument" id="Attachdocument" placeholder="Attach Document" aria-label="Attachdocument">
                     
                        </div>  
                    </div>
            </div> 

            <div class="col-6">
                    <label class="form-label">Description</label>
                    <div class="input-group">
                      <textarea class="form-control" name="Description" id="Description" placeholder="Description" aria-label="Description"></textarea>
                    </div>                    
            </div>
                            
  </main>
<?php 
include('footer.php');
?>