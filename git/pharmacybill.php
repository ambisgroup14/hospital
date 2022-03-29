<?php 
include('header.php');
?>

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
     <div>
        <div class="row align-items-end mb-3">
          <div class="col-sm mb-2 mb-sm-0">            
            <h1 class="page-header-title">Pharmacy Bill</h1>
          </div>
          <!-- End Col -->
          <div class="row">
          <div class="col-sm-12 col-lg-6">
            
          <label for="Medicinecategory" class="form-label" >Patient Name</label>

          <select class="js-example-basic-single form-control" name="state" style="height:35px !important">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          </div>
        
        
          <div class="col-sm-6">
        
             <label for="Medicinecategory" class="form-label" >Prescription No</label>

             <input type="text" class="form-control" placeholder="Prescription No">
           

          </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <!-- Nav -->   
      </div>
      
      <!-- End Page Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table class="table table-borderless table-thead-bordered card-table">
            <thead class="thead-light" style="white-space:nowrap"> 
              <tr>
               
                <th scope="col">
    
                    <label for="Medicinecategory" class="form-label" >Medicine Category</label>
               
                </th>
  
                <th scope="col">              
                
                    <label for="Medicinename" class="form-label">Medicine Name</label>
                </th>
                              
               <th scope="col">
                             
                    <label for="Batchno" class="form-label">Batch No</label>
                </th>
               
                <th scope="col">
                  
                    <label for="ExpairyDate" class="form-label">Exp Date</label>
                </th>
                              
                <th scope="col">
        
                    <label for="Quantity" class="form-label">Qty</label>
                </th>
                              
               <th scope="col">
                              
                    <label for="Saleprice($)" class="form-label">Price</label>
                </th>
                           
                <th scope="col">
              
                    <label for="Tax" class="form-label">Tax</label>
                </th>
                             
                <th scope="col">
             
                    <label for="Amount($)" class="form-label">Amount</label>
                </th>

                <th scope="col">
             
                     <button type="button" class="btn btn-success">+</button>
                </th>
               
     
              </tr>
              </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                  <div class="col-md-12">
                  <div class="mb-4">
                      <select class="form-control" id="Select" name="Select">
                            <option value="" selected disabled>Select</option>
                            <option value="1">Tablet</option>
                            <option value="2">Capsules</option>
                            <option value="2">Drops</option>
                            <option value="2">Injections</option>
                            <option value="2">Inhalers</option>
                            <option value="2">Syrup</option>
                        </select>

                 
                  </div> 
                  </div> 
                  </div> 
                </td>
              
                <td class="table-column-pe-0">
                  <div class="form-check">
                  <div class="mb-4">
                      <select class="form-control" id="Select" name="Select">
                          <option value="" selected disabled>Select</option>
                          <option value="1">Synthroid</option>
                          <option value="2">Crestor</option>
                          <option value="3">Ventolin</option>
                          <option value="4">Nexium</option>
                          <option value="5">Lantus</option>
                          <option value="6">Lyrica</option>
                          <option value="7">Januvia</option>
                        
                      </select>
                  </div> 
                  </div> 

                </td>


                <td class="table-column-pe-0">
                 
                  <select class="form-control" id="Select" name="Select">
                        <option value="" selected disabled>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                  </select>
                 
                </td>

                <td>
                  
                    <input type="" class="form-control" name="expairyDate" id="expairyDate" aria-label="expairyDate">
                  
                </td>

                <td>
                 
                    <input type="" class="form-control" name="Quantity" id="Quantity" aria-label="Quantity">
                 
                </td>

                <td>
               
                    <input type="Number" class="form-control" name="saleprice" id="saleprice" aria-label="saleprice">

                </td>

                <td>
              
                    <input type="Number" class="form-control" name="Tax" id="Tax" aria-label="Tax">
              
                </td>

                <td>
              
                    <input type="Number" class="form-control" name="Amount" id="Amount" placeholder="0.00" aria-label="Amount">
              
                </td>

                <td>
                
                  
                    <button type="button" class="btn btn-outline-danger">X</button>
                
                </td>
                    </div>
                  </div>
                </div>
                </tr>
                                
            </tbody>
          </table>
</div>
        
<br>
<br>
<br>
         
        <!-- End Table -->

        <div class="row">  
          <div class="col-6">
              <div class="row">  
                <div class="col-sm-6">
                    
                    <div class="mb-3">
                        <label for="Hospitaldoctor" class="form-label">Hospital Doctor</label>

                        <select class="form-control" id="Hospitaldoctor" name="Hospitaldoctor">
                            <option value="" selected disabled>--Select category--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
          


                <div class="col-sm-6">
                      <div class="mb-3">
                    
                            <label for="Doctorname" class="form-label">Doctor Name</label>

                        <div class="input-group">
                          <input type="Text" class="form-control" name="Doctorname" id="Doctorname" placeholder="Doctor Name" aria-label="Doctorname">
                        </div>   
                    </div> 
                </div>   


          </div>
            <div class="row">  
            <div class="col-12">
                  <label class="form-label">Note</label>
                  <div class="input-group">
                        <textarea class="form-control" name="Note" id="Note" aria-label="Note"></textarea>
                  </div>                    
            </div>  
            </div>
          </div>


        <div class="col-6">
           <div class="row">                    
                <div class="col-6">
                    <div class="mb-2">
                      <label for="Total " class="form-label">Total</label>
                    </div>
                    </div>

                    

                <div class="col-6">
                  
                    <div class="mb-2">
                    <div class="input-group">
                  
                        <input type="Text" class="form-control" name="Amt" id="Amt" placeholder="0.00" aria-label="Amt">
                    </div>   
                    </div> 
                </div>  

        </div>
        <br>
            <div class="row">
               <div class="col-sm-4">
                      <div class="mb-2">
                        <label for="Discount " class="form-label">Discount</label>
                      </div>
              </div>

                  <div class="col-sm-4">
                      <div class="mb-2">
                      <div class="input-group">
                    
                          <input type="Text" class="form-control" name="Amt" id="Amt" placeholder="Discount(%)" aria-label="Amt">
                      </div>   
                      </div>  
                  </div>

                  <div class="col-sm-4">
                      <div class="mb-2">
                      <div class="input-group">
                    
                          <input type="Text" class="form-control" name="Amt" id="Amt" placeholder="0.00" aria-label="Amt">
                      </div>   
                      </div>  
                  </div> 
            </div>
     

<div class="row">

        <div class="col-sm-6">
          <div class="mb-2">
             <label for="Tax" class="form-label">Tax</label>
           </div>
        </div>

        <div class="col-sm-6">
          <div class="mb-2">
              <input type="Number" class="form-control" name="Amt" id="Amt" placeholder="0.00" aria-label="Amt">

           </div>
        </div>

</div>

<div class="row">

        <div class="col-sm-6">
          <div class="mb-2">
             <label for="NetAmount " class="form-label">Net Amount </label>
           </div>
        </div>

        <div class="col-sm-6">
          <div class="mb-2">
              <input type="Number" class="form-control" name="Amt" id="Amt" placeholder="0.00" aria-label="Amt">

           </div>
        </div>

</div>

<div class="row">

        <div class="col-sm-6">
        <div class="mb-2">
             <label for="Paymentmode" class="form-label">Paymentmode</label>
             
             <select class="form-control" id="Paymentmode" name="Paymentmode">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Cash</option>
                        <option value="2">Cheque</option>
                        <option value="2">UPI</option>

            </select>
        </div>
        </div>

        <div class="col-sm-6">
          <div class="mb-2">
          <label for="Paymentamount" class="form-label">Payment Amount</label>

          <input type="Number" class="form-control" name="Paymentamount" id="Paymentamount" placeholder="0.00" aria-label="Paymentamount">

           </div>
        </div>
</div>
</div>
</div>
</div>
         
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->

     
    </div>
    <!-- End Content -->

    <!-- Footer -->

    
    <!-- End Footer -->
  </main>
<?php 
include('footer.php');
?>