<div class="sidebar">
    <ul>
          <li>
              <a id="flip" href="javascript:void(0)"><i class="fa fa-angle-right"></i>My Product</a>
              <ul id="panel" class="sub-menu">
                  <li><a href="{{ url('exporter/add-product') }}"><i class="fa fa-building"></i> Add Product</a></li>
                  <li><a href="{{ url('exporter/all-product') }}"><i class="fa fa-building"></i> All Product</a></li>
              </ul>
          </li>
          <li>
              <a id="flip2" href="javascript:void(0)"><i class="fa fa-angle-right"></i>Buyer</a>
              <ul id="panel2" class="sub-menu">
                  <li><a href="{{ url('exporter/buyer-product') }}"><i class="fa fa-building"></i> Buyer Products</a></li>
              </ul>
          </li>
         <li><a href="#"><i class="fa fa-angle-right"></i>Generate Email</a></li>
    </ul>
</div>