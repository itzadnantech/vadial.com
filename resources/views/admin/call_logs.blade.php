<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'call_logs'])
     <div class="content">
         <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <ul class="navbar-nav side-bar">
                  <li class="nav-item">
      <a class="nav-link" href="call%20logs.html">
<h6 class="cool-link color-purple">Call Logs <i class="fa fa-phone-square  mange fa-font-size"></i></h6></a>
    </li>

                  <li class="nav-item">
      <a class="nav-link" href="agent%20report.html">
<h6 class="cool-link color-black">Agent Report <i class="fa fa-phone-square  mange fa-font-size"></i></h6></a>
    </li>

  </ul>
             </div>

          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 margin-top-30">
             <h6>AGENT DAILY REPORT</h6>
             <form action="/action_page.php" class="margin-top-10 display-content">
  <select name="cars" id="cars">
    <option value="volvo">Prep Work</option>
  </select>
</form>
             <input type="text" placeholder="Search.." class="mange sm-100">
             <div class="bg-gray">
                 <div class="display-flex margin-top-10">
             <p>Call Logo Report</p>
                     </div>
                     <i class="fa  fa-close mange" style="margin-top: -32px;"></i>
             </div>
                <div class="display-flex margin-top-10">
              <form action="/action_page.php" class="margin-top-10 display-content">
  <select name="cars" id="cars">
    <option value="volvo">9 call results</option>
  </select>
</form>

             <p class="margin-left-24"><b>Time Range:</b></p>
                 <p class="margin-left-24">05, May, 2021</p>
                 <p class="margin-left-24">to</p>
                 <p class="margin-left-24">05, May, 2021</p>
                 <select name="cars" id="cars"  class="margin-left-24">
    <option value="volvo">Campaigns</option>
  </select>
                      <select name="cars" id="cars" class="margin-left-24">
    <option value="volvo">All Files</option>
  </select>
                      <select name="cars" id="cars" class="margin-left-24">
    <option value="volvo">All Source</option>
  </select>
                     </div>



             <form action="/action_page.php"  class="margin-top-10">
  <select name="cars" id="cars">
    <option value="volvo">All Duration</option>
  </select>
                   <select name="cars" id="cars" class="margin-left-24">
    <option value="volvo">All Type</option>
  </select>
                 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="margin-left-24">
<label for="vehicle1"> <b>Summry View</b></label>
</form>
             <div class="table-responsive">
                       <table class="table table-striped margin-top-10">

  <tbody class="text-center">
      <tr>
      <th>Dawn </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td></td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
           <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
             <tr>
      <th>Caoaln </th>
      <td>May 5, 9:11AM</td>
      <td>Not Interested</td>
      <td><i class="fa fa-circle " style="color: orange"> </i> <30s</td>
        <td>Diana Short indiana</td>
          <td>453-111-999</td>
    </tr>
 </tbody>
</table>
              </div>
             </div>
         </div>
    </div>
    </body>
</html>

