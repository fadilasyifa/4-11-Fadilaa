@extends('layouts.master')

@section('title', 'Halaman Gallery')

@section('main')
    <h1>Halaman Gallery</h1>
    <div class="row">
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="https://www.dailysia.com/wp-content/uploads/2022/02/Toge-Inumaki_1-660x400.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inumaki</h5>
                    <p class="card-text">Some quick example text to build on the Inumaki and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="https://www.dailysia.com/wp-content/uploads/2022/02/Toge-Inumaki_1-660x400.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inumaki</h5>
                    <p class="card-text">Some quick example text to build on the Inumaki and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
