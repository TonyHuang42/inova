<style>
    .spec {
        /* background-image: url('../img/northlight/img_spec.png'); */
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        background-size: 30%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        background-color: #233445;
        color: white;
    }

    .spec-wrap {
        padding-bottom: 20px;
    }

    hr {
        border-top: 1px solid white;
        margin: 27px 0 !important;
    }

    p {
        margin-bottom: 0px;
    }

    .spec-type {
        font-size: 24px;
        font-weight: 400;
    }

    .spec-title {
        font-weight: 400;
    }

    /* .row {
        --bs-gutter-y: 24px;
    } */

    #phone-nav-container {
        background-color: #232323;
        position: relative;
        width: 100%;
        z-index: 999;
        transition: top 0.3s ease-in-out;
    }

    #phone-nav-container.fixed {
        position: fixed;
        top: 0;
        left: 0;
    }

    /* .spec-toggle {
        display: flex;
        align-items: center;
        user-select: none;
        padding: 27px 0;
    } */

    .spec-toggle .arrow {
        font-size: 24px;
        margin-left: 24px;
        margin-top: 5px;
        transition: transform 0.3s ease;
    }

    .spec-toggle.open .arrow {
        transform: rotate(180deg);
    }
</style>

<div class="spec">
    <div class="container">
        <h3 class="my-4">Specifications</h3>
        <div class="pt-0 section-padding-sm">
            <hr class="mt-0">
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Storage & Memory</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Memory</div>
                            <p>3GB</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Storage</div>
                            <p>32GB</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">External Storage</div>
                            <p>microSD Card<br>(Up to 512GB)</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Technical <br>Details</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('img/northlight/inova-northlight-spec_size_drawing.png') }}" alt="" class="img-fluid" style="max-height: 600px;">
                            <div class="disclaimer">*Measurements are approximate; results may vary.</div>
                        </div>

                        <div class="col-6">
                            <div class="spec-title">Weight</div>
                            <p>163g</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Display</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Screen Size</div>
                            <p>5.45 inch</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Resolution</div>
                            <p>480 x 960</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Refresh Rate</div>
                            <p>60Hz</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Technology</div>
                            <p>TFT LCD</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Chip</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Processor</div>
                            <p>Mediatek Helio A22 MT6761</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">CPU</div>
                            <p>Quad-Core with Arm Cortex-A53</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">CPU Frequency</div>
                            <p>2GHz</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">GPU</div>
                            <p>IMG PowerVR GE8300</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Camera</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Rear Camera</div>
                            <p>5MP with LED</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Front Camera</div>
                            <p>2MP</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Connectivity</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">USB Interface</div>
                            <p>USB-C</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">USB Version</div>
                            <p>USB 2.0</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Wi-Fi</div>
                            <p>802.11a/b/g/n/ac</p>
                            <p>2.4GHz + 5GHz</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Bluetooth Version</div>
                            <p>5.0</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Audio Jack</div>
                            <p>3.5mm</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Location</div>
                            <p style="overflow-wrap: break-word;">GPS/<wbr>BDS/<wbr>Glonass/<wbr>Galileo</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Network</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">2G</div>
                            <p>B2/B3/B5/B8</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">3G</div>
                            <p>B1/B2/B4/B5/B8</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">4G</div>
                            <p style="overflow-wrap: break-word;">B1/<wbr>B2/<wbr>B3/<wbr>B4/<wbr>B5/<wbr>B7/<wbr>B8/<wbr>B12/
                                <wbr>B17/<wbr>B20/<wbr>B25/<wbr>B26/<wbr>B34/<wbr>B38/<wbr>B39/<wbr>B40/<wbr>B41/<wbr>B66/<wbr>B71
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Battery</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Battery Capacity</div>
                            <p>2500mAh</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Replaceable</div>
                            <p>Yes</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Standby Time</div>
                            <p>87H</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Talking Time</div>
                            <p>10H</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">Operating System</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Android 14</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">SIM Cards</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Dual SIM</div>
                            <p>Micro-SIM and Nano-SIM</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">System Requirement</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Google Account <br>(required for some features)</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Internet Access</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="spec-type">In the Box</div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Northlight</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Power Adaptor (5W)</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">USB-C Charge Cable (1m)</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">3.5mm Earphones with Mic and Control</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">User Manual</div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="spec-title">Warranty Card</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
