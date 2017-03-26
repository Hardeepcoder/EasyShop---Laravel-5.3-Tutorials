<?php /*
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
       */?>
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{url('/admin')}}">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
            <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_document_alt"></i>
                            <span>Products</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{url('/admin/addProduct')}}">Add Products</a></li>
                            <li><a href="{{url('/admin/products')}}">View Products</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Categories</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                          <li><a class="" href="{{url('/admin/addCat')}}">Add Category</a></li>

                            <li><a class="" href="{{url('/admin/categories')}}">View Categories</a></li>

                        </ul>
                    </li>


                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
