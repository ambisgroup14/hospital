<?php 
include('include/header.php');
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">            

            <h1 class="page-header-title">Add Pharmacy</h1>

           
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <form class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Product information</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <div class="row">
                <div class="col-sm-12">
                    <div class="mb-4">
                    <label for="productNameLabel" class="form-label">Medicine Name </label>
                    <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Medicine Name" aria-label="Medicine Name" value="">
                </div></div>
                
            </div>
              <!-- End Form -->

              <div class="row">
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="SKULabel" class="form-label">Medicine Category</label>

                    <select class="form-control" id="medicineCat" name="medicineCat">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Drugs</option>
                    </select>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">Medicine Company</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="medicineCompany" id="medicineCompany" placeholder="Medicine Company" aria-label="Medicine Company">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">Medicine Composition </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="medicineComposition" id="medicineComposition" placeholder="Medicine Composition " aria-label="Medicine Company">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="row">
                <div class="col-sm-3">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="medicineGroup" class="form-label">Medicine Group </label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="medicineGroup" id="medicineGroup" placeholder="Medicine Group" aria-label="Medicine Group">
                     
                    </div>  
                   
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-3">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="minLevel" class="form-label">Min Level </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="minLevel" id="minLevel" placeholder="Min Level" aria-label="Min Level ">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-3">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="reorderLevel" class="form-label">Re-Order Level  </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="reorderLevel" id="reorderLevel" placeholder="Re-Order Level" aria-label="Re-Order Level">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-3">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="Tax" class="form-label">Tax  </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Tax" id="Tax" placeholder="Tax " aria-label="Tax">
                     
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
                    <label for="Unit" class="form-label">Unit</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Unit" id="Unit" placeholder="Unit" aria-label="Unit">                     
                    </div>                     
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="unitPacking" class="form-label">Unit/Packing</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="unitPacking" id="unitPacking" placeholder="Unit/Packing" aria-label="Unit/Packing">
                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
                <div class="col-sm-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="weightLabel" class="form-label">VAT A/C  </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="vat_ac" id="vat_ac" placeholder="VAT A/C" aria-label="VAT A/C">                     
                    </div>                    
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

            <div class="row">
                <div class="col-12">
                    <label class="form-label">Description <span class="form-label-secondary">(Optional)</span></label>
                    <div class="input-group">
                      <textarea class="form-control" name="vat_ac" id="vat_ac" placeholder="Description" aria-label="Description"></textarea>
                    </div>                    

                </div>
            </div>
              <!-- Quill -->
             
              <!-- End Quill -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Media</h4>
            </div>
            <!-- End Header -->
            <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <div class="input-group">
                      <input type="file" class="form-control" name="vat_ac" id="vat_ac" placeholder="Description" aria-label="Description">
                    </div>                    

                </div>
            </div>
            </div>


            <!-- Body -->
            <div class="card-footer d-flex justify-content-end align-items-center gap-3">       
              <input type="hidden" name="insert_medicine" >       
              <button type="submit"  class="btn btn-primary">Save</button>
            </div>
           
            <!-- Body -->
          </div>
          <!-- End Card -->

         
        </div>
        <!-- End Col -->

      </form>
      <!-- End Row -->

     
    </div>
    <!-- End Content -->

    <!-- Footer -->

    
    <!-- End Footer -->
  </main>
<?php 
include('include/footer.php');
?>
