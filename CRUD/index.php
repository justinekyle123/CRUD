<?php include("includes/header.php"); ?>

<!--INSERT Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">INSERT DATA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="form-group mb-3">
            <label for="" class="ms-2">Name</label>
            <input type="text" class="form-control" name="name" placeholder="enter name">
        </div>
        <div class="form-group mb-3">
            <label for="" class="ms-2">Email</label>
            <input type="email" class="form-control" name="email" placeholder="enter email">
        </div>
        <div class="form-group mb-3">
            <label for="" class="ms-2">Password</label>
            <input type="password" class="form-control" name="password" placeholder="enter password">
        </div>
        <div class="form-group mb-3">
            <label for="" class="ms-2">Repeat Password</label>
            <input type="password" class="form-control" name="repeatpass" placeholder="repeat password">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Insert</button>
      </div>
    </div>
  </div>
</div>

   <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 >PHP CRUD</h4>
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Insert Student  
                        </button>
                    </div>

                    <div class="card-body">
                
                    </div>

                </div>
            </div>
        </div>
   </div>
   
 <?php include("includes/footer.php"); ?>
