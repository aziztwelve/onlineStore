<head>
    {{-- <link rel="stylesheet" href="css/app.css"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<style>
    
.form-gradient .header {
  border-top-left-radius: .3rem;
  border-top-right-radius: .3rem; }

.form-gradient input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #fd9267;
  box-shadow: 0 1px 0 0 #fd9267; }

.form-gradient input[type=text]:focus:not([readonly]) + label {
  color: #4f4f4f; }

.form-gradient textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #fd9267;
    box-shadow: 0 1px 0 0 #fd9267; }


.form-dark .md-form label {
  color: #fff; }

.form-dark input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=text]:focus:not([readonly]) + label {
  color: #fff; }

.form-dark textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #00C851;
    box-shadow: 0 1px 0 0 #00C851;
    color: #fff; }

.form-dark textarea.md-textarea  {
    color: #fff;
}

.form-dark .form-control, .form-dark .form-control:focus {
    color: #fff;
}
                






</style>



<section class="form-gradient mb-5">

    <!--Form with header-->
    <div class="card">

        <!--Header-->
        <div class="header peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-bold">Contact U</h3>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4 mt-4">

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form104" class="form-control">
                <label for="form104">Your name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="form105" class="form-control">
                <label for="form105">Your email</label>
            </div>

            <div class="md-form">
                <i class="fa fa-tag prefix grey-text"></i>
                <input type="text" id="form106" class="form-control">
                <label for="form106">Subject</label>
            </div>

            <div class="md-form">
                <i class="fa fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form107" class="md-textarea" style="height: 100px"></textarea>
                <label for="form107">Your message</label>
            </div>


            <!--Grid row-->
            <div class="row d-flex align-items-center mb-3">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="button" class="btn btn-grey btn-rounded z-depth-1a">Send</button>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>

    </div>
    <!--/Form with header-->

</section>


                