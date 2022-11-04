<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hola Mundo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  @livewireStyles
  <style>
    .image-parent {
  max-width: 80px;
}
.largo {
    width:420px;
}
    </style>
</head>
<body>
  <nav>@livewire('menu-sup')</nav>
    
  <div>@livewire('first-component')</div>  
  </div>

  @livewireScripts
</body>
</html>