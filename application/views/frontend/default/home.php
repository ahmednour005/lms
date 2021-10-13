<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*------------------------------------------------------------------
    Our Team
-------------------------------------------------------------------*/

        .our-team {
            text-align: center;
        }

        .our-team .pic {
            border-top: none;
            border-bottom: 5px solid #28a9e2;
            border-radius: 50% 50% 0 50%;
            overflow: hidden;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .pic {
            border-bottom-color: #1c142b;
            border-radius: 0 50%;
        }

        .our-team .pic img {
            width: 100%;
            height: auto;
            transition: all 0.5s ease 0s;
        }

        .our-team .team-content {
            padding: 20px 0;
        }

        .our-team .title {
            font-size: 22px;
            font-weight: 700;
            color: #28a9e2;
            text-transform: uppercase;
            margin: 0 0 5px 0;
        }

        .our-team .post {
            display: block;
            font-size: 17px;
            color: #878484;
            text-transform: capitalize;
            margin-bottom: 10px;
        }

        .our-team .social {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .our-team .social li {
            display: inline-block;
        }

        .our-team .social li a {
            display: block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            border: 1px solid #28a9e2;
            background: #fff;
            font-size: 17px;
            color: #28a9e2;
            text-align: center;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .social li a {
            background: #1c142b;
            color: #fff;
        }

        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 30px;
            }
        }

        .sections .course-box .course-details {
            text-align: center;
        }

        .sections .course-box,
        .sections .course-box::before {
            border-radius: 10px;
        }



        /*-=-=-=-=-=-=-=-=-=-=-=- */
        /* Column Grids */
        /*-=-=-=-=-=-=-=-=-=-=-=- */

        .col_half {
            width: 49%;
        }

        .col_third {
            width: 32%;
        }

        .col_fourth {
            width: 23.5%;
        }

        .col_fifth {
            width: 18.4%;
        }

        .col_sixth {
            width: 15%;
        }

        .col_three_fourth {
            width: 74.5%;
        }

        .col_twothird {
            width: 66%;
        }

        .col_half,
        .col_third,
        .col_twothird,
        .col_fourth,
        .col_three_fourth,
        .col_fifth {
            position: relative;
            display: inline;
            display: inline-block;
            float: left;
            margin-right: 2%;
            margin-bottom: 20px;
        }

        .end {
            margin-right: 0 !important;
        }

        /* Column Grids End */

        .wrapper {
            width: 980px;
            margin: 30px auto;
            position: relative;
        }

        .counter {
            background-color: #ffffff;
            padding: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(0 0 0 / 50%);
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 15px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #ed177a;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <section class="home-banner-area" style="background-image: url('<?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <div class="home-banner-wrap">
                        <h2><?php echo get_frontend_settings('banner_title'); ?></h2>
                        <p><?php echo get_frontend_settings('banner_sub_title'); ?></p>
                        <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="query" placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src=" <?php echo base_url('uploads/Animated.gif'); ?>" style="margin: -60px;" width="450px" height="500px" />" alt="">
            </div>
        </div>

    </section>
    <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
                <?php $courses = $this->crud_model->get_courses(); ?>
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                            <h4><?php
                                $status_wise_courses = $this->crud_model->get_status_wise_courses();
                                $number_of_courses = $status_wise_courses['active']->num_rows();
                                echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h4>
                            <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fa fa-check float-left"></i>
                        <div class="text-box">
                            <h4><?php echo site_phrase('expert_instruction'); ?></h4>
                            <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fa fa-clock float-left"></i>
                        <div class="text-box">
                            <h4><?php echo site_phrase('lifetime_access'); ?></h4>
                            <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title"><?php echo site_phrase('top_courses'); ?></h2>

                    <!-- Animated page loader -->
                    <?php include "animated-page-loader.php"; ?>

                    <div class="course-carousel shown-after-loading" style="display: none;">
                        <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
                        $cart_items = $this->session->userdata('cart_items');
                        foreach ($top_courses as $top_course) : ?>
                            <div class="course-box-wrap">
                                <a href="<?php echo site_url('home/courseform/'); ?>" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title"><?php echo $top_course['title']; ?></h5>
                                            <p class="instructors"><?php echo $top_course['short_description']; ?></p>
                                            <div class="rating">
                                                <?php
                                                $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                                $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                                                if ($number_of_ratings > 0) {
                                                    $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                                } else {
                                                    $average_ceil_rating = 0;
                                                }

                                                for ($i = 1; $i < 6; $i++) : ?>
                                                    <?php if ($i <= $average_ceil_rating) : ?>
                                                        <i class="fas fa-star filled"></i>
                                                    <?php else : ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                            </div>
                                            <?php if ($top_course['is_free_course'] == 1) : ?>
                                                <p class="price text-right"><?php echo site_phrase('free'); ?></p>
                                            <?php else : ?>
                                                <?php if ($top_course['discount_flag'] == 1) : ?>
                                                    <p class="price text-right"><small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?></p>
                                                <?php else : ?>
                                                    <p class="price text-right"><?php echo currency($top_course['price']); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                        <?php if ($top_course['last_modified'] == "") : ?>
                                            <div class="last-updated"><?php echo site_phrase('last_updater') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?></div>
                                        <?php else : ?>
                                            <div class="last-updated"><?php echo site_phrase('last_updater') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?></div>
                                        <?php endif; ?>

                                        <div class="course-title">
                                            <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                                        </div>
                                        <div class="course-meta">
                                            <?php if ($top_course['course_type'] == 'general') : ?>
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                                </span>
                                                <span class=""><i class="far fa-clock"></i>
                                                    <?php
                                                    $total_duration = 0;
                                                    $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();
                                                    foreach ($lessons as $lesson) {
                                                        if ($lesson['lesson_type'] != "other") {
                                                            $time_array = explode(':', $lesson['duration']);
                                                            $hour_to_seconds = $time_array[0] * 60 * 60;
                                                            $minute_to_seconds = $time_array[1] * 60;
                                                            $seconds = $time_array[2];
                                                            $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                        }
                                                    }
                                                    echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                    ?>
                                                </span>
                                            <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                                <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                            <?php endif; ?>
                                            <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                                        </div>
                                        <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                                        <div class="what-will-learn">
                                            <ul>
                                                <?php
                                                $outcomes = json_decode($top_course['outcomes']);
                                                foreach ($outcomes as $outcome) : ?>
                                                    <li><?php echo $outcome; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                            <?php if (is_purchased($top_course['id'])) : ?>
                                                <div class="purchased">
                                                    <a href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                                </div>
                                            <?php else : ?>
                                                <?php if ($top_course['is_free_course'] == 1) :
                                                    if ($this->session->userdata('user_login') != 1) {
                                                        $url = "#";
                                                    } else {
                                                        $url = site_url('home/get_enrolled_to_free_course/' . $top_course['id']);
                                                    } ?>
                                                    <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button" onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                                <?php else : ?>
                                                    <button type="button" class="btn add-to-cart-btn <?php if (in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id']; ?>" id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                                        <?php
                                                        if (in_array($top_course['id'], $cart_items))
                                                            echo site_phrase('added_to_cart');
                                                        else
                                                            echo site_phrase('add_to_cart');
                                                        ?>
                                                    </button>
                                                <?php endif; ?>
                                                <button type="button" class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>" title="Add to wishlist" onclick="handleWishList(this)" id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title"><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></h2>

                    <!-- Animated page loader -->
                    <?php include "animated-page-loader.php"; ?>

                    <div class="course-carousel shown-after-loading" style="display: none;">
                        <?php
                        $latest_courses = $this->crud_model->get_latest_10_course();
                        foreach ($latest_courses as $latest_course) : ?>
                            <div class="course-box-wrap">
                                <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>">
                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title"><?php echo $latest_course['title']; ?></h5>
                                            <p class="instructors">
                                                <?php
                                                $instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
                                                echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?>
                                            </p>
                                            <div class="rating">
                                                <?php
                                                $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                                $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                                if ($number_of_ratings > 0) {
                                                    $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                                } else {
                                                    $average_ceil_rating = 0;
                                                }

                                                for ($i = 1; $i < 6; $i++) : ?>
                                                    <?php if ($i <= $average_ceil_rating) : ?>
                                                        <i class="fas fa-star filled"></i>
                                                    <?php else : ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                            </div>
                                            <?php if ($latest_course['is_free_course'] == 1) : ?>
                                                <p class="price text-right"><?php echo site_phrase('free'); ?></p>
                                            <?php else : ?>
                                                <?php if ($latest_course['discount_flag'] == 1) : ?>
                                                    <p class="price text-right"><small><?php echo currency($latest_course['price']); ?></small><?php echo currency($latest_course['discounted_price']); ?></p>
                                                <?php else : ?>
                                                    <p class="price text-right"><?php echo currency($latest_course['price']); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg sections">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">القطاعات </h2>

                    <!-- Animated page loader -->
                    <?php include "animated-page-loader.php"; ?>

                    <div class="course-carousel shown-after-loading" style="display: none;">

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/depart1/') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-search"></i>

                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع البحث العلمي'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/depart2/') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo ' قطاع التحليل الاحصائي'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الحاسب الالي والبرمجة'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع اللغات '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الصحة والبيئة'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الصحافة والاعلام '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التدقيق والمراجعة'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الفن والابداع'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع دعم التفوق العلمي'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التأهيل النفسي والدعم الاسري '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع اعداد اخصائي محترف'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ريادة الاعمال '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع المهارات الشخصية وتطوير الذات '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التسويق والمبيعات '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الموارد البشرية والتدريب المنتهي بالتوظيف '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة الأمن والسلامة المهنية'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة المنشأت الصناعية '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة المنشأت التجارية '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة المنشأت الخدمية '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التأهيل لسوق العمل '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الابتكاروالتحول الرقمي '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الحوكمة وادارة المخاطر'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع مهارات التواصل والكتابة '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع استمرارية الاعمال وادارة الازمات '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة العقود '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الجودة والانتاجية'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة المشتريات وسلاسل التوريد '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع البورصة '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع المحاسبة والمالية '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع الاقتصاد '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع العلاقات العامة والسكرتارية'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع القيادة والادارة الاستراتيجية'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التربية الخاصة '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع السياحة '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع القانون والقضاء '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع البنوك والتأمين والخدمات المالية'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع ادارة المؤتمرات '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'قطاع التسويق'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg sections">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">المركز الاعلامى</h2>

                    <!-- Animated page loader -->
                    <?php include "animated-page-loader.php"; ?>

                    <div class="course-carousel shown-after-loading" style="display: none;">

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/depart1/') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-search"></i>

                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'المدونة '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('/home/courses') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo ' الأخبار'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/courses/') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'الدورات القائمة'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/existCources/') ?>">
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'الدورات المخطط لها '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'الفعاليات'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'المعرض '; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'إراء العملاء'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="course-box-wrap">
                            <a>
                                <div class="course-box pt-3 ">
                                    <div class="section-icon">
                                        <i class="fas fa-angle-left"></i>
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo 'الجمهور'; ?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="display: grid; background:#fff; padding:15px 0 0;">

        <div class="wrapper">
            <div class="counter col_fourth">
                <i class="fa fa-chalkboard-teacher fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="120" data-speed="1500"></h2>
                <p class="count-text ">Coursces</p>
            </div>

            <div class="counter col_fourth">
                <i class="fa fa-users fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                <p class="count-text ">Learner</p>
            </div>

            <div class="counter col_fourth">
                <i class="fa fa-user-tie fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                <p class="count-text ">Teacher</p>
            </div>

            <div class="counter col_fourth end">
                <i class="fa fa-building fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="2009" data-speed="1500"></h2>
                <p class="count-text ">Date of Establishment</p>
            </div>
        </div>
    </section>

    <div id="team" class="section wb pt-4">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h3> Our team</h3>
                <hr>
                <!-- <p>نخبه من افصل المحاضرين في الشرق الاوسط</p> -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo base_url('uploads/te1.jpeg'); ?>">
                        </div>
                        <div class="team-content">
                            <h3 class="title">دكتور محمد شكري</h3>
                            <span class="post">position Title</span>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google-plus"></a></li>
                                <li><a href="#" class="fab fa-skype"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo base_url('uploads/te2.jpeg'); ?>">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Miranda joy</h3>
                            <span class="post">position Title</span>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google-plus"></a></li>
                                <li><a href="#" class="fab fa-skype"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo base_url('uploads/te2.jpeg'); ?>">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">position Title</span>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google-plus"></a></li>
                                <li><a href="#" class="fab fa-skype"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo base_url('uploads/te2.jpeg'); ?>">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">position Title</span>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google-plus"></a></li>
                                <li><a href="#" class="fab fa-skype"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function handleWishList(elem) {

            $.ajax({
                url: '<?php echo site_url('home/handleWishList'); ?>',
                type: 'POST',
                data: {
                    course_id: elem.id
                },
                success: function(response) {
                    if (!response) {
                        window.location.replace("<?php echo site_url('login'); ?>");
                    } else {
                        if ($(elem).hasClass('active')) {
                            $(elem).removeClass('active')
                        } else {
                            $(elem).addClass('active')
                        }
                        $('#wishlist_items').html(response);
                    }
                }
            });
        }

        function handleCartItems(elem) {
            url1 = '<?php echo site_url('home/handleCartItems'); ?>';
            url2 = '<?php echo site_url('home/refreshWishList'); ?>';
            $.ajax({
                url: url1,
                type: 'POST',
                data: {
                    course_id: elem.id
                },
                success: function(response) {
                    $('#cart_items').html(response);
                    if ($(elem).hasClass('addedToCart')) {
                        $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                        $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
                    } else {
                        $('.big-cart-button-' + elem.id).addClass('addedToCart')
                        $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
                    }
                    $.ajax({
                        url: url2,
                        type: 'POST',
                        success: function(response) {
                            $('#wishlist_items').html(response);
                        }
                    });
                }
            });
        }

        function handleEnrolledButton() {
            $.ajax({
                url: '<?php echo site_url('home/isLoggedIn'); ?>',
                success: function(response) {
                    if (!response) {
                        window.location.replace("<?php echo site_url('login'); ?>");
                    }
                }
            });
        }

        $(document).ready(function() {
            if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                if ($(window).width() >= 840) {
                    $('a.has-popover').webuiPopover({
                        trigger: 'hover',
                        animation: 'pop',
                        placement: 'horizontal',
                        delay: {
                            show: 500,
                            hide: null
                        },
                        width: 330
                    });
                } else {
                    $('a.has-popover').webuiPopover({
                        trigger: 'hover',
                        animation: 'pop',
                        placement: 'vertical',
                        delay: {
                            show: 100,
                            hide: null
                        },
                        width: 335
                    });
                }
            }
        });

        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals);
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>