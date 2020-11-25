<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <h2 class="text-dark font-weight-bolder mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                      fill="#000000" fill-rule="nonzero"/>
								<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                      fill="#000000" opacity="0.3"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
                    Dashboard
                </h2>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Today</a>
            <a href="#" class="btn btn-primary btn-sm font-weight-bold font-size-base mr-2">Month</a>
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Quarter</a>
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Year</a>

            <div class='input-group' id='dashboardDateRange'>
                <input type='text' class="form-control" readonly placeholder="Select date range"/>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="la la-calendar-check-o  text-primary"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-7">

    <div class="container-fluid">

        <div class="row">
            <div class="col-6">

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title py-3">

                            <div class="image-input image-input-empty image-input-outline mr-5" id="kt_user_edit_avatar" style="background-image: url('<?php echo $objCompany->Logo != null ? $objCompany->Logo : "/theme/assets/media/users/default.jpg"?>')">
                                <div class="image-input-wrapper"></div>
                            </div>


                            <div class="card-label">
                                <span class="font-size-h5"><?php echo $objCompany->Name?></span>
                                <div class="mt-4 font-size-h6"><?php echo $objCountry->Name?>
                                    <?php if($objCountry->FlagPath != ""): ?>
                                    <div class="symbol symbol-20 ml-2">
                                        <img alt="Pic" src="<?php echo $objCountry->FlagPath?>">
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-primary font-weight-bold">
                                <i class="flaticon-edit"></i> Upgrade Company
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-spacer">
                            <div class="row m-0">
                                <div class="col bg-warning px-6 py-4 rounded-xl mr-7 mb-7">
                                    <span class="svg-icon svg-icon-xl-3x svg-icon-lg-3x svg-icon-md-2x svg-icon-sm-1x svg-icon-white">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                          height="16" rx="1.5"></rect>
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                          rx="1.5"></rect>
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                          rx="1.5"></rect>
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                          rx="1.5"></rect>
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                        </span>
                                    <span class="card-title font-weight-bolder text-white font-size-h3 mb-0 mt-6 d-block">145,932</span>
                                    <span class="font-weight-bold text-white font-size-h6">Unique Visitor</span>
                                </div>
                                <div class="col bg-primary px-6 py-4 rounded-xl mb-7">
                                    <span class="svg-icon svg-icon-xl-3x svg-icon-lg-3x svg-icon-md-2x svg-icon-sm-1x svg-icon-white">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                          fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z"
                                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                        </span>
                                    <span class="card-title font-weight-bolder text-white font-size-h3 mb-0 mt-6 d-block">349,600</span>
                                    <span class="font-weight-bold text-white font-size-h6">Profile Visits</span>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col bg-danger px-6 py-4 rounded-xl mr-7">
                                    <span class="svg-icon svg-icon-xl-3x svg-icon-lg-3x svg-icon-md-2x svg-icon-sm-1x svg-icon-white">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z"
                                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z"
                                                          fill="#000000" fill-rule="nonzero"
                                                          transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129) "/>
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                        </span>
                                    <span class="card-title font-weight-bolder text-white font-size-h3 mb-0 mt-6 d-block">125,987</span>
                                    <span class="font-weight-bold text-white font-size-h6">Product Visits</span>
                                </div>
                                <div class="col bg-success px-6 py-4 rounded-xl">
                                    <span class="svg-icon svg-icon-xl-3x svg-icon-lg-3x svg-icon-md-2x svg-icon-sm-1x svg-icon-white">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M5,5 L19,5 C19.5522847,5 20,5.44771525 20,6 C20,6.55228475 19.5522847,7 19,7 L5,7 C4.44771525,7 4,6.55228475 4,6 C4,5.44771525 4.44771525,5 5,5 Z M5,13 L19,13 C19.5522847,13 20,13.4477153 20,14 C20,14.5522847 19.5522847,15 19,15 L5,15 C4.44771525,15 4,14.5522847 4,14 C4,13.4477153 4.44771525,13 5,13 Z"
                                                          fill="#000000" opacity="0.3"/>
                                                    <path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 C20,10.5522847 19.5522847,11 19,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L19,17 C19.5522847,17 20,17.4477153 20,18 C20,18.5522847 19.5522847,19 19,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z"
                                                          fill="#000000"/>
                                                </g>
                                            </svg
                                                    <!--end::Svg Icon-->
                                        </span>
                                    <span class="card-title font-weight-bolder text-white font-size-h3 mb-0 mt-6 d-block">50,623</span>
                                    <span class="font-weight-bold text-white font-size-h6">Catalogue Visits</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-confetti icon-xl text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                Popular Products
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-primary font-weight-bold">
                                <i class="flaticon-add-circular-button"></i> Add Products
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <?php // var_dump($_SESSION['arrProducts']); ?>
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                    <tr class="">
                                        <th class="p-0 w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-120px font-weight-bolder text-center font-size-h6"><i class="flaticon-users icon-2x text-primary mr-2"></i><br/>Unique Visitors</th>
                                        <th class="p-0 min-w-120px font-weight-bolder text-center font-size-h6"><i class="flaticon-network icon-2x text-primary mr-2"></i><br/>Total Visits</th>
                                        <th class="p-0 min-w-140px font-weight-bolder text-center font-size-h6"><i class="flaticon-shapes icon-2x text-primary mr-2"></i><br/>Search Appearance</th>
                                        <th class="p-0 min-w-40px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $counter = 0; ?>
                                    <?php foreach ($arrProducts as $objProduct): ?>
                                    <tr>
                                        <td class="pl-0 py-5">
                                            <div class="symbol symbol-100 symbol-light mr-2">
                                                <span class="symbol-label">
                                                    <img src="<?php echo $objProduct->image ?>" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="pl-0">
                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo $objProduct->title ?></a>
                                            <span class="text-muted font-weight-normal d-block"><?php  ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-dark-75 font-size-h6 font-weight-bold"><?php $v = rand(1000, 9000); echo number_format($v) ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-dark-75 font-size-h6 font-weight-bold"><?php echo number_format(rand(5*$v, 10*$v)) ?></span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-dark-75 font-size-h6 font-weight-bold"><?php echo number_format(rand($v/3, 3*$v)) ?></span>
                                        </td>
                                        <td class="text-right pr-0">
                                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                        <?php
                                        $counter++;
                                        if($counter > 4) {
                                            break;
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                       
                    </div>
                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-earth-globe icon-xl text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                Visitors Map
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <div id="chartdiv2" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-lock icon-xl text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                My Premium Access
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-primary font-weight-bold">
                                <i class="flaticon-medal"></i> Upgrade for better results
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-5">
                                    <i class="flaticon-information icon-3x text-primary font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark">
                                    <span class="font-weight-bolder font-size-h1 text-dark font-weight-bold">23</span>
                                    <span class="font-size-h4 text-dark-75">Inquiries</span>
                                </div>
                            </div>
                            <!--end: Item-->

                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-5">
                                    <i class="flaticon-search-1 icon-3x text-success font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark">
                                    <span class="font-weight-bolder font-size-h1 text-dark font-weight-bold">64</span>
                                    <span class="font-size-h4 text-dark-75">Potential Distributors</span>
                                </div>
                            </div>
                            <!--end: Item-->

                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-5">
                                    <i class="flaticon-calendar-3 icon-3x text-warning font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark">
                                    <span class="font-weight-bolder font-size-h1 text-dark font-weight-bold">37</span>
                                    <span class="font-size-h4 text-dark-75">Scheduled Calls</span>
                                </div>
                            </div>
                            <!--end: Item-->

                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill my-1">
                                <span class="mr-5">
                                    <i class="flaticon-paper-plane icon-3x text-danger font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark">
                                    <span class="font-weight-bolder font-size-h1 text-dark font-weight-bold">103</span>
                                    <span class="font-size-h4 text-dark-75">Sent Introductions</span>
                                </div>
                            </div>
                            <!--end: Item-->
                        </div>
                    </div>
                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-truck icon-xl text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                Suggested Distributors
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-primary font-weight-bold">
                                <i class="flaticon-interface-7"></i> Select Target Countries
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                    <tr class="">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-120px font-weight-bolder text-center font-size-h6"><i class="flaticon2-delivery-truck text-primary mr-2"></i> Potential Distributors</th>
                                        <th class="p-0 min-w-160px font-weight-bolder text-center font-size-h6"><i class="flaticon-trophy text-primary mr-2"></i> Aumet Indicator</th>
                                        <th class="p-0 min-w-120px font-weight-bolder text-center font-size-h6"><i class="fa fa-people-arrows text-primary mr-2"></i> Population</th>
                                        <th class="p-0 min-w-40px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>

                    </div>
                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon-earth-globe icon-xl text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                My Sales Network
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap">
                            <div id="chartdiv" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <div class="row">
            <div class="col-12">


            </div>
        </div>

    </div>
</div>

<script>
    // predefined ranges
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    $('#dashboardDateRange').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, function (start, end, label) {
        $('#dashboardDateRange .form-control').val(start.format('DD/MM/YY') + ' - ' + end.format('DD/MM/YY'));
    });

    var mySalesNetworkMap = function() {
        var map = new GMaps({
            div: '#mySalesNetworkMap',
            lat: 24.953296,
            lng:  55.024875
        });
        map.addMarker({
            lat: 24.953296,
            lng:  55.024875,
            title: 'Lima',
            click: function(e) {
                if (console.log) console.log(e);
                alert('You clicked in this marker');
            }
        });
        map.addMarker({
            lat: 23.485327,
            lng:  58.239169,
            title: 'Lima',
            click: function(e) {
                if (console.log) console.log(e);
                alert('You clicked in this marker');
            }
        });

        map.addMarker({
            lat: -12.042,
            lng: -77.028333,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content: '<span style="color:#000">HTML Content!</span>'
            }
        });
        map.setZoom(5);
    }

    //mySalesNetworkMap();
</script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
        var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
        chart.geodata = am4geodata_worldLow;

// Set projection
        chart.projection = new am4maps.projections.Miller();

// Create map polygon series
        var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
        polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
        polygonSeries.useGeodata = true;

// Configure series
        var polygonTemplate = polygonSeries.mapPolygons.template;
        polygonTemplate.tooltipText = "{name}";
        polygonTemplate.polygon.fillOpacity = 0.6;


// Create hover state and set alternative fill color
        var hs = polygonTemplate.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(0);

// Add image series
        var imageSeries = chart.series.push(new am4maps.MapImageSeries());
        imageSeries.mapImages.template.propertyFields.longitude = "longitude";
        imageSeries.mapImages.template.propertyFields.latitude = "latitude";
        imageSeries.mapImages.template.tooltipText = "{title}";
        imageSeries.mapImages.template.propertyFields.url = "url";

        var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
        circle.radius = 3;
        circle.propertyFields.fill = "color";

        var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
        circle2.radius = 3;
        circle2.propertyFields.fill = "color";


        circle2.events.on("inited", function(event){
            animateBullet(event.target);
        })


        function animateBullet(circle) {
            var animation = circle.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
            animation.events.on("animationended", function(event){
                animateBullet(event.target.object);
            })
        }

        var colorSet = new am4core.ColorSet();

        imageSeries.data = [ {
            "title": "Brussels",
            "latitude": 50.8371,
            "longitude": 4.3676,
            "color":colorSet.next()
        }, {
            "title": "Copenhagen",
            "latitude": 55.6763,
            "longitude": 12.5681,
            "color":colorSet.next()
        }, {
            "title": "Paris",
            "latitude": 48.8567,
            "longitude": 2.3510,
            "color":colorSet.next()
        }, {
            "title": "Reykjavik",
            "latitude": 64.1353,
            "longitude": -21.8952,
            "color":colorSet.next()
        }, {
            "title": "Moscow",
            "latitude": 55.7558,
            "longitude": 37.6176,
            "color":colorSet.next()
        }, {
            "title": "Madrid",
            "latitude": 40.4167,
            "longitude": -3.7033,
            "color":colorSet.next()
        }, {
            "title": "London",
            "latitude": 51.5002,
            "longitude": -0.1262,
            "url": "http://www.google.co.uk",
            "color":colorSet.next()
        }, {
            "title": "Peking",
            "latitude": 39.9056,
            "longitude": 116.3958,
            "color":colorSet.next()
        }, {
            "title": "New Delhi",
            "latitude": 28.6353,
            "longitude": 77.2250,
            "color":colorSet.next()
        }, {
            "title": "Tokyo",
            "latitude": 35.6785,
            "longitude": 139.6823,
            "url": "http://www.google.co.jp",
            "color":colorSet.next()
        }, {
            "title": "Ankara",
            "latitude": 39.9439,
            "longitude": 32.8560,
            "color":colorSet.next()
        }, {
            "title": "Buenos Aires",
            "latitude": -34.6118,
            "longitude": -58.4173,
            "color":colorSet.next()
        }, {
            "title": "Brasilia",
            "latitude": -15.7801,
            "longitude": -47.9292,
            "color":colorSet.next()
        }, {
            "title": "Ottawa",
            "latitude": 45.4235,
            "longitude": -75.6979,
            "color":colorSet.next()
        }, {
            "title": "Washington",
            "latitude": 38.8921,
            "longitude": -77.0241,
            "color":colorSet.next()
        }, {
            "title": "Kinshasa",
            "latitude": -4.3369,
            "longitude": 15.3271,
            "color":colorSet.next()
        }, {
            "title": "Cairo",
            "latitude": 30.0571,
            "longitude": 31.2272,
            "color":colorSet.next()
        }, {
            "title": "Pretoria",
            "latitude": -25.7463,
            "longitude": 28.1876,
            "color":colorSet.next()
        } ];



    }); // end am4core.ready()
</script>

<script>
    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var continents = {
            "AF": 0,
            "AN": 1,
            "AS": 2,
            "EU": 3,
            "NA": 4,
            "OC": 5,
            "SA": 6
        }

// Create map instance
        var chart = am4core.create("chartdiv2", am4maps.MapChart);
        chart.projection = new am4maps.projections.Miller();

// Create map polygon series for world map
        var worldSeries = chart.series.push(new am4maps.MapPolygonSeries());
        worldSeries.useGeodata = true;
        worldSeries.geodata = am4geodata_worldLow;
        worldSeries.exclude = ["AQ"];

        var worldPolygon = worldSeries.mapPolygons.template;
        worldPolygon.tooltipText = "{name}";
        worldPolygon.nonScalingStroke = true;
        worldPolygon.strokeOpacity = 0.5;
        worldPolygon.fill = am4core.color("#eee");
        worldPolygon.propertyFields.fill = "color";

        var hs = worldPolygon.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(9);


// Create country specific series (but hide it for now)
        var countrySeries = chart.series.push(new am4maps.MapPolygonSeries());
        countrySeries.useGeodata = true;
        countrySeries.hide();
        countrySeries.geodataSource.events.on("done", function(ev) {
            worldSeries.hide();
            countrySeries.show();
        });

        var countryPolygon = countrySeries.mapPolygons.template;
        countryPolygon.tooltipText = "{name}";
        countryPolygon.nonScalingStroke = true;
        countryPolygon.strokeOpacity = 0.5;
        countryPolygon.fill = am4core.color("#eee");

        var hs = countryPolygon.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(9);

// Set up click events
        worldPolygon.events.on("hit", function(ev) {
            ev.target.series.chart.zoomToMapObject(ev.target);
            var map = ev.target.dataItem.dataContext.map;
            if (map) {
                ev.target.isHover = false;
                countrySeries.geodataSource.url = "https://www.amcharts.com/lib/4/geodata/json/" + map + ".json";
                countrySeries.geodataSource.load();
            }
        });

// Set up data for countries
        var data = [];
        for(var id in am4geodata_data_countries2) {
            if (am4geodata_data_countries2.hasOwnProperty(id)) {
                var country = am4geodata_data_countries2[id];
                if (country.maps.length) {
                    data.push({
                        id: id,
                        color: chart.colors.getIndex(continents[country.continent_code]),
                        map: country.maps[0]
                    });
                }
            }
        }
        worldSeries.data = data;

// Zoom control
        chart.zoomControl = new am4maps.ZoomControl();

        var homeButton = new am4core.Button();
        homeButton.events.on("hit", function() {
            worldSeries.show();
            countrySeries.hide();
            chart.goHome();
        });

        homeButton.icon = new am4core.Sprite();
        homeButton.padding(7, 5, 7, 5);
        homeButton.width = 30;
        homeButton.icon.path = "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8";
        homeButton.marginBottom = 10;
        homeButton.parent = chart.zoomControl;
        homeButton.insertBefore(chart.zoomControl.plusButton);

    }); // end am4core.ready()
</script>