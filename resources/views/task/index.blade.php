<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/changes.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
        
      </head>
    <body>
        <div id="app">
        
          <add-task-form></add-task-form>
          <list-task></list-task>
        </div>
        <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
