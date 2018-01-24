


<div class="modal fade bd-example-modal-lg" id="details-1" tabindex="-1" role="dialog" aria-labelledby="products-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title text-center" id="products-modal"><big> Jeans</big></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <img src="images/products/p1.jpg">
            </div>
            <div class="col-sm-6">
               <h4>Details</h4>
               <p>these t-shirt is amazing . you must trythem and buy get them
                 while they last
               </p>
               <p>price:24.99 $</p>
               <p>Brand: levis</p>
                <form method="post" action="add-cart.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
          </div>
          <div class="form-group">
            <label for="Size" class="col-form-label">Size:</label>
            <select name="size" class="form-control" id="size">
            <option value="32">32</option>
            <option value="36">36</option>
            <option value="40">40</option>
            <option value="42">42</option>
            <option value="46">46</option>
          </select>
          </div>
        </form>

            </div>
          </div>
        </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Add to cart</button>
      </div>
    </div>
  </div>
</div>