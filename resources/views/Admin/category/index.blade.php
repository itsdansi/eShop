<h3 align ="center">Category List</h3>
<div align= right>  <a href="createCategory"><button  >Add Category</button></div></a> <br>
          <table class="table" width="1200" align="center">
        <thead>
          <tr>
            <th width='30%'>Name</th>
            <th width='30%'>Descrition</th>
            <th width='20%'>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($category as $category)
           <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
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