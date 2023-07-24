<nav id="sidebar" >
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <div class="p-4 pt-5">
        <h1><a href="index.html" class="logo">MediCare</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="pprofile.php">Additional Details</a>

          </li>
           <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Diagnosistic/Report</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="plab.php">Lab Test Reports</a>
              </li>
            <li>
                <a href="ppres.php">Prescription</a>
              </li>
              <li>
                <a href="pmedhis.php">Medical History</a>
              </li>
              <li>
                <a href="pall.php">Allergies</a>
              </li>

            </ul>
          </li>
          <li> 
            <a href="pkey.php">Generate Key</a>
          </li>
          <li>
            <a href="pdoc.php">Documents</a>
          </li>
          <li>
            <a href="phistory.php">Medical History</a>
          </li>
          <li>
            <a href="pdoclist.php">Doctor list</a>
          </li>
           <li>
            <a href="pappointment.php">Book Appointment</a>
          </li>
          <li> 
            <a href="pshow.php">Show Appointment</a>
          </li>
           <li class="active">
            <a onclick="logout()">Logout</a>
          </li> 

        </ul>
      </div>
    </nav>
