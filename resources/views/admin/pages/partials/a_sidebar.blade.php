@include('partials.styles')
<div class="col-md-2 a_sidebar">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url( {{asset('assets/imgs/dp.jpg')}} );"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href=" {{route('admin.index')}} ">Home</a>
                    </li>
                    <li>
                        <a href=" #homeSubmenu  " data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href=" {{route('admin.product.edit')}}  ">All Products</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.product.create')}}  ">Create Product</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.product.edit')}} ">Edit Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=" #homeSubmenu  " data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href=" {{route('admin.categories.allCategories')}}  ">All Categories</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.categories.create')}}  ">Create Categories</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.categories.allCategories')}}  ">Edit Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Brands</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href=" {{route('admin.brands.allBrands')}}  ">All Brands</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.brands.create')}}  ">Create Brands</a>
                            </li>
                            <li>
                                <a href=" {{route('admin.brands.allBrands')}}  ">Edit Brands</a>
                            </li>
                        </ul>
                    </li>
                
                
                </ul>   
            </div>
        </nav>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>