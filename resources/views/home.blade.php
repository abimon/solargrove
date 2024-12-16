@extends("layouts.dashboard")
@section('dashboard')
<div class="container">
    <div class="card card-round" id="articles">
        <div class="card-header">
        <a href="/articles/create" class="btn btn-success"><i class="fa fa-plus"></i> Add Article</a>
                    
            <div class="card-head-row card-tools-still-right">
                <div class="card-title">Articles</div>
                <div class="card-tools justify-content-between">
                    <div class="dropdown">
                        <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Posted</a>
                            <a class="dropdown-item" href="#">Not Posted</a>
                            <a class="dropdown-item" href="#">All</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-start">Title</th>
                            <th scope="col" class="text-start">Date Published</th>
                            <th scope="col" class="text-start">Status</th>
                            <th scope="col" class="text-center" colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\Article::all() as $key=>$article)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <th scope="row">{{$article->title}}</th>
                            <td class="text-start">{{date_format($article->created_at,'jS F, Y H:i:s')}}</td>
                            <td class="text-start">
                                <span class="badge {{$article->is_published?'badge-success':'badge-secondary'}}">{{$article->is_published?'Published':'Private'}}</span>
                            </td>
                            <td class="text-center">
                                <a href="/articles/{{$article->id}}/edit" class="btn btn-primary">
                                    Edit
                                </a>
                            </td>
                            <td class="text-center">
                            <form action="/articles/{{$article->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <a href="/articles/{{$article->id}}" class="btn btn-info">
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection