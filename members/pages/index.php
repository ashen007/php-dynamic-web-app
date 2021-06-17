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
        <div class="sec_top container">
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
        <div class="sec_bottom container">
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
        <div class="brand_wrapper container">
            <ul class="brand_list">
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
                <li><a class="valign" href="#">logo</a></li>
            </ul>
        </div>
    </section>
    <section class="basic_report">
        <div class="container">
            <section class="sec_top">
                <div class="left" style="border-right: 1px solid #000000;border-bottom: 1px solid #000000"></div>
                <div class="right"></div>
            </section>
            <section class="sec_bottom">
                <div class="left"></div>
                <div class="right"
                     style="border-left: 1px solid #000000;border-top: 1px solid #000000;margin: -1px 0px 0px -1px;"></div>
            </section>
        </div>
    </section>
    <section class="more">
        <div class="container">
            <section class="sec_top">
                <div class="left"></div>
                <div class="right" style="border-bottom: 1px solid #ffffff;"></div>
            </section>
            <section class="sec_mid">
                <div class="left"></div>
                <div class="right"></div>
            </section>
            <section class="sec_bottom">
                <div class="left"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
    <section class="news_events">
        <div class="container">
            <section class="sec_top">
                <div class="left"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
    <section class="forms">
        <div class="container">
            <section class="sec_top">
                <div class="left" style="border-bottom: none"></div>
                <div class="right"></div>
            </section>
        </div>
    </section>
</div>

<!--call footer hook-->
<?php include(SHARED_PATH . '/profile_footer.php'); ?>