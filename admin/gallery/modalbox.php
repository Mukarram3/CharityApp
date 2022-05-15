
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group">
      <label for="inputEmail4">Caption</label>
      <input type="text" class="form-control" id="title" name="caption" placeholder="Title">
      <span class="error text-danger"><?php  if(isset($_SESSION['captionerr'])){ echo $_SESSION['captionerr']; unset($_SESSION['captionerr']);  }  ?></span>
    </div>
    
  </div>
 
  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" name="image[]" multiple  id="image" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['imageerr'])){ echo $_SESSION['imageerr']; unset($_SESSION['imageerr']);  }  ?></span>
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

