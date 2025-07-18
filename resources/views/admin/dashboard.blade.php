@extends('admin.layouts.master')

@section('content')
  <!-- Counts Section -->
  <section class="dashboard-counts section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-user"></i></div>
            <div class="name"><strong class="text-uppercase">New Clients</strong><span>Last 7 days</span>
              <div class="count-number">25</div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-padnote"></i></div>
            <div class="name"><strong class="text-uppercase">Work Orders</strong><span>Last 5 days</span>
              <div class="count-number">400</div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="name"><strong class="text-uppercase">New Quotes</strong><span>Last 2 months</span>
              <div class="count-number">342</div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-bill"></i></div>
            <div class="name"><strong class="text-uppercase">New Invoices</strong><span>Last 2 days</span>
              <div class="count-number">123</div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-list"></i></div>
            <div class="name"><strong class="text-uppercase">Open Cases</strong><span>Last 3 months</span>
              <div class="count-number">92</div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-list-1"></i></div>
            <div class="name"><strong class="text-uppercase">New Cases</strong><span>Last 7 days</span>
              <div class="count-number">70</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Header Section-->
  <section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-3 col-md-6">
          <div class="wrapper to-do">
            <header>
              <h2 class="display h4">To do List</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </header>
            <ul class="check-lists list-unstyled">
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
                <label for="list-1">Similique sunt in culpa qui officia</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                <label for="list-2">Ed ut perspiciatis unde omnis iste</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                <label for="list-3">At vero eos et accusamus et iusto </label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                <label for="list-4">Explicabo Nemo ipsam voluptatem</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                <label for="list-5">Similique sunt in culpa qui officia</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                <label for="list-6">At vero eos et accusamus et iusto </label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-7" name="list-7" class="form-control-custom">
                <label for="list-7">Similique sunt in culpa qui officia</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-8" name="list-8" class="form-control-custom">
                <label for="list-8">Ed ut perspiciatis unde omnis iste</label>
              </li>
            </ul>
          </div>
        </div>
        <!-- Pie Chart-->
        <div class="col-lg-3 col-md-6">
          <div class="wrapper project-progress">
            <h2 class="display h4">Project Beta progress</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="pie-chart">
              <canvas id="pieChart"></canvas>
            </div>
          </div>
        </div>
        <!-- Line Chart -->
        <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
          <div class="wrapper sales-report">
            <h2 class="display h4">Sales marketing report</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
            <div class="line-chart">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statistics Section-->
  <section class="statistics section-padding section-no-padding-bottom">
    <div class="container-fluid">
      <div class="row d-flex align-items-stretch">
        <div class="col-lg-4">
          <!-- Income-->
          <div class="wrapper income text-center">
            <div class="icon"><i class="icon-line-chart"></i></div>
            <div class="number">126,418</div><strong class="text-primary">All Income</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Monthly Usage-->
          <div class="wrapper data-usage">
            <h2 class="display h4">Monthly Usage</h2>
            <div class="row d-flex align-items-center">
              <div class="col-sm-6">
                <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
              </div>
              <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- User Actibity-->
          <div class="wrapper user-activity">
            <h2 class="display h4">User Activity</h2>
            <div class="number">210</div>
            <h3 class="h4 display">Social Users</h3>
            <div class="progress">
              <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
            </div>
            <div class="page-statistics d-flex justify-content-between">
              <div class="page-visites"><span>Pages Visites</span><strong>230</strong></div>
              <div class="new-visites"><span>New Visites</span><strong>73.4%</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Updates Section -->
  <section class="updates section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <!-- Recent Updates            -->
          <div id="new-updates" class="wrapper recent-updated">
            <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
              <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">News Updates</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
            </div>
            <div id="updates-box" role="tabpanel" class="collapse show">
              <ul class="news list-unstyled">
                <!-- Item-->
                <li class="d-flex justify-content-between"> 
                  <div class="left-col d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                  <div class="right-col text-right">
                    <div class="update-date">24<span class="month">Jan</span></div>
                  </div>
                </li>
                <!-- Item-->
                <li class="d-flex justify-content-between"> 
                  <div class="left-col d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                  <div class="right-col text-right">
                    <div class="update-date">24<span class="month">Jan</span></div>
                  </div>
                </li>
                <!-- Item-->
                <li class="d-flex justify-content-between"> 
                  <div class="left-col d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                  <div class="right-col text-right">
                    <div class="update-date">24<span class="month">Jan</span></div>
                  </div>
                </li>
                <!-- Item-->
                <li class="d-flex justify-content-between"> 
                  <div class="left-col d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                  <div class="right-col text-right">
                    <div class="update-date">24<span class="month">Jan</span></div>
                  </div>
                </li>
                <!-- Item-->
                <li class="d-flex justify-content-between"> 
                  <div class="left-col d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h3 class="h5">Lorem ipsum dolor sit amet.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                  </div>
                  <div class="right-col text-right">
                    <div class="update-date">24<span class="month">Jan</span></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Daily Feed-->
        <div class="col-lg-4 col-md-6">
          <div id="daily-feeds" class="wrapper daily-feeds">
            <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
              <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Your daily Feeds </a></h2>
              <div class="right-column">
                <div class="badge badge-primary">10 messages</div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
            <div id="feeds-box" role="tabpanel" class="collapse show">
              <div class="feed-box">
                <ul class="feed-elements list-unstyled">
                  <!-- List-->
                  <li class="clearfix">
                    <div class="feed d-flex justify-content-between">
                      <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-5.jpg" alt="person" class="img-fluid rounded-circle"></a>
                        <div class="content"><strong>Aria Smith</strong><small>Posted a new blog </small>
                          <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                        </div>
                      </div>
                      <div class="date"><small>5min ago</small></div>
                    </div>
                  </li>
                  <!-- List-->
                  <li class="clearfix">
                    <div class="feed d-flex justify-content-between">
                      <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-2.jpg" alt="person" class="img-fluid rounded-circle"></a>
                        <div class="content"><strong>Frank Williams</strong><small>Posted a new blog </small>
                          <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                          <div class="CTAs"><a href="#" class="btn btn-xs btn-dark"><i class="fa fa-thumbs-up"> </i>Like</a><a href="#" class="btn btn-xs btn-dark"><i class="fa fa-heart"> </i>Love</a></div>
                        </div>
                      </div>
                      <div class="date"><small>5min ago</small></div>
                    </div>
                  </li>
                  <!-- List-->
                  <li class="clearfix">
                    <div class="feed d-flex justify-content-between">
                      <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-3.jpg" alt="person" class="img-fluid rounded-circle"></a>
                        <div class="content"><strong>Ashley Wood</strong><small>Posted a new blog </small>
                          <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                        </div>
                      </div>
                      <div class="date"><small>5min ago</small></div>
                    </div>
                  </li>
                  <!-- List-->
                  <li class="clearfix">
                    <div class="feed d-flex justify-content-between">
                      <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle"></a>
                        <div class="content"><strong>Jason Doe</strong><small>Posted a new blog </small>
                          <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                        </div>
                      </div>
                      <div class="date"><small>5min ago</small></div>
                    </div>
                    <div class="card"> <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</small></div>
                    <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-dark"><i class="fa fa-thumbs-up"> </i>Like</a></div>
                  </li>
                  <!-- List-->
                  <li class="clearfix">
                    <div class="feed d-flex justify-content-between">
                      <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-6.jpg" alt="person" class="img-fluid rounded-circle"></a>
                        <div class="content"><strong>Sam Martinez</strong><small>Posted a new blog </small>
                          <div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>
                        </div>
                      </div>
                      <div class="date"><small>5min ago</small></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Recent Activities                            -->
        <div class="col-lg-4 col-md-6">
          <div id="recent-activities-wrapper" class="wrapper recent-activities">
            <div id="activites-header" class="card-header d-flex justify-content-between align-items-center">
              <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box">Recent Activities</a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
            </div>
            <div id="activities-box" role="tabpanel" class="collapse show">
              <ul class="activities list-unstyled">
                <!-- Item-->
                <li>
                  <div class="row">
                    <div class="col-4 date-holder text-right">
                      <div class="icon"><i class="icon-clock"></i></div>
                      <div class="date"> <span>6:00 am</span><span class="text-info">6 hours ago</span></div>
                    </div>
                    <div class="col-8 content"><strong>Meeting</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                  </div>
                </li>
                <!-- Item-->
                <li>
                  <div class="row">
                    <div class="col-4 date-holder text-right">
                      <div class="icon"><i class="icon-clock"></i></div>
                      <div class="date"> <span>6:00 am</span><span class="text-info">6 hours ago</span></div>
                    </div>
                    <div class="col-8 content"><strong>Meeting</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                  </div>
                </li>
                <!-- Item-->
                <li>
                  <div class="row">
                    <div class="col-4 date-holder text-right">
                      <div class="icon"><i class="icon-clock"></i></div>
                      <div class="date"> <span>6:00 am</span><span class="text-info">6 hours ago</span></div>
                    </div>
                    <div class="col-8 content"><strong>Meeting</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                  </div>
                </li>
                <!-- Item-->
                <li>
                  <div class="row">
                    <div class="col-4 date-holder text-right">
                      <div class="icon"><i class="icon-clock"></i></div>
                      <div class="date"> <span>6:00 am</span><span class="text-info">6 hours ago</span></div>
                    </div>
                    <div class="col-8 content"><strong>Meeting</strong>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
    