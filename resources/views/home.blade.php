@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <!-- dashboard only styles -->
<style>

    .collapse.left,
    .collapsing.left {
      -webkit-transition-property: all;
      transition-property: all;
      height: 100%;
      -webkit-transition-duration: 0.25s;
      transition-duration: 0.25s;
      opacity: 1;
    }

    .collapsing.left {
      opacity: 0.6;
    }
</style>
<div class="container-fluid">
    <div class="row d-flex flex-nowrap wrapper">

        <main class="col-md float-left col pl-5 pl-md-3 py-3 main">
            <div class="row mb-3">
                <div class="col-xl-6 col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body text-white">

                            <h6 class="text-uppercase">National Beneficiaries</h6>
                            <h1 class="display-1">3,134,000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body text-white">

                            <h6 class="text-uppercase">Programmes</h6>
                            <h1 class="display-1">4</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body text-white">

                            <h6 class="text-uppercase">Interventions</h6>
                            <h1 class="display-1">18</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.js" integrity="sha512-Q14+1TrWEvei8tRKsIz9VHDv0FWiBH7fKcipKo96Cn1xV4C/aiZCZ3DJssn05eUESYz4RIUXU0Ux0zAD1/qW2g==" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.js" integrity="sha512-GJa/LjpGK81b9EeizDHN9K25l9H6bDAz2v4Ga6FnkFjNlAMVtMh6RbeAdUH94qY3KlggKGi9YfCkwGptnjjDkA==" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.js.map" integrity="undefined" crossorigin="anonymous"></script>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.css" integrity="sha512-1ZwE8kCr0CknYsK+JYHqxnFqCZ2c17AJ6uTVf6me8UFCZJPE12ujWxnspvRJUb/zciTQ2D58PkJHQk5PLSYJ4Q==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.css" integrity="sha512-Mji2X7D1EhUZpESSu1KN/b79CaC0Z1S+5AS9DtEkUXaAbZ49cFk8i29nypoOKn+X9RWmSMwCn3cJvn5v7v1fZw==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.css.map" integrity="undefined" crossorigin="anonymous" />
            
            <hr>
            <div class="row mb-3">
                <div class="col-sm-6">
                    <!--Jvector world map-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                        <h6 class="mb-3">World Market</h6><hr>
                        
                        <div id="worldMarket" style="width: 100%; height: 350px"></div>
                        
                    </div>
                    <!--/Jvector world map-->

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6 col-md-3 text-center">
                    <img src="//placehold.it/200/dddddd/fff?text=1" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4 class="text-truncate">Responsive</h4>
                    <span class="text-muted">Device agnostic</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="//placehold.it/200/e4e4e4/fff?text=2" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4 class="text-truncate">Frontend</h4>
                    <span class="text-muted">UI / UX oriented</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="//placehold.it/200/d6d6d6/fff?text=3" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4 class="text-truncate">HTML5</h4>
                    <span class="text-muted">Standards-based</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <img src="//placehold.it/200/e0e0e0/fff?text=4" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4 class="text-truncate">Framework</h4>
                    <span class="text-muted">CSS and JavaScript</span>
                </div>
            </div>

            <a id="features"></a>
            <hr>

            <div class="row my-4">
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="//placehold.it/740x180/bbb/fff?text=..." alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Layouts</h4>
                            <p class="card-text">Flexbox provides simpler, more flexible layout options like vertical centering.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mt-3">
                        <div class="card-body">
                            <h3 class="card-title">Flexbox</h3>
                            <p class="card-text">Flexbox is now the default, and Bootstrap 4 supports SASS out of the box.</p>
                            <a href="#" class="btn btn-outline-secondary">Outline</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Label</th>
                                    <th>Header</th>
                                    <th>Column</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td>bootstrap</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-25 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>grid</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>rwd</td>
                                    <td>web design</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-25 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>responsive</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>free</td>
                                    <td>open-source</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-50 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>template</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>frontend</td>
                                    <td>developer</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-75 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>card panel</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>migration</td>
                                    <td>bootstrap 4</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-100 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>design</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>navbar</td>
                                    <td>sticky</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-50 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>header</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>layout</td>
                                    <td>examples</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-25 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>grid</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>migration</td>
                                    <td>bootstrap 4</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w-75 bg-primary wow slideInLeft"></div>
                                        </div>
                                    </td>
                                    <td>design</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->

            <a id="more"></a>
            <hr>

            <div class="mb-3">
                <div class="card-deck">
                    <div class="card bg-faded border-0 text-center">
                        <div class="card-body">
                            <blockquote class="card-bodyquote">
                                <p>It's really good news that the new Bootstrap 4 now has support for CSS 3 flexbox.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card bg-faded border-0 text-center">
                        <div class="card-body">
                            <blockquote class="card-bodyquote">
                                <p>The Bootstrap 3.x element that was called "Panel" before, is now called a "Card".</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card bg-faded border-0 text-center">
                        <div class="card-body">
                            <blockquote class="card-bodyquote">
                                <p>There are also some interesting new text classes for uppercase and capitalize.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card bg-faded border-0 text-center">
                        <div class="card-body">
                            <blockquote class="card-bodyquote">
                                <p>If you want to use cool icons in Bootstrap 4, you'll have to find your own such as Font Awesome or Ionicons.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            <a id="layouts"></a>
            <hr>

            <div class="row mb-3">
                <div class="col-lg-6 py-2">
                    <div class="card">
                        <div class="card-header">
                            Note
                        </div>
                        <div class="card-body">
                            <p class="card-text">All of these Bootstrap 3.x components have been dropped entirely for the new card component.</p>
                            <button type="button" class="btn btn-secondary btn-lg">Large</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile1" role="tab" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#messages1" role="tab" data-toggle="tab">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings1" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <br>
                        <div role="tabpanel" class="tab-pane active" id="home1">
                            <h4>Home</h4>
                            <p>
                                1. These Bootstrap 4 Tabs work basically the same as the Bootstrap 3.x tabs.
                                <br>
                                <br>
                                <button class="btn btn-outline-primary btn-lg">Wow</button>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile1">
                            <h4>Pro</h4>
                            <p>
                                2. Tabs are helpful to hide or collapse some addtional content.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages1">
                            <h4>Messages</h4>
                            <p>
                                3. You can really put whatever you want into the tab pane.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings1">
                            <h4>Settings</h4>
                            <p>
                                4. Some of the Bootstrap 3.x components like well and panel have been dropped for the new card component.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-6 py-2">
                    <div class="card card-body">
                        <ul id="tabsJustified" class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" href="" data-target="#tab1" data-toggle="tab">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="" data-target="#tab2" data-toggle="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-target="#tab3" data-toggle="tab">More</a>
                            </li>
                        </ul>
                        <!--/tabs-->
                        <br>
                        <div id="tabsJustifiedContent" class="tab-content">
                            <div class="tab-pane" id="tab1">
                                <div class="list-group">
                                    <a href="" class="list-group-item"><span class="float-right label label-success">51</span> Home Link</a>
                                    <a href="" class="list-group-item"><span class="float-right label label-success">8</span> Link 2</a>
                                    <a href="" class="list-group-item"><span class="float-right label label-success">23</span> Link 3</a>
                                    <a href="" class="list-group-item text-muted">Link n..</a>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab2">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h4>Profile Section</h4>
                                        <p>Imagine creating this simple user profile inside a tab card.</p>
                                    </div>
                                    <div class="col-sm-5"><img src="//placehold.it/170" class="float-right img-fluid rounded"></div>
                                </div>
                                <hr>
                                <a href="javascript:;" class="btn btn-info btn-block">Read More Profiles</a>
                                <div class="spacer5"></div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="list-group">
                                    <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-info badge-pill">44</span> .panel is now .card</a>
                                    <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-info badge-pill">8</span> .nav-justified is deprecated</a>
                                    <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-info badge-pill">23</span> .badge is now .badge-pill</a>
                                    <a href="" class="list-group-item d-inline-block text-muted">Message n..</a>
                                </div>
                            </div>
                        </div>
                        <!--/tabs content-->
                    </div>
                    <!--/card-->
                </div>
                <!--/col-->
                <div class="col-lg-6 py-2">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion example
                            </div>
                            <div id="collapseOne" class="card-body collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <p>This is a Bootstrap 4 accordion that uses the <code>.card</code> classes instead of <code>.panel</code>. The single-open section aspect is not working because the parent option (dependent on .panel) has not yet been finalized
                                    in BS 4 alpha. </p>
                            </div>
                            <div class="card-header" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Mobile-first
                            </div>
                            <div id="collapseTwo" class="card-body collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <p>Just like it's predecesor, Bootstrap 4 is mobile-first so that you start by designing for smaller devices such as smartphones and tablets, then proceed to laptop and desktop layouts.</p>
                            </div>
                            <div class="card-header" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Built for CSS3
                            </div>
                            <div id="collapseThree" class="card-body collapse" role="tabpanel" aria-labelledby="headingThree">
                                <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </main>
    </div>
</div>
@stop
