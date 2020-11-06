<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <div class="d-flex flex-column text-dark-75">
                    <h2 class="text-dark font-weight-bolder mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
    </g>
</svg>
                        <!--end::Svg Icon-->
					</span>
                        My Sales Network
                        <span class="label label-dot label-danger ml-2 mr-2"></span>
                        <span class="text-dark "><?php echo $region ?> </span>
                        <span class="label label-dot label-danger ml-2 mr-2"></span>

                        <span class="text-primary ">
                            <div class="symbol symbol-25 line-height-xl mr-2">
                            <img alt="Pic" src="/theme/assets/media/svg/flags/<?php echo $countryFlag ?>">
                        </div>
                            <?php echo $country ?> </span>
                    </h2>

                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">

            <a href="javascript:;" class="btn btn-primary font-weight-bold font-size-base mr-5" onclick="">Add to Targeted Countries</a>
            <a href="javascript:;" class="btn btn-outline-primary font-weight-bold font-size-base" onclick="WebApp.loadPage('mysalesnetwork/region/<?php echo $regionId ?>')">Back</a>

        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-7">

    <div class="container-fluid">

        <div class="d-flex flex-column-fluid">

            <div class="container-fluid">

                <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
                    <div class="alert-icon">
<span class="svg-icon svg-icon-primary svg-icon-xl">

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>

</span>
                    </div>
                    <div class="alert-text font-size-h3">My Existing Distributors</div>
                    <div class="alert-close">
                        <button type="button" class=" btn btn-primary">
                            Add My Distributors
                        </button>
                    </div>
                </div>

                <div class="row">

                    <?php foreach ($arrDistributors as $item): ?>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-custom gutter-b card-stretch">
                            <div class="card-body pt-4">
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-success">Customer</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-danger">Partner</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-warning">Suplier</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-primary">Member</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-dark">Staff</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mb-7">

                                    <div class="d-flex align-items-center">

                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="<?php echo $item->logo ?>" alt="image">
                                            </div>
                                            <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                <span class="font-size-h3 font-weight-boldest">JM</span>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?php echo $item->name ?></a>
                                            <span class="text-muted font-weight-bold"><?php echo $item->city ?>, <?php echo $item->country ?></span>
                                        </div>

                                    </div>

                                </div>

                                <div class="mb-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark font-weight-bolder mr-2">Email:</span>
                                        <a href="#" class="text-dark text-hover-primary"><?php echo $item->email ?></a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark font-weight-bolder mr-2">Phone:</span>
                                        <a href="#" class="text-dark text-hover-primary"><?php echo $item->phone ?></a>
                                    </div>


                                </div>
                                <a href="javascript:;" class="btn btn-block btn-sm btn-outline-primary font-weight-bolder py-4" onclick="WebApp.loadPage('inbox')">View Inquiries (<?php echo $item->inquiriesCount ?>)</a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>


                <div class="alert alert-custom alert-light-primary alert-shadow fade show gutter-b" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-xl">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                <path d="M10.5,10.5 L10.5,9.5 C10.5,9.22385763 10.7238576,9 11,9 C11.2761424,9 11.5,9.22385763 11.5,9.5 L11.5,10.5 L12.5,10.5 C12.7761424,10.5 13,10.7238576 13,11 C13,11.2761424 12.7761424,11.5 12.5,11.5 L11.5,11.5 L11.5,12.5 C11.5,12.7761424 11.2761424,13 11,13 C10.7238576,13 10.5,12.7761424 10.5,12.5 L10.5,11.5 L9.5,11.5 C9.22385763,11.5 9,11.2761424 9,11 C9,10.7238576 9.22385763,10.5 9.5,10.5 L10.5,10.5 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>

                        </span>
                    </div>
                    <div class="alert-text font-size-h3">Potential Distributors</div>
                    <div class="alert-close">
                        <button type="button" class=" btn btn-primary">
                            Unlock Country
                        </button>
                    </div>
                </div>

                <div class="row">

                    <?php foreach ($arrPotentialDistributors as $item): ?>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-custom gutter-b card-stretch">
                                <div class="card-body pt-4">
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-bold-more-hor"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-success">Customer</span>
</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-danger">Partner</span>
</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-warning">Suplier</span>
</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-primary">Member</span>
</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
<span class="navi-text">
<span class="label label-xl label-inline label-light-dark">Staff</span>
</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-footer py-4">
                                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end mb-7">

                                        <div class="d-flex align-items-center">

                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="<?php echo $item->logo ?>" alt="image">
                                                </div>
                                                <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                    <span class="font-size-h3 font-weight-boldest">JM</span>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?php echo $item->name ?></a>
                                                <span class="text-muted font-weight-bold"><?php echo $item->city ?>, <?php echo $item->country ?></span>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="mb-7">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark font-weight-bolder mr-2">Email:</span>
                                            <a href="#" class="text-dark text-hover-primary"><?php echo $item->email ?></a>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-cente my-1">
                                            <span class="text-dark font-weight-bolder mr-2">Phone:</span>
                                            <a href="#" class="text-dark text-hover-primary"><?php echo $item->phone ?></a>
                                        </div>


                                    </div>
                                    <a href="javascript:;" class="btn btn-block btn-sm btn-outline-primary font-weight-bolder py-4" onclick="WebApp.loadPage('inbox')">View Distributor</a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>

        </div>


    </div>
</div>
<script>
    let _regionId = <?php echo $regionId ?>;
    let _countryId = <?php echo $countryId ?>;
</script>
