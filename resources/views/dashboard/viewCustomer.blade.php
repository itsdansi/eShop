<table class="table" >
        <thead>
          <tr>
            <th width='30%'>Name</th>
            <th width='30%'>Address</th>
            <th width='20%'>Email</th>
            <th width='20%'>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($customer as $customer)
           <tr>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->email }}</td>
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