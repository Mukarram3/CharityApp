
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
      <form method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
<span class="error text-danger"><?php  if(isset($_SESSION['titleerror'])){ echo $_SESSION['titleerror']; unset($_SESSION['titleerror']);  }  ?> </span>
    </div>
    
  </div>
  <div class="form-group">
      <label for="inputPassword4">Description</label>
      <textarea name="description" class="form-control" id="" cols="50" rows="10"></textarea>
      
<span class="error text-danger"><?php  if(isset($_SESSION['descriptionerror'])){ echo $_SESSION['descriptionerror']; unset($_SESSION['descriptionerror']);  }  ?></span>
    
    </div>
  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" name="image" id="image" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['imageerror'])){ echo $_SESSION['imageerror']; unset($_SESSION['imageerror']);  }  ?></span>
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