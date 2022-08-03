<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'crm'])
     <div class="content">
         <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <ul class="navbar-nav side-bar">
       <li class="nav-item">
      <a class="nav-link" href="campaigns.html">
<h6  class="cool-link color-purple" >Contacts<i class="fa fa-user-circle mange fa-font-size"></i> </h6></a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="apponinment.html">
<h6 class="cool-link color-black">Appoinments <i class="fa   fa-calendar-minus-o mange fa-font-size"></i></h6></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="disposition.html">
<h6 class="cool-link color-black ">Dispositions <i class="fa  mange fa-font-size"><b>D</b></i></h6></a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="custom%20feild.html">
<h6 class="cool-link color-black">Custom Fields <i class="fa  mange fa-font-size"><b>Cf</b></i></h6></a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="contact%20type.html">
<h6 class="cool-link color-black">Contact Type <i class="fa  mange fa-font-size"><b>Ct</b></i></h6></a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="setting.html">
<h6 class="cool-link color-black">Setting <i class="fa fa-gear mange fa-font-size"></i></h6></a>
    </li>

  </ul>
             </div>

          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 margin-top-30">

               <div class="row">
                 <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
              <button class="btn  btn-success bg-dark-blue">Filter Option <i class="fa  fa-angle-right margin-left-10"></i></button>
                   </div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                       <p class=" color-sky-blue">Important: The contact tables will display 10,000 contacts</p>
                   </div>
              </div>
              <div class="display-flex margin-top-10 bg-gray">
<p class="margin-top-10">Display</p><form action="/action_page.php">
  <select name="cars" id="cars" class="margin-left-10 margin-top-10">
    <option value="volvo" class="margin-top-10">10</option>
  </select>
</form>
                  <p class="margin-left-10 margin-top-10">records</p>
                  </div>
                <div class="table-responsive">
                        <table class="table table-striped margin-top-30">
  <thead class="thead-light text-center">
    <tr>
      <th scope="col"><input type="checkbox" value=""></th>
      <th scope="col">Contect</th>
        <th scope="col">Phone Number</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Company Name</th>
        <th scope="col">Date Created</th>
    </tr>
  </thead>
  <tbody class="text-center">
      <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>
            <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>
        <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>
        <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>
        <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>
        <tr>
           <th  scope="row"><input type="checkbox" value=""></th>
      <th><a>983764546</a></th>
      <td>19737621471</td>
      <td>Vincent</td>
      <td>Harris</td>
      <td></td>
        <td>Nov,9,2020,08:28 pm</td>
    </tr>

 </tbody>
</table>
              </div>
              <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-left"></i></button>
               <button class="btn btn-primary margin-top-10">1</button>
              <button class="btn btn-outline-primary margin-top-10" >2</button>
              <button class="btn btn-outline-primary margin-top-10" >3</button>
              <button class="btn btn-outline-primary margin-top-10" >4</button>
                <button class="btn btn-outline-primary margin-top-10">5</button>
              <button class="btn btn-outline-primary margin-top-10">...</button>
              <button class="btn btn-outline-primary margin-top-10">1000</button>
              <button class="btn btn-outline-primary margin-top-10" style="padding: 10px;"><i class="fa fa-angle-right"></i></button>
              <p class="mange"><b>Total Contacts: 9482</b></p>
              <br>
              <button class="btn btn-primary margin-top-10 margin-bottom-30"><i class="fa fa-plus"> Add Contact </i></button>
                <button class="btn btn-primary margin-top-10 margin-bottom-30"><i class="fa fa-trash-o"> Delete </i></button>
        <button class="btn btn-primary margin-top-10 margin-bottom-30"><i class="fa fa-download"> Export </i></button>
         </div>

                </div>
    </div>
    </body>
</html>
