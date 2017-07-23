{{--<div class="modal-header" >--}}
{{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--</div>--}}


{{--<div id="" class="modal fade" role="dialog">--}}
{{--<div class="modal-dialog">--}}

<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>


    <div class="modal-body">
        <div class="box-header with-border text-center">
            <h3 class="box-title">Edit Slide</h3>
        </div>
        <div class="box box-primary">

            <div class="box-body">

                <form action="{{route('updateSlider',['id' => $product->id])}}" class="formImage" method="post">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="upload-demo1">
                                <input type="file" name="" id="file" class="input-file  upload2">
                                <label for="file" class="btn btn-tertiary js-labelFile">
                                    <i class="icon fa fa-check"></i>
                                    <span class="js-fileName">Change a Image</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--name-->
                    <div class="row">
                        <h3>Name</h3>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Հայերեն</label>
                                <input type="text" name="hy_header" class="form-control" placeholder="Հայերեն"
                                       value="{{$product->translate('hy')->header}}" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>English</label>
                                <input type="text" name="en_header" class="form-control" placeholder="English"
                                       value="{{$product->translate('en')->header}}" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Русский</label>
                                <input type="text" name="ru_header" class="form-control" placeholder="Русский"
                                       value="{{$product->translate('ru')->header}}" >
                            </div>
                        </div>
                    </div> <!--name-->

                    <!--position-->
                    <div class="row">
                        <h3>Position</h3>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Հայերեն</label>
                                <input type="text" name="hy_title" class="form-control" placeholder="Հայերեն"
                                       value="{{$product->translate('hy')->title}}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>English</label>
                                <input type="text" name="en_title" class="form-control" placeholder="English"
                                       value="{{$product->translate('en')->title}}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Русский</label>
                                <input type="text" name="ru_title" class="form-control" placeholder="Русский"
                                       value="{{$product->translate('ru')->title}}">
                            </div>
                        </div>
                    </div>
                    <!--position-->


                    <!--about emploee-->
                    <div class="row">
                        <h3>About Employee</h3>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Հայերեն</label>
                                <input type="text" name="hy_description" class="form-control" placeholder="Հայերեն"
                                       value="{{$product->translate('hy')->description}}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>English</label>
                                <input type="text" name="en_description" class="form-control" placeholder="English"
                                       value="{{$product->translate('en')->description}}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-center">
                                <label>Русский</label>
                                <input type="text" name="ru_description" class="form-control" placeholder="Русский"
                                       value="{{$product->translate('ru')->description}}">
                            </div>
                        </div>
                    </div>
                    <!--about emploee-->

                    <!--social-->

                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    <input type="hidden" name="image">
                </form>
            </div>
            <!-- /.box-body -->
        </div>
    </div>


</div>
<script>
    $uploadCrop = $(".upload-demo1").croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200
        },
        boundary: {
            width: 300,
            height: 301
        }
    });

    w = 500;
    h = 500;
</script>