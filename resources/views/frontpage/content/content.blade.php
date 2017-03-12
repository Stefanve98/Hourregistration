@extends('frontpage.index')

@section('content')
    <div class="py-5 section text-center">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="text-primary">HEADING</h1>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5  section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6">
                    <h1 class="text-primary">HEADING</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                        pretium quis, sem.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card my-1">
                        <div class="card-block text-center">
                            <h2>Small</h2>
                            <h3>10 $</h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-block">
                            <a href="#" class="btn btn-block btn-primary">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="bg-primary card-block">
                            <h1 class="card-title text-white">Normal</h1>
                            <h2 class="text-white">20 $</h2>
                        </div>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-block ">
                            <a href="#" class="btn btn-block btn-lg btn-primary">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-1">
                        <div class="card-block text-xs-center">
                            <h2 class="card-title">Large</h2>
                            <h3 class="">30 $</h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-block ">
                            <a href="#" class="btn btn-block btn-primary">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-sm-center text-primary">HEADING</h2>
                    <p class="text-justify m-y-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                        pretium quis, sem.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2 class="text-sm-center text-primary">HEADING</h2>
                    <p class="text-justify m-y-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                        pretium quis, sem.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2 class="text-sm-center text-primary">HEADING</h2>
                    <p class="text-justify m-y-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                        pretium quis, sem.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('frontpage.footer')
@endsection