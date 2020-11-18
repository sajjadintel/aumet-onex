<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <div class="d-flex flex-column text-dark-75">
                    <h2 class="text-dark  mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                      fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                      fill="#000000" fill-rule="nonzero"/>
                                <path d="M10.5,10.5 L10.5,9.5 C10.5,9.22385763 10.7238576,9 11,9 C11.2761424,9 11.5,9.22385763 11.5,9.5 L11.5,10.5 L12.5,10.5 C12.7761424,10.5 13,10.7238576 13,11 C13,11.2761424 12.7761424,11.5 12.5,11.5 L11.5,11.5 L11.5,12.5 C11.5,12.7761424 11.2761424,13 11,13 C10.7238576,13 10.5,12.7761424 10.5,12.5 L10.5,11.5 L9.5,11.5 C9.22385763,11.5 9,11.2761424 9,11 C9,10.7238576 9.22385763,10.5 9.5,10.5 L10.5,10.5 Z"
                                      fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
					</span>
                        Potential Distributors in
                        <span>
                                            <div class="symbol symbol-25 mr-3">
                                                <span class="text-dark font-weight-bolder">
                                                    <?php echo $objCountry->Name; ?>
                                                    <img alt="" class="ml-2" style="max-width: 30px"
                                                         src="<?php echo $objCountry->FlagPath; ?>"/>
                                                </span>


                                            </div>

                                        </span>
                    </h2>
                    <span class="font-weight-normal font-size-h6 ml-12 pr-48">List of highly matching distributors that you can close deals with, based on our matching algorithm</span>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <a href="javascript:;" class="btn btn-outline-primary font-weight-normal font-size-h5 py-2 px-5"
               onclick="WebApp.loadPage('potentialdistributors')">Back</a>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-10">
    <div class="container-fluid">

        <div class="card card-custom gutter-b">
            <div class="card-body">
                <span class="font-size-h6 font-weight-bolder">Filter</span>
            </div>
        </div>

        <?php foreach ($arrDistributors as $objDistributor): ?>
            <div class="card card-custom gutter-b">
                <div class="card-body">
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

                                <div class="my-lg-0 my-1">
                                    <a href="javascript:;" class="btn btn-primary font-weight-bolder" onclick="WebApp.loadPage('potentialdistributors/country/<?php echo $objCountry->ID ?>/sendintroduction/<?php echo $objDistributor->ID ?>')">Send Introduction</a>
                                </div>

                            </div>

                            <div class="d-flex align-items-center flex-wrap justify-content-between mt-6">
                                <a href="#" class="btn btn-sm btn-outline-primary font-weight-bolder mr-2">Aumet Indicator</a>
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5 mt-2">
                                    <div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-350px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 63%;"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4 mt-sm-0">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator separator-solid my-7"></div>

                    <div class="d-flex align-items-center flex-wrap">

                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                            <i class="flaticon-diagram display-4 text-primary font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-h6">Annual Sales</span>
                                <span class="font-weight-bolder font-size-h4">
                                <?php echo $objDistributor->AnnualSales == null ? "<span class='text-muted'>Not Available<span>" : $objDistributor->AnnualSales ?>
                            </div>
                        </div>


                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                            <i class="flaticon-customer display-4 text-primary font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-h6">Employees</span>
                                <span class="font-weight-bolder font-size-h4"><?php echo $objDistributor->NumberOfEmployees == null ? "<span class='text-muted'>Not Available<span>" : $objDistributor->NumberOfEmployees ?></span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                            <span class="mr-4">
                            <i class="flaticon-trophy display-4 text-primary font-weight-bold"></i>
                            </span>
                            <div class="d-flex flex-column">
                                <span class="text-dark-75 font-weight-bolder font-size-h6">Specialized in</span>
                                <a href="#companyProfileOverView" class="text-primary font-weight-bold">
                                    <?php $itemsCounter = 0; ?>
                                    <?php foreach ($_SESSION['arrCompanySpecialities'] as $objItem):?>
                                        <?php if($itemsCounter < 3): ?>
                                            <span class="label label-light-dark label-inline mr-1 mb-1"><?php echo $objItem->Name?></span>
                                        <?php endif; ?>
                                        <?php $itemsCounter++; ?>
                                    <?php endforeach; ?>
                                    <?php if($itemsCounter >= 3): ?>
                                        <span class="label label-light label-inline"><?php echo "+".($itemsCounter-3); ?></span>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>