  @include('admin.pages.partials.a_navBar')
  <br>
  <div class="container-fluid create-product">
    <div class="row">
      @include('admin.pages.partials.a_sidebar')

      <div class="col-md-10" id="a_pBody">

        <!-- Products Form -->
        <div class="card a_card" style="height: 100%;">
          <div class="card-header">Edit Products</div>
          @include('partials.messages')
          <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Sn</th>
                        <th>Category Id</th>
                        <th> Brand Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Offer Price</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="tbody">
                    @foreach ($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->category_id}} </td>
                        <td> {{$product->brand_id}} </td>
                        <td> {{$product->title}} </td>
                        <td> {{$product->description}} </td>
                        <td> {{$product->quantity}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->status}} </td>
                        <td> {{$product->offer_price}} </td>
                        <td> <a href=" {{route('admin.product.store_edit', $product->id)}} " class="btn btn-success">Edit </a> </td>
                        <td> <a onclick="return confirm('Are you sure?')" href=" {{route('admin.product.delete', $product->id)}} " class="btn btn-danger">Delete </a> </td>
                    </tr>
                    @endforeach
                </tbody>
                
                
            </table>
          </div>
        </div>
      
      </div>
    </div>
    
  </div>
  <br>
@include('partials.footer')