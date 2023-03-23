<?php require 'view/layout/header.php' ?>
<div class="home">
    <div class="frame">
        <div class="background">
            <div class="su-kien-noi-bat">Sự kiện nổi bật</div>
            <div class="su-kien-1 mySlides ">
                <?php foreach ($featuredProducts as $product) : ?>
                <div class="su-kien">
                    <img class="su-kien-1-child" alt="" src="upload/<?= $product->getFeaturedImage() ?>" />
                    <div class="group-parent">
                        <div class="frame-wrapper">
                            <div class="frame-parent">
                                <div class="su-kien-1-parent">
                                    <b class="tittle-event"><?= $product->getName() ?></b>
                                    <div class="name-event"><?= $product->getSku() ?></div>
                                </div>
                                <div class="time-event">
                                    <img class="icons-calendars" alt="" src="upload/icons--calendar.svg" />
                                    <div class="div35"><?= $product->getDiscountFromDate() ?>
                                        <?= $product->getDiscountToDate() ?></div>
                                </div>
                            </div>
                        </div>
                        <b class="vn"><?= $product->getPrice() ?></b>
                        <div class="btn-xem-chi-tit" href="detail.html">
                            <a href="?c=event&a=detail&id=<?= $product->getId() ?>" class="xem-chi-tit">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <br>
                <?php endforeach ?>
            </div>

            <!-- <div class="su-kien-2 mySlides">
                <div class="su-kien-13">
                    <div class="su-kien">
                        <img class="su-kien-1-child" alt="" src="upload/rectangle-1@2x.png" />
                        <div class="group-parent">
                            <div class="frame-wrapper">
                                <div class="frame-parent">
                                    <div class="su-kien-1-parent">
                                        <b class="tittle-event">Sự kiện 1</b>
                                        <div class="name-event">Đầm sen Park</div>
                                    </div>
                                    <div class="time-event">
                                        <img class="icons-calendars" alt="" src="upload/icons--calendar.svg" />
                                        <div class="div35">30/05/2021 - 01/06/2021</div>
                                    </div>
                                </div>
                            </div>
                            <b class="vn">25.000 VNĐ</b>
                            <div class="btn-xem-chi-tit" href="detail.html">
                                <a href="detail.html" class="xem-chi-tit">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="su-kien-3 mySlides">
                <div class="su-kien">
                    <img class="su-kien-1-child" alt="" src="upload/rectangle-12@2x.png" />
                    <div class="group-parent">
                        <div class="frame-wrapper">
                            <div class="frame-parent">
                                <div class="su-kien-1-parent">
                                    <b class="tittle-event">Sự kiện 3</b>
                                    <div class="name-event">Đầm sen Park</div>
                                </div>
                                <div class="time-event">
                                    <img class="icons-calendars" alt="" src="upload/icons--calendar.svg" />
                                    <div class="div35">30/05/2021 - 01/06/2021</div>
                                </div>
                            </div>
                        </div>
                        <b class="vn">50.000 VNĐ</b>
                        <div class="btn-xem-chi-tit" href="detail.html">
                            <a href="detail.html" class="xem-chi-tit">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="su-kien-4 mySlides">
                <div class="su-kien">
                    <img class="su-kien-1-child" alt="" src="upload/rectangle-13@2x.png" />
                    <div class="group-parent">
                        <div class="frame-wrapper">
                            <div class="frame-parent">
                                <div class="su-kien-1-parent">
                                    <b class="tittle-event">Sự kiện 4</b>
                                    <div class="name-event">Đầm sen Park</div>
                                </div>
                                <div class="time-event">
                                    <img class="icons-calendars" alt="" src="upload/icons--calendar.svg" />
                                    <div class="div35">30/05/2021 - 01/06/2021</div>
                                </div>
                            </div>
                        </div>
                        <b class="vn">55.000 VNĐ</b>
                        <div class="btn-xem-chi-tit" href="detail.html">
                            <a href="detail.html" class="xem-chi-tit">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <img class="previous-btn-icon" alt="" src="upload/previous-btn.svg" /><img class="next-btn-icon" alt=""
                src="upload/next-btn.svg" />
        </div>
        <!--         <img class="frame-icon1" alt="" src="upload/frame1.svg" />
        <img
          class="frame-icon2"
          alt=""
          src="upload/frame2.svg"
        /> -->
        <div class="render-1"></div>
    </div>
    <div class="navigation">
        <div class="group-div">
            <div class="tags-parent">
                <div class="tags1 ">
                    <a href="./" class="sample-text active">Trang Chủ</a>
                </div>
                <div class="tags1">
                    <a href="./?c=event" class="sample-text ">Sự Kiện</a>
                </div>
                <div class="tags1">
                    <a href="./?c=contact&a=form" class="sample-text">Liên Hệ</a>
                </div>
            </div>
            <div class="group-group">
                <b class="sample-text">0123456789</b>
            </div>
        </div>
        <img class="little-little-logo-ngang-1" alt="" src="upload/logo.png" />
    </div>
</div>
