<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('one_store') }} " method="POST">
            <div class="form-group">
                <label name="email">Email</label>
                <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label name="subject">Subject</label>
                <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <label name="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>


            <input type="submit" value="send message">

        </form>
    </div>
</div>