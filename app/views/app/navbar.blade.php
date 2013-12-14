<div class="navbar navbar-inverse">
        <div class="navbar-inner">
                <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  {{ HTML::link('/', '6bey', array('class' => 'brand')) }}
                  
          <div class="nav-collapse collapse">
            <ul class="nav"> 
                    <li class="active">
                      {{ HTML::link('/', '首页') }}
                    </li>
                    <li class="active">
                      {{ HTML::link('/topics', '讨论区') }}
                    </li>
                    <li class="active">
                      {{ HTML::link('/', '问答社区') }}
                    </li>
                    <li class="active">
                      {{ HTML::link('/', '师兄笔记') }}
                    </li>
                    <li class="active">
                      {{ HTML::link('/', '习题库') }}
                    </li>
            </ul>
            @if(Auth::check())
            <ul class="nav pull-right">
                    <li class="dropdown">
                    <a class="dropdown-toggle" href="http://www.6bey.com//active/message">
                          <span class="glyphicon glyphicon-envelope"></span> 站内信
                          <span class="badge badge-info msg_num"></span>
                        </a>
                  </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">你好,
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    {{ HTML::link('/', '个人资料') }}
                  </li>
                  <li>
                    {{ HTML::link('/', '修改头像') }}
                  </li>
                  <li>
                    {{ HTML::link('/', '邮件通知选项') }}
                  </li>
                  <li>
                    {{ HTML::link('/', '绑定新浪微博') }}
                  </li>
                  <li class="divider"></li>
                  <li>
                    {{ HTML::link('/', '退出') }}
                  </li>
                 </ul>
              </li>
            </ul>
            @else
              <ul class="nav pull-right">
                      <li>
                        {{ HTML::link('/users/login', '登录') }}
                      </li>
                       <li>
                        {{ HTML::link('/users/register', '注册') }}
                      </li>
              </ul>
            @endif
                      
          </div>
        </div>
      </div>
</div><!-- end navbar -->