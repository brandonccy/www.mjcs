<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<script src="/assets/bootstraps/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
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
<style>
.ui-datepicker-trigger { color: red; }
</style>