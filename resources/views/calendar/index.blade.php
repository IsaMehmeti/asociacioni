@extends('layouts.app')

@section('page_name', __('messages.Calendar'))

@section('custom_header')
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="vendor/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="vendor/fullcalendar/fullcalendar.print.css" media="print" />
    <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css">
@endsection

@section('content')
<section class="card">
    <div class="card-body col-md-8 m-auto">
        <div class="row">
            <div class="col-lg-12">
                <div id="calendar"></div>
            </div>

        </div>
    </div>
</section>

    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{__('messages.Are u sure u want to remove this?')}}</p>
      </div>
      <div class="modal-footer m-auto">
        <a id="modal-link" href="#" onclick="deleteEvent()" class="btn btn-danger">{{__('messages.Delete')}}</a>
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">{{__('messages.Discard')}}</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_footer')
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    <script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="vendor/moment/moment.js"></script>
    <script src="vendor/fullcalendar/fullcalendar.js"></script>
    <script src="vendor/fullcalendar/locale/sq.js"></script>
    <script src="vendor/fullcalendar/locale/sr.js"></script>
    <script src="vendor/pnotify/pnotify.custom.js"></script>


    <script>
        $(document).ready(function (){

            $.ajaxSetup({
               headers:{
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
        (function($) {

	'use strict';

	var initCalendarDragNDrop = function() {
		$('#external-events div.external-event').each(function() {

			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};

			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});
	};


	var initCalendar = function() {
		var $calendar = $('#calendar');
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$calendar.fullCalendar({
			header: {
				left: 'title',
				right: 'prev,today,next,basicDay,agendaDay,basicWeek,month'
			},

			timeFormat: 'h:mm',
            locale: '{{app()->getLocale()}}',

			themeButtonIcons: {
				prev: 'fas fa-caret-left',
				next: 'fas fa-caret-right',
			},

			editable: true,
            selectable: true,
            selectHelper:true,
            resizable: false,

            //create an event
			select: function(start, end, allDay) { // this function is called when something is selected
				var title = prompt('Shkruani titullin: ');

				if(title){
				    var start = moment(start).format('YYYY-MM-DD h:mm:ss');
				    var end = moment(end).subtract(1, 'days');
                    end = end.format('YYYY-MM-DD h:mm:ss');

				    $.ajax({
                        url:'{{url('/calendar/action')}}',
                        type:"POST",
                        data:{
                            title : title,
                            start : start,
                            end: end,
                            type: 'add'
                        },
                        success:function (data){
                            $calendar.fullCalendar('refetchEvents');
                            new PNotify({
                                title: '{{__('messages.message')}}',
                                text: '{{__('messages.Event Created Succesfully')}}',
                                type: 'success',
                                addclass: 'icon-nb'
                            });

                        }
                    })

                }
				$calendar.fullCalendar('unselect');
			},
            eventResize: function(calEvent, event){
                var start = moment(calEvent.start).format('YYYY-MM-DD h:mm:ss');
                var end = moment(calEvent.end).format('YYYY-MM-DD h:mm:ss');
                var id = calEvent.id;
                var title = calEvent.title;
                $.ajax({
                        url:'{{url('/calendar/action')}}',
                        type:"POST",
                        data:{
                            title : title,
                            start : start,
                            end: end,
                            type: 'update',
                            id: id,
                        },
                        success:function (data){
                            $calendar.fullCalendar('refetchEvents');
                        }
                    })
            },
            eventDrop: function(calEvent, event){
                var start = moment(calEvent.start).format('YYYY-MM-DD h:mm:ss');
                var end = moment(calEvent.end).format('YYYY-MM-DD h:mm:ss');
                var id = calEvent.id;
                var title = calEvent.title;
                $.ajax({
                        url:'{{url('/calendar/action')}}',
                        type:"POST",
                        data:{
                            title : title,
                            start : start,
                            end: end,
                            type: 'update',
                            id: id,
                        },
                        success:function (data){
                            $calendar.fullCalendar('refetchEvents');
                        }
                    })
            },
            eventClick: function (calEvent){
                $("#mymodal").modal('show');
                var id = calEvent.id;
                $("#modal-link"). attr("onclick","deleteEvent("+id+ ")");

            },
			events: '{{url('/calendar/')}}'

		});

		// FIX INPUTS TO BOOTSTRAP VERSIONS
		var $calendarButtons = $calendar.find('.fc-header-right > span');
		$calendarButtons
			.filter('.fc-button-prev, .fc-button-today, .fc-button-next')
				.wrapAll('<div class="btn-group mt-sm mr-md mb-sm ml-sm"></div>')
				.parent()
				.after('<br class="hidden"/>');

		$calendarButtons
			.not('.fc-button-prev, .fc-button-today, .fc-button-next')
				.wrapAll('<div class="btn-group mb-sm mt-sm"></div>');

		$calendarButtons
			.attr({ 'class': 'btn btn-sm btn-default' });
	};


	$(function() {
		initCalendar();
		initCalendarDragNDrop();
	});

}).apply(this, [jQuery]);
        });
        function deleteEvent(id){
                    $.ajax({
                        url:'{{url('/calendar/action')}}',
                        type:"POST",
                        data:{
                            type: 'delete',
                            id: id,
                        },
                        success:function (data){
                            $('#calendar').fullCalendar('refetchEvents');
                            $("#close").click();
                        }
                    })
                }
    </script>
@endsection
