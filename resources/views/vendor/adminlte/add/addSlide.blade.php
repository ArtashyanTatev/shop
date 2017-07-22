<div id="addSlide" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Add Slide</h3>
                </div>
                <div class="box box-primary">

                    <div class="box-body">

                        <form action="{{route('create_slide')}}" class="formImage" method="post">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="upload-demo2">
                                        <input type="file" name="" id="file" class="input-file  upload2">
                                        <label for="file" class="btn btn-tertiary js-labelFile">
                                            <i class="icon fa fa-check"></i>
                                            <span class="js-fileName">Change a Image</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <center>
                                    <h4>Title</h4>
                                </center>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Հայերեն</label>
                                        <input type="text" name="hy_title" class="form-control" placeholder="Հայերեն"
                                               value="{{old('hy_title')}}" >
                                        @if ($errors->has('hy_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('hy_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>English</label>
                                        <input type="text" name="en_title" class="form-control" placeholder="English"
                                               value="{{old('en_title')}}" >
                                        @if ($errors->has('en_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('en_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Русский</label>
                                        <input type="text" name="ru_title" class="form-control" placeholder="Русский"
                                               value="{{old('ru_title')}}" >
                                        @if ($errors->has('ru_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ru_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <h4>Header</h4>
                                </center>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Հայերեն</label>
                                        <input type="text" name="hy_header" class="form-control" placeholder="Հայերեն"
                                               value="{{old('hy_header')}}" >
                                        @if ($errors->has('hy_header'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('hy_header') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>English</label>
                                        <input type="text" name="en_header" class="form-control" placeholder="English"
                                               value="{{old('en_header')}}" >
                                        @if ($errors->has('en_header'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('en_header') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Русский</label>
                                        <input type="text" name="ru_header" class="form-control" placeholder="Русский"
                                               value="{{old('ru_header')}}" >
                                        @if ($errors->has('ru_header'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ru_header') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <center>
                                    <h4>Description</h4>
                                </center>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Հայերեն</label>
                                        <input type="text" name="hy_description" class="form-control" placeholder="Հայերեն"
                                               value="{{old('hy_description')}}" >
                                        @if ($errors->has('hy_description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('hy_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>English</label>
                                        <input type="text" name="en_description" class="form-control" placeholder="English"
                                               value="{{old('en_description')}}" >
                                        @if ($errors->has('en_description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('en_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Русский</label>
                                        <input type="text" name="ru_description" class="form-control" placeholder="Русский"
                                               value="{{old('ru_description')}}" >
                                        @if ($errors->has('ru_description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ru_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="image">

                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>

    </div>
</div>
