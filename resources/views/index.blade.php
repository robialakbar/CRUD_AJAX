<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD LARAVEL 8</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <button class="btn btn-primary" onClick="create()">+ Tambah Product</button>
              <h1> Tutorial CRUD Laravel 8</h1>
            </div>
        </div>
    </div>

  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="page" class="p-2"> </div>
      </div>
      
    </div>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function() {

       
    });
//Untuk Halaman Modal Create
    function create() {
        $.get("{{ url('create') }}", {}, function(data, status) {
          $("#exampleModalLabel").html('Input Produk');
          $("#page").html(data);
          $("#exampleModal").modal('show');
        
        });
        }

        // untuk proses create data
        function store() {
            var name = $("#name").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: "name=" + name,
                success: function(data) {
                    $(".btn-close").click();
                   
                }
            });
        }
      

</script>
</body>
</html>