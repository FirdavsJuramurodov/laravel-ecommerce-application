
@extends('site.app')
@section('title', $product->name)
@section('content')

    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">{{ $product->name }}</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top" id="site">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-5 border-right">
                                <article class="gallery-wrap">
                                    @if ($product->images->count() > 0)
                                       <!-- The grid: four columns -->
                                            

                                            <div id="rowgi" >
                                            @if (isset($product->images[0]))    
                                            <div class="columngi">
                                            <img class="imgi" class="data-mdb-img" src="{{ url('storage/' . $product->images[0]->filename )}}"  onclick="myFunction(this);">
                                            </div>
                                            @else
                                            <div class="columngi">
                                            <img class="imgi" class="data-mdb-img" src=""  onclick="myFunction(this);">
                                            </div>
                                            @endif
                                            @if (isset($product->images[1]))
                                            <div class="columngi">
                                            <img class="imgi" src="{{ url('storage/' . $product->images[1]->filename )}}" onclick="myFunction(this);">
                                            </div>
                                            @else
                                            <div class="columngi">
                                            <img class="imgi" class="data-mdb-img" src=""  onclick="myFunction(this);">
                                            </div>
                                            @endif
                                            @if (isset($product->images[2]))
                                            <div class="columngi">
                                            <img class="imgi" src="{{ url('storage/' . $product->images[2]->filename )}}"  onclick="myFunction(this);">
                                            </div>
                                            @else
                                            <div class="columngi">
                                            <img class="imgi" class="data-mdb-img" src=""  onclick="myFunction(this);">
                                            </div>
                                            @endif
                                            @if (isset($product->images[3]))
                                            <div class="columngi">
                                            <img  class="imgi" src="{{ url('storage/' . $product->images[3]->filename )}}"  onclick="myFunction(this);">
                                            </div>
                                            @else
                                            <div class="columngi">
                                            <img class="imgi" class="data-mdb-img" src=""  onclick="myFunction(this);">
                                            </div>
                                            @endif
                                            </div>

                                            <!-- The expanding image container -->
                                            <div class="containergi">
                                            <!-- Close the image -->

                                            <!-- Expanded image -->



                                            <!-- The Modal -->
                                            <img id="expandedImggi" style="width:90%"  >
                                            <div id="myModal" class="modal">

                                            <!-- The Close Button -->
                                            <span class="close">&times;</span>

                                            <!-- Modal Content (The Image) -->
                                            <img class="modal-content" id="img01">

                                            <!-- Modal Caption (Image Text) -->
                                            <div id="caption"></div>
                                                
                                          
                                            

                                            <!-- Image text -->
                                            <div id="imgtextgi"></div>
                                            </div>

                                            <script>
                                             function myFunction(imgs) { 
                                                // Get the expanded image
                                                var expandImg = document.getElementById("expandedImggi");
                                                // Get the image text
                                                var imgText = document.getElementById("imgtextgi");
                                                // Use the same src in the expanded image as the image being clicked on from the grid
                                                expandImg.src = imgs.src;
                                                // Use the value of the alt attribute of the clickable image as text inside the expanded image
                                                imgText.innerHTML = imgs.alt;
                                                // Show the container element (hidden with CSS)
                                                expandImg.parentElement.style.display = "block";
                                                }


                                                // Get the modal
                                            var modal = document.getElementById("myModal");

                                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                                            var img = document.getElementById("expandedImggi");
                                            var modalImg = document.getElementById("img01");
                                            var captionText = document.getElementById("caption");
                                            img.onclick = function(){
                                            modal.style.display = "block";
                                            modalImg.src = this.src;
                                            captionText.innerHTML = this.alt;
                                            }

                                            // Get the <span> element that closes the modal
                                            var span = document.getElementsByClassName("close")[0];

                                            // When the user clicks on <span> (x), close the modal
                                            span.onclick = function() {
                                            modal.style.display = "none";
                                            }
                                            </script>    
                                    @else
                                        <div class="img-big-wrap">
                                            <div>
                                                <a href="https://via.placeholder.com/176" data-fancybox=""><img src="https://via.placeholder.com/176"></a>
                                            </div>
                                        </div>
                                    @endif
                                   
                                </article>
                            </aside>
                            <aside class="col-sm-7">
                                <article class="p-5">
                                    <h3 class="title mb-3">{{ $product->name }}</h3>
                                    <dl class="row">
                                        <dt class="col-sm-3">Viloyat</dt>
                                        <dd class="col-sm-9">{{ $product->city }}</dd>
                                        <dt class="col-sm-3">Weight</dt>
                                        <dd class="col-sm-9">{{ $product->weight }}</dd>
                                    </dl>
                                    <div class="mb-3">
                                        @if ($product->sale_price > 0)
                                            <var class="price h3 text-danger">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice">{{ $product->sale_price }}</span>
                                                <del class="price-old"> {{ config('settings.currency_symbol') }}{{ $product->price }}</del>
                                            </var>
                                        @else
                                            <var class="price h3 text-success">
                                                <span class="currency">{{ config('settings.currency_symbol') }}</span><span class="num" id="productPrice">{{ $product->price }}</span>
                                            </var>
                                        @endif
                                    </div>
                                    <hr>

                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dlist-inline">





                                                </dl>
                                            </div>
                                        </div>
                                        <hr>
                                           <div class="row">
                                               <h4>Description</h4>
                                            <div class="col-sm-12">
                                            <article class="card mt-4">
                                               <div class="card-body">
                                               {!! $product->description !!}
                                                 </div>
                                              </article>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add To Cart</button> -->
                                    </form>
                                </article>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                   
                </div>
            </div>
        </div>
    </section>
@stop
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#addToCart').submit(function (e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function () {
                $('#productPrice').html("{{ $product->sale_price != '' ? $product->sale_price : $product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
@endpush
