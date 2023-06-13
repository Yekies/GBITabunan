<!DOCTYPE html>
<html>
   <head>
      <title>Laravel Video Upload Form - ScratchCode.io</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container mt-5">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h2>Laravel Video Upload Form- ScratchCode.io</h2>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               
               <table class="boodered">
                  <tr>
                     <th>Title</th>
                     <th>Video</th>
                  </tr>
                  <tr>
                  @foreach($video as $tampil)
                     <td>{{$tampil->desk}}</td>
                     <td><video src="/uploads/{{ $tampil->path }}" width="100px"></video></td>
                  </tr>
                  @endforeach 
               </table>
            </div>
         </div>
      </div>
   </body>
</html>