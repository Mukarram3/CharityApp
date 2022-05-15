
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
 
    <div class="form-group">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
<span class="error text-danger"><?php  if(isset($_SESSION['namerror'])){ echo $_SESSION['namerror']; unset($_SESSION['namerror']);  }  ?> </span>

  </div>
  <div class="form-group">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      
<span class="error text-danger"><?php  if(isset($_SESSION['emailerror'])){ echo $_SESSION['emailerror']; unset($_SESSION['emailerror']);  }  ?></span>
    
    </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['passworderror'])){ echo $_SESSION['passworderror']; unset($_SESSION['passworderror']);  }  ?></span>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
        <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
      </div>
      </form>

    </div>
  </div>
</div>