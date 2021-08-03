<!--don't change this path to dynamicly genarate!!!!!-->
<?php require_once('../../private/initialize.php'); ?>

<!--call header hook-->
<?php include(SHARED_PATH . '/profile_header.php'); ?>
<?php
$id = $_GET['id'];
$headlines = get_top_headlines();
?>

<div class="content">
    <section id="landing_img">
        <div id="header_bg_img"
             style="background-image: url('<?php echo url_for('/images/member_landing.jpg'); ?>')">
        </div>
        <div id="headline" class="valign">
            <div class="innertext">
                <ul id="news_list">
                    <?php while ($head = mysqli_fetch_assoc($headlines)) { ?>
                        <li class="news_item">
                            <h1><?php echo $head['head_body'] ?></h1>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <section id="basic_dash">
        <div class="sec_top container-fluid">
            <section class="left">
                <div class="dash_text">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.</p>
                </div>
            </section>
            <section class="right">
                <div id="farmer-account" style="width: 100%; height: 500px"></div>
                <script>
                    <?php
                    $data = get_data('agg_account');
                    $year = array();
                    $income = array();
                    $per_awu = array();

                    while ($x = mysqli_fetch_assoc($data)) {
                        array_push($year, $x['year']);
                        array_push($income, $x['total_income']);
                        array_push($per_awu, $x['per_AWU']);
                    }
                    ?>
                    let year = <?php echo json_encode($year);?>;
                    let income = <?php echo json_encode($income);?>;
                    let income_per_awu = <?php echo json_encode($per_awu);?>;
                    year = year.map(Number);
                    income = income.map(Number)
                    income_per_awu = income_per_awu.map(Number)

                    TESTER = document.getElementById('farmer-account');
                    Plotly.newPlot(TESTER, [
                        {
                            x: year,
                            y: income,
                            fill: 'tozeroy',
                            line: {
                                color: '#1E6638'
                            },
                            stackgroup: 'one',
                            name: 'total income'
                        },
                        {
                            x: year,
                            y: income_per_awu,
                            fill: 'tonexty',
                            line: {
                                color: '#F4A405'
                            },
                            stackgroup: 'one',
                            name: 'incomr per AWU'
                        }
                    ], {
                        xaxis: {
                            tickfont: {color: '#fff'},
                            showgrid: false,
                            zeroline: false
                        },
                        yaxis: {
                            tickfont: {color: '#fff'},
                            showgrid: false
                        },
                        showlegend: true,
                        legend: {
                            orientation: "h",
                            font: {color: "#fff"}
                        },
                        plot_bgcolor: "#000",
                        paper_bgcolor: "#000",
                        margin: {t: 0, b: 25, l: 40, r: 25}
                    });
                </script>
            </section>
        </div>
        <div class="sec_bottom container-fluid">
            <section class="left">
                <div id="farmer-change" style="width: 100%; height: 460px; margin-top: 24px"></div>
                <script>
                    <?php
                    $data = get_data('agg_change');
                    $country = array();
                    $change_by = array();


                    while ($x = mysqli_fetch_assoc($data)) {
                        array_push($country, $x['country']);
                        array_push($change_by, $x['change_by']);
                    }
                    ?>
                    let country = <?php echo json_encode($country);?>;
                    let change_by = <?php echo json_encode($change_by);?>;
                    change_by = change_by.map(Number);

                    CHANGE = document.getElementById('farmer-change');
                    Plotly.newPlot(CHANGE, [
                            {
                                x: country,
                                y: change_by,
                                type: 'bar',
                                marker: {
                                    color: '#D7F205'
                                }
                            }
                        ],
                        {
                            title: 'Change in income from agriculture activity across the EU',
                            font: {
                                color: '#fff'
                            },
                            xaxis: {
                                tickfont: {color: '#fff'},
                                showgrid: false,
                                zeroline: false
                            },
                            yaxis: {
                                tickfont: {color: '#fff'},
                                showgrid: false
                            },
                            showlegend: false,
                            plot_bgcolor: "#000",
                            paper_bgcolor: "#000",
                            margin: {t: 30, b: 100, l: 40, r: 25}
                        });
                </script>
            </section>
            <section class="right">
                <div id="farmer-compare" style="width: 95%; height: 470px;
                margin-top: 30px; margin-left: auto; margin-right: auto;"></div>
                <script>
                    COMPARE = document.getElementById('farmer-compare');
                    Plotly.newPlot(COMPARE, [{
                        x: income,
                        y: income_per_awu,
                        mode: 'markers',
                        type: 'scatter',
                        marker: {
                            color: '#52BF04',
                            size: 12,
                            line: {
                                color: '#fff',
                                width: 1
                            }
                        }
                    }], {
                        title: 'Total income VS. income per AWU',
                        font: {
                            color: '#fff'
                        },
                        xaxis: {
                            title: 'Total income',
                            tickfont: {color: '#fff'},
                            showgrid: false,
                            zeroline: false
                        },
                        yaxis: {
                            title: 'Income per AWU',
                            tickfont: {color: '#fff'},
                            showgrid: false
                        },
                        showlegend: false,
                        plot_bgcolor: "#000",
                        paper_bgcolor: "#000",
                        margin: {t: 30, b: 100, l: 40, r: 25}
                    });
                </script>
            </section>
        </div>
    </section>
    <section id="brands">
        <div class="brand_wrapper container-fluid">
            <ul class="brand_list">
                <li style="background-image: url('<?php echo url_for('/images/logos/rcg.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
                <li style="background-image: url('<?php echo url_for('/images/logos/aifco.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
                <li style="background-image: url('<?php echo url_for('/images/logos/baharkafood.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
                <li style="background-image: url('<?php echo url_for('/images/logos/farmnextdoor.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
                <li style="background-image: url('<?php echo url_for('/images/logos/mora.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
                <li style="background-image: url('<?php echo url_for('/images/logos/primiumhoneybee.jpg'); ?>');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: contain;"><a class="valign" href="#"></a></li>
            </ul>
        </div>
    </section>
    <section class="basic_report">
        <div class="container-fluid">
            <section class="sec_top">
                <div class="left" style="border-right: 1px solid #000000;border-bottom: 1px solid #000000">
                    <div id="test_0" style="margin-top: 24px;"></div>
                    <script>
                        <?php
                        $data = get_data('land_use');
                        $year = array();
                        $grass = array();
                        $crop = array();
                        $aside = array();
                        $uncrop = array();

                        while ($x = mysqli_fetch_assoc($data)) {
                            array_push($year, $x['year']);
                            array_push($grass, $x['grassland']);
                            array_push($crop, $x['crops']);
                            array_push($aside, $x['set_aside']);
                            array_push($uncrop, $x['uncropped']);
                        }
                        ?>
                        year = <?php echo json_encode($year);?>;
                        let grass = <?php echo json_encode($grass);?>;
                        let crop = <?php echo json_encode($crop);?>;
                        let aside = <?php echo json_encode($aside);?>;
                        let uncrop = <?php echo json_encode($uncrop);?>;

                        year = year.map(Number);
                        grass = grass.map(Number)
                        crop = crop.map(Number)
                        aside = aside.map(Number)
                        uncrop = uncrop.map(Number)

                        TESTER = document.getElementById('test_0');
                        Plotly.newPlot(TESTER, [
                            {
                                x: year,
                                y: grass,
                                line: {
                                    color: '#1E6638'
                                },
                                name: 'grass lands'
                            },
                            {
                                x: year,
                                y: crop,
                                line: {
                                    color: '#1E6638'
                                },
                                name: 'cropped lands'
                            },
                            {
                                x: year,
                                y: aside,
                                line: {
                                    color: '#F4A405'
                                },
                                name: 'aside lands'
                            },
                            {
                                x: year,
                                y: uncrop,
                                line: {
                                    color: '#F4A405'
                                },
                                name: 'ungrouped lands'
                            }
                        ], {
                            xaxis: {
                                tickfont: {color: '#000'},
                                showgrid: false,
                                zeroline: false
                            },
                            yaxis: {
                                tickfont: {color: '#000'},
                                showgrid: false
                            },
                            showlegend: true,
                            legend: {
                                orientation: "h",
                                font: {color: "#000"}
                            },
                            plot_bgcolor: "#fff",
                            paper_bgcolor: "#fff",
                            margin: {t: 0, b: 25, l: 40, r: 25}
                        });
                    </script>
                </div>
                <div class="right">
                    <div id="test_1" style="margin-top: 24px;"></div>
                    <script>
                        <?php
                        $data = get_data('fertiliser_applied');
                        $year = array();
                        $cln = array();
                        $gln = array();
                        $clp = array();
                        $glp = array();

                        while ($x = mysqli_fetch_assoc($data)) {
                            array_push($year, $x['year']);
                            array_push($cln, $x['Cropped_land_nitrogen']);
                            array_push($gln, $x['Grassland_nitrogen']);
                            array_push($clp, $x['Cropped_land_phosphate']);
                            array_push($glp, $x['Grassland_phosphate']);
                        }
                        ?>
                        year = <?php echo json_encode($year);?>;
                        let cln = <?php echo json_encode($cln);?>;
                        let gln = <?php echo json_encode($gln);?>;
                        let clp = <?php echo json_encode($clp);?>;
                        let glp = <?php echo json_encode($glp);?>;

                        year = year.map(Number);
                        cln = cln.map(Number);
                        gln = gln.map(Number);
                        clp = clp.map(Number);
                        glp = glp.map(Number);

                        TESTER = document.getElementById('test_1');
                        Plotly.newPlot(TESTER, [
                            {
                                x: year,
                                y: cln,
                                line: {
                                    color: '#1E6638'
                                },
                                name: 'Cropped land nitrogen'
                            },
                            {
                                x: year,
                                y: gln,
                                line: {
                                    color: '#1E6638'
                                },
                                name: 'Grass land nitrogen'
                            },
                            {
                                x: year,
                                y: clp,
                                line: {
                                    color: '#F4A405'
                                },
                                name: 'Cropped land phosphate'
                            },
                            {
                                x: year,
                                y: glp,
                                line: {
                                    color: '#F4A405'
                                },
                                name: 'Grass land phosphate'
                            }
                        ], {
                            xaxis: {
                                tickfont: {color: '#000'},
                                showgrid: false,
                                zeroline: false
                            },
                            yaxis: {
                                tickfont: {color: '#000'},
                                showgrid: false
                            },
                            showlegend: true,
                            legend: {
                                orientation: "h",
                                font: {color: "#000"}
                            },
                            plot_bgcolor: "#fff",
                            paper_bgcolor: "#fff",
                            margin: {t: 0, b: 25, l: 40, r: 25}
                        });
                    </script>
                </div>
            </section>
            <section class="sec_bottom">
                <div class="left">
                    <div id="test_2" style="margin-top: 24px;"></div>
                    <script>
                        <?php
                        $data = get_data('water_usage');
                        $year = array();
                        $spray = array();
                        $other = array();


                        while ($x = mysqli_fetch_assoc($data)) {
                            array_push($year, $x['year']);
                            array_push($spray, $x['Spray_irrigation']);
                            array_push($other, $x['Other_Agriculture']);
                        }
                        ?>
                        year = <?php echo json_encode($year); ?>;
                        let spray = <?php echo json_encode($spray);?>;
                        let other = <?php echo json_encode($other);?>;

                        year = year.map(Number);
                        spray = spray.map(Number);
                        other = other.map(Number);

                        CHANGE = document.getElementById('test_2');
                        Plotly.newPlot(CHANGE, [
                                {
                                    x: year,
                                    y: spray,
                                    type: 'bar',
                                    marker: {
                                        color: '#F4A405'
                                    }
                                },
                                {
                                    x: year,
                                    y: other,
                                    type: 'bar',
                                    marker: {
                                        color: '#1E6638'
                                    }
                                }
                            ],
                            {
                                title: 'Water usage in every year 2000-2017',
                                font: {
                                    color: '#000'
                                },
                                xaxis: {
                                    tickfont: {color: '#000'},
                                    showgrid: false,
                                    zeroline: false
                                },
                                yaxis: {
                                    tickfont: {color: '#000'},
                                    showgrid: false
                                },
                                showlegend: false,
                                plot_bgcolor: "#fff",
                                paper_bgcolor: "#fff",
                                margin: {t: 30, b: 100, l: 40, r: 25}
                            });
                    </script>
                </div>
                <div class="right"
                     style="border-left: 1px solid #000000;border-top: 1px solid #000000;margin: -1px 0px 0px -1px;">
                    <div id="test_3" style="margin-top: 24px;"></div>
                    <script>
                        <?php
                        $data = get_data('livestock_production');
                        $year = array();
                        $prod = array();
                        $value = array();


                        while ($x = mysqli_fetch_assoc($data)) {
                            array_push($year, $x['year']);
                            array_push($prod, $x['total_production']);
                            array_push($value, $x['total_vaue']);
                        }
                        ?>
                        year = <?php echo json_encode($year); ?>;
                        let prod = <?php echo json_encode($prod);?>;
                        let value = <?php echo json_encode($value);?>;

                        year = year.map(Number);
                        prod = prod.map(Number);
                        value = value.map(Number);

                        CHANGE = document.getElementById('test_3');
                        Plotly.newPlot(CHANGE, [
                                {
                                    x: year,
                                    y: prod,
                                    type: 'bar',
                                    marker: {
                                        color: '#F4A405'
                                    }
                                },
                                {
                                    x: year,
                                    y: value,
                                    type: 'bar',
                                    marker: {
                                        color: '#1E6638'
                                    }
                                }
                            ],
                            {
                                title: 'Livestock production and Value',
                                font: {
                                    color: '#000'
                                },
                                xaxis: {
                                    tickfont: {color: '#000'},
                                    showgrid: false,
                                    zeroline: false
                                },
                                yaxis: {
                                    tickfont: {color: '#000'},
                                    showgrid: false
                                },
                                showlegend: false,
                                plot_bgcolor: "#fff",
                                paper_bgcolor: "#fff",
                                margin: {t: 30, b: 100, l: 40, r: 25}
                            });
                    </script>
                </div>
            </section>
        </div>
    </section>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/profile_footer.php'); ?>