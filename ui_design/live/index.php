<!DOCTYPE html>
<html lang="en">



   <head>
    <?php include_once "header.php"; ?>
  </head>

   <?php include_once "sidebar_stuff.php" ?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Clock-in</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Time: </h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <!--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> -->
                      </li>
                      <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>-->
                      <!--<li><a class="close-link"><i class="fa fa-close"></i></a> -->
                      </li>
                    </ul>
                    <h2>



                    <script type="text/javascript">

                    function GetClock(){
                    var d=new Date();
                    var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                    var nhour=d.getHours(),nmin=d.getMinutes(),ap;
                    if(nhour==0){ap=" AM";nhour=12;}
                    else if(nhour<12){ap=" AM";}
                    else if(nhour==12){ap=" PM";}
                    else if(nhour>12){ap=" PM";nhour-=12;}

                    if(nmin<=9) nmin="0"+nmin;

                    document.getElementById('clockbox').innerHTML="<center> <h2> &nbsp; "+ (nmonth+1)+"."+ndate+"."+nyear+" "+nhour+":"+nmin+ap+"</h2></center>";
                    }

                    window.onload=function(){
                    GetClock();
                    setInterval(GetClock,1000);
                    }
                    </script>
                  </h2>

                    <div id="clockbox"></div>

                    <div class="clearfix"></div>
                  </div>

<!--
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  <form class="form-horizontal" role="form" method="POST" action="">

                    <div class="form-group">
                      <label for="email" class="col-sm-0 control-label">Who are you?</label>
                      <div class="col-md-9 col-sm-20 col-xs-12-offset-0">
                        <select class="select2_single form-control" name="employee" tabindex="-1">
                          <option></option>
                          <option value="employee">Shaine</option>
                          <option value="employee">Christian</option>
                          <option value="employee">Diana</option>
                          <option value="employee">Allen</option>
                        </select>

                      </div>
                      <input type="submit" name="submit">
                    </div> -->
                    <form name="mainForm" action="" method="post">
                          <select name="employee" onchange="Change(this);">
                              <option selected="Select" value="none">Who are you?</option>
                            <option value="shaine">shaine</option>
                            <option value="not shaine">not shaine</option>

                          </select>



                          <input type="submit" title="Submit"/>
                        </form>




                       </div>
                   </div>

                </form>
                  <div class="x_content">

                    <?php include_once "/opt/lampp/htdocs/php_stuff/time_submitted.php" ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
