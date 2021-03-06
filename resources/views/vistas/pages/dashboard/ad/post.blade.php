@extends('vistas.include.dashboard')
@section('styles')
@endsection
@section('content')
    <div class="tg-dashboardbanner">
        <h1>Profile Settings</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Inicio</a></li>
            <li><a href="javascript:void(0);">Panel de Control</a></li>
            <li class="tg-active">Crear un anuncio</li>
        </ol>
    </div>
    <!--************************************
					Section Start
			*************************************-->
    <section class="tg-dbsectionspace tg-haslayout">
        <div class="row">
            <form class="tg-formtheme tg-formdashboard">
                <fieldset>
                    <div class="tg-postanad">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>{{__("client.ad_detail")}}</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group text-center">
                                        <a href="#" class="tg-btn" data-toggle="modal" data-target=".tg-categorymodal">{{__("client.select_category")}}</a>
                                    </div>
                                    <div class="form-group">
                                        <ol class="tg-categorysequence">
                                            <li>{{__("client.nocat")}} <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">{{__("selcat")}}</a></li>
                                        </ol>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="adtitle" class="form-control" placeholder="Enter Ad Title*">
                                    </div>
                                    <div class="form-group tg-priceformgroup">
                                        <div class="tg-checkbox">
                                            <input id="tg-priceoncall" type="checkbox" name="priceoncall" value="on">
                                            <label for="tg-priceoncall">Price On Call</label>
                                        </div>
                                        <input type="text" name="price" class="form-control" placeholder="Price*">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="tg-tinymceeditor" class="tg-tinymceeditor"></textarea>
                                    </div>
                                    <label class="tg-fileuploadlabel" for="tg-photogallery">
                                        <span>Drop files anywhere to upload</span>
                                        <span>Or</span>
                                        <span class="tg-btn">Select Files</span>
                                        <span>Maximum upload file size: 500 KB</span>
                                        <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
                                    </label>
                                    <div class="tg-horizontalthemescrollbar tg-profilephotogallery">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="images/thumbnail/img-01.jpg" alt="image description">
                                                    <i class="icon-trash"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="tg-activephoto">
                                                    <img src="images/thumbnail/img-02.jpg" alt="image description">
                                                    <i class="fa fa-check-square-o"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/thumbnail/img-02.jpg" alt="image description">
                                                    <i class="icon-trash"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="tg-activephoto">
                                                    <img src="images/thumbnail/img-04.jpg" alt="image description">
                                                    <i class="fa fa-check-square-o"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="tg-activephoto">
                                                    <img src="images/thumbnail/img-05.jpg" alt="image description">
                                                    <i class="fa fa-check-square-o"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/thumbnail/img-01.jpg" alt="image description">
                                                    <i class="icon-trash"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="tg-activephoto">
                                                    <img src="images/thumbnail/img-02.jpg" alt="image description">
                                                    <i class="fa fa-check-square-o"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/thumbnail/img-02.jpg" alt="image description">
                                                    <i class="icon-trash"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/thumbnail/img-04.jpg" alt="image description">
                                                    <i class="icon-trash"></i>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="tg-activephoto">
                                                    <img src="images/thumbnail/img-05.jpg" alt="image description">
                                                    <i class="fa fa-check-square-o"></i>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Enable Offers/Messages</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="tg-checkbox">
                                        <input id="tg-enablemessages" type="checkbox" name="enablemessages" value="on">
                                        <label for="tg-enablemessages">Enable offers/messages option in this Post</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-dashboardbox tg-contactdetail">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Contact Detail</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group">
                                        <strong>I’m a:</strong>
                                        <div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="usertype" value="same user" checked>
														<label for="tg-sameuser">Same User</label>
													</span>
                                            <span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="usertype" value="someone else">
														<label for="tg-someoneelse">Someone Else</label>
													</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone*">
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select>
                                                <option>Select Country</option>
                                                <option>Select Country</option>
                                                <option>Select Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select>
                                                <option>Select State</option>
                                                <option>Select State</option>
                                                <option>Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select>
                                                <option>Select City</option>
                                                <option>Select City</option>
                                                <option>Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="fa fa-crosshairs"></i>
                                        <input type="text" name="enteraddress" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="tg-checkbox">
                                        <input id="tg-agreetermsandrules" type="checkbox" name="agreetermsandrules" value="on">
                                        <label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
                                    </div>
                                    <button class="tg-btn" type="button">Post Ad</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
    <!--************************************
            Section End
    *************************************-->


@endsection
@section('script')
    <!--************************************
        Theme Modal Box Start
*************************************-->
    <div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog tg-thememodaldialog" role="document">
            <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content tg-thememodalcontent">
                <div class="tg-title">
                    <strong>Select Category</strong>
                </div>
                <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel">
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-08.png" alt="image description"></figure>
                            <h3>Mobiles</h3>
                        </div>
                    </div>
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-09.png" alt="image description"></figure>
                            <h3>Electronics</h3>
                        </div>
                    </div>
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-10.png" alt="image description"></figure>
                            <h3>Vehicles</h3>
                        </div>
                    </div>
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-11.png" alt="image description"></figure>
                            <h3>Bikes</h3>
                        </div>
                    </div>
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-12.png" alt="image description"></figure>
                            <h3>Animals</h3>
                        </div>
                    </div>
                    <div class="tg-category">
                        <div class="tg-categoryholder">
                            <figure><img src="images/icons/img-13.png" alt="image description"></figure>
                            <h3>Furniture</h3>
                        </div>
                    </div>
                </div>
{{--                <ul class="tg-subcategories">--}}
{{--                    <li>--}}
{{--                        <div class="tg-title">--}}
{{--                            <strong>Electronics</strong>--}}
{{--                        </div>--}}
{{--                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">--}}
{{--                            <ul>--}}
{{--                                <li class="tg-hassubcategories">Dishwashers</li>--}}
{{--                                <li class="tg-hassubcategories">Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fridge Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fans</li>--}}
{{--                                <li class="tg-hassubcategories">Air Conditioners</li>--}}
{{--                                <li class="tg-hassubcategories">Water Dispenser</li>--}}
{{--                                <li class="tg-hassubcategories">Microwave Ovens</li>--}}
{{--                                <li class="tg-hassubcategories">Refrigerators</li>--}}
{{--                                <li class="tg-hassubcategories">Hair Dryers</li>--}}
{{--                                <li class="tg-hassubcategories">Washing Machine</li>--}}
{{--                                <li class="tg-hassubcategories">dolor in reprehenderit</li>--}}
{{--                                <li class="tg-hassubcategories">in voluptate velit esse</li>--}}
{{--                                <li class="tg-hassubcategories">Dishwashers</li>--}}
{{--                                <li class="tg-hassubcategories">Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fridge Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fans</li>--}}
{{--                                <li class="tg-hassubcategories">Air Conditioners</li>--}}
{{--                                <li class="tg-hassubcategories">Water Dispenser</li>--}}
{{--                                <li class="tg-hassubcategories">Microwave Ovens</li>--}}
{{--                                <li class="tg-hassubcategories">Refrigerators</li>--}}
{{--                                <li class="tg-hassubcategories">Hair Dryers</li>--}}
{{--                                <li class="tg-hassubcategories">Washing Machine</li>--}}
{{--                                <li class="tg-hassubcategories">dolor in reprehenderit</li>--}}
{{--                                <li class="tg-hassubcategories">in voluptate velit esse</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="tg-title">--}}
{{--                            <strong>Air Conditioners</strong>--}}
{{--                        </div>--}}
{{--                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">--}}
{{--                            <ul>--}}
{{--                                <li>Voltas</li>--}}
{{--                                <li>Samsung</li>--}}
{{--                                <li>Daikin</li>--}}
{{--                                <li>LG</li>--}}
{{--                                <li>Whirlpool</li>--}}
{{--                                <li>Videocon</li>--}}
{{--                                <li>Blue Star</li>--}}
{{--                                <li>Hitachi</li>--}}
{{--                                <li>Haier</li>--}}
{{--                                <li>General</li>--}}
{{--                                <li>dolor in reprehenderit</li>--}}
{{--                                <li>in voluptate velit esse</li>--}}
{{--                                <li>Voltas</li>--}}
{{--                                <li>Samsung</li>--}}
{{--                                <li>Daikin</li>--}}
{{--                                <li>LG</li>--}}
{{--                                <li>Whirlpool</li>--}}
{{--                                <li>Videocon</li>--}}
{{--                                <li>Blue Star</li>--}}
{{--                                <li>Hitachi</li>--}}
{{--                                <li>Haier</li>--}}
{{--                                <li>General</li>--}}
{{--                                <li>dolor in reprehenderit</li>--}}
{{--                                <li>in voluptate velit esse</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
{{--    sasda--}}
{{--    <div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">--}}
{{--        <div class="modal-dialog tg-thememodaldialog" role="document">--}}
{{--            <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--            <div class="modal-content tg-thememodalcontent">--}}
{{--                <div class="tg-title">--}}
{{--                    <strong>Select Category</strong>--}}
{{--                </div>--}}
{{--                <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel">--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-08.png" alt="image description"></figure>--}}
{{--                            <h3>Mobiles</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-09.png" alt="image description"></figure>--}}
{{--                            <h3>Electronics</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-10.png" alt="image description"></figure>--}}
{{--                            <h3>Vehicles</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-11.png" alt="image description"></figure>--}}
{{--                            <h3>Bikes</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-12.png" alt="image description"></figure>--}}
{{--                            <h3>Animals</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tg-category">--}}
{{--                        <div class="tg-categoryholder">--}}
{{--                            <figure><img src="images/icons/img-13.png" alt="image description"></figure>--}}
{{--                            <h3>Furniture</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <ul class="tg-subcategories">--}}
{{--                    <li>--}}
{{--                        <div class="tg-title">--}}
{{--                            <strong>Electronics</strong>--}}
{{--                        </div>--}}
{{--                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">--}}
{{--                            <ul>--}}
{{--                                <li class="tg-hassubcategories">Dishwashers</li>--}}
{{--                                <li class="tg-hassubcategories">Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fridge Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fans</li>--}}
{{--                                <li class="tg-hassubcategories">Air Conditioners</li>--}}
{{--                                <li class="tg-hassubcategories">Water Dispenser</li>--}}
{{--                                <li class="tg-hassubcategories">Microwave Ovens</li>--}}
{{--                                <li class="tg-hassubcategories">Refrigerators</li>--}}
{{--                                <li class="tg-hassubcategories">Hair Dryers</li>--}}
{{--                                <li class="tg-hassubcategories">Washing Machine</li>--}}
{{--                                <li class="tg-hassubcategories">dolor in reprehenderit</li>--}}
{{--                                <li class="tg-hassubcategories">in voluptate velit esse</li>--}}
{{--                                <li class="tg-hassubcategories">Dishwashers</li>--}}
{{--                                <li class="tg-hassubcategories">Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fridge Freezers</li>--}}
{{--                                <li class="tg-hassubcategories">Fans</li>--}}
{{--                                <li class="tg-hassubcategories">Air Conditioners</li>--}}
{{--                                <li class="tg-hassubcategories">Water Dispenser</li>--}}
{{--                                <li class="tg-hassubcategories">Microwave Ovens</li>--}}
{{--                                <li class="tg-hassubcategories">Refrigerators</li>--}}
{{--                                <li class="tg-hassubcategories">Hair Dryers</li>--}}
{{--                                <li class="tg-hassubcategories">Washing Machine</li>--}}
{{--                                <li class="tg-hassubcategories">dolor in reprehenderit</li>--}}
{{--                                <li class="tg-hassubcategories">in voluptate velit esse</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="tg-title">--}}
{{--                            <strong>Air Conditioners</strong>--}}
{{--                        </div>--}}
{{--                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">--}}
{{--                            <ul>--}}
{{--                                <li>Voltas</li>--}}
{{--                                <li>Samsung</li>--}}
{{--                                <li>Daikin</li>--}}
{{--                                <li>LG</li>--}}
{{--                                <li>Whirlpool</li>--}}
{{--                                <li>Videocon</li>--}}
{{--                                <li>Blue Star</li>--}}
{{--                                <li>Hitachi</li>--}}
{{--                                <li>Haier</li>--}}
{{--                                <li>General</li>--}}
{{--                                <li>dolor in reprehenderit</li>--}}
{{--                                <li>in voluptate velit esse</li>--}}
{{--                                <li>Voltas</li>--}}
{{--                                <li>Samsung</li>--}}
{{--                                <li>Daikin</li>--}}
{{--                                <li>LG</li>--}}
{{--                                <li>Whirlpool</li>--}}
{{--                                <li>Videocon</li>--}}
{{--                                <li>Blue Star</li>--}}
{{--                                <li>Hitachi</li>--}}
{{--                                <li>Haier</li>--}}
{{--                                <li>General</li>--}}
{{--                                <li>dolor in reprehenderit</li>--}}
{{--                                <li>in voluptate velit esse</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--************************************
            Theme Modal Box End
    *************************************-->
@endsection
