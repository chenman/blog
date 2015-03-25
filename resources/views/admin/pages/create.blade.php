@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新建文章</div>
                    <div class="panel-body">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                输入有误，请确认后重新提交！<br/>
                                <ul>
                                    @foreach($errors as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{URL('admin/pages')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input type="text" name="title" class="form-control" required="required"/>
                            <br/>
                            <textarea name="body" cols="30" rows="10" class="form-control" required="required"></textarea>
                            <br/>
                            <button class="btn btn-info">新增</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection