	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
	<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


	<!-- Chart JS -->
	<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Atlantis JS -->
	{{-- <script src="{{ asset('assets/js/atlantis.min.js')}}"></script> --}}

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	{{-- <script src="{{ asset('assets/js/setting-demo.js')}}"></script>
	<script src="{{ asset('assets/js/demo.js')}}"></script> --}}
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'editor1' );
</script>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>

<script>

	$(document).ready(function () {
	
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
	
		var calendar = $('#calendar').fullCalendar({
			editable:true,
			header:{
				left:'prev,next today',
				center:'title',
				right:'month,agendaWeek,agendaDay'
			},
			events:'/full-calender',
			selectable:true,
			selectHelper: true,
			select:function(start, end, allDay)
			{
				var title = prompt('Event Title:');
	
				if(title)
				{
					var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
	
					var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
	
					$.ajax({
						url:"/full-calender/action",
						type:"POST",
						data:{
							title: title,
							start: start,
							end: end,
							type: 'add'
						},
						success:function(data)
						{
							calendar.fullCalendar('refetchEvents');
							alert("Event Created Successfully");
						}
					})
				}
			},
			editable:true,
			eventResize: function(event, delta)
			{
				var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
				var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"/full-calender/action",
					type:"POST",
					data:{
						title: title,
						start: start,
						end: end,
						id: id,
						type: 'update'
					},
					success:function(response)
					{
						calendar.fullCalendar('refetchEvents');
						alert("Event Updated Successfully");
					}
				})
			},
			eventDrop: function(event, delta)
			{
				var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
				var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"/full-calender/action",
					type:"POST",
					data:{
						title: title,
						start: start,
						end: end,
						id: id,
						type: 'update'
					},
					success:function(response)
					{
						calendar.fullCalendar('refetchEvents');
						alert("Event Updated Successfully");
					}
				})
			},
	
			eventClick:function(event)
			{
				if(confirm("Are you sure you want to remove it?"))
				{
					var id = event.id;
					$.ajax({
						url:"/full-calender/action",
						type:"POST",
						data:{
							id:id,
							type:"delete"
						},
						success:function(response)
						{
							calendar.fullCalendar('refetchEvents');
							alert("Event Deleted Successfully");
						}
					})
				}
			}
		});
	
	});
	  
</script>
	  