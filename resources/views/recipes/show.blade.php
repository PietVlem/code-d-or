@extends('layout')

@section('content')
    <div class="container container--full">
        @foreach (array_chunk($recipes->all(), 3) as $threeRecipes)
        <div class="row">
            @foreach($threeRecipes as $recipe)
                <div class="col-sm-4">
                    <a class="recipe-block-link" href="/recipes/{{ $recipe->id }}"> 
                        <div class="recipe-wrapper">
                            <div class="image" style="background-image: url({{ $recipe->image_url }});" ></div>
                            <h2>
                                {{ $recipe->name }}
                            </h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @endforeach
        <div class="pagination-container">
            {{ $recipes->links() }}
        </div>
        
    </div>
@endsection
