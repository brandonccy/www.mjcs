<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="row centered-form">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Book Our Service</h3>
                        <p>Give your request details and we will send you our best quotation.
                    </div>
                    <div class="panel-body">
                        <form role="form" action="/thank-you" method="post" id="formSubmit">
                        <input type="hidden" name="form" value="send_enquiry">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" required="required" class="form-control input-sm" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="contact" id="contact" required="required" class="form-control input-sm" placeholder="Contact Number">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" required="required" class="form-control input-sm" placeholder="Your email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="date" id="date" required="required" class="form-control input-sm" placeholder="Your request date of service">
                            </div>

                            <div class="form-group">
                                <input type="text" name="time" id="time" required="required" class="form-control input-sm" placeholder="Your request time of service">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="service_area" required="required" id="service_area" class="form-control input-sm" placeholder="Place eg: Taman Jaya">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="service_state" required="required" id="service_state" class="form-control input-sm" placeholder="State eg: Cheras, Kuala Lumpur">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Request Service" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>

      </div>

    </div>

  </div>
</div>
<script type="text/javascript">
$('#formSubmit').submit(function(ev) {
    showFormSubmit();
});
function showFormSubmit(){
    swal({
        title: "Processing...",   
        text: "Please wait while we sending your request.",
        showConfirmButton: false 
    });
}

var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 3);
$('#date').datetimepicker({
    format: 'DD MMMM YYYY',
    minDate: tomorrow
});

var timeStart = new Date();
timeStart.setDate(timeStart.getDate() + 3);
$('#time').datetimepicker({
    format: 'LT'
});
</script>