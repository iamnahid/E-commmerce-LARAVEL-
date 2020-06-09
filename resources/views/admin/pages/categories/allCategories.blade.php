@include('admin.pages.partials.a_navBar')
<br>
<div class="container-fluid create-product">
  <div class="row">
    @include('admin.pages.partials.a_sidebar')

    <div class="col-md-10" id="a_pBody">

      <!-- Products Form -->
      <div class="card a_card" style="height: 100%;">
        <div class="card-header">All Categories</div>
        @include('partials.messages')
        <div class="card-body">
          <table class="table table-hover">
              <thead class="thead-dark">
                  <tr>
                      <th>Category Id</th>
                      <th> Name </th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Parent ID</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody class="tbody">
                  @foreach ($categories as $category)
                  <tr>
                      <td> {{$category->id}} </td>
                      <td> {{$category->name}} </td>
                      <td> {{$category->description}} </td>
                      <td> {{$category->image}} </td>
                      <td> {{$category->parent_id}} </td>
                      <td> 
                        <a href=" {{route('admin.categories.store_category', $category->id)}} " class="btn btn-success">Edit </a> 
                        <a onclick="return confirm('Are you sure?')" href=" {{route('admin.categories.delete', $category->id)}} " class="btn btn-danger">Delete </a> 
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