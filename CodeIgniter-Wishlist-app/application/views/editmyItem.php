<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->view('includes/header');?>
  </head>

  <body>
<br><br><br><br><br>
    <main role="main" class="container">

    <form  method="post" action="<?php echo site_url('Item/updateItem')?>/<?php echo $row->Item_id;?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Item Name</label>
    <input type="text" class="form-control" name="Item_name" id="Item_name" placeholder="Enter Name Of Item"  value="<?php echo $row->Item_name;?>" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Item Price</label>
    <input type="number" min="1" step="any" class="form-control" name="Item_price" id="Item_price" placeholder="Enter Price Of Item" value="<?php echo $row->Item_price;?>" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Item Link</label>
    <input type="text" class="form-control" name="Item_link" id="Item_link" placeholder="Enter Link Of Item" value="<?php echo $row->Item_link;?>" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Item Priority</label>
    <select class="form-control" name="Item_priority" id="Item_priority" value="<?php echo $row->Item_priority;?>" required>
	  <option><?php echo $row->Item_priority;?></option>
      <option value="Must Have">Must Have</option>
      <option value="If You Can">If You Can</option>
      <option value="Would Be Nice">Would Be Nice</option>
    </select>
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlInput1">Item Link</label>
    <input type="text" class="form-control" name="Item_description" id="Item_description" placeholder="Enter Link Of Item" value="<?php echo $row->Item_description;?>" required>
  </div>
  
  <button type="submit" class="btn btn-primary" value="save">Update</button>
  <a href="<?php echo site_url('Item')?>"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
</form>







    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
