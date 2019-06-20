@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(isset($data))
                    <form method="POST" action="{{ route('article.update', $data->id) }}" enctype="multipart/form-data">
                    @method('PATCH') 
                    @else
                    <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="form-group row">
                            <label for="article_title" class="col-md-4 col-form-label text-md-right">{{ __('Article Title') }}</label>

                            <div class="col-md-6">
                                <input id="article_title" type="text" class="form-control" name="article_title" value="{{isset($data) ? $data->article_title : ''}}" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="article_content" class="col-md-4 col-form-label text-md-right">{{ __('Article Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="article_content" class="form-control" name="article_content" rows="5" required autofocus>{{isset($data) ? $data->article_content : ''}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="article_thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Article Preview Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="article_thumbnail" name="article_thumbnail">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
