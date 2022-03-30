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
              <h4 class="card-header-title">Add Items</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
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
              
                    <label for="Supplier" class="form-label">Supplier</label>

                    <select class="form-control" id="Supplier" name="Supplier">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>

            </div>

            <div class="row">
            <div class="col-sm-4">
                
                <div class="mb-4">
              
                    <label for="Store" class="form-label">Store</label>

                    <select class="form-control" id="Store" name="Store">
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

            <div class="col-sm-4">
                
                <div class="mb-4">
                    <label for="Purchaseprice" class="form-label">Purchase Price</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Purchaseprice" id="Purchaseprice"  placeholder="Purchase Price" aria-label="Purchaseprice">
                     
                    </div>  
                </div>
            </div>   
            </div>

            <div class="row">

            <div class="col-sm-4">
                    <div class="mb-4">
                
                        <label for="Date" class="form-label">Date</label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="Date" id="Date" aria-label="Date">
                     
                        </div>  
                    </div>
            </div> 
 

            <div class="col-sm-4">
                    <div class="mb-4">
                 
                        <label for="Attachdocument" class="form-label">Attach Document</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Attachdocument" id="Attachdocument" placeholder="Attach Document" aria-label="Attachdocument">
                    </div>   
                    </div> 
            </div>
  

            <div class="col-4">
                    <label class="form-label">Description</label>
                    <div class="input-group">
                      <textarea class="form-control" name="Description" id="Description" placeholder="Description" aria-label="Description"></textarea>
                    </div>                    
            </div>

            </div>  
 

                
         
  </main>
<?php 
include('footer.php');
?>