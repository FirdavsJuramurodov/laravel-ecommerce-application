

@extends('site.app')
@section('title', 'Search')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div id="code_prod_complex">
                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4">
                            <figure class="card card-product">
                                @if ($product->images->count() > 0)
                                    <div class="img-wrap padding-y"> <img src="{{ url('storage/' . $product->images[0]->filename )}}" alt="Product" ></div>
                                @else
                                    <div class="img-wrap padding-y"><img src="https://via.placeholder.com/176" alt=""></div>
                                @endif
                                <figcaption class="info-wrap">
                                    <h4 class="title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                </figcaption>
                                <div class="bottom-wrap">
                                    <a href="{{ route('product.show', $product->slug) }}" class="btn btn-sm btn-success float-right">View Details</a>
                                    @if ($product->sale_price != 0)
                                        <div class="price-wrap h5">
                                            <span class="price"> {{ config('settings.currency_symbol').$product->sale_price }} </span>
                                            <del class="price-old"> {{ config('settings.currency_symbol').$product->price }}</del>
                                        </div>
                                    @else
                                        <div class="price-wrap h5">
                                            <span class="price"> {{ config('settings.currency_symbol').$product->price }} </span>
                                        </div>
                                    @endif
                                </div>
                            </figure>
                        </div>
                    @empty
                        <p>No results found for your search.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@stop
