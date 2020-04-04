<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">The best bulletin board ever</h1>
            <p class="lead text-muted">Hello! How are you? I want achieve a job in your company! Keep calm and drink coffee :) Have a nice day!</p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-6" >
                    <div class="card mb-4 box-shadow">
                        <p class="card-text" style="background-color: #D3D3D3; text-align: center;">{{$post->title ?? ''}}</p>
                        @isset($path)
                        <img class="card-img-top" src="{{ asset('/storage/' . $path) }}" alt="Some image" style="margin-left: 40%;">
                        @endisset
                        <div class="card-body">
                            <p class="card-text" style="background-color: #E9ECEF; text-align: center;">{{$post->body ?? ''}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ Carbon\Carbon::parse($post->updated_at)->format('d.m.Y H:m') }}</small>
                                <small class="text-muted">{{$post->author ?? ''}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: center">{{ $posts->links() }}</div>
    </div>
</main>
