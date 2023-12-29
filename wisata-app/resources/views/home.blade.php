@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide w-75 position-relative top-25 mx-auto">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="/airport">
                        <img src="{{ 'img/airport.jpg' }}" class="d-block w-100" alt="...">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>AIRPORT</h5>
                        <p>“The engine is the heart of an airplane, but the pilot is its soul.” — Walter Raleigh.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ 'img/airport.jpg' }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ 'img/airport.jpg' }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container text-center">
            <div class="row text-dark">
              <div class="col-8">
                <h1 style="text-align: center;">Welcome To Jakarta!</h1>
                <p style="line-height: 30px; font-size:large;"> Jakarta adalah ibu kota Indonesia yang menjadi salah satu tempat wisata yang di minati oleh para wisatawan
                    lokal maupun macanegara.
                    Dengan beragam keindahan tempat wisata, kesenian budaya, destinasi pariwisata, dan kuliner,
                    pemandangan city lights yang memukau menjadi hal yang tidak mungkin dilewatkan, yang menjadikan Jakarta
                    memberikan kesan yang tak terlupakan bagi para wisatawan.
                </p>
                <p id="planning-jkt" style="font-size: larger; display:inline"></p>
              </div>
              <div class="col-4">
                <form action="" style="float: right;">
                    <h3>Saran:</h3>
                    <textarea name="saran" id="" class="form-control" cols="30" rows="5"></textarea>
                    <br>
                    <div class="button">
                        <button>Kirim Saran</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
        <footer>
            <b>&copy; 2023. Planning Jakarta</b>
        </footer>
    </div>
@endsection
