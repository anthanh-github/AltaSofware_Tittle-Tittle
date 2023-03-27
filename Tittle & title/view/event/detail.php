<?php require 'view/layout/header.php' ?>
<div class="s-kin">
    <div class="frame">
        <div class="bg">
            <img class="group-icon5" alt="" src="public/group5.svg" />
            <div class="s-kin-1"><?= $product->getTittle() ?></div>
        </div>
        <div class="khung-cha-v">
            <div class="group-container-detail">
                <div class="frame-parent-detail1">
                    <div class="rectangle-wrapper">
                        <img class="frame-child" alt="" src="upload/<?= $product->getImage() ?>" />
                    </div>
                    <div class="time-parent">
                        <div class="time">
                            <img class="icons-calendar" alt="" src="public/icons--calendar.svg" />
                            <div class="date-event"><?= $product->getEventFromDate() ?> -
                                <?= $product->getEventToDate() ?></div>
                        </div>
                        <div class="m-sen-park"><?= $product->getName() ?></div>
                        <b class="price"><?= $product->getPrice() ?>VNĐ</b>
                    </div>
                </div>
                <div class="frame-parent2">
                    <div class="rectangle-container">
                        <img class="frame-item" alt="" src="upload/<?= $product->getImage() ?>" />
                    </div>
                    <div class="lorem-ipsum-is">
                        <?= $product->getDescription3() ?>
                    </div>
                </div>
                <div class="frame-parent3">
                    <div class="rectangle-frame">
                        <img class="frame-item1" alt="" src="upload/<?= $product->getImage() ?>" />
                    </div>
                    <div class="lorem-ipsum-is1">
                        <?= $product->getDescription2() ?>
                    </div>
                </div>
                <div class="lorem-ipsum-is-container">
                    <span class="description1"><span class="is-simply-dummy">
                            <?= $product->getDescription1() ?>
                        </span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="group-div">
            <div class="tags-parent">
                <div class="tags-parent">
                    <div class="tags1 ">
                        <a href="./" class="sample-text">Trang Chủ</a>
                    </div>
                    <div class="tags1">
                        <a href="./?c=event" class="sample-text ">Sự Kiện</a>
                    </div>
                    <div class="tags1">
                        <a href="./?c=contact&a=form" class="sample-text">Liên Hệ</a>
                    </div>
                </div>
            </div>
            <div class="group-group">
                <b class="sample-text">0123456789</b>
            </div>
        </div>
        <img class="little-little-logo-ngang-1" alt="" src="upload/logo.png" />
    </div>
</div>
