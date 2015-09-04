<?php
/*
First panel title should not have class="collapsed" as first shoud default to open
*/
?>
<div id="slide-nav">

  <div class="panel-group" id="accordion">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Content</a>
              </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                  <table class="table">
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Articles</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">News</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Newsletters</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Comments</a>
                              <span class="badge">42</span>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
      </div>
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Modules</a>
              </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                  <table class="table">
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Invoices</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Shipments</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Tex</a>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
      </div>
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Account</a>
              </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                  <table class="table">
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Change Password</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Import/Export</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com" class="text-danger">
                                  Delete Account</a>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
      </div>
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Reports</a>
              </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                  <table class="table">
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Sales</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Customers</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Products</a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
        </div>
      </div>

</div><!-- #secondary -->
