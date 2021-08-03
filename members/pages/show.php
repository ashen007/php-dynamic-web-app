<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/profile_header.php'); ?>
<?php
$id = $_GET['id'];
$page = xss(base64_decode($_GET['page']));
?>

<?php
if ($page == 'researches') {
    ?>
    <section class="container-fluid">
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/IMG_4979-min-scaled.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">Bejo Mexico conducts many vegetable trials each year. QuickTrials has helped to double the number
                    of traits collected while greatly reducing the time and effort required to obtain the data.</span>
                <span style="margin-bottom: 24px; display: block;">“We can now analyse data in ways that was not possible before”</span>
                <span style="margin-bottom: 24px; display: block;">Adrián Carvajal Alvízar</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/3P2A7247.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">The Syngenta Foundation conducts trials of 20 different crops across 9 countries using QuickTrials
                    to streamline its operations.</span>
                <span style="margin-bottom: 24px; display: block;">“QuickTrials allows us to follow a target-driven approach that makes experimentation a lot more
                    efficient.”</span>
                <span style="margin-bottom: 24px; display: block;">Ye Pyae Kyaw</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px;">
            <div style="background-image: url('<?php echo url_for('/images/research/Schermata-men.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">Crop Nutrition Laboratory Services Ltd (Cropnuts) is Africa’s leading independent laboratory for
                    agricultural and environmental testing.</span>
                <span style="margin-bottom: 24px; display: block;">“Managing trials became a lot easier and less stressful, thanks to QuickTrials.”</span>
                <span style="margin-bottom: 24px; display: block;">Jacopo Parigiani</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
        <div class="dtl_row col-8 row" style="margin: 0 auto; padding-top: 24px">
            <div style="background-image: url('<?php echo url_for('/images/research/IMG_7904-scaled.jpg') ?>');width: 376px;height: 268px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <p class="row_content col-8" style="text-align: center">
                <span style="margin-bottom: 24px; display: block;">AgCall provides product, fertiliser and variety trials for over 40 crops across the USA and Canada</span>
                <span style="margin-bottom: 24px; display: block;">““I’m impressed by the flexibility provided by QuickTrials. It allows us to capture data beyond
                    field trials, for things like site assessments, product inquires and audits””</span>
                <span style="margin-bottom: 24px; display: block;">Ken Robertson</span>
                <a class="contacts col-2" href="<?php echo url_for('/contacts.php'); ?>">more details</a>
            </p>
        </div>
    </section>
<?php } ?>

<?php
if ($page == 'disease reports') {
    ?>
    <section class="container-fluid" style="padding-top: 24px;padding-bottom: 24px;">
        <div class="dtl_row col-8 row" style="margin: 0 auto;">
            <p class="row_content col-12">
                The following tables show the United Kingdom's status for animal diseases that are reported to the World
                Organization for Animal Health (OIE) if they are confirmed to be present in specific livestock, poultry,
                and aquaculture species.
            </p>
        </div>
        <div class="panel panel-default col-9" style="margin: 0 auto; padding-top: 24px; padding-bottom: 24px;">
            <table class="table table-bordered" style="height: 8967px;">
                <tbody>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(255, 255, 255);" colspan="3">
                        <h3>Terrestrial Animal Diseases</h3>
                    </td>
                </tr>
                <tr style="height: 59px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 59px; background-color: rgb(204, 204, 204);" colspan="3">
                        <p><strong>Diseases Associated with Multiple Species:</strong></p>
                    </td>
                </tr>
                <tr style="height: 36px;">
                    <td width="208" valign="top"
                        style="width: 208px; height: 36px; background-color: rgb(255, 255, 255);">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top"
                        style="width: 110px; height: 36px; background-color: rgb(255, 255, 255);">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top"
                        style="width: 306px; height: 36px; background-color: rgb(255, 255, 255);">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 31px;">
                    <td width="208" valign="top" style="width: 208px; height: 31px;">
                        <p>Anthrax</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 31px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 31px;">
                        <p>Sporadic / limited distribution</p>
                    </td>
                </tr>
                <tr style="height: 138px;">
                    <td width="208" valign="top" style="width: 208px; height: 138px;">
                        <p>Aujeszky’s disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 138px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 138px;">
                        <p>Sporadic / limited distribution in feral and/or non-commercial production swine.
                            Non-commercial swine: swine managed under biosecurity conditions that allow for potential
                            exposure to feral swine that may be infected with swine diseases, such as pseudorabies.
                            National eradication program. No commercial production swine herd detections in 2018</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Bluetongue</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic </p>
                    </td>
                </tr>
                <tr style="height: 104px;">
                    <td width="208" valign="top" style="width: 208px; height: 104px;">
                        <p>Brucellosis (<em>Brucella abortus</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 104px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 104px;">
                        <p>Sporadic / limited distribution. Disease is limited to free-ranging bison (Bison bison) and
                            wapiti (Cervus canadensis) in the Greater Yellowstone National Park area/national
                            eradication program&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Brucellosis (<em>Brucella melitensis</em>)&nbsp; </p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>1999</p>
                    </td>
                </tr>
                <tr style="height: 128px;">
                    <td width="208" valign="top" style="width: 208px; height: 128px;">
                        <p>Brucellosis (<em>Brucella suis</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 128px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 128px;">
                        <p>Sporadic / limited distribution in feral and/or non-commercial production swine.
                            Non-commercial swine: swine managed under biosecurity conditions that allow for potential
                            exposure to feral swine that may be infected with swine diseases, such as brucellosis. B.
                            suis, biovar 4 is endemic in wild caribou (Rangifer tarandus) herds in Alaska, and biovar 1
                            is endemic in feral swine in several States. National eradication program. No commercial
                            production swine herd detections in 2018.</p>


                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Crimean Congo haemorrhagic fever</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Echinococcosis/hydatidosis (<em>Echinococcosis granulosus, E. multilocularis)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present?</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Suspected.&nbsp;</p>

                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Epizootic hemorrhagic disease (EHD)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Equine encephalomyelitis (Eastern)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic / limited distribution </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Foot-and-mouth disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>1929</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Heartwater</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Japanese encephalitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 104px;">
                    <td width="208" valign="top" style="width: 208px; height: 104px;">
                        <p>New world screwworm</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 104px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 104px;">
                        <p>One event in 2017 limited to the Florida Keys – infestation in Key Deer. There was no NWS
                            myiasis in any production livestock. Eradicated in 3/2017 using sterile flies.</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Old world screwworm</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Paratuberculosis (Johne’s disease)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Voluntary control program</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Q fever</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Rabies</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Rift Valley fever</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Rinderpest</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Surra (<em>Trypanosoma evansi</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Trichinellosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present?&nbsp;&nbsp;&nbsp; </p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Sporadic occurrence in backyard raised swine and wild species. No commercial production swine
                            herd detections in 2018.


                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Tularemia</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic in wild populations. Last domestic detection was in 2009.
                        </p>

                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>West Nile fever/encephalitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 59px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 59px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="avian" id="avian" class=""></a>Avian Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Avian chlamydiosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Identified sporadically in wild birds, pet birds, and backyard birds only. No commercial
                            production flock detections in 2018.


                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Avian infectious bronchitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Avian infectious laryngotracheitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadically detected in poultry. Detections are primarily vaccine related.


                            <br></p>
                    </td>
                </tr>
                <tr style="height: 104px;">
                    <td width="208" valign="top" style="width: 208px; height: 104px;">
                        <p>Avian mycoplasmosis (<em>M. gallisepticum)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 104px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 104px;">
                        <p>Sporadic occurrence. All commercial poultry breeding flocks are under a surveillance program
                            to confirm infection-free status. Commercial table-egg laying hens may be vaccinated. The
                            “finch strain” of MG occurs in wild passerine birds, primarily house finches (Carpodacus
                            mexicanus), in which it causes conjunctivitis. This strain has been shown experimentally to
                            be nonpathogenic in chickens.
                            <br></p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Avian mycoplasmosis (<em>M. synoviae</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Sporadic occurrence. All commercial poultry breeding flocks are under a surveillance program
                            to confirm infection-free status.
                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Duck viral hepatitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>1998</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Fowl typhoid (<em>Salmonella gallinarum)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>1981</p>
                    </td>
                </tr>
                <tr style="height: 104px;">
                    <td width="208" valign="top" style="width: 208px; height: 104px;">
                        <p>Highly pathogenic avian influenza</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 104px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 104px;">
                        <p>Two events reported to the OIE in 2017. 1) H7N9 in commercial chicken broiler-breeder flock,
                            closed 8/2017. 2) Identification of H5N2 in a wild mallard duck, closed 3/2017.</p>
                    </td>
                </tr>
                <tr style="height: 122px;">
                    <td width="208" valign="top" style="width: 208px; height: 122px;">
                        <p>Low pathogenic avian influenza (poultry) Notifiable H5 and H7</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 122px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 122px;">
                        <p>Identified sporadically in backyard poultry and in live-bird-markets that serve local ethnic
                            communities. Low pathogenicity H5 was detected in a live-bird market and low pathogenicity
                            H5N2 was detected in backyard poultry. No commercial production flock infection was detected
                            from 7/2017-12/2017


                        </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infectious bursal disease (Gumboro disease)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Newcastle disease (Neurotropic and viscerotropic strains)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic detections in wild birds. Domestic poultry are considered free – last detection was
                            in 2003.
                        </p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Pullorum disease (<em>Salmonella pullorum)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Identified sporadically in backyard poultry. No commercial production flock detections since
                            1991, considered absent in them.


                        </p>

                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Turkey rhinotracheitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Type C is detected in poultry sporadically and with limited distribution. &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="bee" id="bee" class=""></a>Bee Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Acarapisosis of honey bees (<em>Acarapis woodi</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic / limited distribution</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>American foulbrood of honey bees (<em>Paenibacillus larvae</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>European foulbrood of honey bees (<em>Melissococcus plutonius</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Small hive beetle infestation (<em>Aethina tumida)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Tropilaelaps infestation of honey bees (<em>Tropilaelaps </em>spp.)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Varroosis of honey bees (<em>Varroa </em>spp.)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="cattle" id="cattle" class=""></a>Cattle Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Bovine anaplasmosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Bovine babesiosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Last occurrence on the U.S. mainland was in 1943. Endemic in territories of Puerto Rico and
                            the U.S. Virgin Islands</p>

                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Bovine genital campylobacteriosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Bovine spongiform encephalopathy</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>OIE-Negligible Risk status</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>One detection&nbsp; <span xml:lang="EN-US">of atypical BSE</span><span xml:lang="EN-US">&nbsp;reported to the OIE in 2018. Atypical BSE is&nbsp;</span><span
                                    xml:lang="EN-US">an uncommon form of the agent not generally associated with an animal
consuming infected feed</span><span xml:lang="EN-US">.</span>
                        </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Bovine tuberculosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic / limited distribution / national eradication program</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Bovine viral diarrhea</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Contagious bovine pleuropneumonia (<em>Mycoplasma mycoides </em>subsp. <em>mycoides </em>SC)
                        </p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>1892</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Enzootic bovine leukosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Haemorrhagic septicaemia (<em>Pasteurella multocida, </em>serotypes B/Asian or E/African)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Absent</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>1969 </p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Infectious bovine rhinotracheitis/ infectious pustular vulvovaginitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Lumpy skin disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Theileriosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Trichomonosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Trypanosomosis (tsetse-transmitted)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="equine" id="equine" class=""></a>Equine Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>African horse sickness</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Contagious equine metritis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>2014</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Dourine</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>1934</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Equine encephalomyelitis (Western)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present?</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>No equine detections reported the last 20 years</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Equine infectious anemia</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic / limited distribution / National Control Program </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Equine influenza</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 104px;">
                    <td width="208" valign="top" style="width: 208px; height: 104px;">
                        <p>Equine piroplasmosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 104px;">
                        <p>&nbsp;Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 104px;">
                        <p>Sporadic / limited distribution.&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Equine herpesvirus-1 (EHV-1)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Equine viral arteritis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Glanders</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>1942</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Venezuelan equine encephalomyelitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>1971</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="lagomorph" id="lagomorph" class=""></a>Lagomorph Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Myxomatosis </p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic / limited distribution in wild rabbits</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Rabbit hemorrhagic disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>RHDV, RHDV2. Outbreaks of RHDV2 have occurred since late 2018 in wild and domestic rabbits


                            <br></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="sheepgoat" id="sheepgoat" class=""></a>Sheep and Goat Diseases</strong>
                        </h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Caprine arthritis/encephalitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Contagious agalactia</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present?</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic/ limited distribution&nbsp; </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Contagious caprine pleuropneumonia</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Enzootic abortion of ewes (ovine chlamydiosis, <em>Chlamydophila abortus</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Maedi-visna</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Nairobi sheep diseases</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Ovine epididymitis (<em>Brucella ovis)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;Sporadic</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Peste des petits ruminants</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Salmonellosis (<em>S. abortus ovis</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic / limited distribution
                        </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Scrapie</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic occurrence. National eradication program.</p>

                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Sheep pox and goat pox</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="swine" id="swine" class=""></a>Swine Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>African swine fever</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Classical swine fever (hog cholera)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>1976</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Nipah virus encephalitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Porcine cysticercosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>2004</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Porcine reproductive and respiratory syndrome</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Transmissible gastroenteritis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="otherlisted" id="otherlisted" class=""></a>Other Listed Diseases</strong>
                        </h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Leishmaniosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present&nbsp; </p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Sporadic occurrence in canines</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Camelpox</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(255, 255, 255);" colspan="3">
                        <h3><strong>Aquatic Animal Diseases</strong><strong> </strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="amphibian" id="amphibian" class=""></a>Amphibian Diseases</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Infection with <em>Batrachochytrium dendrobatidis</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Infection with ranavirus</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="aquaculturecrustaceans" id="aquaculturecrustaceans" class=""></a>Aquaculture
                                Diseases - Crustaceans</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Acute hepatopancreatic necrosis disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;One event reported to th OIE in 2017, resolved 12/2017</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Crayfish plague (<em>Aphanomyces astaci</em>)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Absent</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infectious hypodermal and haematopoietic necrosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Absent</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Infectious myonecrosis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Necrotising hepatopancreatitis</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Taura syndrome</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>4/2007-Domestic</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>White spot disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present? (wild) </p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Suspected but not confirmed in wild populations in limited geographical regions/zones.
                            Domestic populations considered free, last detection was in 2012.</p>

                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>White tail disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Yellowhead disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="aquaculturefish" id="aquaculturefish" class=""></a>Aquaculture Diseases -
                                Fish </strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Epizootic hematopoietic necrosis (EHN)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Infection with <em>Aphanomyces invadans </em>(Epizootic ulcerative syndrome, EUS)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Present (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">
                        <p>Sporadic occurrence / limited distribution in wild populations. Absent in domestic
                            populations, last detection was in 2004.&nbsp; </p>

                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Gyrodactylosis (<em>Gyrodactylus salaries)</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infectious hematopoietic necrosis (IHN)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present (wild) </p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic occurrence / limited distribution in wild populations. Free in domestic populations,
                            last detection was 2015.</p>

                    </td>
                </tr>
                <tr style="height: 86px;">
                    <td width="208" valign="top" style="width: 208px; height: 86px;">
                        <p>Infectious salmon anemia, ISA (HPR-deleted or HPR0)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 86px;">
                        <p>Absent HPR-deleted</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 86px;">

                        <p>Wild: ISAV HPR0 suspected</p>
                        <p>ISAV HPR0 detected through routine surveillance in healthy fish, no detections of ISAV
                            HPR-deleted.


                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Koi herpesvirus disease (KHV)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><br></p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Red sea bream iridoviral disease</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Salmonid alphavirus (SAV)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Spring viremia of carp (SVC)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present? (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Suspected but not confirmed in wild populations in limited geographical regions/zones. Absent
                            in domestic populations, last detection was in 2004.</p>

                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Viral hemorrhagic septicaemia (VHS)</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic / limited distribution in wild populations.&nbsp;Absent in domestic populations,
                            last detection was in 2007.


                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="624" valign="top"
                        style="width: 624px; height: 50px; background-color: rgb(204, 204, 204);" colspan="3">
                        <h3><strong><a name="aquaculturemolluscs" id="aquaculturemolluscs" class=""></a>Aquaculture
                                Diseases - Molluscs</strong></h3>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p><strong>Disease </strong></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p><strong>Status</strong></p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p><strong>Date of Last Occurrence / Notes</strong></p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infection with abalone herpes virus</p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infection with <em>Bonamia exitiosus</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present?</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Identified sporadically in farmed molluscs exposed to open water. There have been no
                            detections in farmed molluscs maintained in closed systems.


                        </p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Infection with <em>Bonamia ostreae</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Present? (wild)</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Suspected but not confirmed in wild populations in limited geographical regions/zones. Free
                            in domestic populations, last detection was in 2006.
                        </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infection with <em>Marteilia refringens</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Never occurred</p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infection with <em>Perkinsus marinus</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic /limited distribution</p>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td width="208" valign="top" style="width: 208px; height: 50px;">
                        <p>Infection with <em>Perkinsus olseni </em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 50px;">
                        <p>Free</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 50px;">
                        <p>Never occurred&nbsp; </p>
                    </td>
                </tr>
                <tr style="height: 68px;">
                    <td width="208" valign="top" style="width: 208px; height: 68px;">
                        <p>Infection with <em>Xenohaliotis californiensis</em></p>
                    </td>
                    <td width="110" valign="top" style="width: 110px; height: 68px;">
                        <p>Present</p>
                    </td>
                    <td width="306" valign="top" style="width: 306px; height: 68px;">
                        <p>Sporadic/ limited distribution</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
<?php } ?>

<!--call footer hook-->
<?php include(SHARED_PATH . '/profile_footer.php'); ?>