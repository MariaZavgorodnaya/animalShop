@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Single Post
                        <small class="pull-right">
                            <a href="/admin-comments">
                                <i class="fa fa-comments"></i> Post discussion</a>
                        </small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <form enctype="application/x-www-form-urlencoded" class="form-horizontal" method="post">

                <div class="row">
                    <div class="col-md-8">
                        <div class="with_border with_padding">

                            <h4>
                                Post text
                                <span class="pull-right">
											<input type="submit" class="theme_button small_button" value="Save Post">
										</span>

                            </h4>

                            <hr>


                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post title: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                            </div>
                            <!--<div class="row form-group">
                                <label class="col-lg-3 control-label">Post slug: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>-->

                           <!-- <div class="row form-group">
                                <label class="col-lg-3 control-label">Categories: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>-->

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post Description: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="desc" name="desc">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post Category: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="category" name="category">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post url: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="category" name="category-slug">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post content: </label>
                                <div class="col-lg-9">
                                    <textarea rows="8" class="form-control" id="content" name="content"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <input type="submit" class="theme_button wide_button" value="Save Post">
                                    <a href="/admin-post" class="theme_button inverse wide_button">Cancel</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                    <div class="col-md-4">

                        <div class="with_border with_padding bottommargin_10">

                            <h4>Post Meta</h4>

                            <hr>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish date: </label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control" name="">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish time: </label>
                                <div class="col-lg-9">
                                    <input type="time" class="form-control" name="">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label">Status: </label>
                                <div class="col-lg-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished1" value="draft" checked="checked"> Draft
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished2" value="published"> Published
                                    </label>
                                </div>
                            </div>


                        </div>
                        <!-- .with_border -->

                        <div class="with_border with_padding">

                            <h4>Post Media</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">


                                <div class="item-media">
                                    <img src="images/gallery/01.jpg" alt="..." name="media">
                                </div>

                                <div class="item-edit-controls darklinks">
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <label class="control-label">Post Video: </label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                </div>
                <!-- .row  -->


            </form>

        </div>
        <!-- .container -->
    </section>
@endsection
