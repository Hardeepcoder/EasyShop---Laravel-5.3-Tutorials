@extends('admin.master')

@section('content')


<div class="page-content">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-10">

            <div class="row">

                <div class="content-box-large">
                    <h1>Add Category</h1>

                    {!! Form::open(['url' => 'admin/catForm',  'method' => 'post']) !!}
                    <table class="table-borderless" style="height:200px">

                        <tr>
                            <td> Catgeory Name:</td>
                            <td>    <input type="text" name="cat_name" class="form-control"></td>
                        </tr>

                         <tr>
                             <td colspan="2">
                        <input type="submit" value="Add Category" class="btn btn-success pull-right">
                             </td>
                         </tr>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        {!! Form::close() !!}
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection