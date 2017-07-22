@extends('adminlte::layouts.app')

@section('main-content')



    <section class="content-header text-center">
        <h1>
            Slider
            <small> All</small>
        </h1>
    </section>
    <div class="container-fluid spark-screen">
        <div class="row mb_30">
            <div class="col-sm-2">
                <button class="btn btn-app" title="Add Slide" data-toggle="modal" data-target="#addSlide">
                    Add
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Header</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @php($i = 0)
                @foreach($slider_info as $sld)
                    <tr
                            data-target="sld_{{$i}}"
                            data-href_update="{{route('updateSlider')}}"
                            data-prod="{{$sld->id}}"
                            data-href_delete="{{route('deleteSlider')}}"
                    >

                        <td>
                            <div class="col-sm-4">
                                <img src="{{asset('image/slider/'.$sld->image)}}"
                                     class="img-rounded"
                                     alt="{{$sld->translate('en')->name}}"
                                     width="100%">
                            </div>
                        </td>
                        <td>{{$sld->translate('en')->title}}</td>
                        <td>{{$sld->translate('en')->header}}</td>
                        <td>{{$sld->translate('en')->description}}</td>

                        <td>
                            <button class="btn  btn-primary iconUpdate" data-toggle="modal" data-status="sld_{{$i}}"
                                    data-target="#modalUpdate">
                                <i class="fa fa-edit"></i>
                                Edit
                            </button>
                            <button class="btn  btn-danger iconDelete" data-toggle="modal" data-status="sld_{{$i}}"
                                    data-target="#modalDelete">
                                <i class="fa fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    @php($i++)
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    @include('vendor.adminlte.add.addSlide')
@endsection

@section('script')
    @parent

    <script>
        @if(session('error') == 'add')
            $('#addSlide').modal();
        @elseif(session('error') == 'edit')

                @endif
                $uploadCrop = $(".upload-demo2").croppie({
            enableExif: true,
            viewport: {
                width: 500,
                height: 100
            },
            boundary: {
                width: 600,
                height: 120
            }
        });

        w = 2000;
        h = 400;
    </script>
@endsection