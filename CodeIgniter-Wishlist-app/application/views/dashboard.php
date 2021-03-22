<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('includes/header');?>
  </head>

  <body>
    <br><br><br><br><br>
    <main role="main" class="container">
    <?php if($error = $this->session->flashdata('success_msg')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
            &times;
            </span></button>
            <?=$error?>
        </div>
    <?php endif;?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLong">
        Add
    </button>

<!-- Modal -->
<div class="modal fade" id="ModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Add To Your Wishlist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="post" action="<?php echo site_url('Item/addItem')?>">
        <div class="form-group">
            <label for="form_name">Item Name</label>
            <input type="text" class="form-control" name="Item_name" id="Item_name" placeholder="Enter Name Of Item" required>
        </div>

        <div class="form-group">
            <label for="form_name">Item Price</label>
            <input type="number" min="1" step="any" class="form-control" name="Item_price" id="Item_price" placeholder="Enter Price Of Item" required>
        </div>

        <div class="form-group">
            <label for="form_name">Item Link</label>
            <input type="text" class="form-control" name="Item_link" id="Item_link" placeholder="Enter Link Of Item" required>
        </div>

        <div class="form-group">
            <label for="form_name">Item Priority</label>
            <select class="form-control" name="Item_priority" id="Item_priority" required>
            <option value="" disabled selected>Select Priority Of Item</option>
            <option value="Must Have">Must Have</option>
            <option value="If You Can">If You Can</option>
            <option value="Would Be Nice">Would Be Nice</option>
            </select>
        </div>

        <div class="form-group">
            <label for="form_name">Item Description</label>
            <textarea class="form-control" name="Item_description" id="Item_description" rows="3" style="resize: none;" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" value="save">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </form>
      </div>
    </div>
  </div>
</div>

<br><br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Link</th>
      <th scope="col">Item Priority</th>
      <th scope="col">Item Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($Items as $row) { ?>
          <tr>
            <td><?php echo $row->Item_name;?></td>
            <?= '<td>&pound' . $row->Item_price . '</td>'?>
            <?= '<td><a target="_blank" href="' . $row->Item_link . '">' . $row->Item_link . '</a></td>'?>
            <td><?php echo $row->Item_priority;?></td>
            <td><?php echo $row->Item_description;?></td>
            <td><a href="<?php echo site_url('Item/editItem');?>/<?php echo $row->Item_id;?>">Edit</a> | 
              <a href="<?php echo site_url('Item/deleteItem');?>/<?php echo $row->Item_id;?>">Delete</a></td>
          </tr>
        <?php } ?>
    </tr>
  </tbody>
</table>

    </main><!-- /.container -->
  </body>
</html>
