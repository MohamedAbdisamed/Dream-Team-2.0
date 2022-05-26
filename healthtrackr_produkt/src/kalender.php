
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset='utf-8' />
  <title>Kalender </title>
 
<link rel="stylesheet" href="../kalender.css">
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>

</head>
<body>
  <div id='calendar'></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nyt event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form> 
            <div class="mb-3">
                <label for="title" class="col-form-label">Title:</label>
                <input class="form-control" type="title" name="title" id="title"/>
            </div>
            <div class="mb-3">
                <label for="description" class="col-form-label">Beskrivelse:</label>
                <textarea class="form-control" type="description" name="description" id="description"></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
            <button type="button" id="btnSave" class="btn btn-primary">Gem</button>
        </div>
        </div>
    </div>
    </div>
</body>
<script src="kalender.js"> </script>
  
</html>
