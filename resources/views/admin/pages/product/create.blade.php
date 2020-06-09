
  @include('admin.pages.partials.a_navBar')
  <br>
    <div class="container-fluid create-product">
      <div class="row">
        @include('admin.pages.partials.a_sidebar')

        <div class="col-md-10" id="a_pBody">

          <!-- Products Form -->
          <div class="card a_card" style="height: 100%;">
            <div class="card-header">Add Products</div>
            <div class="card-body">
              <form action=" {{route('admin.product.store')}} " method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                @include('partials.messages')
                
                <div class="form-group">
                  <select name="cId" id="">
                    <option value="">Select Category</option>
                    @foreach ($categories as $cat)
                      <option value="{{$cat->id}} ">{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div><br>
                <div class="form-group">
                  <select name="bId" id="">
                    <option value="">Select Brands</option>
                    @foreach ($brands as $bnd)
                      <option value="{{$bnd->id}} ">{{$bnd->name}}</option>
                    @endforeach
                  </select>
                </div><br>


                
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div><br>

                <div class="form-group">
                  <input type="textarea" name="desc" class="form-control" placeholder="Description">
                </div> <br>
                <div class="form-group">
                  <input type="number" name="quan" class="form-control" placeholder="Quantity">
                </div><br>
                <div class="form-group">
                  <input type="number" name="price" class="form-control" placeholder="Price">
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="aId" placeholder="Admin Id">
                </div>
                <div class="form-group">
                  <label for="">Product Images</label>
                  <div class="row imageRow">
                    <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                    <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                    <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                    <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                    <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                  </div>
                </div>

                
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
            </div>
          </div>
        
        </div>
      </div>
      
    </div>
    <br>
  @include('partials.footer')