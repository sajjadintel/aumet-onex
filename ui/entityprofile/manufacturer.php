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
                                        <?php echo $objCountry->country?>
                                        <?php if($objCountry->flag != ""): ?>
                                            <div class="symbol symbol-20 ml-2">
                                                <img alt="Pic" src="/theme/assets/media/svg/flags/<?php echo $objCountry->flag?>">
                                            </div>
                                        <?php endif; ?>
                                    </a>

                                </div>
                                <span class="font-weight-bold text-dark-75">I distinguish three main text objectives could be merely to inform people. A second could be persuade people.You want people to bay objective. I distinguish three main text objectives could be merely to inform people. A second could be persuade people.You want people to bay objective</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="separator separator-solid"></div>

                <div class="d-flex align-items-center flex-wrap mt-8">

                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-diagram display-4 text-muted font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Annual Sales</span>
                            <span class="font-weight-bolder font-size-h5">
<span class="text-dark-50 font-weight-bold">$</span>55M</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-customer display-4 text-muted font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Employees</span>
                            <span class="font-weight-bolder font-size-h5">267</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-calendar-1 display-4 text-muted font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Established in</span>
                            <span class="font-weight-bolder font-size-h5">1932</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column flex-lg-fill">
                            <span class="text-dark-75 font-weight-bolder font-size-sm">73 Documents</span>
                            <a href="#" class="text-primary font-weight-bolder">View</a>
                        </div>
                    </div>


                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
<span class="mr-4">
<i class="flaticon-trophy display-4 text-muted font-weight-bold"></i>
</span>
                        <div class="d-flex flex-column">
                            <span class="text-dark-75 font-weight-bolder font-size-sm">Specialized in</span>
                            <a href="#" class="text-primary font-weight-bold">
                                <span class="label label-light-dark label-inline mr-1">Cardiology</span>
                                <span class="label label-light-dark label-inline mr-1">Dental</span>
                                <span class="label label-light-dark label-inline mr-1">Medical industry & 3d printing</span>
                                <span class="label label-light label-inline">+8</span>
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
                        <h3 class="card-title font-weight-bolder">Onchange Person</h3>
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

                        <div class="pb-6 mt-6">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</div>

                        <a href="#" class="btn btn-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Send a message</a>
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
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-12">
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                </div>

                                <div class="col-12 align-items-center">
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                </div>

                                <div class="col-12 align-items-center">
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90 mr-1">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                    <div class="symbol symbol-90">
                                        <img alt="Pic" src="/theme/assets/media/users/300_20.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card card-custom gutter-b">

                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder">Action Needed</h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-drop"></i>
</span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-list-3"></i>
</span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-rocket-1"></i>
</span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
<span class="label label-light-primary label-inline font-weight-bold">new</span>
</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-bell-2"></i>
</span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-gear"></i>
</span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-magnifier-tool"></i>
</span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-bell-2"></i>
</span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
<span class="label label-light-danger label-rounded font-weight-bold">5</span>
</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow-1" style="position: relative;">
                            <div id="kt_mixed_widget_14_chart" style="height: 200px; min-height: 200.7px;"><div id="apexcharts6t0kmlzei" class="apexcharts-canvas apexcharts6t0kmlzei apexcharts-theme-light" style="width: 292px; height: 200.7px;"><svg id="SvgjsSvg1183" width="292" height="200.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1185" class="apexcharts-inner apexcharts-graphical" transform="translate(59, 0)"><defs id="SvgjsDefs1184"><clipPath id="gridRectMask6t0kmlzei"><rect id="SvgjsRect1187" width="182" height="200" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask6t0kmlzei"><rect id="SvgjsRect1188" width="180" height="202" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1189" class="apexcharts-radialbar"><g id="SvgjsG1190"><g id="SvgjsG1191" class="apexcharts-tracks"><g id="SvgjsG1192" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 88 29.693292682926824 A 69.30670731707318 69.30670731707318 0 1 1 87.9879036976974 29.69329373852834" fill="none" fill-opacity="1" stroke="rgba(201,247,245,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.852439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 29.693292682926824 A 69.30670731707318 69.30670731707318 0 1 1 87.9879036976974 29.69329373852834"></path></g></g><g id="SvgjsG1194"><g id="SvgjsG1198" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1199" d="M 88 29.693292682926824 A 69.30670731707318 69.30670731707318 0 1 1 18.862120338608293 103.8345915092552" fill="none" fill-opacity="0.85" stroke="rgba(27,197,189,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.852439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="266" data:value="74" index="0" j="0" data:pathOrig="M 88 29.693292682926824 A 69.30670731707318 69.30670731707318 0 1 1 18.862120338608293 103.8345915092552"></path></g><circle id="SvgjsCircle1195" r="63.88048780487805" cx="88" cy="99" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1196" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1197" font-family="Helvetica, Arial, sans-serif" x="88" y="111" text-anchor="middle" dominant-baseline="auto" font-size="30px" font-weight="700" fill="#5e6278" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">74%</text></g></g></g></g><line id="SvgjsLine1200" x1="0" y1="0" x2="176" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1201" x1="0" y1="0" x2="176" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1186" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 293px; height: 202px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div class="pt-5">
                            <p class="text-center font-weight-normal font-size-lg pb-7">Notes: Current sprint requires stakeholders
                                <br>to approve newly amended policies</p>
                            <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate Report</a>
                        </div>
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


                                        <span class="text-dark-75 font-weight-bold font-size-sm pb-4"><?php echo $objProduct->productSubtitle ?>
<br>Darius greatness</span>


                                        <div>
                                            <button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
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

                <div class="row">
                    <div class="col-lg-6">

                        <div class="card card-custom bg-radial-gradient-primary card-stretch gutter-b">

                            <div class="card-header border-0 py-5">
                                <h3 class="card-title font-weight-bolder text-white">Sales Progress</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            </div>


                            <div class="card-body d-flex flex-column p-0" style="position: relative;">

                                <div id="kt_mixed_widget_5_chart" style="height: 200px; min-height: 200px;"><div id="apexchartsxkgesijo" class="apexcharts-canvas apexchartsxkgesijo apexcharts-theme-light" style="width: 445px; height: 200px;"><svg id="SvgjsSvg1128" width="445" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1130" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs1129"><linearGradient id="SvgjsLinearGradient1133" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1134" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1135" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1136" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskxkgesijo"><rect id="SvgjsRect1138" width="410" height="201" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskxkgesijo"><rect id="SvgjsRect1139" width="409" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1137" width="8.678571428571427" height="200" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1133)" class="apexcharts-xcrosshairs" y2="200" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1159" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1160" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1162" class="apexcharts-grid"><g id="SvgjsG1163" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1165" x1="0" y1="0" x2="405" y2="0" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1166" x1="0" y1="20" x2="405" y2="20" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1167" x1="0" y1="40" x2="405" y2="40" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1168" x1="0" y1="60" x2="405" y2="60" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1169" x1="0" y1="80" x2="405" y2="80" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1170" x1="0" y1="100" x2="405" y2="100" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1171" x1="0" y1="120" x2="405" y2="120" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1172" x1="0" y1="140" x2="405" y2="140" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1173" x1="0" y1="160" x2="405" y2="160" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1174" x1="0" y1="180" x2="405" y2="180" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1175" x1="0" y1="200" x2="405" y2="200" stroke="#ebedf3" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1164" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1177" x1="0" y1="200" x2="405" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1176" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1140" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1141" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1143" d="M 20.25 200L 20.25 131.66964285714286Q 24.089285714285715 128.33035714285714 27.928571428571427 131.66964285714286L 27.928571428571427 131.66964285714286L 27.928571428571427 200L 27.928571428571427 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 20.25 200L 20.25 131.66964285714286Q 24.089285714285715 128.33035714285714 27.928571428571427 131.66964285714286L 27.928571428571427 131.66964285714286L 27.928571428571427 200L 27.928571428571427 200z" pathFrom="M 20.25 200L 20.25 200L 27.928571428571427 200L 27.928571428571427 200L 27.928571428571427 200L 20.25 200" cy="130" cx="77.60714285714286" j="0" val="35" barHeight="70" barWidth="8.678571428571427"></path><path id="SvgjsPath1144" d="M 78.10714285714286 200L 78.10714285714286 71.66964285714286Q 81.94642857142857 68.33035714285715 85.78571428571429 71.66964285714286L 85.78571428571429 71.66964285714286L 85.78571428571429 200L 85.78571428571429 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 78.10714285714286 200L 78.10714285714286 71.66964285714286Q 81.94642857142857 68.33035714285715 85.78571428571429 71.66964285714286L 85.78571428571429 71.66964285714286L 85.78571428571429 200L 85.78571428571429 200z" pathFrom="M 78.10714285714286 200L 78.10714285714286 200L 85.78571428571429 200L 85.78571428571429 200L 85.78571428571429 200L 78.10714285714286 200" cy="70" cx="135.46428571428572" j="1" val="65" barHeight="130" barWidth="8.678571428571427"></path><path id="SvgjsPath1145" d="M 135.96428571428572 200L 135.96428571428572 51.669642857142854Q 139.80357142857144 48.33035714285714 143.64285714285714 51.669642857142854L 143.64285714285714 51.669642857142854L 143.64285714285714 200L 143.64285714285714 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 135.96428571428572 200L 135.96428571428572 51.669642857142854Q 139.80357142857144 48.33035714285714 143.64285714285714 51.669642857142854L 143.64285714285714 51.669642857142854L 143.64285714285714 200L 143.64285714285714 200z" pathFrom="M 135.96428571428572 200L 135.96428571428572 200L 143.64285714285714 200L 143.64285714285714 200L 143.64285714285714 200L 135.96428571428572 200" cy="50" cx="193.32142857142858" j="2" val="75" barHeight="150" barWidth="8.678571428571427"></path><path id="SvgjsPath1146" d="M 193.82142857142858 200L 193.82142857142858 91.66964285714286Q 197.6607142857143 88.33035714285715 201.5 91.66964285714286L 201.5 91.66964285714286L 201.5 200L 201.5 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 193.82142857142858 200L 193.82142857142858 91.66964285714286Q 197.6607142857143 88.33035714285715 201.5 91.66964285714286L 201.5 91.66964285714286L 201.5 200L 201.5 200z" pathFrom="M 193.82142857142858 200L 193.82142857142858 200L 201.5 200L 201.5 200L 201.5 200L 193.82142857142858 200" cy="90" cx="251.17857142857144" j="3" val="55" barHeight="110" barWidth="8.678571428571427"></path><path id="SvgjsPath1147" d="M 251.67857142857144 200L 251.67857142857144 111.66964285714286Q 255.51785714285717 108.33035714285715 259.3571428571429 111.66964285714286L 259.3571428571429 111.66964285714286L 259.3571428571429 200L 259.3571428571429 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 251.67857142857144 200L 251.67857142857144 111.66964285714286Q 255.51785714285717 108.33035714285715 259.3571428571429 111.66964285714286L 259.3571428571429 111.66964285714286L 259.3571428571429 200L 259.3571428571429 200z" pathFrom="M 251.67857142857144 200L 251.67857142857144 200L 259.3571428571429 200L 259.3571428571429 200L 259.3571428571429 200L 251.67857142857144 200" cy="110" cx="309.0357142857143" j="4" val="45" barHeight="90" barWidth="8.678571428571427"></path><path id="SvgjsPath1148" d="M 309.5357142857143 200L 309.5357142857143 81.66964285714286Q 313.375 78.33035714285715 317.2142857142857 81.66964285714286L 317.2142857142857 81.66964285714286L 317.2142857142857 200L 317.2142857142857 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 309.5357142857143 200L 309.5357142857143 81.66964285714286Q 313.375 78.33035714285715 317.2142857142857 81.66964285714286L 317.2142857142857 81.66964285714286L 317.2142857142857 200L 317.2142857142857 200z" pathFrom="M 309.5357142857143 200L 309.5357142857143 200L 317.2142857142857 200L 317.2142857142857 200L 317.2142857142857 200L 309.5357142857143 200" cy="80" cx="366.8928571428571" j="5" val="60" barHeight="120" barWidth="8.678571428571427"></path><path id="SvgjsPath1149" d="M 367.3928571428571 200L 367.3928571428571 91.66964285714286Q 371.23214285714283 88.33035714285715 375.07142857142856 91.66964285714286L 375.07142857142856 91.66964285714286L 375.07142857142856 200L 375.07142857142856 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 367.3928571428571 200L 367.3928571428571 91.66964285714286Q 371.23214285714283 88.33035714285715 375.07142857142856 91.66964285714286L 375.07142857142856 91.66964285714286L 375.07142857142856 200L 375.07142857142856 200z" pathFrom="M 367.3928571428571 200L 367.3928571428571 200L 375.07142857142856 200L 375.07142857142856 200L 375.07142857142856 200L 367.3928571428571 200" cy="90" cx="424.74999999999994" j="6" val="55" barHeight="110" barWidth="8.678571428571427"></path></g><g id="SvgjsG1150" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1152" d="M 28.928571428571427 200L 28.928571428571427 121.66964285714286Q 32.76785714285714 118.33035714285715 36.607142857142854 121.66964285714286L 36.607142857142854 121.66964285714286L 36.607142857142854 200L 36.607142857142854 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 28.928571428571427 200L 28.928571428571427 121.66964285714286Q 32.76785714285714 118.33035714285715 36.607142857142854 121.66964285714286L 36.607142857142854 121.66964285714286L 36.607142857142854 200L 36.607142857142854 200z" pathFrom="M 28.928571428571427 200L 28.928571428571427 200L 36.607142857142854 200L 36.607142857142854 200L 36.607142857142854 200L 28.928571428571427 200" cy="120" cx="86.28571428571429" j="0" val="40" barHeight="80" barWidth="8.678571428571427"></path><path id="SvgjsPath1153" d="M 86.78571428571429 200L 86.78571428571429 61.669642857142854Q 90.625 58.33035714285714 94.46428571428572 61.669642857142854L 94.46428571428572 61.669642857142854L 94.46428571428572 200L 94.46428571428572 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 86.78571428571429 200L 86.78571428571429 61.669642857142854Q 90.625 58.33035714285714 94.46428571428572 61.669642857142854L 94.46428571428572 61.669642857142854L 94.46428571428572 200L 94.46428571428572 200z" pathFrom="M 86.78571428571429 200L 86.78571428571429 200L 94.46428571428572 200L 94.46428571428572 200L 94.46428571428572 200L 86.78571428571429 200" cy="60" cx="144.14285714285714" j="1" val="70" barHeight="140" barWidth="8.678571428571427"></path><path id="SvgjsPath1154" d="M 144.64285714285714 200L 144.64285714285714 41.669642857142854Q 148.48214285714286 38.33035714285714 152.32142857142856 41.669642857142854L 152.32142857142856 41.669642857142854L 152.32142857142856 200L 152.32142857142856 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 144.64285714285714 200L 144.64285714285714 41.669642857142854Q 148.48214285714286 38.33035714285714 152.32142857142856 41.669642857142854L 152.32142857142856 41.669642857142854L 152.32142857142856 200L 152.32142857142856 200z" pathFrom="M 144.64285714285714 200L 144.64285714285714 200L 152.32142857142856 200L 152.32142857142856 200L 152.32142857142856 200L 144.64285714285714 200" cy="40" cx="202" j="2" val="80" barHeight="160" barWidth="8.678571428571427"></path><path id="SvgjsPath1155" d="M 202.5 200L 202.5 81.66964285714286Q 206.33928571428572 78.33035714285715 210.17857142857142 81.66964285714286L 210.17857142857142 81.66964285714286L 210.17857142857142 200L 210.17857142857142 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 202.5 200L 202.5 81.66964285714286Q 206.33928571428572 78.33035714285715 210.17857142857142 81.66964285714286L 210.17857142857142 81.66964285714286L 210.17857142857142 200L 210.17857142857142 200z" pathFrom="M 202.5 200L 202.5 200L 210.17857142857142 200L 210.17857142857142 200L 210.17857142857142 200L 202.5 200" cy="80" cx="259.8571428571429" j="3" val="60" barHeight="120" barWidth="8.678571428571427"></path><path id="SvgjsPath1156" d="M 260.3571428571429 200L 260.3571428571429 101.66964285714286Q 264.1964285714286 98.33035714285715 268.03571428571433 101.66964285714286L 268.03571428571433 101.66964285714286L 268.03571428571433 200L 268.03571428571433 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 260.3571428571429 200L 260.3571428571429 101.66964285714286Q 264.1964285714286 98.33035714285715 268.03571428571433 101.66964285714286L 268.03571428571433 101.66964285714286L 268.03571428571433 200L 268.03571428571433 200z" pathFrom="M 260.3571428571429 200L 260.3571428571429 200L 268.03571428571433 200L 268.03571428571433 200L 268.03571428571433 200L 260.3571428571429 200" cy="100" cx="317.7142857142857" j="4" val="50" barHeight="100" barWidth="8.678571428571427"></path><path id="SvgjsPath1157" d="M 318.2142857142857 200L 318.2142857142857 71.66964285714286Q 322.05357142857144 68.33035714285715 325.89285714285717 71.66964285714286L 325.89285714285717 71.66964285714286L 325.89285714285717 200L 325.89285714285717 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 318.2142857142857 200L 318.2142857142857 71.66964285714286Q 322.05357142857144 68.33035714285715 325.89285714285717 71.66964285714286L 325.89285714285717 71.66964285714286L 325.89285714285717 200L 325.89285714285717 200z" pathFrom="M 318.2142857142857 200L 318.2142857142857 200L 325.89285714285717 200L 325.89285714285717 200L 325.89285714285717 200L 318.2142857142857 200" cy="70" cx="375.57142857142856" j="5" val="65" barHeight="130" barWidth="8.678571428571427"></path><path id="SvgjsPath1158" d="M 376.07142857142856 200L 376.07142857142856 81.66964285714286Q 379.9107142857143 78.33035714285715 383.75 81.66964285714286L 383.75 81.66964285714286L 383.75 200L 383.75 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxkgesijo)" pathTo="M 376.07142857142856 200L 376.07142857142856 81.66964285714286Q 379.9107142857143 78.33035714285715 383.75 81.66964285714286L 383.75 81.66964285714286L 383.75 200L 383.75 200z" pathFrom="M 376.07142857142856 200L 376.07142857142856 200L 383.75 200L 383.75 200L 383.75 200L 376.07142857142856 200" cy="80" cx="433.4285714285714" j="6" val="60" barHeight="120" barWidth="8.678571428571427"></path></g><g id="SvgjsG1142" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1151" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1178" x1="0" y1="0" x2="405" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1179" x1="0" y1="0" x2="405" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1180" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1181" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1182" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1161" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1131" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>


                                <div class="card-spacer bg-white card-rounded flex-grow-1">

                                    <div class="row m-0">
                                        <div class="col px-8 py-6 mr-8">
                                            <div class="font-size-sm text-muted font-weight-bold">Average Sale</div>
                                            <div class="font-size-h4 font-weight-bolder">$650</div>
                                        </div>
                                        <div class="col px-8 py-6">
                                            <div class="font-size-sm text-muted font-weight-bold">Commission</div>
                                            <div class="font-size-h4 font-weight-bolder">$233,600</div>
                                        </div>
                                    </div>


                                    <div class="row m-0">
                                        <div class="col px-8 py-6 mr-8">
                                            <div class="font-size-sm text-muted font-weight-bold">Annual Taxes</div>
                                            <div class="font-size-h4 font-weight-bolder">$29,004</div>
                                        </div>
                                        <div class="col px-8 py-6">
                                            <div class="font-size-sm text-muted font-weight-bold">Annual Income</div>
                                            <div class="font-size-h4 font-weight-bolder">$1,480,00</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 446px; height: 419px;"></div></div><div class="contract-trigger"></div></div></div>

                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="card card-custom card-stretch gutter-b">

                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Notifications</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                                            <ul class="navi">
                                                <li class="navi-header font-weight-bold py-5">
                                                    <span class="font-size-lg">Add New:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-icon">
<i class="flaticon2-shopping-cart-1"></i>
</span>
                                                        <span class="navi-text">Order</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-icon">
<i class="navi-icon flaticon2-calendar-8"></i>
</span>
                                                        <span class="navi-text">Members</span>
                                                        <span class="navi-label">
<span class="label label-light-danger label-rounded font-weight-bold">3</span>
</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-icon">
<i class="navi-icon flaticon2-telegram-logo"></i>
</span>
                                                        <span class="navi-text">Project</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
<span class="navi-icon">
<i class="navi-icon flaticon2-new-email"></i>
</span>
                                                        <span class="navi-text">Record</span>
                                                        <span class="navi-label">
<span class="label label-light-success label-rounded font-weight-bold">5</span>
 </span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer pt-5 pb-4">
                                                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-body pt-0">

                                <div class="mb-6">

                                    <div class="d-flex align-items-center flex-grow-1">

                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>


                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                            <div class="d-flex flex-column align-items-cente py-2 w-75">

                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Daily Standup Meeting</a>


                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>

                                            </div>


                                            <span class="label label-lg label-light-primary label-inline font-weight-bold py-4">Approved</span>

                                        </div>

                                    </div>

                                </div>


                                <div class="mb-6">

                                    <div class="d-flex align-items-center flex-grow-1">

                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>


                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                            <div class="d-flex flex-column align-items-cente py-2 w-75">

                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Group Town Hall Meet-up with showcase</a>


                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>

                                            </div>


                                            <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>

                                        </div>

                                    </div>

                                </div>


                                <div class="mb-6">

                                    <div class="d-flex align-items-center flex-grow-1">

                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>


                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                            <div class="d-flex flex-column align-items-cente py-2 w-75">

                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Next sprint planning and estimations</a>


                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>

                                            </div>


                                            <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Success</span>

                                        </div>

                                    </div>

                                </div>


                                <div class="mb-6">

                                    <div class="d-flex align-items-center flex-grow-1">

                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>


                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                            <div class="d-flex flex-column align-items-cente py-2 w-75">

                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint delivery and project deployment</a>


                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>

                                            </div>


                                            <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>

                                        </div>

                                    </div>

                                </div>


                                <div class="">

                                    <div class="d-flex align-items-center flex-grow-1">

                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>


                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                            <div class="d-flex flex-column align-items-cente py-2 w-75">

                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Data analytics research showcase</a>


                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>

                                            </div>


                                            <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>

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