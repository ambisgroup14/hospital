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

            <h1 class="page-header-title">Appointments</h1>

           
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
              
                    <label for="doctor" class="form-label">Doctor</label>

                    <select class="form-control" id="doctor" name="doctor">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                 
                </div>
            </div>
           
            
            
            <div class="col-sm-6">
                
                <div class="mb-4">
                    <label for="doctorfee" class="form-label">Doctor Fee </label>

                    <div class="input-group">
                      <input type="text" class="form-control" name="doctorfee" id="doctorfee" value="200" placeholder="Doctor Fee" aria-label="Doctor Fee" readonly>
                     
                    </div>  
                </div>
            </div>   
            </div>

                
            <div class="row">   
            <div class="col-sm-6">
                 
                <div class="mb-4">
                    <label for="shift" class="form-label">Shift</label>

                    <select class="form-control" id="shift" name="shift">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Day Shift </option>
                        <option value="2">Night Shift</option>
                    </select>
                </div>
            </div>
           

                   
             
            <div class="col-sm-6">
                    <div class="mb-4">
                
                        <label for="AppointmentDate" class="form-label">Appointment Date </label>

                        <div class="input-group">
                            <input type="Date" class="form-control" name="AppointmentDate" id="AppointmentDate" aria-label="AppointmentDate">
                     
                        </div>  
                    </div> 
            </div>  
            </div>                 
                  
            <div class="row">  
                <div class="col-sm-6">
                  <div class="mb-4">
                
                    <label for="time" class="form-label">Slot</label>

                    <div class="input-group">
                      <input type="Time" class="form-control" name="time" id="time" aria-label="time">
                     
                    </div>    
                  </div> 
                </div>                 
              

                <div class="col-sm-6">
                  <div class="mb-4">
                
                    <label for="AppointmentPriority" class="form-label">Appointment Priority</label>

                    <select class="form-control" id="AppointmentPriority" name="AppointmentPriority">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                    </select>
                    </div>   
                </div> 
            </div>
                             
            <div class="row">  

               <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="PaymentMode" class="form-label">Payment Mode</label>

                    <select class="form-control" id="PaymentMode" name="PaymentMode">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">Offline Payment</option>
                        <option value="2">Online Payment</option>
                    </select>
                    </div>   
                </div> 
                
                
                <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="Status" class="form-label">Status</label>

                    <select class="form-control" id="Status" name="Status">
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
                 
                        <label for="Message" class="form-label">Message</label>

                    <div class="input-group">
                      <input type="Text" class="form-control" name="Phonenumber" id="Message" placeholder="Message" aria-label="Message">
                    </div>   
                    </div> 
                </div>     
                           
                 
                <div class="col-sm-6">
                  <div class="mb-4">
                    <label for="LiveConsultant" class="form-label">Live Consultant</label>

                    <select class="form-control" id="LiveConsultant" name="LiveConsultant">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">On Video Conference</option>
                        <option value="2">On Visit Conference</option>
                    </select>
                  </div>
                </div>
            </div>  
                
                  
                  
                  
                  
            
                <div class="col-12">
                    <label class="form-label">Address</label>
                    <div class="input-group">
                      <textarea class="form-control" name="Address" id="Address" placeholder="Address" aria-label="Address"></textarea>
                    </div>                    
                    </div>
                </div>
            </div>
           
              
            </div>
            
         
          
  </main>
<?php 
include('footer.php');
?>