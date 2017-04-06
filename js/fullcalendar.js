
$(function() {
    $( ".selector" ).datepicker({
        dateFormat:"yy-mm-dd"
    });
});
$.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    $('#calendar').fullCalendar({
            dayClick: function(date) {
                date = moment(date).format("YYYY-MM-DD");
                $('#crate').modal('show');
                $('.beg').prop("value", ' ');
                $('.beg').prop("value", date);
            },
            eventClick: function(calEvent) {
                $('#m' + calEvent.id).modal('show')
            },
            header: {
                left: 'title',
                center: 'prevYear,prev,next,nextYear',
                right: 'month,agendaWeek,agendaDay,',

            },
            editable: false,

            events:
            [
                {
                    id: 1,
                    title: "hallo",
                    start: "2014-5-13"
                }
            ],
    eventColor: 'grey',
    eventBorderColor: '#AAA'
});
})

