<h3 align ="center">Product List</h3>
<div align= right>  <a href="createProduct"><button  >Add Product</button></div></a> <br>
<table class="table" width="1200" align="center" >
        <thead>
          <tr>
            <th width='30%'>Name</th>
            <th width='30%'>Descrition</th>
            <th width='30%'>Price</th>
            <th width='20%'>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($product as $product)
           <tr>
              <td>{{ $product->prod_name }}</td>
              <td>{{ $product->prod_desc }}</td>
              <td>{{ $product->price }}</td>
              <td>
                 <!-- Edit -->
                 <a href="#" class="btn btn-sm btn-info">Edit</a>
                 <!-- Delete -->
                 <a href="#" class="btn btn-sm btn-danger">Delete</a>
              </td>
           </tr>
        @endforeach
        </tbody>
     </table>