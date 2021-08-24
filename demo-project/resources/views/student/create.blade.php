<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.styles')
    <title>Create Student</title>
</head>
<body>
<div class="container">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">IsAlive</label><br/>
          <input type="radio" class="" name='isalive' value='alive'>Alive
          <input type="radio" class="" name='isalive' value='die'>Die
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            <textarea class="form-control w-100"></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
</body>
</html>
