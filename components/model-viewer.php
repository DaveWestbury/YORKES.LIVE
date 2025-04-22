 <!-- JS Dependancy - Model view control panel  -->
 <model-viewer id="hotspot-camera-view-demo" bounds="tight" src="export-1.11.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls autoplay poster="poster.webp"
            shadow-intensity="1" camera-orbit="180deg 50deg 15m" field-of-view="45deg" min-field-of-view="9deg" max-field-of-view="9deg" interpolation-decay="100"
            min-camera-orbit="auto auto 15%" max-camera-orbit="auto 75deg auto" orbit-sensitivity=".5" background-color="#455A64">
            <div class="container">
                <div id="annotation" class="text-center bg-white col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-sm-11 col-11">
                    <button class="btn btn-sm bg-orange text-white orange-button" data-orbit="180deg 50deg 15m" data-target="auto"><i class="fa-solid fa-expand"></i> RESET VIEW</button>
                    <a class="btn btn-sm bg-orange text-white orange-button" data-bs-toggle="collapse" href="#collapseControls" role="button" aria-expanded="false"
                        aria-controls="collapseExample">MORE <i class="fa-solid fa-list-ul"></i></a>
                    <a class="btn btn-sm bg-orange text-white orange-button" href="#mainlike">SCROLL <i class="fa-solid fa-turn-down"></i></a>
                    <div class="form-check">
                        <input class="form-check-input beaches" type="checkbox" value="" id="beachesCheck" value="1" onchange="valueChanged()" checked>
                        <label class="form-check-label" for="beachesCheck">
                            Beaches
                        </label>
                    </div>
                    <div class="collapse" id="collapseControls">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="townNames" onchange="valueChanged()">
                            <label class="form-check-label" for="townNames">
                                Town Names
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="aboriginalPlace" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes">Aboriginal Place Names (Coming Soon)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="lakes" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes">Lakes (Coming Soon)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="lakes" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes"><a href="./pages/shipwrecks.php">Shipwrecks</a> (Coming Soon)</label>
                        </div>
                        <p class="card-text"><small class="text-muted">Version 2.3 (Shipwrecks Update)</small></p>
                    </div>


                </div>
            </div>
            <?php include BASE_PATH . "includes/db_liveButtons.php";?>

            <!-- towns -->
            <button class="Hotspot town" slot="hotspot-21" data-position="0.04677723307792192m 0.3777537780172915m -0.01885178228537865m"
                data-normal="0.2664118288396613m 0.9638592933900153m -8.68079952629213e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Warooka</div>
            </button><button class="Hotspot town" slot="hotspot-22" data-position="-0.4824367051303519m 0.3636446229315773m 0.9588420427602776m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Minlaton</div>
            </button><button class="Hotspot town" slot="hotspot-23" data-position="-1.5266016237419322m 0.3623160400470198m 1.0198732662857468m"
                data-normal="3.2058824174940294e-7m 0.9999999999999486m -1.1818455505442455e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Port Vincent</div>
            </button><button class="Hotspot town" slot="hotspot-24" data-position="-1.317408967104577m 0.3623140942613734m 0.4541084438433334m"
                data-normal="-8.800536630073454e-7m 0.999999999999612m 4.2608204845537e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Stansbury</div>
            </button><button class="Hotspot town" slot="hotspot-25" data-position="-0.7580751969241488m 0.3853910304605961m -0.10766817363602377m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Yorketown</div>
            </button><button class="Hotspot town" slot="hotspot-26" data-position="-1.0528281928972287m 0.36231588307217777m -0.4404322442433344m"
                data-normal="4.914223118047876e-7m 0.9999999999998256m -3.280129726889481e-7m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Edithburgh</div>
            </button><button class="Hotspot town" slot="hotspot-27" data-position="0.36375177617123855m 0.3761827228776964m 0.24243864117517644m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Point Turton</div>
            </button><button class="Hotspot town" slot="hotspot-28" data-position="1.3026072366850423m 0.3759139154128756m 0.30558435077676194m"
                data-normal="0.6839797881031832m 0m -0.7295009591949313m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Corny Point</div>
            </button><button class="Hotspot town" slot="hotspot-29" data-position="1.8528273138328406m 0.3761827228776964m -1.1820656765818272m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Marion Bay</div>
            </button>


            <div class="progress-bar hide" slot="progress-bar">
                <div class="update-bar"></div>
            </div>


        </model-viewer>

        <!-- OFF CANVAS -->
        <?php include BASE_PATH . "includes/db_offCanvas.php";?>
