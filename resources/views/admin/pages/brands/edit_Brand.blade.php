
  @include('admin.pages.partials.a_navBar')
  <br>
  <div class="container-fluid create-product">
    <div class="row">
      @include('admin.pages.partials.a_sidebar')

      <div class="col-md-10" id="a_pBody">

        <!-- Products Form -->
        <div class="card a_card" style="height: 100%;">
          <div class="card-header">Edit Brands</div>
          <div class="card-body">
            <form action=" {{route('admin.brands.update_brand', $brand->id)}} " method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              @include('partials.messages')
              <div class="form-group">
                
                <label for="cId">Brand Id</label>
                <input type="text" class="form-control" name="bId" placeholder="Category Id" value=" {{$brand->id}} "
              </div> <br>
              <div class="form-group">
                <label for="bId">Name</label>
                <input type="text" class="form-control" name="bName" placeholder="Name" value=" {{$brand->name}} ">
              </div><br>
              
              <div class="form-group">
                <label for="title">Description</label>
                <input type="text" class="form-control" name="bDesc" placeholder="Description" value=" {{$brand->description}} ">
              </div><br>

                            
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      
      </div>
    </div>
    
  </div>
  <br>
  @include('admin.pages.partials.a_footer')