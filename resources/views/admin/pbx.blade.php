<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'pbx'])
     <div class="content">
         <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <ul class="navbar-nav side-bar">
       <li class="nav-item">
      <a class="nav-link" href="pbx.html">
<h6  class="cool-link color-purple" >Phone Number<i class="fa fa-phone-square mange fa-font-size"></i> </h6></a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="inbound%20queue.html">
<h6 class="cool-link color-black">Inbound Queues<i class="fa   fa-plus-square mange fa-font-size"></i></h6></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="inbound%20block%20list.html">
<h6 class="cool-link color-black">Inbound Block List<i class="fa fa-ban  mange fa-font-size"></i></h6></a>
                  </li>
      <li class="nav-item">
      <a class="nav-link" href="voicemail.html">
<h6 class="cool-link color-black">Voicemails <i class="fa fa-phone mange fa-font-size"></i></h6></a>
    </li>
                  <li class="nav-item">
      <a class="nav-link" href="caller%20Ids.html">
<h6 class="cool-link color-black">Caller IDS <i class="fa fa-phone-square  mange fa-font-size"></i></h6></a>
    </li>


  </ul>
             </div>

         <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 margin-top-30">
        <h6>PHONE NUMBERs (DIDs)</h6>
              <button class="btn btn-primary margin-top-10 sm-100">Purchese individual DIDs </button>
             <input placeholder="search...." class="mange margin-top-10 sm-100">
               <div class="table-responsive">
              <table class="table table-striped margin-top-30">
  <thead class="thead-light text-center">
    <tr>
        <th scope="col">Name</th>
         <th scope="col">Phone Number</th>
        <th scope="col">Destination Type</th>
         <th scope="col">SMS Enabled</th>
        <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody class="text-center">
      <tr>
      <th>Clevaland,OH</th>
      <td>1987635432738</td>
          <th>--</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
 <tr>
      <th>Clevaland,OH 2</th>
      <td>1987635432738</td>
          <th>--</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
       <tr>
      <th>Savannah,GA</th>
      <td>1987635432738</td>
          <th>Campaign</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
         <tr>
      <th>Savannah,GA</th>
      <td>1987635432738</td>
          <th>Campaign</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
       <tr>
      <th>Clevaland,OH</th>
      <td>1987635432738</td>
          <th>--</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
       <tr>
      <th>Clevaland,OH</th>
      <td>1987635432738</td>
          <th>--</th>
          <th>False</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>
       <tr>
      <th>Clevaland,OH</th>
      <td>1987635432738</td>
          <th>--</th>
          <th>True</th>
          <td><button class="btn  btn-primary bg-dark-blue "><i class="fa fa-edit"></i></button>
          <button class="btn  btn-danger"><i class="fa  fa-trash"></i></button>
          </td>
    </tr>


 </tbody>
</table>
             </div>
             <button class="btn btn-outline-primary margin-top-10 margin-bottom-30" style="padding: 10px;"><i class="fa fa-angle-left"></i></button>
             <button class="btn btn-primary margin-top-10 margin-bottom-30">01</button>
             <button class="btn btn-outline-primary margin-top-10 margin-bottom-30" style="padding: 10px;"><i class="fa fa-angle-right"></i></button>
         </div>

                </div>
    </div>
    </body>
</html>
