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

            <h1 class="page-header-title">Inventory</h1>

           
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
                    <label for="Additem" class="form-label">Add Item</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Additem" id="Additem"  placeholder="Add Item" aria-label="Additem">
                     
                    </div>  
                </div>
            </div>
            
            <div class="col-sm-6">                
                <div class="mb-4">              
                    <label for="Itemcategory<<" class="form-label">Item Category</label>

                    <select class="form-control" id="Itemcategory" name="Itemcategory">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-6">                
                <div class="mb-4">
                    <label for="Unit" class="form-label">Unit</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Unit" id="Unit"  placeholder="Unit" aria-label="Unit">
                     
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