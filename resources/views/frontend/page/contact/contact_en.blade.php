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
                window.alert('Enter your name!');
                document.getElementById('hoten').focus();
                return false;
            }
            if(diachi == ""){
                window.alert('Enter your address!');
                document.getElementById('diachi').focus();
                return false;
            }
            var kiemTraDT = isNaN(dienthoai);
            if(dienthoai == ""){
                window.alert('Enter your phone number!');
                document.getElementById('dienthoai').focus();
                return false;
            }
            if (kiemTraDT == true) {
                alert("Your phone number is not in the correct format!");
                return false;
            }
            var aCong=email.indexOf("@");
            var dauCham = email.lastIndexOf(".");
            if (email == "") {
                alert("Enter your email!");
                return false;
            }
            else if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>email.length)) {
                alert("Your email is not in the correct format!");
                return false;
            }
            if(tieude == ""){
                window.alert('Enter your title!');
                document.getElementById('tieude').focus();
                return false;
            }

            return true;
        }
    </script>
    <div class="url-head">
        <div class="container">
            <div class="welcome">
                <h2>Contact us</h2>
            </div>
            <div class="link_detail"><a href="javascript:void(0)" title="">Home &nbsp;/&nbsp;</a>Contact</div>
        </div>
    </div>
    <div class="page-home">
        <div class="container">
            <div class="row">
                <div class="form-contact">
                    <div class="form-lienhe col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="title-lienhe">Submit information for us</div>
                        <form action="{{URL::route('contact.send')}}" method="POST" onsubmit="return check_frm()">
                            {{csrf_field()}}
                            <input type="text" id="hoten" name="hoten" placeholder="Name" class="hoten">
                            <input type="text" id="diachi" name="diachi" placeholder="Address" class="diachi">
                            <input type="text" id="dienthoai" name="dienthoai" placeholder="Phone" class="dienthoai">
                            <input type="text" id="email" name="email" placeholder="Email" class="email">
                            <input type="text" id="tieude" name="tieude" placeholder="Title" class="tieude">
                            <textarea name="noidung" id="noidung" placeholder="Message" rows="5"></textarea>
                            <input type="hidden" name="gui" class="btn btn-primary" value="">
                            <input type="submit" name="submit_step1" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                    <div class="maps-lienhe col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="title-lienhe">Contact info</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.9691651385406!2d8.745092415339684!3d50.105584120035346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd0e0b6997ae9d%3A0x8b0dcd02ae6ff729!2sBerliner+Str.+252%2C+63067+Offenbach+am+Main%2C+%C4%90%E1%BB%A9c!5e0!3m2!1svi!2s!4v1445587956311" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop