<head>
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style>
.red{
color:red;
}
.form-area
{
background-color: #FAFAFA;
padding: 10px 40px 60px;
margin: 10px 0px 60px;
border: 1px solid GREY;
}
.map iframe {
height: 400px;
width: 105%;
border: 0;
/*pointer-events: none;*/
display: block;
margin-right: 200px;
margin-top: 50px;
}
</style>
<div style="background-color: rgba(0, 0, 0, 0.01);" class="container">
    
    <div style="float: right;margin-right: 50px;">
        {{-- <div class="cnt-detail">
            <ul>
                <li class="tel">
                    <div class="cnt-icon"><a href="tel:+91 987654321"><i class="fa fa-mobile" aria-hidden="true"></i></a></div>
                    <div class="cnt-info"><a href="+91 987654321">+91 987654321</a></div>
                </li>
                <li class="address">
                    <div class="cnt-icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="cnt-info"><p>92 Bayport Ave.
                    South Richmond Hill, NY 11413</p></div>
                </li>
                <li class="email-ad">
                    <div class="cnt-icon"><a href="mailto:info@themehunk.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
                    <div class="cnt-info"><a href="mailto:info@themehunk.com">info@themehunk.com</a></div>
                </li>
            </ul>
        </div> --}}
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d1998.9425234021676!2d30.3610854!3d59.9330959!3m2!1i1024!2i768!4f13.1!4m9!3e2!4m3!3m2!1d59.9347049!2d30.3602527!4m3!3m2!1d59.933045699999994!2d30.3601335!5e0!3m2!1sru!2sru!4v1512522151409" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

    </div>
    <div class="col-md-5">
        <div class="form">
            <form style="margin-top: 10px;" {{-- role="form" --}}>
                <div class="row d-flex justify-content-center">
                    <h3 class="white-text mb-0 py-5 font-bold">Contact Us</h3>
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                   
                </div>
                
                <button style="margin-left: 150px;" type="button" id="submit" name="submit" class="btn btn-primary ">Submit Form</button>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
$('#characterLeft').text('140 characters left');
$('#message').keydown(function () {
var max = 140;
var len = $(this).val().length;
if (len >= max) {
$('#characterLeft').text('You have reached the limit');
$('#characterLeft').addClass('red');
$('#btnSubmit').addClass('disabled');
}
else {
var ch = max - len;
$('#characterLeft').text(ch + ' characters left');
$('#btnSubmit').removeClass('disabled');
$('#characterLeft').removeClass('red');
}
});
});
</script>