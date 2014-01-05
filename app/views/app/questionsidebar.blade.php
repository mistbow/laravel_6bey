<div class="siderbar-unit" style="text-align:center;">
    {{ HTML::link('/questions/create', '问个问题', array('class' => 'btn btn-success')) }}
</div> <!-- end siderbar-unit -->

<div class="siderbar-unit" style="text-align:center;">
        <h2>微信二维码</h2>
        <div class="content" style="text-align:center">
            {{ HTML::image('images/8cm.jpg', $alt="DRCSports"
                    , $attributes = array('height' => '100%', 'width' => '100%'))}}
            <h4 class="text-center">微信号：calvin6bey</h4>
        </div>
</div>        
                    
<div class="siderbar-unit" style="text-align:center;">
        <h2>社区最新动态</h2>
        <div class="content" style="text-align:center">
        <div>
            {{ HTML::link('/', '如何获得6bey邀请码?') }}
        </div>
        <div>
            {{ HTML::link('/', '如何获得6bey官方T-Shirt??') }}
    </div>
          <div>
            {{ HTML::link('/', '如何加入6bey社区?') }}
          </div>
</div>