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

            <h1 class="page-header-title">Activity</h1>

           
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
                    <label for="LiveConsultant" class="form-label">Patient</label>

                    <select class="form-control" id="LiveConsultant" name="LiveConsultant">
                        <option value="" selected disabled>--Select category--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
            </div>

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
                
                    <label for="time" class="form-label">Time</label>

                    <div class="input-group">
                      <input type="Time" class="form-control" name="time" id="time" aria-label="time">
                     
                    </div>    
                  </div> 
            </div>
            </div> 
 
            <div class="row">
            <div class="col-sm-12">
                  <div class="mb-4">
                    <label class="form-label">What Activity</label>
                    <div class="input-group">
                      <textarea class="form-control" name="Whatactivity" id="Whatactivity" placeholder="What Activity" aria-label="Whatactivity"></textarea>
                    </div>                    
                  </div>
            </div>
            </div>

            <div class="row">
            <div class="col-sm-12">
            <label class="form-label">Condition</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Good</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                <label class="form-check-label" for="inlineRadio2">Normal</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" />
                <label class="form-check-label" for="inlineRadio3">Better</label>
            </div>


            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"/>
                <label class="form-check-label" for="inlineRadio4">Bad</label>
            </div>
            </div>
            </div>



  </main>
<?php 
include('footer.php');
?>