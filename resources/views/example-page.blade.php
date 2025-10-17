@extends('backend.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login')
@section('content')

    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Hospital Overview</h2>
        </div>

        <div class="row pb-10">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">75</div>
                            <div class="font-14 text-secondary weight-500">
                                Appointment
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);">
                                <i class="icon-copy dw dw-calendar1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">124,551</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Patient
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);">
                                <span class="icon-copy ti-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">400+</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Doctor
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">$50,000</div>
                            <div class="font-14 text-secondary weight-500">Earning</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);">
                                <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-10">
            <div class="col-md-8 mb-20">
                <div class="card-box height-100-p pd-20" style="position: relative;">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                        <div class="h5 mb-md-0">Hospital Activities</div>
                        <div class="form-group mb-md-0">
                            <div class="dropdown bootstrap-select form-control form-control-sm"><select
                                    class="form-control form-control-sm selectpicker" tabindex="-98">
                                    <option value="">Last Week</option>
                                    <option value="">Last Month</option>
                                    <option value="">Last 6 Month</option>
                                    <option value="">Last 1 year</option>
                                </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false"
                                    title="Last Week">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Last Week</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="activities-chart" style="min-height: 315px;">
                        <div id="apexcharts284c6d" class="apexcharts-canvas apexcharts284c6d apexcharts-theme-light"
                            style="width: 627px; height: 300px;"><svg id="SvgjsSvg1738" width="627" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="627" height="300">
                                    <div class="apexcharts-legend apexcharts-align-right position-top"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="right: 0px; position: absolute; left: 0px; top: 0px;">
                                        <div class="apexcharts-legend-series" rel="1" data:collapsed="false"
                                            style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                rel="1" data:collapsed="false"
                                                style="background: rgb(240, 116, 108); color: rgb(240, 116, 108); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="1" i="0"
                                                data:default-text="Patients" data:collapsed="false"
                                                style="color: rgb(240, 116, 108); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Patients</span>
                                        </div>
                                        <div class="apexcharts-legend-series" rel="2" data:collapsed="false"
                                            style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                rel="2" data:collapsed="false"
                                                style="background: rgb(37, 92, 211); color: rgb(37, 92, 211); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="2" i="1"
                                                data:default-text="Consultations" data:collapsed="false"
                                                style="color: rgb(37, 92, 211); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Consultations</span>
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.position-bottom,
                                        .apexcharts-legend.position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.position-right,
                                        .apexcharts-legend.position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.position-top.apexcharts-align-left,
                                        .apexcharts-legend.position-right,
                                        .apexcharts-legend.position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1740" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(40.79443359375, 30)">
                                    <defs id="SvgjsDefs1739">
                                        <clipPath id="gridRectMask284c6d">
                                            <rect id="SvgjsRect1745" width="570.87744140625" height="233.73000000000002"
                                                x="-3.5" y="-1.5" rx="0" ry="0" fill="#ffffff"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMask284c6d">
                                            <rect id="SvgjsRect1746" width="575.87744140625" height="242.73000000000002"
                                                x="-6" y="-6" rx="0" ry="0" fill="#ffffff"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                            </rect>
                                        </clipPath>
                                        <filter id="SvgjsFilter1776" filterUnits="userSpaceOnUse" width="200%"
                                            height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1777" flood-color="#000000" flood-opacity="0.2"
                                                result="SvgjsFeFlood1777Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1778" in="SvgjsFeFlood1777Out"
                                                in2="SourceAlpha" operator="in" result="SvgjsFeComposite1778Out">
                                            </feComposite>
                                            <feOffset id="SvgjsFeOffset1779" dx="7" dy="18"
                                                result="SvgjsFeOffset1779Out" in="SvgjsFeComposite1778Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1780" stdDeviation="16 "
                                                result="SvgjsFeGaussianBlur1780Out" in="SvgjsFeOffset1779Out">
                                            </feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge1781" result="SvgjsFeMerge1781Out"
                                                in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode1782" in="SvgjsFeGaussianBlur1780Out">
                                                </feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode1783" in="[object Arguments]">
                                                </feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend1784" in="SourceGraphic" in2="SvgjsFeMerge1781Out"
                                                mode="normal" result="SvgjsFeBlend1784Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter1812" filterUnits="userSpaceOnUse" width="200%"
                                            height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1813" flood-color="#000000" flood-opacity="0.2"
                                                result="SvgjsFeFlood1813Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1814" in="SvgjsFeFlood1813Out"
                                                in2="SourceAlpha" operator="in" result="SvgjsFeComposite1814Out">
                                            </feComposite>
                                            <feOffset id="SvgjsFeOffset1815" dx="7" dy="18"
                                                result="SvgjsFeOffset1815Out" in="SvgjsFeComposite1814Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1816" stdDeviation="16 "
                                                result="SvgjsFeGaussianBlur1816Out" in="SvgjsFeOffset1815Out">
                                            </feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge1817" result="SvgjsFeMerge1817Out"
                                                in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode1818" in="SvgjsFeGaussianBlur1816Out">
                                                </feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode1819" in="[object Arguments]">
                                                </feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend1820" in="SourceGraphic" in2="SvgjsFeMerge1817Out"
                                                mode="normal" result="SvgjsFeBlend1820Out"></feBlend>
                                        </filter>
                                    </defs>
                                    <line id="SvgjsLine1744" x1="0" y1="0" x2="0"
                                        y2="230.73000000000002" stroke="#b6b6b6" stroke-dasharray="3"
                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG1821" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1822" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                            <text id="SvgjsText1824" font-family="Helvetica, Arial, sans-serif" x="0"
                                                y="259.73" text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#8c9094"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1825">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1827" font-family="Helvetica, Arial, sans-serif"
                                                x="51.26158558238636" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1828">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1830" font-family="Helvetica, Arial, sans-serif"
                                                x="102.52317116477272" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1831">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1833" font-family="Helvetica, Arial, sans-serif"
                                                x="153.7847567471591" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1834">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1836" font-family="Helvetica, Arial, sans-serif"
                                                x="205.04634232954547" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1837">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1839" font-family="Helvetica, Arial, sans-serif"
                                                x="256.3079279119318" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1840">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1842" font-family="Helvetica, Arial, sans-serif"
                                                x="307.5695134943182" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1843">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1845" font-family="Helvetica, Arial, sans-serif"
                                                x="358.83109907670456" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1846">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1848" font-family="Helvetica, Arial, sans-serif"
                                                x="410.09268465909093" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1849">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1851" font-family="Helvetica, Arial, sans-serif"
                                                x="461.3542702414773" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1852">Oct</tspan>
                                                <title>Oct</title>
                                            </text><text id="SvgjsText1854" font-family="Helvetica, Arial, sans-serif"
                                                x="512.6158558238637" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1855">Nov</tspan>
                                                <title>Nov</title>
                                            </text><text id="SvgjsText1857" font-family="Helvetica, Arial, sans-serif"
                                                x="563.8774414062501" y="259.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#8c9094" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1858">Dec</tspan>
                                                <title>Dec</title>
                                            </text></g>
                                        <line id="SvgjsLine1859" x1="0" y1="231.73000000000002"
                                            x2="563.87744140625" y2="231.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1884" class="apexcharts-grid">
                                        <g id="SvgjsG1885" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1899" x1="0" y1="0" x2="563.87744140625"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1900" x1="0" y1="23.073" x2="563.87744140625"
                                                y2="23.073" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1901" x1="0" y1="46.146" x2="563.87744140625"
                                                y2="46.146" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1902" x1="0" y1="69.219" x2="563.87744140625"
                                                y2="69.219" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1903" x1="0" y1="92.292" x2="563.87744140625"
                                                y2="92.292" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1904" x1="0" y1="115.36500000000001"
                                                x2="563.87744140625" y2="115.36500000000001" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1905" x1="0" y1="138.43800000000002"
                                                x2="563.87744140625" y2="138.43800000000002" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1906" x1="0" y1="161.51100000000002"
                                                x2="563.87744140625" y2="161.51100000000002" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1907" x1="0" y1="184.58400000000003"
                                                x2="563.87744140625" y2="184.58400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1908" x1="0" y1="207.65700000000004"
                                                x2="563.87744140625" y2="207.65700000000004" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1909" x1="0" y1="230.73000000000005"
                                                x2="563.87744140625" y2="230.73000000000005" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1886" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine1887" x1="0" y1="231.73000000000002" x2="0"
                                            y2="237.73000000000002" stroke="#e0e0e0" stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1888" x1="51.26158558238637" y1="231.73000000000002"
                                            x2="51.26158558238637" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1889" x1="102.52317116477273" y1="231.73000000000002"
                                            x2="102.52317116477273" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1890" x1="153.7847567471591" y1="231.73000000000002"
                                            x2="153.7847567471591" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1891" x1="205.04634232954547" y1="231.73000000000002"
                                            x2="205.04634232954547" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1892" x1="256.3079279119318" y1="231.73000000000002"
                                            x2="256.3079279119318" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1893" x1="307.5695134943182" y1="231.73000000000002"
                                            x2="307.5695134943182" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1894" x1="358.83109907670456" y1="231.73000000000002"
                                            x2="358.83109907670456" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1895" x1="410.09268465909093" y1="231.73000000000002"
                                            x2="410.09268465909093" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1896" x1="461.3542702414773" y1="231.73000000000002"
                                            x2="461.3542702414773" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1897" x1="512.6158558238636" y1="231.73000000000002"
                                            x2="512.6158558238636" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1898" x1="563.87744140625" y1="231.73000000000002"
                                            x2="563.87744140625" y2="237.73000000000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1911" x1="0" y1="230.73000000000002"
                                            x2="563.87744140625" y2="230.73000000000002" stroke="transparent"
                                            stroke-dasharray="0"></line>
                                        <line id="SvgjsLine1910" x1="0" y1="1" x2="0"
                                            y2="230.73000000000002" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1748" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1785" class="apexcharts-series" seriesName="Consultations"
                                            data:longestSeries="true" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1811"
                                                d="M 0 131.84571428571428C 17.941554953835226 131.84571428571428 33.32003062855114 164.80714285714288 51.26158558238636 164.80714285714288C 69.20314053622158 164.80714285714288 84.5816162109375 118.66114285714286 102.52317116477272 118.66114285714286C 120.46472611860794 118.66114285714286 135.84320179332386 131.84571428571428 153.78475674715907 131.84571428571428C 171.7263117009943 131.84571428571428 187.1047873757102 79.10742857142856 205.04634232954544 79.10742857142856C 222.98789728338068 79.10742857142856 238.36637295809658 92.292 256.3079279119318 92.292C 274.24948286576705 92.292 289.62795854048295 32.96142857142857 307.56951349431813 32.96142857142857C 325.51106844815337 32.96142857142857 340.88954412286927 98.88428571428571 358.8310990767045 98.88428571428571C 376.77265403053974 98.88428571428571 392.15112970525564 59.33057142857143 410.0926846590909 59.33057142857143C 428.0342396129261 59.33057142857143 443.412715287642 98.88428571428571 461.35427024147725 98.88428571428571C 479.2958251953125 98.88428571428571 494.6743008700284 46.14599999999999 512.6158558238636 46.14599999999999C 530.5574107776988 46.14599999999999 545.9358864524148 65.92285714285714 563.87744140625 65.92285714285714"
                                                fill="none" fill-opacity="1" stroke="rgba(37,92,211,0.85)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                stroke-dasharray="0" class="apexcharts-line" index="1"
                                                clip-path="url(#gridRectMask284c6d)" filter="url(#SvgjsFilter1812)"
                                                pathTo="M 0 131.84571428571428C 17.941554953835226 131.84571428571428 33.32003062855114 164.80714285714288 51.26158558238636 164.80714285714288C 69.20314053622158 164.80714285714288 84.5816162109375 118.66114285714286 102.52317116477272 118.66114285714286C 120.46472611860794 118.66114285714286 135.84320179332386 131.84571428571428 153.78475674715907 131.84571428571428C 171.7263117009943 131.84571428571428 187.1047873757102 79.10742857142856 205.04634232954544 79.10742857142856C 222.98789728338068 79.10742857142856 238.36637295809658 92.292 256.3079279119318 92.292C 274.24948286576705 92.292 289.62795854048295 32.96142857142857 307.56951349431813 32.96142857142857C 325.51106844815337 32.96142857142857 340.88954412286927 98.88428571428571 358.8310990767045 98.88428571428571C 376.77265403053974 98.88428571428571 392.15112970525564 59.33057142857143 410.0926846590909 59.33057142857143C 428.0342396129261 59.33057142857143 443.412715287642 98.88428571428571 461.35427024147725 98.88428571428571C 479.2958251953125 98.88428571428571 494.6743008700284 46.14599999999999 512.6158558238636 46.14599999999999C 530.5574107776988 46.14599999999999 545.9358864524148 65.92285714285714 563.87744140625 65.92285714285714"
                                                pathFrom="M -1 230.73000000000002L -1 230.73000000000002L 51.26158558238636 230.73000000000002L 102.52317116477272 230.73000000000002L 153.78475674715907 230.73000000000002L 205.04634232954544 230.73000000000002L 256.3079279119318 230.73000000000002L 307.56951349431813 230.73000000000002L 358.8310990767045 230.73000000000002L 410.0926846590909 230.73000000000002L 461.35427024147725 230.73000000000002L 512.6158558238636 230.73000000000002L 563.87744140625 230.73000000000002">
                                            </path>
                                            <g id="SvgjsG1786" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG1788" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1789" r="5" cx="0"
                                                        cy="131.84571428571428"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                        index="1" default-marker-size="5"></circle>
                                                    <circle id="SvgjsCircle1790" r="5" cx="51.26158558238636"
                                                        cy="164.80714285714288"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1791" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1792" r="5" cx="102.52317116477272"
                                                        cy="118.66114285714286"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1793" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1794" r="5" cx="153.78475674715907"
                                                        cy="131.84571428571428"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1795" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1796" r="5" cx="205.04634232954544"
                                                        cy="79.10742857142856"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1797" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1798" r="5" cx="256.3079279119318"
                                                        cy="92.292" class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1799" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1800" r="5" cx="307.56951349431813"
                                                        cy="32.96142857142857"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1801" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1802" r="5" cx="358.8310990767045"
                                                        cy="98.88428571428571"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1803" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1804" r="5" cx="410.0926846590909"
                                                        cy="59.33057142857143"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="8" j="8"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1805" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1806" r="5" cx="461.35427024147725"
                                                        cy="98.88428571428571"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="9" j="9"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1807" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1808" r="5" cx="512.6158558238636"
                                                        cy="46.14599999999999"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="10" j="10"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1809" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1810" r="5" cx="563.87744140625"
                                                        cy="65.92285714285714"
                                                        class="apexcharts-marker no-pointer-events w285cee"
                                                        stroke="#ffffff" fill="#255cd3" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="11" j="11"
                                                        index="1" default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1749" class="apexcharts-series" seriesName="Patients"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1775"
                                                d="M 0 164.80714285714288C 17.941554953835226 164.80714285714288 33.32003062855114 131.84571428571428 51.26158558238636 131.84571428571428C 69.20314053622158 131.84571428571428 84.5816162109375 151.62257142857143 102.52317116477272 151.62257142857143C 120.46472611860794 151.62257142857143 135.84320179332386 98.88428571428571 153.78475674715907 98.88428571428571C 171.7263117009943 98.88428571428571 187.1047873757102 112.06885714285714 205.04634232954544 112.06885714285714C 222.98789728338068 112.06885714285714 238.36637295809658 59.33057142857143 256.3079279119318 59.33057142857143C 274.24948286576705 59.33057142857143 289.62795854048295 72.51514285714285 307.56951349431813 72.51514285714285C 325.51106844815337 72.51514285714285 340.88954412286927 65.92285714285714 358.8310990767045 65.92285714285714C 376.77265403053974 65.92285714285714 392.15112970525564 98.88428571428571 410.0926846590909 98.88428571428571C 428.0342396129261 98.88428571428571 443.412715287642 65.92285714285714 461.35427024147725 65.92285714285714C 479.2958251953125 65.92285714285714 494.6743008700284 85.6997142857143 512.6158558238636 85.6997142857143C 530.5574107776988 85.6997142857143 545.9358864524148 32.96142857142857 563.87744140625 32.96142857142857"
                                                fill="none" fill-opacity="1" stroke="rgba(240,116,108,0.85)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMask284c6d)" filter="url(#SvgjsFilter1776)"
                                                pathTo="M 0 164.80714285714288C 17.941554953835226 164.80714285714288 33.32003062855114 131.84571428571428 51.26158558238636 131.84571428571428C 69.20314053622158 131.84571428571428 84.5816162109375 151.62257142857143 102.52317116477272 151.62257142857143C 120.46472611860794 151.62257142857143 135.84320179332386 98.88428571428571 153.78475674715907 98.88428571428571C 171.7263117009943 98.88428571428571 187.1047873757102 112.06885714285714 205.04634232954544 112.06885714285714C 222.98789728338068 112.06885714285714 238.36637295809658 59.33057142857143 256.3079279119318 59.33057142857143C 274.24948286576705 59.33057142857143 289.62795854048295 72.51514285714285 307.56951349431813 72.51514285714285C 325.51106844815337 72.51514285714285 340.88954412286927 65.92285714285714 358.8310990767045 65.92285714285714C 376.77265403053974 65.92285714285714 392.15112970525564 98.88428571428571 410.0926846590909 98.88428571428571C 428.0342396129261 98.88428571428571 443.412715287642 65.92285714285714 461.35427024147725 65.92285714285714C 479.2958251953125 65.92285714285714 494.6743008700284 85.6997142857143 512.6158558238636 85.6997142857143C 530.5574107776988 85.6997142857143 545.9358864524148 32.96142857142857 563.87744140625 32.96142857142857"
                                                pathFrom="M -1 230.73000000000002L -1 230.73000000000002L 51.26158558238636 230.73000000000002L 102.52317116477272 230.73000000000002L 153.78475674715907 230.73000000000002L 205.04634232954544 230.73000000000002L 256.3079279119318 230.73000000000002L 307.56951349431813 230.73000000000002L 358.8310990767045 230.73000000000002L 410.0926846590909 230.73000000000002L 461.35427024147725 230.73000000000002L 512.6158558238636 230.73000000000002L 563.87744140625 230.73000000000002">
                                            </path>
                                            <g id="SvgjsG1750" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG1752" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1753" r="5" cx="0"
                                                        cy="164.80714285714288"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                        index="0" default-marker-size="5"></circle>
                                                    <circle id="SvgjsCircle1754" r="5" cx="51.26158558238636"
                                                        cy="131.84571428571428"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1755" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1756" r="5" cx="102.52317116477272"
                                                        cy="151.62257142857143"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1757" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1758" r="5" cx="153.78475674715907"
                                                        cy="98.88428571428571"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1759" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1760" r="5" cx="205.04634232954544"
                                                        cy="112.06885714285714"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1761" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1762" r="5" cx="256.3079279119318"
                                                        cy="59.33057142857143"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1763" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1764" r="5" cx="307.56951349431813"
                                                        cy="72.51514285714285"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1765" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1766" r="5" cx="358.8310990767045"
                                                        cy="65.92285714285714"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1767" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1768" r="5" cx="410.0926846590909"
                                                        cy="98.88428571428571"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="8" j="8"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1769" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1770" r="5" cx="461.35427024147725"
                                                        cy="65.92285714285714"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="9" j="9"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1771" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1772" r="5" cx="512.6158558238636"
                                                        cy="85.6997142857143"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="10" j="10"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1773" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask284c6d)">
                                                    <circle id="SvgjsCircle1774" r="5" cx="563.87744140625"
                                                        cy="32.96142857142857"
                                                        class="apexcharts-marker no-pointer-events w285ced"
                                                        stroke="#ffffff" fill="#f0746c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="11" j="11"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1787" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        <g id="SvgjsG1751" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1912" x1="0" y1="0" x2="563.87744140625"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1913" x1="0" y1="0" x2="563.87744140625"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1914" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1915" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1916" class="apexcharts-point-annotations"></g>
                                </g>
                                <rect id="SvgjsRect1743" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0"></rect>
                                <g id="SvgjsG1860" class="apexcharts-yaxis" rel="0"
                                    transform="translate(10.79443359375, 0)">
                                    <g id="SvgjsG1861" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1862"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="32" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="regular"
                                            fill="#8c9094" class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1863">35</tspan>
                                        </text><text id="SvgjsText1864" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="55.073" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1865">32</tspan>
                                        </text><text id="SvgjsText1866" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="78.146" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1867">28</tspan>
                                        </text><text id="SvgjsText1868" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="101.219" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1869">25</tspan>
                                        </text><text id="SvgjsText1870" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="124.292" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1871">21</tspan>
                                        </text><text id="SvgjsText1872" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="147.365" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1873">18</tspan>
                                        </text><text id="SvgjsText1874" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="170.43800000000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1875">14</tspan>
                                        </text><text id="SvgjsText1876" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="193.51100000000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1877">11</tspan>
                                        </text><text id="SvgjsText1878" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="216.58400000000003" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1879">7</tspan>
                                        </text><text id="SvgjsText1880" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="239.65700000000004" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1881">4</tspan>
                                        </text><text id="SvgjsText1882" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="262.73" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="regular" fill="#8c9094"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1883">0</tspan>
                                        </text></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(240, 116, 108);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(37, 92, 211);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 668px; height: 421px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-20">
                <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64"
                    style="background-color: rgb(69, 90, 100);">
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                        </div>
                        <div class="font-14 text-right">
                            <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                            <div class="font-12">Since last month</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-14">Appointment</div>
                            <div class="font-24 weight-500">1865</div>
                        </div>
                        <div class="max-width-150" style="position: relative;">
                            <div id="appointment-chart" style="min-height: 70px;">
                                <div id="apexcharts284c8b"
                                    class="apexcharts-canvas apexcharts284c8b apexcharts-theme-light"
                                    style="width: 150px; height: 70px;"><svg id="SvgjsSvg1656" width="150"
                                        height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1658" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1657">
                                                <linearGradient id="SvgjsLinearGradient1661" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1662" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1663" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1664" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask284c8b">
                                                    <rect id="SvgjsRect1666" width="154" height="70" x="-2"
                                                        y="0" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask284c8b">
                                                    <rect id="SvgjsRect1667" width="152" height="72" x="-1"
                                                        y="-1" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1665" width="5.357142857142857" height="70" x="0"
                                                y="0" rx="0" ry="0"
                                                fill="url(#SvgjsLinearGradient1661)" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="70"
                                                filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1679" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1680" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 2.75)"></g>
                                            </g>
                                            <g id="SvgjsG1682" class="apexcharts-grid">
                                                <g id="SvgjsG1683" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1685" x1="0" y1="0"
                                                        x2="150" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1686" x1="0" y1="17.5"
                                                        x2="150" y2="17.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1687" x1="0" y1="35"
                                                        x2="150" y2="35" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1688" x1="0" y1="52.5"
                                                        x2="150" y2="52.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1689" x1="0" y1="70"
                                                        x2="150" y2="70" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1684" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1691" x1="0" y1="70"
                                                    x2="150" y2="70" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1690" x1="0" y1="1"
                                                    x2="0" y2="70" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1669" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1670" class="apexcharts-series" rel="1"
                                                    seriesName="Week" data:realIndex="0">
                                                    <path id="SvgjsPath1672"
                                                        d="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                        fill="rgba(0,143,251,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                        pathFrom="M 8.035714285714285 70L 8.035714285714285 70L 13.392857142857142 70L 13.392857142857142 70L 8.035714285714285 70"
                                                        cy="17.5" cx="29.46428571428571" j="0" val="21"
                                                        barHeight="52.5" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1673"
                                                        d="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                        fill="rgba(0,227,150,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                        pathFrom="M 29.46428571428571 70L 29.46428571428571 70L 34.82142857142857 70L 34.82142857142857 70L 29.46428571428571 70"
                                                        cy="15" cx="50.89285714285714" j="1" val="22"
                                                        barHeight="55" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1674"
                                                        d="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                        fill="rgba(254,176,25,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                        pathFrom="M 50.89285714285714 70L 50.89285714285714 70L 56.24999999999999 70L 56.24999999999999 70L 50.89285714285714 70"
                                                        cy="45" cx="72.32142857142857" j="2" val="10"
                                                        barHeight="25" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1675"
                                                        d="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70"
                                                        fill="rgba(255,69,96,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70"
                                                        pathFrom="M 72.32142857142857 70L 72.32142857142857 70L 77.67857142857143 70L 77.67857142857143 70L 72.32142857142857 70"
                                                        cy="0" cx="93.75" j="3" val="28"
                                                        barHeight="70" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1676"
                                                        d="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70"
                                                        fill="rgba(119,93,208,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70"
                                                        pathFrom="M 93.75 70L 93.75 70L 99.10714285714286 70L 99.10714285714286 70L 93.75 70"
                                                        cy="30" cx="115.17857142857143" j="4" val="16"
                                                        barHeight="40" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1677"
                                                        d="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                        fill="rgba(0,143,251,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                        pathFrom="M 115.17857142857143 70L 115.17857142857143 70L 120.53571428571429 70L 120.53571428571429 70L 115.17857142857143 70"
                                                        cy="17.5" cx="136.60714285714286" j="5" val="21"
                                                        barHeight="52.5" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1678"
                                                        d="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                        fill="rgba(0,227,150,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c8b)"
                                                        pathTo="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                        pathFrom="M 136.60714285714286 70L 136.60714285714286 70L 141.96428571428572 70L 141.96428571428572 70L 136.60714285714286 70"
                                                        cy="37.5" cx="158.03571428571428" j="6" val="13"
                                                        barHeight="32.5" barWidth="5.357142857142857"></path>
                                                </g>
                                                <g id="SvgjsG1671" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1692" x1="0" y1="0" x2="150"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1693" x1="0" y1="0" x2="150"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1694" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1695" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1696" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1681" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 143, 251);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 151px; height: 71px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7"
                    style="background-color: rgb(38, 94, 215);">
                    <div class="d-flex justify-content-between pb-20 text-white">
                        <div class="icon h1 text-white">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <div class="font-14 text-right">
                            <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                            <div class="font-12">Since last month</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="text-white">
                            <div class="font-14">Surgery</div>
                            <div class="font-24 weight-500">250</div>
                        </div>
                        <div class="max-width-150" style="position: relative;">
                            <div id="surgery-chart" style="min-height: 70px;">
                                <div id="apexcharts284c91"
                                    class="apexcharts-canvas apexcharts284c91 apexcharts-theme-light"
                                    style="width: 150px; height: 70px;"><svg id="SvgjsSvg1697" width="150"
                                        height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1699" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1698">
                                                <linearGradient id="SvgjsLinearGradient1702" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1703" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1704" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1705" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask284c91">
                                                    <rect id="SvgjsRect1707" width="154" height="70" x="-2"
                                                        y="0" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask284c91">
                                                    <rect id="SvgjsRect1708" width="152" height="72" x="-1"
                                                        y="-1" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1706" width="5.357142857142857" height="70" x="0"
                                                y="0" rx="0" ry="0"
                                                fill="url(#SvgjsLinearGradient1702)" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="70"
                                                filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1720" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1721" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 2.75)"></g>
                                            </g>
                                            <g id="SvgjsG1723" class="apexcharts-grid">
                                                <g id="SvgjsG1724" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1726" x1="0" y1="0"
                                                        x2="150" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1727" x1="0" y1="17.5"
                                                        x2="150" y2="17.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1728" x1="0" y1="35"
                                                        x2="150" y2="35" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1729" x1="0" y1="52.5"
                                                        x2="150" y2="52.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1730" x1="0" y1="70"
                                                        x2="150" y2="70" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1725" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1732" x1="0" y1="70"
                                                    x2="150" y2="70" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1731" x1="0" y1="1"
                                                    x2="0" y2="70" stroke="transparent"
                                                    stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1710" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1711" class="apexcharts-series" rel="1"
                                                    seriesName="Week" data:realIndex="0">
                                                    <path id="SvgjsPath1713"
                                                        d="M 8.035714285714285 70L 8.035714285714285 36.339285714285715Q 10.714285714285714 33.660714285714285 13.392857142857142 36.339285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 8.035714285714285 70L 8.035714285714285 36.339285714285715Q 10.714285714285714 33.660714285714285 13.392857142857142 36.339285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                        pathFrom="M 8.035714285714285 70L 8.035714285714285 70L 13.392857142857142 70L 13.392857142857142 70L 8.035714285714285 70"
                                                        cy="35" cx="29.46428571428571" j="0" val="10"
                                                        barHeight="35" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1714"
                                                        d="M 29.46428571428571 70L 29.46428571428571 43.339285714285715Q 32.14285714285714 40.660714285714285 34.82142857142857 43.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 29.46428571428571 70L 29.46428571428571 43.339285714285715Q 32.14285714285714 40.660714285714285 34.82142857142857 43.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                        pathFrom="M 29.46428571428571 70L 29.46428571428571 70L 34.82142857142857 70L 34.82142857142857 70L 29.46428571428571 70"
                                                        cy="42" cx="50.89285714285714" j="1" val="8"
                                                        barHeight="28" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1715"
                                                        d="M 50.89285714285714 70L 50.89285714285714 18.839285714285715Q 53.57142857142857 16.16071428571429 56.24999999999999 18.839285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 50.89285714285714 70L 50.89285714285714 18.839285714285715Q 53.57142857142857 16.16071428571429 56.24999999999999 18.839285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                        pathFrom="M 50.89285714285714 70L 50.89285714285714 70L 56.24999999999999 70L 56.24999999999999 70L 50.89285714285714 70"
                                                        cy="17.5" cx="72.32142857142857" j="2" val="15"
                                                        barHeight="52.5" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1716"
                                                        d="M 72.32142857142857 70L 72.32142857142857 29.339285714285715Q 75 26.66071428571429 77.67857142857143 29.339285714285715L 77.67857142857143 70L 72.32142857142857 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 72.32142857142857 70L 72.32142857142857 29.339285714285715Q 75 26.66071428571429 77.67857142857143 29.339285714285715L 77.67857142857143 70L 72.32142857142857 70"
                                                        pathFrom="M 72.32142857142857 70L 72.32142857142857 70L 77.67857142857143 70L 77.67857142857143 70L 72.32142857142857 70"
                                                        cy="28" cx="93.75" j="3" val="12"
                                                        barHeight="42" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1717"
                                                        d="M 93.75 70L 93.75 1.3392857142857142Q 96.42857142857143 -1.3392857142857142 99.10714285714286 1.3392857142857142L 99.10714285714286 70L 93.75 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 93.75 70L 93.75 1.3392857142857142Q 96.42857142857143 -1.3392857142857142 99.10714285714286 1.3392857142857142L 99.10714285714286 70L 93.75 70"
                                                        pathFrom="M 93.75 70L 93.75 70L 99.10714285714286 70L 99.10714285714286 70L 93.75 70"
                                                        cy="0" cx="115.17857142857143" j="4" val="20"
                                                        barHeight="70" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1718"
                                                        d="M 115.17857142857143 70L 115.17857142857143 22.339285714285715Q 117.85714285714286 19.66071428571429 120.53571428571429 22.339285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 115.17857142857143 70L 115.17857142857143 22.339285714285715Q 117.85714285714286 19.66071428571429 120.53571428571429 22.339285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                        pathFrom="M 115.17857142857143 70L 115.17857142857143 70L 120.53571428571429 70L 120.53571428571429 70L 115.17857142857143 70"
                                                        cy="21" cx="136.60714285714286" j="5" val="14"
                                                        barHeight="49" barWidth="5.357142857142857"></path>
                                                    <path id="SvgjsPath1719"
                                                        d="M 136.60714285714286 70L 136.60714285714286 46.839285714285715Q 139.28571428571428 44.160714285714285 141.96428571428572 46.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                        fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask284c91)"
                                                        pathTo="M 136.60714285714286 70L 136.60714285714286 46.839285714285715Q 139.28571428571428 44.160714285714285 141.96428571428572 46.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                        pathFrom="M 136.60714285714286 70L 136.60714285714286 70L 141.96428571428572 70L 141.96428571428572 70L 136.60714285714286 70"
                                                        cy="45.5" cx="158.03571428571428" j="6" val="7"
                                                        barHeight="24.5" barWidth="5.357142857142857"></path>
                                                </g>
                                                <g id="SvgjsG1712" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1733" x1="0" y1="0" x2="150"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1734" x1="0" y1="0" x2="150"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1735" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1736" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1737" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1722" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 255, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 151px; height: 71px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p pd-20 min-height-200px">
                    <div class="d-flex justify-content-between pb-10">
                        <div class="h5 mb-0">Top Doctors</div>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                data-color="#1b3133" href="#" role="button" data-toggle="dropdown"
                                style="color: rgb(27, 49, 51);">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="user-list">
                        <ul>
                            <li class="d-flex align-items-center justify-content-between">
                                <div class="name-avatar d-flex align-items-center pr-2">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="vendors/images/photo1.jpg" class="border-radius-100 box-shadow"
                                            width="50" height="50" alt="">
                                    </div>
                                    <div class="txt">
                                        <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                            data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                        <div class="font-14 weight-600">Dr. Neil Wagner</div>
                                        <div class="font-12 weight-500" data-color="#b2b1b6"
                                            style="color: rgb(178, 177, 182);">
                                            Pediatrician
                                        </div>
                                    </div>
                                </div>
                                <div class="cta flex-shrink-0">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <div class="name-avatar d-flex align-items-center pr-2">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="vendors/images/photo2.jpg" class="border-radius-100 box-shadow"
                                            width="50" height="50" alt="">
                                    </div>
                                    <div class="txt">
                                        <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                            data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                        <div class="font-14 weight-600">Dr. Ren Delan</div>
                                        <div class="font-12 weight-500" data-color="#b2b1b6"
                                            style="color: rgb(178, 177, 182);">
                                            Pediatrician
                                        </div>
                                    </div>
                                </div>
                                <div class="cta flex-shrink-0">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <div class="name-avatar d-flex align-items-center pr-2">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="vendors/images/photo3.jpg" class="border-radius-100 box-shadow"
                                            width="50" height="50" alt="">
                                    </div>
                                    <div class="txt">
                                        <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                            data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                        <div class="font-14 weight-600">Dr. Garrett Kincy</div>
                                        <div class="font-12 weight-500" data-color="#b2b1b6"
                                            style="color: rgb(178, 177, 182);">
                                            Pediatrician
                                        </div>
                                    </div>
                                </div>
                                <div class="cta flex-shrink-0">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <div class="name-avatar d-flex align-items-center pr-2">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="vendors/images/photo4.jpg" class="border-radius-100 box-shadow"
                                            width="50" height="50" alt="">
                                    </div>
                                    <div class="txt">
                                        <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                            data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                        <div class="font-14 weight-600">Dr. Callie Reed</div>
                                        <div class="font-12 weight-500" data-color="#b2b1b6"
                                            style="color: rgb(178, 177, 182);">
                                            Pediatrician
                                        </div>
                                    </div>
                                </div>
                                <div class="cta flex-shrink-0">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="card-box height-100-p pd-20 min-height-200px" style="position: relative;">
                    <div class="d-flex justify-content-between">
                        <div class="h5 mb-0">Diseases Report</div>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                data-color="#1b3133" href="#" role="button" data-toggle="dropdown"
                                style="color: rgb(27, 49, 51);">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </div>

                    <div id="diseases-chart" style="min-height: 328.7px;">
                        <div id="apexcharts284c95" class="apexcharts-canvas apexcharts284c95 apexcharts-theme-light"
                            style="width: 278px; height: 328.7px;"><svg id="SvgjsSvg1917" width="278"
                                height="328.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1919" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(-23, 0)">
                                    <defs id="SvgjsDefs1918">
                                        <clipPath id="gridRectMask284c95">
                                            <rect id="SvgjsRect1920" width="332" height="350" x="-3" y="-1"
                                                rx="0" ry="0" fill="#ffffff" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMask284c95">
                                            <rect id="SvgjsRect1921" width="328" height="350" x="-1" y="-1"
                                                rx="0" ry="0" fill="#ffffff" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1923" class="apexcharts-radialbar">
                                        <g id="SvgjsG1924">
                                            <g id="SvgjsG1925" class="apexcharts-tracks">
                                                <g id="SvgjsG1926" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="1">
                                                    <path id="apexcharts-radialbarTrack-0"
                                                        d="M 163 30.429268292682934 A 132.57073170731707 132.57073170731707 0 1 1 162.97686204251673 30.429270311850644"
                                                        fill="none" fill-opacity="1"
                                                        stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="9.993365853658537"
                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 163 30.429268292682934 A 132.57073170731707 132.57073170731707 0 1 1 162.97686204251673 30.429270311850644">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1928" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="2">
                                                    <path id="apexcharts-radialbarTrack-1"
                                                        d="M 163 45.73170731707317 A 117.26829268292683 117.26829268292683 0 1 1 162.9795328219488 45.7317091031714"
                                                        fill="none" fill-opacity="1"
                                                        stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="9.993365853658537"
                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 163 45.73170731707317 A 117.26829268292683 117.26829268292683 0 1 1 162.9795328219488 45.7317091031714">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1930" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="3">
                                                    <path id="apexcharts-radialbarTrack-2"
                                                        d="M 163 61.03414634146341 A 101.96585365853659 101.96585365853659 0 1 1 162.98220360138086 61.034147894492165"
                                                        fill="none" fill-opacity="1"
                                                        stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="9.993365853658537"
                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 163 61.03414634146341 A 101.96585365853659 101.96585365853659 0 1 1 162.98220360138086 61.034147894492165">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1932" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="4">
                                                    <path id="apexcharts-radialbarTrack-3"
                                                        d="M 163 76.33658536585365 A 86.66341463414635 86.66341463414635 0 1 1 162.9848743808129 76.33658668581293"
                                                        fill="none" fill-opacity="1"
                                                        stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="9.993365853658537"
                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 163 76.33658536585365 A 86.66341463414635 86.66341463414635 0 1 1 162.9848743808129 76.33658668581293">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1934">
                                                <g id="SvgjsG1939" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Flu" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1940"
                                                        d="M 163 30.429268292682934 A 132.57073170731707 132.57073170731707 0 0 1 163 295.57073170731707"
                                                        fill="none" fill-opacity="0.85" stroke="rgba(0,48,73,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt"
                                                        stroke-width="10.302439024390244" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                        data:angle="180" data:value="50" index="0" j="0"
                                                        data:pathOrig="M 163 30.429268292682934 A 132.57073170731707 132.57073170731707 0 0 1 163 295.57073170731707">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1941" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Covidx19" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1942"
                                                        d="M 163 45.73170731707317 A 117.26829268292683 117.26829268292683 0 1 1 94.07142699945828 257.87204168182313"
                                                        fill="none" fill-opacity="0.85"
                                                        stroke="rgba(214,40,40,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="10.302439024390244"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                        data:angle="216" data:value="60" index="0" j="1"
                                                        data:pathOrig="M 163 45.73170731707317 A 117.26829268292683 117.26829268292683 0 1 1 94.07142699945828 257.87204168182313">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1943" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Pheumoniae" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1944"
                                                        d="M 163 61.03414634146341 A 101.96585365853659 101.96585365853659 0 1 1 66.02471043845075 194.5091816264367"
                                                        fill="none" fill-opacity="0.85"
                                                        stroke="rgba(247,127,0,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="10.302439024390244"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                        data:angle="252" data:value="70" index="0" j="2"
                                                        data:pathOrig="M 163 61.03414634146341 A 101.96585365853659 101.96585365853659 0 1 1 66.02471043845075 194.5091816264367">
                                                    </path>
                                                </g>
                                                <g id="SvgjsG1945" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Diabeties" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath1946"
                                                        d="M 163 76.33658536585365 A 86.66341463414635 86.66341463414635 0 1 1 80.57819478780634 136.21953208748624"
                                                        fill="none" fill-opacity="0.85"
                                                        stroke="rgba(252,191,73,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="10.302439024390244"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-3"
                                                        data:angle="288" data:value="80" index="0" j="3"
                                                        data:pathOrig="M 163 76.33658536585365 A 86.66341463414635 86.66341463414635 0 1 1 80.57819478780634 136.21953208748624">
                                                    </path>
                                                </g>
                                                <circle id="SvgjsCircle1935" r="76.66673170731707" cx="163"
                                                    cy="163" class="apexcharts-radialbar-hollow"
                                                    fill="transparent"></circle>
                                                <g id="SvgjsG1936" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                        id="SvgjsText1937" font-family="Helvetica, Arial, sans-serif"
                                                        x="163" y="163" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="16px" font-weight="600" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Total</text><text
                                                        id="SvgjsText1938" font-family="Helvetica, Arial, sans-serif"
                                                        x="163" y="195" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="16px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: Helvetica, Arial, sans-serif;">260</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1947" x1="0" y1="0" x2="326"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1948" x1="0" y1="0" x2="326"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 319px; height: 395px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-20">
                <div class="card-box height-100-p pd-20 min-height-200px">
                    <div class="max-width-300 mx-auto">
                        <img src="vendors/images/upgrade.svg" alt="">
                    </div>
                    <div class="text-center">
                        <div class="h5 mb-1">Upgrade to Pro</div>
                        <div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7"
                            style="color: rgb(166, 166, 167);">
                            You can enjoy all our features by upgrading to pro.
                        </div>
                        <a href="#" class="btn btn-primary btn-lg">Upgrade</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Recent Patient</div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="data-table table nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0"
                            role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="table-plus sorting_asc" tabindex="0"
                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Gender: activate to sort column ascending">Gender</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Weight: activate to sort column ascending">Weight</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Assigned Doctor: activate to sort column ascending">Assigned Doctor
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Admit Date: activate to sort column ascending">Admit Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Disease: activate to sort column ascending">Disease</th>
                                    <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>








                                <tr role="row" class="odd">
                                    <td class="table-plus sorting_1" tabindex="0">
                                        <div class="name-avatar d-flex align-items-center">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="vendors/images/photo8.jpg" class="border-radius-100 shadow"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <div class="txt">
                                                <div class="weight-600">Christian Dyer</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Male</td>
                                    <td>80 kg</td>
                                    <td>Dr. Sebastian Tandon</td>
                                    <td>15 Jun 2020</td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Diabetes</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                    class="icon-copy dw dw-edit2"></i></a>
                                            <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                    class="icon-copy dw dw-delete-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="table-plus sorting_1" tabindex="0">
                                        <div class="name-avatar d-flex align-items-center">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="vendors/images/photo5.jpg" class="border-radius-100 shadow"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <div class="txt">
                                                <div class="weight-600">Doris L. Larson</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Male</td>
                                    <td>76 kg</td>
                                    <td>Dr. Ren Delan</td>
                                    <td>22 Jul 2020</td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Dengue</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                    class="icon-copy dw dw-edit2"></i></a>
                                            <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                    class="icon-copy dw dw-delete-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="table-plus sorting_1" tabindex="0">
                                        <div class="name-avatar d-flex align-items-center">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="vendors/images/photo1.jpg" class="border-radius-100 shadow"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <div class="txt">
                                                <div class="weight-600">Doris L. Larson</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Male</td>
                                    <td>76 kg</td>
                                    <td>Dr. Ren Delan</td>
                                    <td>22 Jul 2020</td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Dengue</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                    class="icon-copy dw dw-edit2"></i></a>
                                            <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                    class="icon-copy dw dw-delete-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="table-plus sorting_1" tabindex="0">
                                        <div class="name-avatar d-flex align-items-center">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="vendors/images/photo9.jpg" class="border-radius-100 shadow"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <div class="txt">
                                                <div class="weight-600">Jake Springer</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Female</td>
                                    <td>45 kg</td>
                                    <td>Dr. Garrett Kincy</td>
                                    <td>08 Oct 2020</td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Covid
                                            19</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                    class="icon-copy dw dw-edit2"></i></a>
                                            <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                    class="icon-copy dw dw-delete-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="table-plus sorting_1" tabindex="0">
                                        <div class="name-avatar d-flex align-items-center">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="vendors/images/photo4.jpg" class="border-radius-100 shadow"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <div class="txt">
                                                <div class="weight-600">Jennifer O. Oster</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Female</td>
                                    <td>45 kg</td>
                                    <td>Dr. Callie Reed</td>
                                    <td>19 Oct 2020</td>
                                    <td>
                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                            style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Typhoid</span>
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                    class="icon-copy dw dw-edit2"></i></a>
                                            <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                    class="icon-copy dw dw-delete-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5"></div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="ion-chevron-left"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="3"
                                        tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0">Quick Start</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/medicine-bro.svg" alt="">
                    </div>
                    <div class="content">
                        <h3 class="h4">Services</h3>
                        <p class="max-width-200">
                            We provide superior health care in a compassionate maner
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/remedy-amico.svg" alt="">
                    </div>
                    <div class="content">
                        <h3 class="h4">Medications</h3>
                        <p class="max-width-200">
                            Look for prescription and over-the-counter drug information.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/paper-map-cuate.svg" alt="">
                    </div>
                    <div class="content">
                        <h3 class="h4">Locations</h3>
                        <p class="max-width-200">
                            Convenient locations when and where you need them.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>

@endsection
