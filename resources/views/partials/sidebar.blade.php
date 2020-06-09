@include('partials.styles')
<div class="col-md-2" >
    <nav id="sidebar">
        <div class="p-4 pt-5">
            <a href="">Categories</a>
            @foreach (App\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                
                <ul class="list-unstyled components mb-3">
                    <li>
                        <a href=" #main_{{ $parent->id }}   " data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img src=" {{asset('assets/imgs/categories/'.$parent->image)}} " width="20" alt="">
                            {{ $parent->name }} 
                        </a>

                        <ul class="collapse list-unstyled" id="main_{{$parent->id}}">
                            <div class="child-rows" style="padding-left: 20px;">
                                @foreach (App\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                                    <li>
                                        <a href="#main_{{$parent->id}} " data-toggle="collapse">
                                            <img src=" {{asset('assets/imgs/categories/'.$child->image)}} " width="20" alt="">
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </div>
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
    </nav>

</div>