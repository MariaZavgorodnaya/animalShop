@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Order Summary</h3>
                </div>
            </div>
            <!-- .row -->

            <form class="form-horizontal">

                <div class="row">
                    <div class="col-md-12">
                        <div class="with_border with_padding">

                            <h4>
                                Order Totals
                                <span class="pull-right">
											<button type="submit" class="theme_button small_button">Save order</button>
										</span>
                            </h4>

                            <hr>

                            <div class="table-responsive bottommargin_20">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>Title:</th>
                                        <th>Price:</th>
                                        <th>Quantity:</th>
                                        <th>Total:</th>
                                    </tr>
                                    <tr class="item-editable">

                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="images/shop/01.png" alt="...">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <h5>
                                                        <a href="admin_product.html">Consectetur adipisicing elit</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="media-middle">
                                            <strong>
                                                $55.00
                                            </strong>
                                        </td>
                                        <td class="media-middle">
                                            2
                                        </td>
                                        <td class="media-middle">
                                            $110.00
                                        </td>
                                    </tr>

                                    <tr class="item-editable">

                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="images/shop/02.png" alt="...">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <h5>
                                                        <a href="admin_product.html">Lullamco laboris nisi</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="media-middle">
                                            <strong>
                                                $185.00
                                            </strong>
                                        </td>
                                        <td class="media-middle">
                                            1
                                        </td>
                                        <td class="media-middle">
                                            $185.00
                                        </td>
                                    </tr>

                                    <tr class="item-editable">

                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="images/shop/03.png" alt="...">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <h5>
                                                        <a href="admin_product.html">Sunt in culpa qui</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="media-middle">
                                            <strong>
                                                $95.00
                                            </strong>
                                        </td>
                                        <td class="media-middle">
                                            3
                                        </td>
                                        <td class="media-middle">
                                            $285.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <strong>Total:</strong>
                                        </td>
                                        <td>
                                            <strong>$580.00</strong>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <!-- .table-responsive -->


                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Order comment: </label>
                                <div class="col-lg-9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Order status:</label>
                                <div class="col-lg-9">
                                    <select class="form-control">
                                        <option selected="">Payed</option>
                                        <option>Payed</option>
                                        <option>Sent</option>
                                        <option>Delivered</option>
                                        <option>Deleted</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="theme_button wide_button">Save order</button>
                                    <a href="admin_orders.html" class="theme_button inverse wide_button">Cancel</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row  -->
            </form>

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h5>
                            Order Info:
                        </h5>

                        <ul class="list1 no-bullets">
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16 round">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Order date:
                                        </strong>
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-info fontsize_16 round">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Shipping Method
                                        </strong>
                                        Consectetur adipisicing elit.
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16 round">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Delivery Address:
                                        </strong>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-danger fontsize_16 round">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Order Total:
                                        </strong>
                                        $580
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->

                <div class="col-md-6">
                    <div class="with_border with_padding">
                        <h5>
                            Customer Info:
                        </h5>
                        <ul class="list1 no-bullets">

                            <li>
                                <div class="media">

                                    <div class="media-left">
                                        <img src="images/team/01.jpg" alt="...">
                                    </div>
                                    <div class="media-body media-middle">
                                        <h5 class="bottommargin_0">
                                            <a href="admin_profile.html">Alex Walker</a>
                                        </h5>
                                        &lt;email@example.com&gt;

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Comments:
                                        </strong>
                                        146
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-info fontsize_16">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Member sicne:
                                        </strong>
                                        12/10/2014
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Orders:
                                        </strong>
                                        12
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

@endsection
