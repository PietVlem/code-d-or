@extends('layout')

@section('content')
    <div class="container container--full">
        <div class="row">
            <div class="col-sm-8">
                <div class="recipe-section">
                    <div class="image image--big" style="background-image: url({{ $recipe->image_url }});"></div>
                </div>
                <div class="recipe-section">
                    <h1>{{ $recipe->name }}</h1>
                </div>
                <div class="recipe-section">
                    <p><strong>Duration:</strong> {{ $recipe->duration }} Minutes</p>
                </div>
                <div class="recipe-section">
                    <h3>Ingredients</h3>
                    <ul>
                        @foreach ($recipe->ingredients as $ingredient)
                            <script>
                                console.log('test');
                            </script>
                            <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->unit }} {{ $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="recipe-section">
                    <h3>Steps</h3>
                    <ol>
                        @foreach ($recipe->steps as $step)
                            <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="recipe-section">
                    <p><strong>Catergory: </strong>{{ $recipe->category->name }}</p>
                </div>
            </div>
            <div class="col-sm-4">
                @foreach ($related_recipes as $recipe)
                    <a href="/recipes/{{ $recipe->id }}">
                    <div class="related-recipe-wrapper">
                        <div class="image image--related-recipes" style="background-image: url({{ $recipe->image_url }});"></div>
                        <div>
                            <h2>{{ $recipe->name }}</h2>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
