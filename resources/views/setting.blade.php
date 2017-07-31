@extends('layout.default')

@section('container-style', 'container-small')
@section('content')
    @include('layout.navbar')

    <div class="row marketing">
        <div class="col-lg-12">
            <div class="col-lg-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">基本信息</a></li>
                    <li><a href="#">成员管理</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="editor-project-name" class="col-sm-2 control-label">项目名称</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="editor-project-name"
                                   value="{{ .title }}" placeholder="项目名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editor-description" class="col-sm-2 control-label">项目描述</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="editor-description" rows="3">{{ .description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection