<!-- Modal -->
<div class="modal fade" id="update_product_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_product_form" onsubmit="return false">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="hidden" name="product_ID" id="product_ID" value=""/>
              <label>Date</label>
              <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date("Y-m-d"); ?>" readonly/>
            </div>
            <div class="form-group col-md-6">
              <label>Product Name</label>
              <input type="text" class="form-control" name="update_product" id="update_product" placeholder="Enter Product Name" required>
            </div>
          </div>
          <div class="form-group">
            <label>buying price</label>
            <input type="text" class="form-control" id="buying_price" name="buying_price" placeholder="Enter buying Price of Product" required/>
          </div>
          <div class="form-group">
            <label>selling price</label>
            <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Enter selling Price of Product" required/>
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required/>
          </div>
          <div class="form-group">
            <label>size</label>
            <input type="text" class="form-control" id="size" name="size" placeholder="Enter size" required/>
          </div>
          <div class="form-group">
            <label>image</label>
            <input type="image" class="form-control" id="image" name="image"  placeholder="Enter image" required/>
          </div>
          <button type="submit" class="btn btn-success">Update Product</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>