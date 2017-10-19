@extends('header')
@section('content')
@include('common.left')
    <label id="typeValue" style="display:none;"> </label>
    <script>
		$(function(){
		    $('.quick-tit').click(function(){
		      
		      $(this).addClass('pay-cur');
		      $(this).siblings().removeClass('pay-cur');
		      $('.quick-main').show();
		      $('.online-main').hide();
		      
		      $(".pay-tipcon").hide();
		      $(".pay-tipcon2").show();

		    })

		    $('.online-tit').click(function(){
		      
		      $(this).addClass('pay-cur');
		      $(this).siblings().removeClass('pay-cur');
		      $('.quick-main').hide();
		      $('.online-main').show();

		      $(".pay-tipcon2").hide();
		      $(".pay-tipcon").show();
		    })
	  });
		//<![CDATA[
			function showSpan(op){
				$("body").append("<div id='mask'></div>");
				$("#mask").addClass("mask").css("display","block");
	
				$("#"+op).css("display","block");
			}
	
			function displaySpan(op){
				$("#mask").css("display","none");
				$("#"+op).css("display","none");
			}
		//]]>
		</script>
  
    <div class="personal-main">
      <div class="personal-pay">
        <h3><i>充值</i></h3>
        <div class="quick-pay-wrap">
          <h4> <span class="quick-tit pay-cur"><em>快捷支付</em></span> <span class="online-tit"><em>网银充值</em></span> </h4>
          <form id="form" name="form" method="post" action="" >
            <div class="quick-main">
              <div class="fl quick-info">
                <div class="info-1"> <span class="info-tit">充值金额</span> <span class="info1-input">
                  <input id="form:actualMoney1" type="text" name="" class="pay-money-txt" maxlength="10" >
                  <em>元</em> </span> <span class="quick-error"> </span> </div>
                <div class="info-tips">亿人宝提醒您：充值金额超过50000元时，请切换到网银充值</div>
                <div class="info-2"> <span class="info-tit">银行卡号</span> <span class="info2-input">
                  <input id="form:bankCardNo" type="text" name="form:bankCardNo" class="tx-txt">
                  <em class="info2-bank" style="display: none;">
                  <label id="form:defaultBankName" style="font-size:16px;"> </label>
                  </em> </span> <span class="quick-error3" id="bankCardError"></span> </div>
                <div class="bank-check" id="bank-check2"> <b class="selected" id="bankProtocol1"></b><span class="bank-agree">我同意并接受<a href="#" target="_blank">《亿人宝投资咨询与管理服务电子协议》</a></span> <span class="error" id="bankProtocol_message" style="display:none;margin-top:-3px;">请同意协议内容！</span> </div>
                <input type="submit" name="" value="充值" class="btn-paycz" onclick="return getShowPayVal1()">
              </div>
              <div class="fr bank-info">
                <p class="bank-tit">快捷支付支持银行：</p>
                <div class="bank-pic"></div>
              </div>
            </div>
          </form>
          <div class="online-main" style="display:none;">
            <form id="recharge" name="recharge" method="post" action="#" target="_blank">
              <div class="online-mar">
                <div class="quick-info quick-info-width">
                  <div class="info-1"> <span class="info-tit">充值金额</span> <span class="info1-input">
                    <input id="recharge:actualMoney" type="text" name="recharge:actualMoney" class="pay-money-txt" maxlength="10" onblur="checkRecharge()" onkeydown="amount(this);keyUpcheck()" onkeyup="amount(this);keyUpcheck()">
                    <em>元</em> </span> <span id="actualMoneyErrorDiv" class="quick-error2"> </span> </div>
                </div>
              </div>
              <div> <span><font style=" color:#848484;font-weight:bold; margin-left:80px; height:32px; line-height:32px; font-size:12px;">亿人宝提醒您：充值前，请核实您的可用支付额度！</font></span> </div>
              <div class="pay-bank" id="pay-bank">
                <h6>请选择充值银行</h6>
                <span id="showpay" style="display:none;">icbc</span>
                <ul id="paysSpan" style="height:150px;">
                  <li><img src="{{asset('home/personl/images/bank_002.gif')}}" property1="icbc" class="on"><em></em><i></i></li>
                  <li><img src="{{asset('home/personl/images/bank_006.gif')}}" property1="abc"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_001.gif')}}" property1="boc"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_004.gif')}}" property1="ccb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_008.gif')}}" property1="hxb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_007.gif')}}" property1="comm"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_003.gif')}}" property1="cmb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_011.gif')}}" property1="ceb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_015.gif')}}" property1="cncb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_010.gif')}}" property1="cmsb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_012.gif')}}" property1="cgb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank_bos.gif')}}" property1="shb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bccb.gif')}}" property1="bjb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank-nsyh.gif')}}" property1="rcb"><em></em></li>
                  <li><img src="{{asset('home/personl/images/bank-xyyh.gif')}}" property1="cib"><em></em></li>
                </ul>
                <span class="pay-other"><span class="paytxt">选择其他银行卡</span><i class="paydown"></i></span> </div>
              <div class="pay-bankstate"> <span class="bankstate-head"><i class="fl">请关注您的充值金额是否超限：</i><i class="fr" id="show-pay-hotLine">工商银行客服热线：95588</i></span>
                <table>
                  <tbody>
                    <tr>
                      <td>单笔限额（元）</td>
                      <td>每日限额（元）</td>
                      <td>需要满足条件</td>
                      <td>备注</td>
                    </tr>
                    <tr>
                      <td width="15%">5000</td>
                      <td width="15%">5000</td>
                      <td width="20%">工银e支付</td>
                      <td width="50%" rowspan="5">请到中国工商银行各营业网点办理成为个人网上银行客户并开通网上支付功能（静态密码用户进行网上支付如超过累计金额请直接到营业网点申领电子口令卡或USB Key）；</td>
                    </tr>
                    <tr>
                      <td>500</td>
                      <td>1000</td>
                      <td>电子口令卡</td>
                    </tr>
                    <tr>
                      <td>2000</td>
                      <td>5000</td>
                      <td>短信认证</td>
                    </tr>
                    <tr>
                      <td>50万</td>
                      <td>100万</td>
                      <td>电子密码</td>
                    </tr>
                    <tr>
                      <td>100万</td>
                      <td>100万</td>
                      <td>U盾</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="bank-check" id="bank-check"> <b class="selected" id="bankProtocol"></b><span class="bank-agree">我同意并接受<a href="/node/Candyprivacypolicy/candyprivacypolicy_tzzxyglfwdzxy" target="_blank">《亿人宝金融投资咨询与管理服务电子协议》</a></span> <span class="error" id="bankProtocol_message" style="display:none;margin-top:-3px;">请同意协议内容！</span> </div>
              <input type="submit" name="recharge:j_idt96" value="充值" class="btn-paycz" onclick="return getShowPayVal()">
              <input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState">
            </form>
          </div>
          <div class="pay-tipcon" style="display:none;"> <b>充值提示：</b><br>
            1．亿人宝充值过程免费，不向用户收取任何手续费。<br>
            2．为了您的账户安全，请在充值前进行身份认证、手机绑定以及交易密码设置。<br>
            3．您的账户资金将通过丰付支付第三方平台进行充值。<br>
            4．请注意您的银行卡充值限制，以免造成不便。<br>
            5．如果充值金额没有及时到账，请联系客服—400-999-8850 </div>
          <div class="pay-tipcon2"> <b>温馨提示：</b><br>
            1. 投资人充值过程全程免费，不收取任何手续费。<br>
            2. 为防止套现，所充资金必须经投标回款后才能提现。<br>
            3. 使用快捷支付进行充值，可能会受到不同银行的限制，如需大额充值请使用网银充值进行操作。<br>
            4. 充值/提现必须为银行借记卡，不支持存折、信用卡充值。<br>
            5. 严禁利用充值功能进行信用卡套现、转账、洗钱等行为，一经发现，将封停账号30天。<br>
            6. 充值期间，请勿关闭浏览器，待充值成功并返回首页后，所充资金才能入账，如有疑问，请联系客服。<br>
            7. 充值需开通银行卡网上支付功能，如有疑问请咨询开户行客服。<br>
          </div>
        </div>
      </div>
      <div class="alert-450 alert-h220" id="alert-rechargeFailture" style="display:none;">
        <div class="alert-title">
          <h3>登录网上银行充值</h3>
          <span class="alert-close" onclick="displaySpan('alert-rechargeFailture')"></span></div>
        <div class="alert-main">
          <form id="rechargeFailtureForm">
            <p class="msg1"><i class="no-icon"></i><i class="msgtxt">充值失败</i>您可以：<a href="#"><font color="#28A7E1">选择其他银行充值</font></a>或查看<a href="#"><font color="#28A7E1">充值帮助</font></a></p>
          </form>
        </div>
      </div>
      <div class="clear"></div>
      <div class="alert-400 alert-h220" id="alert-ClickDialog" style="display:none;">
        <div class="alert-title">
          <h3>消息</h3>
        </div>
        <div class="alert-main">
          <p class="msg4"> </p>
          <p class="msg-a"><a class="btn-ok btn-145" onclick="displaySpan('alert-ClickDialog')" href="#">关 闭</a></p>
        </div>
      </div>
      <div class="alert-400 alert-h220" id="alert-unbindMsgDialog" style="display:none;">
        <div class="alert-title">
          <h3>消息</h3>
        </div>
        <div class="alert-main">
          <p class="msg4"> </p>
          <p class="msg-a"><a class="btn-ok btn-145" onclick="displaySpan('alert-unbindMsgDialog')" href="#">关 闭</a></p>
        </div>
      </div>
      <div class="alert-450" id="alert-tyht" style="display:none;">
        <div class="alert-title">
          <h3>提示信息</h3>
          <span class="alert-close" onclick="displaySpan('alert-tyht')"></span></div>
        <div class="alert-main" style="margin-bottom: 35px;margin-left: 25px;">
          <p class="msg4"> 你需要阅读并同意《亿人宝金融投资咨询与管理服务电子协议》 </p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--网站底部-->
<script src="script/jquery.datetimepicker.js" type="text/javascript"></script>
<script src="script/datepicker.js" type="text/javascript"></script>
</body>
</html>
@endsection