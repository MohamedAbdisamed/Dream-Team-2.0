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
    dayMaxEvents: true,
    locale: 'da',
    eventColor: '#378006', 
    events: 'select_fromdb.php',
    selectable:true, 
    select:function(start, end1, allDays){
      var start11 =moment(start.start).format('YYYY-MM-DD');
       var end11 = moment(start.end).add(-1, 'days').format('YYYY-MM-DD');
         var start = start11; 
         var end = end11;
         console.log(start + " " + end)
       $('#exampleModal').modal('toggle');
         $('#btnSave').on('click', function(){
            var title = $('#title').val();
            var description = $('#description').val();
            $.ajax({
              url: "insert_todb.php",
              type: "POST",
              data: {
                title:title,
                description: description,
                start:start,
                end:end
              }, 
              success: function(){
                $('#exampleModal').modal('toggle');
                calendar.refetchEvents();
                alert('Tilføjet..')
                console.log(start + " " + end)		
              }
            });
            
         });
         
      },
      editable:true,
      eventDrop:function(event){
        console.log(event.event)
        console.log(event.event._instance.range.start)

        var start = moment(event.event._instance.range.start).format('YYYY-MM-DD');
        var end = moment(event.event._instance.range.end).add(-1, 'days').format('YYYY-MM-DD');
        var title = event.event._def.title;
        var id = event.event._def.publicId;
        console.log(event.oldEvent._instance.range.start)
        var description = event.event._def.extendedProps.description;
        
         $.ajax({
          url:"update_db.php",
          type:"POST",
          data:{ title:title,start:start, end:end, description:description, id:id},
          success: function(){
            console.log(id + " " + start + " " + end + " " + title + " " + description )
            calendar.refetchEvents();
            alert('Event opdateret!')  
          }
        });
      },
      eventClick:function(event){
        if(confirm('Er du sikker på du vil slette det?')){
            var id = event.id; 
            console.log(id)
           /* $.ajax({
              url:"delete_fromdb.php",
              type:"POST",
              data:{ id:id},
              success: function(){
                console.log(id)
               // $calendar.FullCalendar('refetchEvents');
                alert('Event slettet!');  
              }
            });*/
        }
      }
  });
  
  calendar.render();
});
 