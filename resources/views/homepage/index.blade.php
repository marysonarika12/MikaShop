<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <title>{{ $title }}</title>
</head>

<body>
    {{-- memanggil menu --}}
    @include('layouts.menu')

    {{-- memanggil content --}}
    @extends('layouts.template')

    {{-- section categori --}}
    @section('content')

        <div class='container'>

            {{-- carousell --}}
            <div class="row">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="asset\image\gambar12.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Blazer Cream Sweet</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset\image\gambar22.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Dress Kids Sweet</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="asset\image\gambar33.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Long Dress Casual</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- end carousol --}}
            {{-- kategori produk --}}
            <hr>
            <hr>
            <div class="row mt-4">
                <div class="col">
                    <h3 class="text-center">Kategori Produc</h3>
                    <div class="card-group">
                        <div class="card">
                            <img src="asset\image\G1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blazer</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="asset\image\G2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kids</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="asset\image\G3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Long Dress</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This card has even longer content than the first to show that equal
                                    height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card">
                            <img src="asset\image\G4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blazer</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="asset\image\G5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kids</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="asset\image\G6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Long Dress</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This card has even longer content than the first to show that equal
                                    height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end kategori --}}

            {{-- new produc release --}}
            {{-- end produc release --}}

            {{-- profile toko --}}
            <hr>
            <hr>
            <div class="row mt-4">
                <div class="col">
                    <h3 class="text-center">Toko Bismillah</h3>
                    <p>
                        Online shop atau yang disebut dengan toko online adalah sistem belanja online yang mana pembeli
                        dapat menanyakan harga
                        atau pertanyaan apapun terkait produk kepada penjual secara langsung, dapat melalui BBM, LINE,
                        Facebook, Instagram atau
                        Whatsapp.Toko Bismillah memudahkan masyarakat Indonesia berbelanja keperluan hidup. Melalui toko
                        online, masyarakat dapat
                        mengakses produk di mana saja dan kapan saja. Masyarakat juga dimudahkan dengan sistem pembayaran
                        dan pengiriman.
                    </p>

                </div>
            </div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    </html>
