<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New ☕️ Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
              

   
   
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 0px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .loading {
            color: black;
            font: 300 2em/100% Impact;
            text-align: center;
        }

        /* loading dots */

        .loading:after {
            content: ' .';
            animation: dots 1s steps(5, end) infinite;
        }

        @keyframes dots {

            0%,
            20% {
                color: rgba(0, 0, 0, 0);
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            40% {
                color: black;
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            60% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            80%,
            100% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 black;
            }
        }

        #secord_sale {
            position: relative;

            top :25px;
        }
    </style>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="add_epmployee">
                <form name="product-add" id="product-add" >
                    <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                        <label>Product Name</label>
                        <select class="block w-full mt-1" id="product" onchange="getAmount2()" >
            <option value="1" >Arabic coffee</option>
            <option value="2" >Gold coffee</option>
          
        </select>
                       </div>
                       </div>
                    
                        <div class="col-sm-3">
                        <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" id="quantity_input" class="form-control" onblur="getAmount1()" required>
                       </div>
                       </div>

 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label>Unit Cost</label>
                        <input type="number" id="unit_cost_input" class="form-control" onblur="getAmount()" required>
                    </div>
                    </div>
                
                    <div class="form-group col-sm-2">
                        <label>Selling Price</label>
                        <input type="number" id="selling_input1" class="form-control" readonly>
                        <input type="hidden" id="selling_input" class="form-control" >
                       
                    </div>
                    <div class="form-group col-sm-2">
                    <input type="submit" class="btn btn-success" id="secord_sale" value="Record Sale" onclick="addEmployee()">
                    </div>
                         
                    </div>
                    </div>
                    </form>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="50%">Id</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Cost</th>
                            <th width="50%">Selling Price</th>
                           
                            
                        </tr>
                    </thead>
                    <tbody id="sale_data">
                    </tbody>
                </table>
                <p class="loading">Loading Data</p>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->

    <!-- Edit Modal HTML -->


    <!-- View Modal HTML -->
 




    <script>


        $(document).ready(function() {
            saleList();

        });

        function saleList() {
            $.ajax({
                type: 'get',
                url: "{{ url('sale-list') }}",
                success: function(response) {
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
                        var id = response[i].id;
                        var product = response[i].product;
                        var quantity = response[i].quantity;
                        var unit_cost = response[i].unit_cost;
                        var selling = response[i].selling;                        
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + product + '</td>';
                        tr += '<td>' + quantity + '</td>';
                        tr += '<td>' + unit_cost + '</td>';
                        tr += '<td>' + selling + '</td>';
                       
                      
                 
                    }
                    $('.loading').hide();
                    $('#sale_data').html(tr);
                }
            });
        }

        function addEmployee() {
            
            var quantity = $('.add_epmployee #quantity_input').val();
            var unit_cost = $('.add_epmployee #unit_cost_input').val();
            var selling = $('.add_epmployee #selling_input').val();
            var product = $('.add_epmployee #product').val();
           var products = (product=="1")? "Arabic coffee" : "Glod coffee";

       
          
            $.ajax({
                type: 'post',
                data: {
                    quantity: quantity,
                    unit_cost: unit_cost,
                    selling: selling,  
                    product : products,            
                    _token: "{{ csrf_token() }}"
                },
                url: "{{ url('sale-add') }}",
                success: function(response) {
                  
                    saleList();
                    alert(response.message);
                    $(".add_epmployee input[type='number']").val("");
                   // add_epmployee 
                    
                }

            })
        }

   
 
function getAmount(){

  	var value = $('#quantity_input').val();
  	var percent = $('#unit_cost_input').val();
    var cost = value*percent
  
    if($('#product').val() == 1){
        var selling = (cost/(1-0.15))+10
    }else{
        var selling = (cost/(1-0.25))+10
    }
    
  	$('#selling_input1').val(selling.toFixed(2));
      $('#selling_input').val(selling.toFixed(2));

  	
}
function getAmount1(){

var value = $('#quantity_input').val();
var percent = $('#unit_cost_input').val();
var cost = value*percent

if($('#product').val() == 1){
  var selling = (cost/(1-0.15))+10
}else{
  var selling = (cost/(1-0.25))+10
}

$('#selling_input1').val(selling.toFixed(2));
$('#selling_input').val(selling.toFixed(2));


}

function getAmount2(){

   

var value = $('#quantity_input').val();
var percent = $('#unit_cost_input').val();
var cost = value*percent

if($('#product').val() == 1){
  var selling = (cost/(1-0.15))+10
}else{
  var selling = (cost/(1-0.25))+10
}

$('#selling_input1').val(selling.toFixed(2));
$('#selling_input').val(selling.toFixed(2));


}

    </script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
