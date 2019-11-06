$(document).ready(function() {
"use strict";
	
	$("#Analytics").click(function(){
		alert("testing");
	});
	
	$('#attendanceDate').daterangepicker({
		singleDatePicker:true,
		showDropdowns: true,
		minYear : 2000,
		maxYear : 2090
	});
	$('#example').DataTable();
});