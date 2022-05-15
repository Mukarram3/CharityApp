<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sponsored Child</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-lg-12">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
      <span class="error text-danger"><?php  if(isset($_SESSION['titleerror'])){ echo $_SESSION['titleerror']; unset($_SESSION['titleerror']);  }  ?> </span>
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" id="title" name="address" placeholder="Address">
      <span class="error text-danger"><?php  if(isset($_SESSION['addresserror'])){ echo $_SESSION['addresserror']; unset($_SESSION['addresserror']);  }  ?> </span>
    </div>
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Age</label>
      <input type="number" class="form-control" id="title" name="age" placeholder="Age">
      <span class="error text-danger"><?php  if(isset($_SESSION['agerror'])){ echo $_SESSION['agerror']; unset($_SESSION['agerror']);  }  ?> </span>
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Date Of Birth</label>
    <input type="date" class="form-control" name="dob" id="dob" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['doberror'])){ echo $_SESSION['doberror']; unset($_SESSION['doberror']);  }  ?> </span>
  </div>
  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" name="image" id="image" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['imageerror'])){ echo $_SESSION['imageerror']; unset($_SESSION['imageerror']);  }  ?> </span>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
