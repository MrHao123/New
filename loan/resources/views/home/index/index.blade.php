@extends('header')
@section('content')
     <!-- 广告位 -->
   
<div class="chedai-banner">
     <style>

             #frame{position:absolute;left:29%;right:top:0px;width:800px;height:280px;overflow:hidden;border-radius:5px;text-align:center;}
             #dis{position:absolute;left:1300px;top:210px;opacity:.5;text-align:center}
             #dis li{display:inline-block;width:200px;height:22px;float:left; text-align:center; position: absolute;font-size:20px;color:#16D0C3;border-radius:10px;}
             #name{position:absolute;left:1300px;top:180px;width:200px;height:21px;font-size:20px;color:#EA2000;border-radius:10px;}
             #photos img{float:right;width:800px;height:280px; }
             #photos {  position: absolute;z-index:9;  width: calc(800px * 4);/*---修改图片数量的话需要修改下面的动画参数*/  }
             .play{ animation: ma 10s ease-out infinite alternate;}
             @keyframes ma {
                 0%,25%  {   margin-left: 0px;}
                 30%,50% {  margin-left: -800px;}
                 55%,75% {  margin-left: -1600px;}
                80%,100% {  margin-left: -2400px;}

            }
         </style>·
   
    <div id="frame" >

     <div id="photos" class="play">
      <p id="box"></p>
             <?php foreach ($data as $val) : ?> 
                <tr>
                <img  src="<?php echo  '/admin/'.$val->advertising_url?>" >
                <ul id="dis"><li>{{$val->advertising_desc}}</li></ul>
                </tr>
           <?php endforeach ?> 
       
    </div>
    </div>
 

    <div class="cd-bn-box">
    </div>
</div>




    <!-- 广告位 -->

            <!--18贷款列表页   开始-->
<div class="dai-content w1120" style="width: 800px;">
    <div class="dai-left f-l">
        <div class="dai-l-title1">
            <h3>出借专区</h3>
        </div>
            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai"  style="height:200px">
                        <div class="dai-k-l f-l">
                            <a href="#"><img src="{{asset('home/images/ferd.png')}}"  style="width: 55px;height: 110px" /></a>
                        </div>
                        <div class="dai-k-r f-r">
                            <div class="dai-r-top">
                                <h3 class="h31 f-l"><a href="#">富二贷 - 助业贷</a></h3>
                                {{--<a href="#" class="a1 f-l">贷款通</a>--}}
                                {{--<a href="#" class="a2 f-l">推荐</a>--}}
                                {{--<a href="#" class="a3 f-l">置顶</a>--}}
                                <div style="clear:both;"></div>
                            </div>
                            <ul class="dai-r-ft">
                                <li>
                                    <p class="p1"><a href="#">无需抵押</a></p>
                                    <p class="p2"><a href="#">企业主 个体户 可申请</a></p>
                                    <p class="p3"><a href="#">5天放款</a></p>
                                </li>
                                <li>
                                    <p class="g-p"><a href="#">对信用情况有要求</a></p>
                                    <p class="g-p"><a href="#">对年龄有要求</a></p>
                                    <p class="g-p"><a href="#">有逾期情况要求</a></p>
                                </li>
                                <li>
                                    <p class="g-p">总利息　　<span>1.55万元</span></p>
                                    <p class="g-p">月　供　　<strong>5457元</strong></p>
                                    <div class="g-p1">
                                        月利率0% + 月费2.58%
                                        <div class="g-p1-tan">
                                            <p>月利率为0%</p>
                                            <p>每月另收贷款额的2.58%为管理费</p>
                                            <p>可以提前还款，前三个月内违约金为到账金额的，4个月后违约金为到账金额的5%</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button>查看</button>
                                    <p class="g-p2">成功率<img src="{{asset('home/images/daikuan-09.gif')}}" /></p>
                                    <p class="g-p2">25349人成功申请</p>
                                </li>
                                <div style="clear:both;"></div>
                            </ul>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
     </div>

     <div class="dai-left f-l">
        <div class="dai-l-title1">
            <h3>出借流程图</h3>
        </div>
            <div class="dai-con-box" id="lct">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai">
                        <div class="dai-k-l f-l">
                           <a href="#"><img src="{{asset('home/images/icon6.png')}}"  style="width: 760px;height: 110px"/></a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
     </div>
<!-- 出借流程图 -->
<!-- 贷款流程图 -->
     <div class="dai-left f-l">
        <div class="dai-l-title1">
            <h3>贷款流程图</h3>
        </div>

            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai">
                        <div class="dai-k-l f-l">
                            <a href="#"><img  src="{{asset('home/images/icon5.png')}}" style="width: 760px;height: 110px"/></a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
     </div>
<!-- 贷款流程图 -->
<!-- 网站信息介绍 -->
     <div class="dai-left f-l">
        <div class="dai-l-title1">
            <h3>网站信息介绍</h3>
        </div>
            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai"  style="height:500px">



                        <a href="#"><img src="{{asset('home/images/fed.png')}}" style="width: 785px;height: 500px"/></a>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
     </div>
<!-- 网站信息介绍 -->
</div>
<!-- 底部固定 -->
 <div style="clear:both;"></div>
 <!-- 底部固定 -->
</body>
</html>
@endsection
