<?php require 'view/layout/header.php' ?>
<div class="thanh-ton">
    <div class="frame">
        <div class="bg">
            <div class="thanh-ton2">Thanh toán</div>
            <div class="check-ticket">
                <div class="s-tin-thanh-ton">
                    <b class="s-tin-thanh">Số tiền thanh toán</b>
                    <div class="vn-wrapper">
                        <div class="vnd">360.000 vnđ</div>
                    </div>
                </div>
                <div class="s-lng-v">
                    <b class="s-tin-thanh">Số lượng vé</b>
                    <div class="amount-ticket">
                        <div class="wrapper1">
                            <div class="vnd">4</div>
                        </div>
                        <div class="v">vé</div>
                    </div>
                </div>
                <div class="ngy-s-dng">
                    <b class="s-tin-thanh">Ngày sử dụng</b>
                    <div class="wrapper2">
                        <div class="vnd">15/08/2021</div>
                    </div>
                </div>
                <div class="thng-tin-lin-h">
                    <b class="thng-tin-lin">Thông tin liên hệ</b>
                    <div class="nguyn-th-ngc-tuyn-wrapper">
                        <div class="vnd">Nguyễn Thị Ngọc Tuyền</div>
                    </div>
                </div>
                <div class="dien-thoai">
                    <b class="s-tin-thanh">Điện thoại</b>
                    <div class="vn-wrapper">
                        <div class="vnd">0123456789</div>
                    </div>
                </div>
                <div class="email">
                    <b class="s-tin-thanh">Email</b>
                    <div class="nguyn-th-ngc-tuyn-wrapper">
                        <div class="vnd">tuyen.nguyen@alta.com.vn</div>
                    </div>
                </div>
            </div>
            <div class="confirm-ticket">
                <div class="confirm-yourticket">VÉ CỦA BẠN</div>
            </div>
            <div class="thanhtoan">
                <form class="form-contact" action="#" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <b class="text-sothe">Số thẻ</b>
                            <input type="tex" class="sothe" name="number" placeholder="số thẻ" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <b class="text-fullname">Họ tên chủ thẻ</b>
                            <input type="text" class="card-fullname" name="fullname" placeholder="Họ và tên" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <b class="text-date">Ngày hết hạn</b>
                            <input type="date" class="card-date" name="mobile" placeholder="Ngày hết hạn" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <b class="text-cvv">CVV/CVC</b>
                            <input type="text" class="CVV" name="email" placeholder="***" required>
                        </div>

                        <div class="form-group col-sm-12">
                            <a href="./?c=home&a=paymentsuccessfully" class="yourticket1">Thanh Toán</a>
                        </div>

                    </div>
                </form>
            </div>
            <div class="group-ticket1">
                <div class="confirm-yourticket">THÔNG TIN THANH TOÁN</div>
            </div>
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
                    <img class="group-icon4" alt="" src="upload/group4.svg" /><b class="sample-text">0123456789</b>
                </div>
            </div>
            <img class="little-little-logo-ngang-1" alt="" src="upload/logo.png" />
        </div>
        <img class="trini-arnold-votay1-2-icon" alt="" src="./upload/trini-arnold-votay1-2@2x.png" />
    </div>