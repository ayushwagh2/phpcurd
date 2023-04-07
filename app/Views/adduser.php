<!doctype html>
    <html lang="en">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
        <title>Hello, world!</title>
    </head>
    <body>
    <div class="container py-4">

<!-- Bootstrap 5 starter form -->
<form id="contactForm">


  <!-- Name input -->
  <div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input class="form-control" name="name" id="name" type="text" placeholder="Name" required />
  </div>

  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label" for="emailAddress">Email Address</label>
    <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address" required />
  </div>

  <div class="mb-3">
    <label class="form-label" for="phoneNumber">Phone number</label>
    <input class="form-control" name="number" id="phoneNumber" maxlength="10" minlength="10"  type="text" placeholder="Phone Number" required />
  </div>

  

  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label" for="message">Address</label>
    <textarea class="form-control" name="address" id="message" type="text" placeholder="Message" required style="height: 10rem;" data-sb-validations="required"></textarea>
  </div>


  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
  </div>

</form>

</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" type=></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" ></script>
    <script>
        $('#viewData').DataTable();

        $('#contactForm').submit(function(e){

            e.preventDefault()
            $.ajax({
                url: '<?php echo base_url('saveformdata'); ?>',
                type: 'post',
                data: new FormData (this),
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success:function(data){
                    
                }
                

            })
        })
    </script>
    </body>
    </html>