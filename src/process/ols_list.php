<?php
include 'class/class.select.php';
$select=new select;
?>
<div class="container-fluid">
          <div class="animated fadeIn">

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Daftar ols
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>Kode</th>
                          <th>Gardu induk</th>
                          <th>Nama</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  echo 'coba';
						$sql=$select->ols_list();
						while($row=mysql_fetch_array($sql)){
						$no=$no+1;
					  ?>
                        <tr>
                          <td>Vishnu Serghei</td>
                          <td>2012/01/01</td>
                          <td>Member</td>
                          <td>
                            <span class="badge badge-success">Active</span>
                          </td>
                        </tr>      
					  <?php	
						}
					  ?>					  
                      </tbody>
                    </table>
                    <nav>
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#">Prev</a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>
 </div>
 <!--    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script> -->  