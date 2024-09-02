<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;900&display=swap" as="font" type="font/woff" crossorigin/>

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;900&display=swap');
header, main, footer{
  font-family: 'Noto Sans KR', sans-serif;
}
section{
  border-top:1px solid #ECECEC;
}
body{
  line-height:1;
}
a{
  text-decoration: none;
  /* font-size:12px; */
  color:#333;
  cursor: none;
}
header{
    position: relative;
    z-index: 9999;
    background-color: #fff;
    width: 100%;
    margin: 0px auto;
    height: 55px;
    display: flex;
    justify-content: space-between;
    box-sizing: border-box;
    padding:0 7px;
  }
  header input[type=checkbox]{
    display:none;
  }
  .toggle{
    position:relative;
    width: 55px;
    height: 55px;
  }
  .toggle > img{
    position:absolute;
    width:27px;
    height:27px;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%)
  }
  header > a{
    position:relative;
    width: 55px;
    height: 55px;
  }
  header > a > img{
    position:absolute;
    width:35px;
    height:35px;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%)
  }
  header > h1 > a{
    width: 300px;
    height: 55px;
    letter-spacing: -1px;
    color: #333;
    /* font: 500 18px/1.3em "Noto Sans KR"; */
    display:flex;
    justify-content: center;
    font-size:1.063rem;
    font-weight: 600;
    line-height:55px;
    position:relative;
  }
  header > h1 img{
    width:36px;
    height:36px;
    padding-right:2px;
    transform:translateY(11px)
  }

    .total_mnu{
      position: fixed;
      top:0;
      left:-100%;
      width:100%;
      height: 100%;
      overflow-Y:scroll;
      margin:0px auto;
      background-color: #fff;
      transition: 0.3s;
      z-index:9999;
      box-sizing: border-box;
      background-color: #F8F9FC;
      /* opacity: 0.2; */
    }
    .total_mnu > .top_box{
      border-bottom:1px solid #E6ECF1;
      background-color:#fff;
    }
    .total_mnu > .top_box > .top_btn{
      display:flex;
      justify-content: space-between;
    }
    .top_btn > li{
      padding: 5px;
      width:50%;
      display:flex;
    }
    .top_btn > li:first-child{
      justify-content: flex-start;
    }
    .top_btn > li:last-child{
      justify-content: flex-end;
      padding-right: 20px;
    }
    .top_btn > li > a{
      display:flex;
      height: 24px;
      padding: 8px 0px 8px 8px;
    }
    .top_btn > li > a > img{
      width:24px;
      height: 24px;

    }
    .top_btn > li > a > span{
      line-height: 28px;
      letter-spacing: -0.04em;
      color: #888888;
      font-size:0.875rem;
      padding-right: 5px;
    }
    .total_mnu > .info_box{
      padding: 26px 20px 29px;
      width:100%;
      box-sizing: border-box;
      background-color:#fff;
    }
    .info_box > .lnb02{
      display: flex;
      width:100%;
      box-sizing: border-box;
    }
    .lnb02 > li{
      line-height: 20px;
    }
    /* .lnb02 > li:first-child{
      width:51px;
      height: 51px;
    }
    .lnb02 > li:last-child{
      width:90%;
      padding:7px 5px;
    }
    .lnb02 > li > img{
      width:100%;
    } */
    .lnb02 > li > strong{
      display:block;
      letter-spacing: -0.01em;
      color: #333333;
      font-size:1rem;
      font-weight: bolder;
    }
    .lnb02 > li > span{
      display:block;
      letter-spacing: -0.04em;
      color: #555555;
      font-size:0.813rem;
      font-weight: normal;
    }
    
    .info_box > .lnb03{
      display:flex;
      justify-content: space-between;
      padding-top:17px;
    }
    .lnb03 > li{
      width:50%;
      height:43px;
      background: #FFFFFF;
      border: 1px solid #EEEEEE;
    }
    .lnb03 > li:first-child{
      border-radius: 4px 0px 0px 4px;
      border-right:none;
      background-color: #4F8EF7;
    }
    .lnb03 > li:last-child{
      border-radius: 0px 4px 4px 0px;
    }
    .lnb03 > li > a{
      display:block;
      letter-spacing: -0.07em;
      color: #888888;
      font-size:0.875rem;
      text-align: center;
      line-height: 43px;
    }
    .lnb03 > li:first-child > a{
      color:#fff;
      font-weight: 600;
    }

    .total_mnu > .main_mnu{
      background-color: #F8F9FC;
      padding:30px 20px 18px;
      width:100%;
      box-sizing: border-box;
      border-top:1px solid #EAF0F8;
    }
    .main_mnu > h3{
      letter-spacing: -0.07em;
      color: #888888;
      font-size:0.938rem;
      font-weight: normal;
    }
    .main_mnu > .gnb{
      width:100%;
      padding:11px 0px 19px;
      display:grid;
      grid-gap:12px;
      grid-template-columns: repeat(3, 31%);
      grid-template-areas:
        "item01 item02 item03"
        "item04 item05 item06";
      justify-content: center;
    }
    .gnb > li{
      border-radius: 20px;
      background: #FFFFFF;
      border: 1px solid #EAF0F8;
      box-shadow: 0px 4px 14px rgba(190, 197, 215, 0.25);
      padding-bottom: 98.16%;
      height: 0;
    }
    .gnb > .item01{
      grid-area:item01;
      background: linear-gradient(135.14deg, #B3D1FF 2.9%, #448FFF 96.43%);
      border: 1px solid #EAF0F8;
      box-shadow: inset 0px -3px 3px rgba(0, 0, 0, 0.07);
    }
    .gnb > .item02{
      grid-area:item02;
      background: linear-gradient(136.52deg, #BBE3FF 4.91%, #6BC0FD 97.61%);
      border: 1px solid #DCE3ED;
      box-shadow: 0px 4px 14px rgba(190, 197, 215, 0.25), inset 0px -3px 3px rgba(140, 148, 171, 0.15);
    }
    .gnb > .item03{
      grid-area:item03;
      background: linear-gradient(135.28deg, #B0F1CA 4.02%, #52CB82 95.54%);
      border: 1px solid #DCE3ED;
      box-shadow: 0px 4px 14px rgba(190, 197, 215, 0.25), inset 0px -3px 3px rgba(0, 0, 0, 0.07);
    }
    .gnb > .item04{
      grid-area:item04;
    }
    .gnb > .item05{
      grid-area:item05;
    }
    .gnb > .item06{
      grid-area:item06;
    }
    .gnb > li > a{
      display:block;
      width:100%;
      box-sizing: border-box;
      text-align: center;
      letter-spacing: -0.04em;
      font-size: 0.90625rem;
      font-weight: normal;
      color:#666;
      height: 0;
      padding-bottom:100%;
    }
    .gnb > .item01 > a{
      color:#fff;
      font-weight: bolder;
    }
    .gnb > .item02 > a{
      color:#fff;
      font-weight: bolder;
    }
    .gnb > .item03 > a{
      color:#fff;
      font-weight: bolder;
    }
    .gnb > li > a > img{
      display:block;
      margin:0px auto;
      padding: 24px 0px 15px;
      width:36.5%;
    }
    .gnb > .item04 > a > img, .gnb > .item05 > a > img, .gnb > .item06 > a > img{
      padding:33px 0px 18px;
      width:32px;
      height:32px;
    }
    .shop_nav{
      background: #FFFFFF;
      border: 1px solid #EAF0F8;
      box-shadow: 0px 4px 14px rgba(190, 197, 215, 0.25), inset 0px -3px 3px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
      display:flex;
      justify-content: space-between;
    }
    .shop_nav > li{
      width:33.33%;
      box-sizing: border-box;
      text-align: center;
      padding:16px 0px;
    }
    .shop_nav > li > a{
      display:block;
      border-right: 1px solid #EAF0F8;
      width:100%;
      height: 72px;
      padding:4px 0px 10px;
      box-sizing: border-box;
    }
    .shop_nav > li > a > .bg_round{
      width: 39px;
      height: 39px;
      border-radius: 50%;
      margin:0px auto;
      line-height: 39px;
      vertical-align: middle;
      /* margin-bottom:6px; */
    }
    /* .shop_nav > li:nth-child(2) > a > .bg_round{
      background-color: #D9E4FB;
      margin-bottom:6px;
    }
    .shop_nav > li:nth-child(2) > a > .bg_round > img{
      vertical-align: middle;
    } */
    .shop_nav > li > a > img{
      display:block;
      margin: 0px auto;
      width:39px;
      height:39px;
      margin-bottom:6px;
    }
    .shop_nav > li > a > span{
      letter-spacing: -0.04em;
      color: #444444;
      font-size:0.750rem;
      font-weight: normal;
    }
    .shop_nav > li > a > span > strong{
      font-weight: bolder;
      font-size:0.875rem;
    }
    .shop_nav > li:last-child > a > span > strong{
      color:#59C36C;
    }

    .point_wrap{
      width:100%;
      background-color:#F8F9FC;
      padding-bottom:2px;
    }
    .point_box{
      background: #FFFFFF;
      border: 1px solid #EAF0F8;
      box-shadow: 0px 4px 14px rgba(190, 197, 215, 0.25), inset 0px -3px 3px rgba(0, 0, 0, 0.15);
      border-radius: 20px;
      width:calc(100% - 40px);
      margin:0px auto 30px;
      padding:28px 26px 22px 21px;
      box-sizing:border-box;
    }
    .pay_point{}
    .pay_point > li{
      display:flex;
      justify-content:space-between;
    }
    .pay_point > li > span{
      line-height:28px;
      letter-spacing: -0.04em;
      color: #000000;
      font-size:1.125rem;
      font-weight:bolder;
    }
    .pay_point > li > .use_info{
      background: #FFFFFF;
      border: 1px solid #E6ECF1;
      border-radius: 39px;
      display:inline-block;
      padding:7px 10px;
      font-weight: 400;
      font-size: 0.750rem;
      letter-spacing: -0.04em;
      color: #5A5A6F;
    }
    .pay_point > li > strong{
      letter-spacing: -0.04em;
      color: #000000;
      font-size: 2rem;
      padding-top:9px;
    }
    .pay_point > li > strong > img{
      width:35px;
      height:35px;
      vertical-align:middle;
    }
    .pay_point > li > strong > span:first-of-type{
      font-weight: 700;
      line-height: 21px;
    }
    .pay_point > li > strong > span:last-of-type{
      font-weight: 400;
      line-height: 38px;
      letter-spacing: -0.04em;
      color: #000000;
    }
    .point_modal{
      width:100%;
      height:100%;
      position:fixed;
      top:0px;
      left:0px;
      background: rgba(159, 159, 159, 0.26);
      z-index:15000;
    }
    .point_use{
      width: calc(100% - 64px);
      min-height: 214px;
      position:relative;
      top:50%;
      left:50%;
      transform:translate(-50%, -50%);
      background: #FFFFFF;
      box-shadow: 0px 4px 8px rgba(176, 176, 196, 0.4);
      border-radius: 8px;
      padding:28px 31px;
      box-sizing: border-box;
    }
    .point_use > h3{
      text-align: center;
      display: flex;
      justify-content: center;
    }
    .point_use > h3 > img{
      transform: translateY(2px);
    }
    .point_use > h3 > strong{
      line-height: 21px;
      font-size:0.938rem;
      font-weight: bold;
      letter-spacing: -0.06em;
      color: #2B383F;
    }
    .point_use > .use_txt{
      text-align: left;
      padding:33px 0px;
    }
    .point_use > .use_txt > h6{
      letter-spacing: -0.04em;
      color: #4F8EF7;
      font-size:0.875rem;
      font-weight:600;
    }
    .point_use > .use_txt > span{
      font-weight: 400;
      font-size: 0.813rem;
      line-height: 20px;
      letter-spacing: -0.04em;
      color: #333333;
      display: block;
      margin-bottom: 16px;
    }
    .point_use > .use_txt > span:last-of-type{
      margin-bottom: 0px;
    }
    .point_use > .c_btn01{
      display:block;
      width:100%;
      margin:0px auto;
      letter-spacing: -0.01em;
      color: #3E4A61;
      font-size:0.938rem;
      border-radius: 4px;
      font-weight: bold;
      line-height: 47px;
      height: 47px;
      padding: 0;
      background: #4F8EF7;
      color:#fff;
      text-align:center;
    }
    
    .act01{
      left:0% !important;
    }
    .top_nav{
      /* padding:10px 0px; */
      width:100%;
      background-color: #fff;
    }
    /* .nav_on{
      font-weight: bold !important;
      border-bottom:2px solid #333 !important;
    } */
    .top_nav > .m_lnb{
      display: flex;
      justify-content: space-between;
      width: 100%;
      box-sizing: border-box;
    }
    .top_nav > .m_lnb::-webkit-scrollbar {
      display: none; /* Chrome, Safari, Opera*/
    }
    .top_nav > .m_lnb > li{
      padding: 10px 5px;
      width: 20%;
      text-align: center;
      box-sizing: border-box;
    }
    .top_nav > .m_lnb > li:first-child{
      width:7%;
    }
    .top_nav > .m_lnb > li > a{
      letter-spacing: -0.04em;
      color: #888888;
      font-size: 1.125rem;
      /* display: block; */
      line-height: 18px;
      padding-bottom:4px;
    }
    .color_on{
      color: #333333 !important;
      font-weight: bold !important;
      border-bottom:2px solid #333 !important;
    }
    /* .nav_act{
      position:fixed;
      top:0px;
      left:0px;
      z-index:500;
      border-bottom: 1px solid #ECECEC;
    } */
    .not_scroll {
      overflow: hidden;
    }
  </style>

  <header>
    <div class="toggle">
      <img src="./img/toggle_btn.png" alt="토글메뉴">
    </div>
  
    <h1>
      <a href="./index.html">
        <img src="./img/header_logo.png" alt="상단로고">
        <span>한국자격검정평가진흥원</span>
      </a>
    </h1>
  
    <nav class="total_mnu">
      <div class="top_box">
        <ul class="top_btn">
          <li>
            <a href="#" title="닫기" class="c_btn">
              <img src="./img/h_nav_close_btn.svg" alt="닫기">
            </a>
          </li>
          <li>
            <a href="./index.html">
              <span>홈으로</span>
              <img src="./img/h_nav_home_btn.svg" alt="메인페이지로 바로가기">
            </a>
          </li>
        </ul>
      </div>
  
      <div class="info_box">
        <ul class="lnb02">
          <!-- <li>
            <img src="./img/header_logo.png" alt="프로필사진">
          </li> -->
          <li>
            <strong>
              <span>한국자격검정평가진흥원</span>
              <span></span>
            </strong>
            <span>로그인하고 무료수강 장학지원에 참여하세요!</span>
          </li>
        </ul>
        <ul class="lnb03">
          <li>
            <a href="login.html" title="로그인">로그인</a>
          </li>
          <li>
            <a href="join.html" title="회원가입">회원가입</a>
          </li>
        </ul>
      </div>
  
      <div class="main_mnu">
        <h3>빠른메뉴</h3>
        <ul class="gnb">
          <li class="item01">
            <a href="./progress_lecture.html" title="나의강의실">
              <img src="./img/h_nav_icon01.png" alt="나의강의실">
              <span>나의강의실</span>
            </a>
          </li>
          <li class="item02">
            <a href="./cer_issued.html" title="발급신청">
              <img src="./img/h_nav_icon02.png" alt="발급신청">
              <span>발급신청</span>
            </a>
          </li>
          <li class="item03">
            <a href="./review_m.html" title="합격후기">
              <img src="./img/h_nav_icon03.png" alt="합격후기">
              <span>합격후기</span>
            </a>
          </li>
          <li class="item04">
            <a href="./enrolment.html" title="수강신청">
              <img src="./img/h_nav_icon06.svg" alt="수강신청">
              <span>수강신청</span>
            </a>
          </li>
          <li class="item05">
            <a href="./curriculum.html" title="교육과정">
              <img src="./img/h_nav_icon05.svg" alt="교육과정">
              <span>교육과정</span>
            </a>
          </li>
          <li class="item06">
            <a href="./procedure.html" title="고객센터">
              <img src="./img/h_nav_icon04.svg" alt="고객센터">
              <span>고객센터</span>
            </a>
          </li>
        </ul>
  
        <ul class="shop_nav">
          <li>
            <a href="certificate3.html" title="결제대기">
              <img src="./img/h_nav_icon07.gif" alt="결제대기">
              <span>결제대기 <strong>6</strong></span>
            </a>
          </li>
          <li>
            <a href="certificate3.html" title="심사중">
              <img src="./img/h_nav_icon08.gif" alt="심사중">
              <span>심사중 <strong>0</strong></span>
            </a>
          </li>
          <li>
            <a href="certificate3.html" title="발급완료">
              <img src="./img/h_nav_icon09.gif" alt="발급완료">
              <span>발급완료 <strong>0</strong></span>
            </a>
          </li>
        </ul>
      </div>
  
      <div class="point_wrap">
        <div class="point_box">
          <ul class="pay_point">
            <li>
              <span>포인트</span>
              <a href="#" title="이용안내" class="use_info">이용안내</a>
            <li>
              <strong>
                <img src="./img/point_coin.png" alt="포인트"><span>0</span><span>원</span>
              </strong>
            </li>
          </ul>
        </div>
      </div>
      
      
    </nav>

    <a href="./progress_lecture.html" title="나의 강의실">
      <img src="./img/my_page.svg" alt="나의 강의실">
    </a>
    
    <script>
      

      var posY;
      $(document).ready(function() {
  
        // .toggle 클릭시 .total_mnu에 act01 서식을 적용해서 전체메뉴 나타나게 함
        $('.toggle').click(function(){

          posY = $(window).scrollTop();

          $("html, body").addClass("not_scroll");
          $('.total_mnu').addClass('act01');
          $('main').css({
            'opacity':'0',
            'top':-posY
          });
        });
  
        // i.fa-times(X버튼) 클릭시 .total_mnu에 적용된 act01 서식을 해제해서 전체메뉴 사라지게 함
        $('.total_mnu .c_btn').click(function(){
          $("html, body").removeClass("not_scroll");
          $('.total_mnu').removeClass('act01');
          $('main').css({'opacity':'1'});
          posY = $(window).scrollTop(posY);
        });
  
        $('.use_info').click(function(){
          let modal2 = `
            <div class="point_modal">
              <div class="point_use">
                <h3>
                  <img src="./img/warning_blue.svg" alt="경고">
                  <strong>포인트 이용안내</strong>
                </h3>
                <div class="use_txt">
                  <h6>01</h6>
                  <span>한검평에서만 사용할 수 있는 포인트입니다.</span>

                  <h6>02</h6>
                  <span>자격증 발급 시 [900원]포인트가 적립되어 다음 자격증 발급 신청 시 사용 가능합니다.</span>

                  <h6>03</h6>
                  <span>100원 단위로 사용 가능합니다.</span>

                  <h6>04</h6>
                  <span>포인트 유효기간은 2년 입니다.</span>

                  <h6>05</h6>
                  <span>유효기간이 지나 소멸된 포인트는 복구되지 않습니다.</span>
                </div>

                <a href="#" title="닫기" onclick="return false;" class="c_btn01">확인</a>
              </div>  
            </div>
          `;

          $('body').append(modal2).fadeIn(); // body 태그 안 뒤쪽에 내용을 추가

          $('.c_btn01').click(function(){
            $('.point_modal').fadeOut();
          });
        });
      });
      $(document).mouseup(function (e){
        var LayerPopup = $(".point_modal");
        if(LayerPopup.has(e.target).length === 0){
          LayerPopup.fadeOut();
        }
      }); 
      
      $(".point_modal").on("fadeIn", function () {
        $("body").addClass("modal-open");
      }).on("fadeOut", function () {
        $("body").removeClass("modal-open")
      });

    </script>
  </header>