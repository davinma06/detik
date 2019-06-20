@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="text-center">
                        <span style="font-size: 20px">List of articles</span>
                    </div>
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}  
                    </div>
                    @endif
                    <div class="text-right" style="margin-top: 20px">
                        <a href="{{ route('article.create')}}" class="btn btn-default" role="button">
                            <i class="fa fa-plus" style="margin-right: 5px"></i>
                            Add new
                        </a>
                    </div>
                    <div>
                        <table class="table table-bordered" style="margin-top: 5px">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Article Title</th>
                                    <th>Article Content</th>
                                    <th>Article Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($data) > 0)
                                @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$value->article_title}}</td>
                                    <td>{{$value->article_content}}</td>
                                    <td class="text-center">
                                        <img class="img-responsive" src="{{Storage::url($value->article_image_preview)}}" style="width: 100px;height: 100px"></img>
                                    </td>
                                    <td style="vertical-align : middle;text-align:center;">
                                        <div>
<!--                                            <a class="btn btn-default" role="button">
                                                <i class="fa fa-pencil" style="margin-right: 5px"></i>
                                                Show
                                            </a>-->
                                            <a href ="{{route('article.edit',$value->id)}}" class="btn btn-default" role="button">
                                                <i class="fa fa-pencil" style="margin-right: 5px"></i>
                                                Edit
                                            </a>
                                            <form id="deleteForm_{{$key+1}}" action="{{ route('article.destroy', $value->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-default" role="button" onclick="document.getElementById('deleteForm_{{$key+1}}').submit()">
                                                <i class="fa fa-close" style="margin-right: 5px"></i>
                                                Delete
                                            </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                            <td colspan="5" class="text-center">Data is empty</td>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
