document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'UTC',
    themeSystem: 'bootstrap5',
    headerToolbar: {
      left: 'prev',
      center: 'title',
      right: 'next'
    },
    weekNumbers: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: 'https://fullcalendar.io/api/demo-feeds/events.json',
    locale: 'da',
    eventColor: '#378006',
    events: [
          {
          title: 'TEST event',
          start: '2022-05-10T10:30:00',
          end: '2022-05-12T11:30:00',
          description: 'Test1'
          }, 
          {
          title: 'TEST event 2',
          start: '2022-05-20T10:30:00',
          end: '2022-05-21T11:30:00',
          description: 'Test2'
          }, 
      ],
      selectable:true,
      select:function(start, end, allDays){
         $('#exampleModal').modal('toggle');
         $('#btnSave').click(function(){
          var message = $('#message-text').val();
          var start_date = moment(start).format('YYYY-MM-DD');
          var end_date = moment(end).format('YYYY-MM-DD');
          console.log(message)
          console.log(start_date + ' - ' + end_date)
         });
      }
    
  });
  calendar.render();
});