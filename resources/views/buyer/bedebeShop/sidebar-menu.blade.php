<div class="sidebar">
    <ul>
         <li>
            <a  id="flip2" href="javascript:void(0)"><i class="fa fa-angle-right"></i>My Addresses</a>
            <ul id="panel2" class="sub-menu">
                <li><a href="{{ url('buyer/my-europa-address') }}"><i class="fa fa-building"></i>My delivery address in Europa </a></li>
                <li><a href="{{ url('buyer/my-madagascar-address') }}"><i class="fa fa-building"></i>My delivery adresses in Madagascar </a></li>
                <li><a href="{{ url('buyer/my-invoicing-address') }}"><i class="fa fa-building"></i>My invoicing address</a></li>
            </ul>
         </li> 
          <li>
              <a id="flip" href="javascript:void(0)"><i class="fa fa-angle-right"></i>My Product</a>
              <ul id="panel" class="sub-menu">
                  <li><a href="{{ url('buyer/create-product') }}"><i class="fa fa-building"></i> Create Product</a></li>
                  <li><a href="{{ url('buyer/all-product') }}"><i class="fa fa-building"></i> All Product</a></li>
              </ul>
          </li>
           <li>
              <a id="flip3" href="javascript:void(0)"><i class="fa fa-angle-right"></i>Other Product</a>
              <ul id="panel3" class="sub-menu">
                  <li><a href="{{ url('buyer/other-product') }}"><i class="fa fa-building"></i> All Product</a></li>
              </ul>
          </li>
         <li><a href="{{ url('buyer/cart') }}"><i class="fa fa-angle-right"></i>My Cart</a></li>
         <li>
            <a id="flip4" href="javascript:void(0)"><i class="fa fa-angle-right"></i>My Shopping</a>
            <ul id="panel4" class="sub-menu">
                <li><a href="{{ url('buyer/orders') }}"><i class="fa fa-building"></i>My orders</a></li>
                <li><a href="#"><i class="fa fa-building"></i>My tracking</a></li>
                <li><a href="#"><i class="fa fa-building"></i>My notifications from bedebe team</a></li>
            </ul>
         </li> 
    </ul>
</div>