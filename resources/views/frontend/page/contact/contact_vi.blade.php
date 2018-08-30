@extends('frontend.layouts.master')
@section('content')
<section>
    <script type="text/javascript">
        function check_frm(){
            var hoten = document.getElementById('hoten').value;
            var diachi = document.getElementById('diachi').value;
            var dienthoai = document.getElementById('dienthoai').value;
            var email = document.getElementById('email').value;
            var tieude = document.getElementById('tieude').value;


            if(hoten == ""){
                window.alert('Vui lòng cho biết tên!');
                document.getElementById('hoten').focus();
                return false;
            }
            if(diachi == ""){
                window.alert('Vui lòng cho biết địa chỉ!');
                document.getElementById('diachi').focus();
                return false;
            }
            var kiemTraDT = isNaN(dienthoai);
            if(dienthoai == ""){
                window.alert('Vui lòng cho biết số điện thoại!');
                document.getElementById('dienthoai').focus();
                return false;
            }
            if (kiemTraDT == true) {
                alert("Số điện thoại không đúng định dạng!");
                return false;
            }
            var aCong=email.indexOf("@");
            var dauCham = email.lastIndexOf(".");
            if (email == "") {
                alert("Vui lòng nhập email!");
                return false;
            }
            else if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>email.length)) {
                alert("Email không đúng định dạng!");
                return false;
            }
            if(tieude == ""){
                window.alert('Vui lòng nhập tiêu đề');
                document.getElementById('tieude').focus();
                return false;
            }

            return true;
        }
    </script>

    <div class="url-head"><div class="container"><div class='welcome'><h2>Liên hệ</h2></div><div class='link_detail'><a href='/' title=''>Trang chủ &nbsp;/&nbsp;</a>Liên hệ</div></div></div><div class="page-home"><div class="container"><div class="row">

                <div class="form-contact">
                    <div class="form-lienhe col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="title-lienhe">Gửi thông tin cho chúng tôi</div>
                        <form method="post" active="" name="thongtindh" onsubmit="return check_frm()">
                            <input type="text" id="hoten" name="hoten" placeholder="Họ và tên" class="hoten"></input>
                            <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ"  class="diachi"></input>
                            <input type="text" id="dienthoai" name="dienthoai" placeholder="Điện thoại"  class="dienthoai"></input>
                            <input type="text" id="email" name="email" placeholder="Email" class="email"></input>
                            <input type="text" id="tieude" name="tieude" placeholder="Tiêu đề" class="tieude"></input>
                            <textarea name="noidung" id="noidung" placeholder="Nội dung" rows="5"></textarea>
                            <input type="hidden" name="gui" class="btn btn-primary" value="">
                            <input type="submit" name="submit_step1" class="btn btn-primary" value="Gửi thư">
                        </form>
                    </div>
                    <div class="maps-lienhe col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="title-lienhe">Thông tin liên hệ</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29791.20142505575!2d105.7473122657121!3d21.03667976080658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zS2h1IEFuIEzhuqFjLCBQaMaw4budbmcgQ-G6p3UgRGnhu4VuLCBRdeG6rW4gTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1509770058893" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div></div></div>

</section>
    @stop