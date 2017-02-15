 <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                   
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Products
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="{{url('/admin/addProduct')}}">Add Products</a></li>
                            <li><a href="{{url('/admin/products')}}">View Products</a></li>
                        </ul>
                    </li>
                    
                      <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Categories
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="{{url('/admin/addCat')}}">Add Category</a></li>
                            <li><a href="{{url('/admin/categories')}}">View Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>