
  @include('admin.pages.partials.a_navBar')
  <br>
  <div class="container-fluid create-product">
    <div class="row">
      @include('admin.pages.partials.a_sidebar')

      <div class="col-md-10" id="a_pBody">

        <!-- Products Form -->
        <div class="card a_card" style="height: 100%;">
          <div class="card-header">Edit Products</div>
          <div class="card-body">
            <form action=" {{route('admin.product.edit_update', $product->id)}} " method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              @include('partials.messages')
              <div class="form-group">
                {{-- <select name="cId" id="cId">
                  <option value="">Select Category</option>
                  @foreach ($categories as $cat)
                    <p> </p>
                  @endforeach
                </select> --}}
                
                <label for="cId">Category Id</label>
                <input type="text" class="form-control" name="cId" placeholder="Category Id" value=" {{$product->category_id}} "
              </div> <br>
              <div class="form-group">
                <label for="bId">Brand Id</label>
                <input type="text" class="form-control" name="bId" placeholder="Brand Id" value=" {{$product->brand_id}} ">
              </div><br>
              
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value=" {{$product->title}} ">
              </div><br>

              <div class="form-group">
                <label for="desc">Description</label>
                <input type="textarea" name="desc" class="form-control" placeholder="Description" value=" {{$product->description}} ">
              </div> <br>
              <div class="form-group">
                <label for="quan">Quantity</label>
                <input type="text" name="quan" class="form-control" placeholder="Quantity" value=" {{$product->quantity}} ">
              </div><br>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value=" {{$product->price}} ">
              </div><br>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value=" {{$product->status}} ">
              </div><br>
              <div class="form-group">
                <label for="o_price">Offer Price</label>
                <input type="text" name="o_price" class="form-control" placeholder="Offer Price" value=" {{$product->offer_price}} ">
              </div><br>
              {{-- <div class="form-group">
                <label for="">Product Images</label>
                <div class="row imageRow">
                  <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                  <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                  <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                  <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                  <input type="file" class="form-control col-md-3" id="product_image" name="product_image[]" placeholder="Product Image">
                </div>
              </div> --}}

              
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      
      </div>
    </div>
    
  </div>
  <br>
@include('partials.footer')