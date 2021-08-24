<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.styles')
<title>List Of studnts</title>

</head>
<body>
<div class="container mt-5">
   <fieldset>
       <legend>
           <div class="d-flex justify-content-between">
               <div>
                   <h2>List of registered students</h2>
               </div>
               <div>
               <a name="" id="" class="btn btn-primary" href="{{ route('createstudent') }}" role="button">Create</a>
            </div>
           </div>
       </legend>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Is Alive</th>
                <th>Bio</th>
                <th>Registered Date</th>
                <th>Updated Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Haseeb</td>
                <td>YES</td>
                <td>Software engineer</td>
                <td></td>
                 <td></td>
            </tr>

        </tbody>
    </table>
   </fieldset>
</div>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
