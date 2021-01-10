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
        
        <div class="mycontainer container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-center">ToDo App</h5>
                          <p class="card-text text-center">PHP and VUE.JS have been used.</p>
                          <form>
                            <div class="form-group">
                              <label for="new-task">Task</label>
                              <input type="email" class="form-control" id="new-task">
                              <small id="emailHelp" class="form-text text-muted">Anything can be. What do you plan to do?</small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Add task button</button>
                          </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="mycontainer container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Key</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>0</th>
                                    <th>1</th>
                                    <td>Take the trash out</td>
                                    <td><span class="badge badge-danger">Not Completed</span></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
