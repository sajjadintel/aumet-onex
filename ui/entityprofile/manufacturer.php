<div class="d-flex flex-column-fluid">

    <div class="container-fluid">

        <div class="card card-custom gutter-b mt-5">
            <div class="card-body">

                <div class="d-flex mb-9 h-175px mx-n9 mt-n9 justify-content-between p-2"
                     style="background-color: #0a6aa1;background-image: url('/assets/img/samplebg-1.jpeg');background-repeat: no-repeat;background-size: 100%;background-position: top center;">

                    <div class="d-flex align-items-start flex-wrap">
                        <div class="d-flex align-items-baseline flex-wrap">

                            <div class="d-flex flex-column text-dark-75">
                                <h2 class="text-dark font-weight-bold mr-5 line-height-xl">
                                <span class="svg-icon svg-icon-xxl mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"></rect> <path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"></path> </g></svg>
                                    <!--end::Svg Icon-->
                                </span>
                                    My Company Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start flex-wrap justify-content-end">
                        <div class="d-flex align-items-baseline flex-wrap">
                            <a href="#" class="btn btn-primary mt-2 mr-2"><i class="la la-brush"></i> Change Cover</a>
                        </div>
                    </div>

                </div>
                <div class="d-flex mb-9">

                    <div class="flex-shrink-0 mr-7  mt-n20 ">
                        <div class="image-input image-input-empty image-input-outline" id="imgProfile" style="background-image: url('<?php echo $objCompany->Logo != null ? $objCompany->Logo : '/theme/assets/media/users/default.jpg' ?>')">
                            <div class="image-input-wrapper"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="profile_avatar_remove"/>
                            </label>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                              <i class="ki ki-bold-close icon-xs text-muted"></i>
                             </span>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                              <i class="ki ki-bold-close icon-xs text-muted"></i>
                             </span>
                        </div>
                    </div>

                    <div class="flex-grow-1">

                        <div class="d-flex justify-content-between flex-wrap mt-1">
                            <div class="d-flex mr-3">
                                <a href="#" class="text-dark-75 text-hover-primary font-size-h4 font-weight-bold text-uppercase mr-3"><?php echo $objCompany->Name?></a>
                                <a href="#">
                                    <i class="flaticon2-correct text-success font-size-h5"></i>
                                </a>
                            </div>
                            <div class="my-lg-0 my-3">

                                <div class="dropdown dropdown-inline   mr-3">
                                    <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-eye"></i> View in
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                                        <ul class="navi navi-hover py-4">
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/ar" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/008-saudi-arabia.svg" alt=""/>
						</span>
                                                    <span class="navi-text">العربية</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/en" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/260-united-kingdom.svg" alt=""/>
						</span>
                                                    <span class="navi-text">English</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/fr" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/019-france.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Français</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/es" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/016-spain.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Español</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/it" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/013-italy.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Italiano</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/de" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/017-germany.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Deutsch</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/pt" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/005-portugal.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Português</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/cn" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/015-china.svg" alt=""/>
						</span>
                                                    <span class="navi-text">中文</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/je" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/014-japan.svg" alt=""/>
						</span>
                                                    <span class="navi-text">日本語</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/ru" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/013-russia.svg" alt=""/>
						</span>
                                                    <span class="navi-text">Pусский</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="navi-item">
                                                <a href="/me/switchLanguage/in" class="navi-link">
						<span class="symbol symbol-20 mr-3">
							<img src="/theme/assets/media/svg/flags/010-india.svg" alt=""/>
						</span>
                                                    <span class="navi-text">हिंदी</span>
                                                </a>
                                            </li>
                                            <!--end::Item-->


                                        </ul>

                                    </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-primary font-weight-bold"> <i class="la la-edit"></i> Edit Info</a>
                            </div>
                        </div>


                        <div class="d-flex flex-wrap justify-content-between mt-1">
                            <div class="d-flex flex-column flex-grow-1 pr-8">
                                <div class="d-flex flex-wrap mb-4">

                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        <?php echo $objCountry->Name?>
                                        <?php if($objCountry->FlagPath != ""): ?>
                                            <div class="symbol symbol-20 ml-2">
                                                <img alt="Pic" src="<?php echo $objCountry->FlagPath?>">
                                            </div>
                                        <?php endif; ?>
                                    </a>

                                </div>
                                <span class="font-weight-bold text-dark-75 font-size-h6">

                                    <?php //echo html_entity_decode(str_replace("<p><br></p>", '', $objCompany->Description)) ?>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="separator separator-solid"></div>

                <div class="d-flex  justify-content-between flex-wrap mt-8">
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-diagram display-4 text-primary font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h6">Annual Sales</span>
                            <span class="font-weight-bolder font-size-h4">
                                <?php echo $objCompany->AnnualSales == null ? "<span class='text-muted'>Not Available<span>" : $objCompany->AnnualSales ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-customer display-4 text-primary font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bold font-size-h6">Employees</span>
                            <span class="font-weight-bolder font-size-h4"><?php echo $objCompany->NumberOfEmployees == null ? "<span class='text-muted'>Not Available<span>" : $objCompany->NumberOfEmployees ?></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                        <span class="mr-4">
                        <i class="flaticon-calendar-1 display-4 text-primary font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bold font-size-h6">Established in</span>
                            <span class="font-weight-bolder font-size-h4"> <?php echo $objCompany->EstablishmentDate == null ? "<span class='text-muted'>Not Available<span>" :  date("Y", strtotime($objCompany->EstablishmentDate)) ?> </span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-file-2 display-4 text-primary font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column flex-lg-fill">
                            <span class="text-dark-75 font-weight-bold font-size-h6">Documents</span>
                            <a href="#" class="text-primary font-weight-bolder font-size-h4">72</a>
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
                                <?php foreach ($_SESSION['arrSpecialities'] as $objItem):?>
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

        <div class="d-flex flex-row">

            <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">

                <div class="card card-custom gutter-b">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder">Person Oncharge</h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-primary btn-icon"> <i class="la la-edit"></i></a>
                        </div>
                    </div>

                    <div class="card-body pt-4">

                        <div class="d-flex align-items-center">
                            <div class="image-input image-input-empty image-input-outline image-input-circle mr-5" id="imgManager" style="background-image: url('<?php echo $objCompany->Logo != null ? $objCompany->Logo : '/theme/assets/media/users/default.jpg' ?>')">
                                <div class="image-input-wrapper"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="profile_avatar_remove"/>
                                </label>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                 </span>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                 </span>
                            </div>

                            <div >
                                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                                <div class="text-muted mb-4">Export Sales Manager</div>
                                <div class="mt-2">
                                    <span class="label label-primary label-inline">Responds in 24 hour</span>
                                </div>
                            </div>
                        </div>

                        <div class="pb-3 mt-12">
                            <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                                <div class="alert-icon">
                                    <i class="flaticon-warning"></i>
                                </div>
                                <div class="alert-text">You have no introduction!</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                        <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>


                        </div>

                        <!-- <a href="#" class="btn btn-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Send a message</a> -->
                    </div>

                </div>

                <div class="card card-custom gutter-b">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder">Gallary</h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-primary btn-icon"> <i class="la la-edit"></i></a>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">

                        <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                            <div class="alert-icon">
                                <i class="flaticon-warning"></i>
                            </div>
                            <div class="alert-text">You have no images!</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                        <i class="ki ki-close"></i>
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card card-custom gutter-b" >
                    <a name="companyProfileOverView"></a>
                    <div class="card-header border-0 pt-5">

                        <h3 class="card-title font-weight-bolder">Overview</h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-primary btn-icon"> <i class="la la-edit"></i></a>
                        </div>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <h5 class="mb-3">Address:</h5>
                        <p class="font-weight-normal font-size-h6"><?php echo $objCompany->Address == null ? "<span class='text-muted'>Not Available<span>" : $objCompany->Address ?></p>

                        <h5 class=" mt-5 mb-3">Specialties:</h5>
                        <p class="font-weight-normal font-size-h6">
                            <?php foreach ($_SESSION['arrSpecialities'] as $objItem):?>
                                <span class="label label-primary label-inline mr-1 label-lg mb-1"><?php echo $objItem->Name?></span>
                            <?php endforeach; ?>
                        </p>
                    </div>

                </div>

            </div>


            <div class="flex-row-fluid ml-lg-8">

                <div class="card card-custom gutter-b">

                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Products Range</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
                        </h3>
                        <div class="card-toolbar">

                        </div>
                    </div>


                    <div class="card-body pt-0 pb-3">

                        <div>

                            <?php $counter = 0; ?>
                            <?php foreach ($arrProducts as $objProduct): ?>

                                <div class="d-flex align-items-center mb-8">

                                    <div class="symbol mr-5 pt-1">
                                        <div class="symbol-label min-w-100px min-h-100px" style="background-image: url('<?php echo $objProduct->baseImage ?>')"></div>
                                    </div>


                                    <div class="d-flex flex-column">

                                        <a href="#" class="text-primary font-weight-bolder text-hover-primary font-size-lg mb-4"><?php echo $objProduct->productTitle ?></a>


                                        <span class="text-dark-75 font-weight-bold font-size-sm pb-4"><?php echo $objProduct->productSubtitle ?></span>

                                        <div>
                                            <?php echo $objProduct->specialityName ?>

                                        </div>

                                    </div>

                                </div>


                                <?php
                                $counter++;
                                if($counter > 4) {
                                    break;
                                }
                                ?>
                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>


<script>
    var imgProfile = new KTImageInput('imgProfile');

    imgProfile.on('cancel', function(imageInput) {

    });

    imgProfile.on('change', function(imageInput) {

    });

    imgProfile.on('remove', function(imageInput) {

    });

    var imgManager = new KTImageInput('imgManager');

    imgManager.on('cancel', function(imageInput) {

    });

    imgManager.on('change', function(imageInput) {

    });

    imgManager.on('remove', function(imageInput) {

    });
</script>