@include('admin.pages.partials.a_navBar')
<br>
<div class="container-fluid create-product">
  <div class="row">
    @include('admin.pages.partials.a_sidebar')

    <div class="col-md-10" id="a_pBody">

      <!-- Products Form -->
      <div class="card a_card" style="height: 100%;">
        <div class="card-header">All Brands</div>
        @include('partials.messages')
        <div class="card-body">
          <table class="table table-hover">
              <thead class="thead-dark">
                  <tr>
                      <th>Brand Id</th>
                      <th> Name </th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody class="tbody">
                  @foreach ($brands as $brand)
                  <tr>
                      <td> {{$brand->id}} </td>
                      <td> {{$brand->name}} </td>
                      <td> {{$brand->description}} </td>
                      <td> {{$brand->image}} </td>
                      <td> 
                        <a href=" {{route('admin.brands.store_brand', $brand->id)}} " class="btn btn-success">Edit </a> 
                        <a onclick="return confirm('Are you sure?')" href=" {{route('admin.brands.delete', $brand->id)}} " class="btn btn-danger">Delete </a> 
                      </td>
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