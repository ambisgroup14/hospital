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
              <h4 class="card-header-title">Add Issue Items</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <div class="row">

            <div class="col-sm-4">                
                <div class="mb-4">
              
                    <label for="Usertype<<" class="form-label">User Type</label>

                    <select class="form-control" id="User Type" name="User Type">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-4">                
                <div class="mb-4">
              
                    <label for="Issueto" class="form-label">Issue to</label>

                    <select class="form-control" id="Issueto" name="Issueto">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-4">                
                <div class="mb-4">
                    <label for="Issuedby" class="form-label">Issued By</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Issuedby" id="Issuedby" value="Inventory" placeholder="Issued By" aria-label="Issuedby" readonly>
                     
                    </div>  
                </div>
            </div> 
            </div> 

            <div class="row">
            <div class="col-sm-4">
                    <div class="mb-4">
                
                        <label for="Issuedate" class="form-label">Issue Date</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Issuedate" id="Issuedate" aria-label="Issuedateate">
                     
                        </div>  
                    </div>
            </div> 

            <div class="col-sm-4">
                    <div class="mb-4">                
                        <label for="Returndate" class="form-label">Return Date</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Returndate" id="Returndate" aria-label="Returndate">
                     
                        </div>  
                    </div>
            </div> 

                      
            <div class="col-sm-4">                
                <div class="mb-4">
                    <label for="Note" class="form-label">Note</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Note" id="Note"  placeholder="Note" aria-label="Note">
                     
                    </div>  
                </div>
            </div> 
            </div> 

            <div class="row">
            <div class="col-sm-4">                
                <div class="mb-4">              
                    <label for="Itemcategory<<" class="form-label">Item Category</label>

                    <select class="form-control" id="Itemcategory" name="Itemcategory">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-4">
                <div class="mb-4">              
                    <label for="Item" class="form-label">Item</label>

                    <select class="form-control" id="Item" name="Item">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            <div class="col-sm-4">     
                <div class="mb-4">
                    <label for="Quantity" class="form-label">Quantity</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Quantity" id="Quantity"  placeholder="Quantity" aria-label="Quantity">    
                    </div>  
                </div>
            </div>   
            </div>


  </main>
<?php 
include('footer.php');
?>