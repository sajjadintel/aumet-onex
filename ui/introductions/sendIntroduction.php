<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <div class="d-flex flex-column text-dark-75">
                    <h4 class="text-dark  mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M3,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L3,8 C2.44771525,8 2,7.55228475 2,7 C2,6.44771525 2.44771525,6 3,6 Z" fill="#000000" opacity="0.3"/>
                                <path d="M10,6 L22,6 C23.1045695,6 24,6.8954305 24,8 L24,16 C24,17.1045695 23.1045695,18 22,18 L10,18 C8.8954305,18 8,17.1045695 8,16 L8,8 C8,6.8954305 8.8954305,6 10,6 Z M21.0849395,8.0718316 L16,10.7185839 L10.9150605,8.0718316 C10.6132433,7.91473331 10.2368262,8.02389331 10.0743092,8.31564728 C9.91179228,8.60740125 10.0247174,8.9712679 10.3265346,9.12836619 L15.705737,11.9282847 C15.8894428,12.0239051 16.1105572,12.0239051 16.294263,11.9282847 L21.6734654,9.12836619 C21.9752826,8.9712679 22.0882077,8.60740125 21.9256908,8.31564728 C21.7631738,8.02389331 21.3867567,7.91473331 21.0849395,8.0718316 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
					</span>
                        Send Introduction to
                        <span class="text-primary font-weight-bolder">
                            <?php echo $objDistributor->Name; ?></span>
                         from
                        <span>
                            <div class="symbol symbol-25 mr-3">
                                <span class="text-dark font-weight-bolder">
                                    <?php echo $objCountry->Name; ?>
                                    <img alt="" class="ml-2" style="max-width: 30px"
                                         src="<?php echo $objCountry->FlagPath; ?>"/>
                                </span>
                            </div>
                        </span>
                    </h4>
                    <span class="font-weight-normal font-size-h6 ml-12 pr-48">List of highly matching distributors that you can close deals with, based on our matching algorithm</span>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <a href="javascript:;" class="btn btn-outline-primary font-weight-normal font-size-h5 py-2 px-5"
               onclick="WebApp.loadPage('potentialdistributors/country/<?php echo $objCountry->ID; ?>')">Back</a>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-10">
    <div class="container-fluid">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row mb-1">
                            <div class="col-3">
                                <span class="font-size-h6 font-weight-bolder">From:</span>
                            </div>
                            <div class="col-9">
                                <span class="font-size-h6 font-weight-normal">info@aumet.com</span>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <span class="font-size-h6 font-weight-bolder">Sending to:</span>
                            </div>
                            <div class="col-9">
                                <span class="font-size-h6 font-weight-normal">XYZ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span class="font-size-h6 font-weight-bolder">Subject:</span>
                            </div>
                            <div class="col-9">
                                <span class="font-size-h6 font-weight-normal">Business Opportunity in <?php echo $objCountry->Name; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary font-weight-normal font-size-h5 py-2 px-5 mr-2"
                           onclick="WebApp.loadPage('potentialdistributors/country/<?php echo $objCountry->ID; ?>')">Cancel</a>

                        <a href="javascript:;" class="btn btn-sm btn-primary font-weight-normal font-size-h5 py-2 px-5"
                           onclick="WebApp.loadPage('potentialdistributors/country/<?php echo $objCountry->ID; ?>')">
                            <i class="flaticon2-telegram-logo"></i> Send Introduction</a>
                    </div>
                </div>
                <div class="separator separator-solid my-8"></div>
                <div class="row">
                    <div class="d-flex">
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-100">
                                <img alt="Pic" src="<?php echo $objDistributor->Logo != null ? $objDistributor->Logo : '/theme/assets/media/users/blank.png' ?>">
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mt-4">
                                <div class="mr-3">
                                    <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h4 font-weight-bold mr-3">
                                        <?php echo $objDistributor->Name ?>
                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>


                                    <div class="d-flex flex-wrap mt-4">
                                        <div class="symbol symbol-50">
                                            <img alt="Pic" src="<?php echo $objDistributor->Logo != null ? $objDistributor->Logo : '/theme/assets/media/users/blank.png' ?>">
                                        </div>
                                        <div class="ml-4">
                                            <h6>a</h6>
                                            <a href="#"
                                               class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">

                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                  fill="#000000"></path>
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
                                            </g>
                                            </svg>

                                            </span>
                                                jason@siastudio.com</a>
                                            <a href="#"
                                               class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                     viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <mask fill="white">
                                                <use xlink:href="#path-1"></use>
                                                </mask>
                                                <g></g>
                                                <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                      fill="#000000"></path>
                                                </g>
                                                </svg>

                                                </span>PR Manager</a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                     viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                      fill="#000000"></path>
                                                </g>
                                                </svg>

                                                </span>Melbourne</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>