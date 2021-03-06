@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Forms
                        <small>included</small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-xs-12 col-md-6">

                    <!-- Basic form -->
                    <h4>Basic form</h4>
                    <div class="with_border with_padding">

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox_1" checked="">
                                <label for="checkbox_1">Remember me</label>
                            </div>
                            <button type="submit" class="theme_button">Submit</button>
                        </form>
                    </div>
                    <!-- .with_border -->


                    <h4>Basic form with placeholders</h4>
                    <div class="with_border with_padding">

                        <form>
                            <div class="form-group has-placeholder">
                                <label for="exampleInputEmail2">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
                            </div>
                            <div class="form-group has-placeholder">
                                <label for="exampleInputPassword2">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox_2" checked="">
                                <label for="checkbox_2">Remember me</label>
                            </div>
                            <button type="submit" class="theme_button">Submit</button>
                        </form>
                    </div>
                    <!-- .with_border -->

                    <h4>Basic form with input icons and placeholders</h4>
                    <div class="with_border with_padding">

                        <form>
                            <div class="form-group has-placeholder">
                                <label for="exampleInputEmail4">Email address:</label>
                                <i class="grey fa fa-envelope-o"></i>
                                <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Email Address">
                            </div>
                            <div class="form-group has-placeholder">
                                <label for="exampleInputPassword4">Password:</label>
                                <i class="grey fa fa-pencil-square-o"></i>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox_4" checked="">
                                <label for="checkbox_4">Remember me</label>
                            </div>
                            <button type="submit" class="theme_button">Submit</button>
                        </form>
                    </div>
                    <!-- .with_border -->

                    <!-- Inline form -->
                    <h4>Inline form</h4>
                    <div class="with_border with_padding">

                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword3">Password:</label>
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <button type="submit" class="theme_button color1">Submit</button>
                        </form>
                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->

                <div class="col-xs-12 col-md-6">

                    <!-- Horizontal form -->
                    <h4>Horizontal form</h4>
                    <div class="with_border with_padding">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail6" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail6" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6" class="col-sm-2 control-label">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword6" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox_6">
                                        <label for="checkbox_6">Remember me:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="theme_button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- .with_border -->

                    <!-- Supported controls -->
                    <h4>Supported controls</h4>
                    <div class="with_border with_padding">

                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Text input">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <h5>Styled checkboxes and radio buttons:</h5>
                            <div class="checkbox">
                                <input type="checkbox" id="demoCheckbox_3">
                                <label for="demoCheckbox_3">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="checkbox disabled">
                                <input type="checkbox" id="demoCheckbox_4" disabled="">
                                <label for="demoCheckbox_4">
                                    Option two is disabled
                                </label>
                            </div>

                            <div class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                <label for="optionsRadios1">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                <label for="optionsRadios2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="radio disabled">
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                <label for="optionsRadios3">
                                    Option three is disabled
                                </label>
                            </div>

                            <h5>Default checkboxes and radio buttons with labels with "for" attributes</h5>

                            <div class="checkbox">
                                <label for="demoCheckboxDefault_3">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <input type="checkbox" id="demoCheckboxDefault_3">
                            </div>
                            <div class="checkbox disabled">
                                <label for="demoCheckboxDefault_4">
                                    Option two is disabled
                                </label>
                                <input type="checkbox" id="demoCheckboxDefault_4" disabled="">
                            </div>

                            <div class="radio">
                                <label for="optionsRadiosDefault1">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <input type="radio" name="optionsRadiosDefault" id="optionsRadiosDefault1" value="option1" checked="">
                            </div>
                            <div class="radio">
                                <label for="optionsRadiosDefault2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                                <input type="radio" name="optionsRadiosDefault" id="optionsRadiosDefault2" value="option2">
                            </div>
                            <div class="radio disabled">
                                <label for="optionsRadiosDefault3">
                                    Option three is disabled
                                </label>
                                <input type="radio" name="optionsRadiosDefault" id="optionsRadiosDefault3" value="option3" disabled="">
                            </div>

                            <h5>Default checkboxes and radio buttons with inputs in labels:</h5>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="demoCheckboxDefaultInput_3"> Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="checkbox disabled">
                                <label>
                                    <input type="checkbox" id="demoCheckboxDefaultInput_4" disabled=""> Option two is disabled
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadiosDefaultLabel" id="optionsRadiosDefaultLabel1" value="option1" checked=""> Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadiosDefaultLabel" id="optionsRadiosDefaultLabel2" value="option2"> Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="radio disabled">
                                <label>
                                    <input type="radio" name="optionsRadiosDefaultLabel" id="optionsRadiosDefaultLabel3" value="option3" disabled=""> Option three is disabled
                                </label>
                            </div>

                            <h5>Selects</h5>

                            <div class="form-group">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select multiple="" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->


        </div>
        <!-- .container -->
    </section>
@endsection
