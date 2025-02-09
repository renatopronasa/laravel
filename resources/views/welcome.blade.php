<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Nlarax</title>
</head>
<body>
    <h2 style="text-align: center;"> NLARAX</h2>
    <h3 style="text-align: center;"> Seja Bem Vindo !!!</h3>

    
    <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      <button type="button" class="btn btn-primary">Primary Button</button>

      <button type="button" class="btn btn-outline-success">Success</button>

      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
      
        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
      </div>

      <ul class="list-group">
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
          <label class="form-check-label" for="firstCheckbox">First checkbox</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
          <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
          <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
        </li>
      </ul>
      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
          </div>
        </div>
      </div>

</body>
</html>