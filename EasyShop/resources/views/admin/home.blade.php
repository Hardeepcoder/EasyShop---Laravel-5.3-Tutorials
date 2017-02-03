@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Add New Product</div>
   <form action="{{ url('/admin/add_product') }}" method="post" enctype="multipart/form-data">
                            <div class="panel-options">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="panel-body">
                         
    
                              Name:    <input type="text" name="pro_name" class="form-control">
                             <br/>
                            Price     <input type="text" name="pro_price" class="form-control">
                            <br/>
                            
                              Code:    <input type="text" name="pro_code" class="form-control">
                             <br/>
                            Imgage     <input type="file" name="pro_img" class="form-control">
                            <br/>
                            
                            
                              Details:    <input type="text" name="pro_info" class="form-control">
                             <br/>
                            Spl  price     <input type="text" name="spl_price" class="form-control">
                            <br/>
                            
                            
                             
                               

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">New vs Returning Visitors</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">

                                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">New vs Returning Visitors</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">

                                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">New vs Returning Visitors</div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                        <br /><br />
                    </div>
                </div>
            </div>

            <div class="content-box-large">
                Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
                <br /><br />
                Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
                <br /><br />
                Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
                <br /><br />
                Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
                <br /><br />
                Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
                <br /><br />
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
                <br /><br />
                Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
                <br /><br />
                Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
                <br /><br />
                Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
                <br /><br />
                Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt imperdiet luctus. Fusce lobortis metus id leo pellentesque, iaculis consequat lacus posuere.
                <br /><br />
                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                <br /><br />
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus non ante iaculis tempor. Etiam ac gravida erat. Sed interdum elit a libero tincidunt placerat. Quisque molestie blandit sem vitae tincidunt. Aliquam feugiat, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus, id tincidunt erat tempor nec. Praesent interdum, lectus vel dictum convallis, velit est fringilla arcu, eget sollicitudin nibh sem ut magna.
                <br /><br />
                Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
                <br /><br />
                Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
                <br /><br />
                Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
                <br /><br />
                Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
                <br /><br />
                Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
                <br /><br />
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
                <br /><br />
                Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
                <br /><br />
                Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
                <br /><br />
                Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
                <br /><br />
                Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt imperdiet luctus. Fusce lobortis metus id leo pellentesque, iaculis consequat lacus posuere.
                <br /><br />
                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
                <br /><br />
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus non ante iaculis tempor. Etiam ac gravida erat. Sed interdum elit a libero tincidunt placerat. Quisque molestie blandit sem vitae tincidunt. Aliquam feugiat, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus, id tincidunt erat tempor nec. Praesent interdum, lectus vel dictum convallis, velit est fringilla arcu, eget sollicitudin nibh sem ut magna.
                <br /><br />
                Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
                <br /><br />
                Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
                <br /><br />
                Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
                <br /><br />
                Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
                <br /><br />
                Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
                <br /><br />
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
                <br /><br />
                Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
                <br /><br />
                Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
                <br /><br />
                Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
                <br /><br />
            </div>
        </div>
    </div>
</div>

@endsection