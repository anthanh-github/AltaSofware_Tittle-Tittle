<?php require 'view/layout/header.php' ?>
<div class="home">
    <div class="frame">
        <div class="background">
            <div class="su-kien-noi-bat">Sự kiện nổi bật</div>
            <div class="su-kien-1 mySlides ">
                <?php foreach ($products as $product) : ?>
                <div class="su-kien">
                    <img class="su-kien-1-child" alt="" src="upload/<?= $product->getImage() ?>" />
                    <div class="group-parent">
                        <div class="frame-wrapper">
                            <div class="frame-parent">
                                <div class="su-kien-1-parent">
                                    <b class="tittle-event"><?= $product->getTittle() ?></b>
                                    <div class="name-event"><?= $product->getName() ?></div>
                                </div>
                                <div class="time-event">
                                    <img class="icons-calendars" alt="" src="upload/icons--calendar.svg" />
                                    <div class="div35"><?= $product->getEventFromDate() ?>
                                        <?= $product->getEventToDate() ?></div>
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
