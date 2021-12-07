@extends('layout.app')
@section('title', 'Home')
@section('content')
<div>
    <div class="row tm-row">
        <div class="col-12">
            <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."
                       aria-label="Search">
                <button class="tm-search-button" type="submit">
                    <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
    <h1>Home page</h1>
    <hr class="tm-hr-primary">
    <br/>
    <div style="text-align: center;">
        <img src="{{URL('/img/about-01.jpg')}}" alt="Image" width="800" >
    </div>
    <br/>
    <br/>
    <br/>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna<br/>
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.<br/>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint<br/>
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

</div>
@endsection
