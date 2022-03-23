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

            <h1 class="page-header-title">Out Patient Billing</h1>

           
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
                
                        <label for="AppointmentDate" class="form-label">Appointment Date </label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="AppointmentDate" id="AppointmentDate" aria-label="AppointmentDate">
                     
                        </div>  
                    </div> 
                </div>  
            
            
            <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Case" class="form-label">Case</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Case" id="Case" placeholder="Case" aria-label="Case">
                    </div>   
                    </div> 
            </div>   
            </div>
            
            <div class="row">
            <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="casualty" class="form-label">Casualty</label>
 
                     <select class="form-control" id="casualty" name="casualty">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div> 

            <div class="col-sm-6">
                  <div class="mb-4">
                     <label for="oldpatient" class="form-label">Old Patient</label>
 
                     <select class="form-control" id="oldpatient" name="oldpatient">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                    </div>
            </div>
            </div>

            <div class="row">
                 <div class="col-sm-6">                
                   <div class="mb-4">
                     <label for="tpa" class="form-label">TPA</label>
 
                     <select class="form-control" id="tpa" name="tpa">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
                 </div>
              
             
                 <div class="col-sm-6">
                    <div class="mb-4">
                 
                        <label for="Reference" class="form-label">Reference</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Reference" id="Reference" placeholder="Reference" aria-label="Reference">
                    </div>   
                    </div> 
                 </div>  
                 </div>   
 
            
                <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-4">
                        <label for="consultantdoctor" class="form-label">Consultant Doctor</label>
 
                        <select class="form-control" id="consultantdoctor" name="consultantdoctor">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                        </select>
                     </div>
                    </div>

             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Chargecategory" class="form-label">Charge Category</label>
 
                     <select class="form-control" id="Chargecategory" name="Chargecategory">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div>
             </div>

             <div class="row">
             <div class="col-sm-6">                
                 <div class="mb-4">
                     <label for="Charge" class="form-label">Charge</label>
 
                     <select class="form-control" id="Charge" name="Charge">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                     </select>
                 </div>
             </div>

            <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="Tax" class="form-label">Tax</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Tax" id="Tax" value="" placeholder="Tax" aria-label="Tax" readonly>
                     
                    </div>  
                  </div>
                </div>   
            </div>           

            <div class="row">
            <div class="col-sm-6">                
                <div class="mb-4">
                    <label for="Standardcharge" class="form-label">Standard Charge</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Standardcharge" id="Standardcharge" value="" placeholder="Standard Charge" aria-label="Standardcharge" readonly>
                     
                    </div>  
                </div>
            </div>   
            

            <div class="col-sm-6">                
                <div class="mb-4">
                    <label for="Appliedcharge" class="form-label">Applied Charge</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Appliedcharge" id="Appliedcharge" value="" placeholder="Applied Charge" aria-label="Appliedcharge" readonly>
                     
                    </div>  
                </div>
            </div>
            </div>   
          

            <div class="row">
                <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="Amount" class="form-label">Amount</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Amount" id="Amount" value="" placeholder="Amount" aria-label="Amount" readonly>
                     
                    </div>  
                  </div>
                </div>   
          

                <div class="col-sm-6">                
                  <div class="mb-4">
                    <label for="Paymentmode" class="form-label">Payment Mode</label>

                    <select class="form-control" id="Paymentmode" name="Paymentmode">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
                </div>
                </div>
                   
                <div class="row">
                <div class="col-sm-6">                
                  <div class="mb-4">
                    <label for="Paidamount" class="form-label">Paid Amount</label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="Paidamount" id="Paidamount" value="" placeholder="Paidamount" aria-label="Paidamount" >
                     
                    </div>  
                </div>
            </div>   
           

            <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="Liveconsultant" class="form-label">Live Consultant</label>

                    <select class="form-control" id="Liveconsultant" name="Liveconsultant">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                    </div>   
                </div> 
            </div>
            </div>
            </div>   

                     
  </main>
<?php 
include('footer.php');
?>