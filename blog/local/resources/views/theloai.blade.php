@include('header')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Quản Lý Thể Loại</a> </div>
    <h1>Quản Lý Thể Loại</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Static table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Tên Thể Loại</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($theloai as $user)
                <tr class="odd gradeX">
                  <td>{{$user -> id}}</td>
                  <td>{{$user -> name}}</td>
                 
                  <td class="center"><a href='udtl/{{$user -> id}}'>Edit</a></td>
                  <td class="center"><a href='deltl/{{$user -> id}}'>Delete</a></td>
                </tr>
                 @endforeach
               <!-- <tr class="even gradeC">
                  <td>2</td>
                  <td>Liên</td>
                  <td>Lien@gmail.com</td>
                   <td class="center"><a href="">Edit</a></td>
                  <td class="center"><a href="">Delete</a></td>
                </tr>
                <tr class="odd gradeA">
                  <td>3</td>
                  <td>Dũng</td>
                  <td>Dung@gmail.com</td>
                  <td class="center"><a href="">Edit</a></td>
                  <td class="center"><a href="">Delete</a></td>
                </tr>
                <tr class="even gradeA">
                  <td>4</td>
                  <td>Hòa</td>
                  <td>Hoa@yahoo.com</td>
                 <td class="center"><a href="">Edit</a></td>
                  <td class="center"><a href="">Delete</a></td>
                </tr>-->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('food')


