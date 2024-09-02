<style>
  /* 상단 헤더 서식 */
header{
  position:relative;
  z-index:9999;
  background-color:#fff;
  width:100%;
  max-width: 640px;
  margin:0px auto;
  height:55px;
}
header input[type=checkbox]{
  display:none;
}
.toggle{
  position:absolute;
  left:0px;
  top:45%;
  transform: translateY(-50%);
  width:3.125em;
  cursor: pointer;
  padding:15px 0px 30px 0px;
  z-index:110;
}
.bar{
  background-color:#333333;
  display:inline-block;
  width:1.171rem;
  height:2px;
  transition:0.3s;
  position: absolute;
  left:50%;
  transform: translateX(-50%);
}
.toggle > span:first-child{top:15px;}
.toggle > span:nth-child(2){top:20px;}
.toggle > span:last-child{top:25px;}

header > a{
  position: absolute;
  right:0px;
  top:45%;
  transform: translateY(-50%);
  width:35px;
  padding:10px 15px;
}
header > a > img{
  width:100%;
}
/* header > a > span */

header > h1{
  position:absolute;
  left:49%;
  top:45%;
  transform:translate(-50%, -50%);
}
header > h1 > a{
  width: 300px;
  height: 40px;
  letter-spacing: -1px;
  color: #333;
  /* font: 500 18px/1.3em "Noto Sans KR"; */
  vertical-align: middle;
  display:flex;
  justify-content: center;
  font-size:19px;
  font-weight: 500;
  line-height:44px;
}
header > h1 img{
  width:36px;
  height:36px;
  padding-right:2px;
  padding-top:4px;
}

/* 전체메뉴 서식 */
.total_mnu{
  position:fixed;
  width:100%;
  max-width: 640px;
  margin:0px auto;
  height: 100%;
  overflow-Y:auto;
  background-color:#fff;
  top:0px;
  left:-100%;
  transition: 0.3s;
  z-index: 1000;
}
.total_mnu > .top_box{
  width:100%;
  max-width: 640px;
  margin:0px auto;
  height:65px;
  position:relative;
  background-color:#2F52F9;
  padding:31px 44px 21px 19px;
  box-sizing: border-box;
}

/* 토글버튼 클릭시 적용되는 서식 */
.act01{
  left:0% !important;
}

/* lnb01 서식 */
.lnb01{
  display:flex;
}
.lnb01 > li{

}
.lnb01 > li > a{
  font-size:1rem;
  color:#fff;
}
.lnb01 > li > a > img{
  display:block;
  position:absolute;
  right:75px;
  width:18px;
  top:60%;
  transform: translateY(-50%);
}
.lnb01 > li > a > i.fa-angle-right{
  margin-left:3px;
  font-size:14px;
  transform: translateY(-1px);
}
.lnb01 > li > a > i.fa-times{
  position:absolute;
  top:60%;
  transform:translateY(-50%);
  right:20px;
  font-size:24px;
  padding:5px 10px;
}

/* lnb02 서식 */
.lnb02{
  display:flex;
  width:100%;
  max-width: 640px;
  margin:0px auto;
  height:96px;
  text-align: center;
  box-sizing: border-box;
  background: #FFFFFF;
  position:relative;
  z-index:9999;
  box-shadow: 0px 4px 4px rgba(169, 180, 221, 0.15);
}
.lnb02 > li{
  width:34%;
  padding:24px 0px;
  box-sizing: border-box;
  position:relative;
}
.lnb02 > li::after{
  content: "";
  display:block;
  width:1px;
  height:48px;
  background-color:#EAF0F8;
  position:absolute;
  top:50%;
  right:0px;
  transform:translateY(-50%);
}
.lnb02 > li:nth-child(2){
  padding:20px 0px;
}
.lnb02 > li img{
  width:24px;
  height:24px;
}
.lnb02 > li:nth-child(2) img{
  width:28px;
  height:28px;
  transform:translateY(3px);
}
.lnb02 > li span{
  display:block;
  font-size:0.813rem;
  font-weight:bold;
  line-height:24px;
}

/* gnb 서식 */
#mnu_wrap{
  width:100%;
  max-width: 640px;
  margin:0px auto;
  position:relative;
}
.gnb{
  float: left;
  width: 25.9375%;
  height:100vh;
  overflow-y:auto; 
  -ms-overflow-style: none;
  border-right:#EAF0F8;
  box-sizing: border-box;
}
.gnb::-webkit-scrollbar{ display:none; }
.gnb > li{
  border-bottom: 1px solid #eaeaf4;
  text-align: center;
}
.g_on{
  background-color: #96BAFF !important;
  color:#fff !important;
}
.gnb > li > a{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 4;
  background-color: #F9FBFE;;
  font-family:'S-CoreDream-6Bold';
  text-align: center;
}
.gnb > li > .empty_box{
  height:90.5px;
}
/* sub_mnu 서식 */
.sub_mnu{
  width: 74%;
  height:100vh;
  position:absolute;
  top:0px;
  right:0px;
  display:none;
  text-align: left;
  border-left:1px solid #EAF0F8;
  box-sizing: border-box;
  padding:32px 35px 0px 35px;
  background-color: #fff;
  overflow-y:auto; 
  -ms-overflow-style: none;
}
.sub_mnu::-webkit-scrollbar{
  display:none;
}
.sub_mnu > h4{
  font-size: 1.125rem;
  line-height: 1.5;
  font-weight: 600;
  color: #000;
  padding-left:10px;
  margin-bottom:10px;
}
.sub_mnu > li{
  border-bottom: 1px solid #eaeaf4;
}
.sub_mnu > li > a{
  position: relative;
  display: block;
  padding: 13px 0 13px 10px;
  color: #222;
  font-size: 0.938rem;
  line-height: 1.5;
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
      /* display: flex; */
    /* justify-content: space-evenly; */
    /* border-bottom:1px solid #ECECEC; */
    overflow-x: auto;
    overflow-y:hidden;
    white-space: nowrap;
    width: 100%;
    max-width: 640px;
    margin: 0px auto;
    box-sizing: border-box;
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
.top_nav > .m_lnb::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera*/
}
.top_nav > .m_lnb > li{
  padding: 10px 5px;
  display: inline-block;
  position: relative;
  height: 100%;
  width: 20%;
  /* padding: 0px 10px; */
  text-align: center;
  box-sizing: border-box;
}
.top_nav > .m_lnb > li:first-child{
  width:12%;
}
.top_nav > .m_lnb > li > a{
  letter-spacing: -0.01em;
  color: #888888;
  font-size: 1.063rem;
  /* display: block; */
  line-height: 18px;
  padding-bottom:6px;
}
.color_on{
  color: #333333 !important;
  font-weight: bold !important;
  border-bottom:2px solid #333 !important;
}
.nav_act{
  position:fixed;
  top:0px;
  left:0px;
  z-index:500;
  border-bottom:1px solid #ECECEC;
}

</style>

<header>
  <div class="toggle">
    <span class="bar">&nbsp;</span>
    <span class="bar">&nbsp;</span>
    <span class="bar">&nbsp;</span>
  </div>

  <h1>
    <a href="#">
      <img src="./images/escrow.png" alt="상단 로고">한국자격검정평가진흥원
    </a>
  </h1>

  <nav class="total_mnu">
      <div class="top_box">
        <ul class="lnb01">
          <li>
            <a href="#" title="회원가입/로그인 하기">회원가입/로그인 하기 <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="index.html">
              <img src="./images/home.png" alt="메인페이지로 바로가기">
            </a>
          </li>
          <li>
            <a href="#" title="닫기">
              <i class="fas fa-times"></i>
            </a>
          </li>
        </ul>
      </div>
  
      <ul class="lnb02">
        <li>
          <a href="#" title="나의 강의실">
            <img src="./images/header_certificate.png" alt="나의 강의실">
            <span>나의 강의실</span>
          </a>
        </li>
        <li>
          <a href="#" title="발급신청">
            <img src="./images/header_lecture.png" alt="발급신청">
            <span>발급신청</span>
          </a>
        </li>
        <li>
          <a href="#" title="합격후기">
            <img src="./images/header_review.png" alt="합격후기">
            <span>합격후기</span>
          </a>
        </li>
      </ul>
  
      <div id="mnu_wrap">
        <ul class="gnb">
          <li>
            <a href="#" title="강사과정">강사과정</a>
            <ul class="sub_mnu sub" id="sub01">
              <h4>강사과정</h4>
              <li><a href="/m/view/indexB141.html?num=615" name="link">예절교육지도사 1급</a></li>
              <li><a href="/m/view/indexB063.html?num=473" name="link">퍼스널컬러컨설턴트 1급</a></li>
              <li><a href="/m/view/indexB019.html?num=414" name="link">캘리그라피지도사 1급</a></li>
              <li><a href="/m/view/indexB072.html?num=522" name="link">쇼핑몰관리사 1급</a></li>
              <li><a href="/m/view/indexB043.html?num=468" name="link">리더십지도사 1급</a></li>
              <li><a href="/m/view/indexB042.html?num=449" name="link">정리수납전문가 1급</a></li>
              <li><a href="/m/view/indexB070.html?num=518" name="link">SNS마케팅전문가 1급</a></li>
              <li><a href="/m/view/indexB079.html?num=533" name="link">플로리스트전문가 1급</a></li>
              <li><a href="/m/view/indexB090.html?num=549" name="link">영어요리지도사 1급</a></li>
              <li><a href="/m/view/indexB101.html?num=561" name="link">가정관리사 1급</a></li>
              <li><a href="/m/view/indexB128.html?num=600" name="link">장애인인식개선지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="병원과정">병원과정</a>
            <ul class="sub_mnu sub" id="sub02">
              <h4>병원과정</h4>
              <li><a href="/m/view/indexB130.html?num=602" name="link">병원원무행정사 1급</a></li> 
              <li><a href="/m/view/indexB008.html?num=393" name="link">병원코디네이터 1급</a></li>
              <li><a href="/m/view/indexB007.html?num=392" name="link">병원행정관리사 1급</a></li>
              <li><a href="/m/view/indexB036.html?num=448" name="link">병원진료접수매니저 1급</a></li>
              <li><a href="/m/view/indexB053.html?num=471" name="link">병원서비스매니저 1급</a></li>
              <li><a href="/m/view/indexB064.html?num=498" name="link">실버병원코디네이터 1급</a></li>
              <li><a href="/m/view/indexB114.html?num=575" name="link">보험심사평가사 1급</a></li>
              <li><a href="/m/view/indexB087.html?num=546" name="link">요양병원관리사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="커피과정">커피과정</a>
            <ul class="sub_mnu sub" id="sub03">
              <h4>커피과정</h4>
              <li><a href="/m/view/indexB071.html?num=519" name="link">커피로스팅마스터 1급</a></li>
              <li><a href="/m/view/indexB061.html?num=494" name="link">티소믈리에 1급</a></li>
              <li><a href="/m/view/indexB049.html?num=463" name="link">커피품질평가사 1급</a></li>
              <li><a href="/m/view/indexB001.html?num=390" name="link">커피바리스타전문가 1급</a></li>
              <li><a href="/m/view/indexB050.html?num=464" name="link">커피핸드드립전문가 1급</a></li>
              <li><a href="/m/view/indexB051.html?num=465" name="link">와인소믈리에 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="심리과정">심리과정</a>
            <ul class="sub_mnu sub" id="sub04">
              <h4>심리과정</h4>
              <li><a href="/m/view/indexB148.html?num=625" name="link">군심리상담사 1급</a></li>
              <li><a href="/m/view/indexB074.html?num=525" name="link">원예심리상담사 1급</a></li>
              <li><a href="/m/view/indexA001.html?num=398" name="link">심리상담사 1급</a></li>
              <li><a href="/m/view/indexA003.html?num=389" name="link">미술심리상담사 1급</a></li>
              <li><a href="/m/view/indexB023.html?num=418" name="link">아동심리상담사 1급</a></li>
              <li><a href="/m/view/indexA005.html?num=399" name="link">아동미술심리상담사 1급</a></li>
              <li><a href="/m/view/indexA006.html?num=397" name="link">심리분석사 1급</a></li>
              <li><a href="/m/view/indexA004.html?num=402" name="link">음악심리상담사 1급</a></li>
              <li><a href="/m/view/indexB025.html?num=420" name="link">다문화심리상담사 1급</a></li>
              <li><a href="/m/view/indexB018.html?num=407" name="link">학교폭력예방상담사 1급</a></li>
              <li><a href="/m/view/indexB009.html?num=394" name="link">부모교육상담사 1급</a></li>
              <li><a href="/m/view/indexB022.html?num=417" name="link">아동학대예방상담사 1급</a></li>
              <li><a href="/m/view/indexB028.html?num=423" name="link">청소년미술심리상담사 1급</a></li>
              <li><a href="/m/view/indexB059.html?num=493" name="link">분노조절상담사 1급</a></li>
              <li><a href="/m/view/indexB122.html?num=593" name="link">노인미술심리상담사 1급</a></li>
              <li><a href="/m/view/indexB052.html?num=450" name="link">노인음악심리상담사 1급</a></li>
              <li><a href="/m/view/indexA002.html?num=385" name="link">노인심리상담사 1급</a></li>
              <li><a href="/m/view/indexB086.html?num=545" name="link">부부심리상담사 1급</a></li>
              <li><a href="/m/view/indexB124.html?num=596" name="link">놀이심리상담사 1급</a></li>
              <li><a href="/m/view/indexB126.html?num=598" name="link">색채심리상담사 1급</a></li>
              <li><a href="/m/view/indexB129.html?num=601" name="link">가족심리상담사 1급</a></li>
              <li><a href="/m/view/indexB131.html?num=603" name="link">스포츠심리상담사 1급</a></li>
              <li><a href="/m/view/indexB138.html?num=610" name="link">문학심리상담사 1급</a></li>
              <li><a href="/m/view/indexB139.html?num=611" name="link">독서심리상담사 1급</a></li>
              <li><a href="/m/view/indexB140.html?num=612" name="link">인지행동심리상담사 1급</a></li>
              <li><a href="/m/view/indexB145.html?num=621" name="link">애니어그램심리상담사 1급</a></li>
              <li><a href="/m/view/indexB146.html?num=622" name="link">푸드아트심리상담사 1급</a></li>
              <li><a href="/m/view/indexB144.html?num=620" name="link">도형심리상담사 1급</a></li>
              <li><a href="/m/view/indexB170.html?num=650" name="link">심리복지상담사 1급</a></li>
              <li><a href="/m/view/indexB164.html?num=643" name="link">DISC심리상담사1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="전문가과정">전문가과정</a>
            <ul class="sub_mnu sub" id="sub05">
              <h4>전문가과정</h4>
              <li><a href="/m/view/indexB150.html?num=627" name="link">주차관리사 1급</a></li>
              <li><a href="/m/view/indexB111.html?num=571" name="link">인사총무관리자 1급</a></li>
              <li><a href="/m/view/indexB034.html?num=429" name="link">CS강사 1급</a></li>
              <li><a href="/m/view/indexB035.html?num=437" name="link">프리젠테이션전문가 1급</a></li>
              <li><a href="/m/view/indexB044.html?num=469" name="link">이미지메이킹지도사 1급</a></li>
              <li><a href="/m/view/indexB084.html?num=543" name="link">결혼상담사 1급</a></li>
              <li><a href="/m/view/indexB088.html?num=547" name="link">골프전문캐디 1급</a></li>
              <li><a href="/m/view/indexB054.html?num=472" name="link">스피치지도사 1급</a></li>
              <li><a href="/m/view/indexB112.html?num=572" name="link">개인정보관리사 1급</a></li>
              <li><a href="/m/view/indexB116.html?num=577" name="link">감정노동관리사 1급</a></li>
              <li><a href="/m/view/indexB119.html?num=580" name="link">콜센터전문상담사 1급</a></li>
              <li><a href="/m/view/indexB125.html?num=597" name="link">4대보험관리사 1급</a></li>
              <li><a href="/m/view/indexB142.html?num=616" name="link">창업상권분석지도사 1급</a></li>
              <li><a href="/m/view/indexB149.html?num=626" name="link">검색광고마케터 1급</a></li>
              <li><a href="/m/view/indexB152.html?num=629" name="link">광고기획전문가 1급</a></li>
              <li><a href="/m/view/indexB153.html?num=630" name="link">고객상담사 1급</a></li>
              <li><a href="/m/view/indexB099.html?num=558" name="link">운동처방사 1급</a></li>
              <li><a href="/m/view/indexB156.html?num=635" name="link">직무스트레스관리사 1급</a></li>
              <li><a href="/m/view/indexB168.html?num=648" name="link">간병사</a></li>
              <li><a href="/m/view/indexB169.html?num=649" name="link">산후관리사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="실버과정">실버과정</a>
            <ul class="sub_mnu sub" id="sub06">
              <h4>실버과정</h4>
              <li><a href="/m/view/indexB123.html?num=595" name="link">노인두뇌훈련지도사 1급</a></li>
              <li><a href="/m/view/indexB057.html?num=490" name="link">실버건강지도사 1급</a></li>
              <li><a href="/m/view/indexB058.html?num=491" name="link">실버레크레이션지도자 1급</a></li>
              <li><a href="/m/view/indexB085.html?num=544" name="link">노후설계지도사 1급</a></li>
              <li><a href="/m/view/indexB065.html?num=497" name="link">노인교육지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="방과후과정">방과후과정</a>
            <ul class="sub_mnu sub" id="sub07">
              <h4>방과후과정</h4>
              <li><a href="/m/view/indexB135.html?num=607" name="link">스토리텔링그림책지도사 1급</a></li>
              <li><a href="/m/view/indexB080.html?num=534" name="link">영어독서지도사 1급</a></li>
              <li><a href="/m/view/indexB076.html?num=530" name="link">영재놀이지도사 1급</a></li>
              <li><a href="/m/view/indexB075.html?num=529" name="link">레크리에이션지도자 1급</a></li>
              <li><a href="/m/view/indexB020.html?num=509" name="link">방과후영어교육지도사 1급</a></li>
              <li><a href="/m/view/indexB062.html?num=496" name="link">보드게임지도사 1급</a></li>
              <li><a href="/m/view/indexB006.html?num=391" name="link">방과후학교지도사 1급</a></li>
              <li><a href="/m/view/indexB030.html?num=427" name="link">클레이아트 1급</a></li>
              <li><a href="/m/view/indexB127.html?num=599" name="link">책놀이지도사 1급</a></li>
              <li><a href="/m/view/indexB011.html?num=396" name="link">스토리텔링수학지도사 1급</a></li>
              <li><a href="/m/view/indexB037.html?num=434" name="link">색종이접기지도사 1급</a></li>
              <li><a href="/m/view/indexB032.html?num=430" name="link">자원봉사지도사 1급</a></li>
              <li><a href="/m/view/indexB021.html?num=416" name="link">창의과학교육지도사 1급</a></li>
              <li><a href="/m/view/indexB026.html?num=421" name="link">아동청소년스피치지도사 1급</a></li>
              <li><a href="/m/view/indexB005.html?num=388" name="link">마술교육지도사 1급</a></li>
              <li><a href="/m/view/indexB081.html?num=536" name="link">방과후돌봄교실지도사 1급</a></li>
              <li><a href="/m/view/indexB132.html?num=604" name="link">하브루타지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="안전과정">안전과정</a>
            <ul class="sub_mnu sub" id="sub08">
              <h4>안전과정</h4>
              <li><a href="/m/view/indexB055.html?num=495" name="link">재난안전지도사 1급</a></li>
              <li><a href="/m/view/indexB013.html?num=401" name="link">안전교육지도사 1급</a></li>
              <li><a href="/m/view/indexB024.html?num=419" name="link">학교보안안전지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="반려과정">반려과정</a>
            <ul class="sub_mnu sub" id="sub09">
              <h4>반려과정</h4>
              <li><a href="/m/view/indexB038.html?num=501" name="link">반려동물관리사 1급</a></li>
              <li><a href="/m/view/indexB060.html?num=502" name="link">반려동물행동교정사 1급</a></li>
              <li><a href="/m/view/indexB098.html?num=557" name="link">반려동물장례지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="아동과정">아동과정</a>
            <ul class="sub_mnu sub" id="sub10">
              <h4>아동과정</h4>
              <li><a href="/m/view/indexB107.html?num=567" name="link">아동발달전문지도사 1급</a></li>
              <li><a href="/m/view/indexB106.html?num=566" name="link">특수아동지도사 1급</a></li>
              <li><a href="/m/view/indexB004.html?num=387" name="link">동화구연지도사 1급</a></li>
              <li><a href="/m/view/indexB033.html?num=433" name="link">놀이교육지도사 1급</a></li>
              <li><a href="/m/view/indexB016.html?num=405" name="link">아동교육지도사 1급</a></li>
              <li><a href="/m/view/indexB010.html?num=395" name="link">손유희지도사 1급</a></li>
              <li><a href="/m/view/indexB082.html?num=538" name="link">아동독서지도사 1급</a></li>
              <li><a href="/m/view/indexB093.html?num=552" name="link">아동미술지도사 1급</a></li>
              <li><a href="/m/view/indexB096.html?num=555" name="link">아동복지상담사 1급</a></li>
              <li><a href="/m/view/indexB012.html?num=400" name="link">아동요리지도사 1급</a></li>
              <li><a href="/m/view/indexB158.html?num=637" name="link">오감놀이지도사 1급</a></li>
              <li><a href="/m/view/indexB031.html?num=428" name="link">베이비시터</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="공부과정">공부과정</a>
            <ul class="sub_mnu sub" id="sub11">
              <h4>공부과정</h4>
              <li><a href="/m/view/indexB105.html?num=565" name="link">진로직업상담사 1급</a></li>
              <li><a href="/m/view/indexB068.html?num=513" name="link">독서토론지도사 1급</a></li>
              <li><a href="/m/view/indexB003.html?num=386" name="link">독서지도사 1급</a></li>
              <li><a href="/m/view/indexB017.html?num=406" name="link">진로적성상담사 1급</a></li>
              <li><a href="/m/view/indexB015.html?num=404" name="link">자기주도학습지도사 1급</a></li>
              <li><a href="/m/view/indexB002.html?num=384" name="link">공부습관지도사 1급</a></li>
              <li><a href="/m/view/indexB067.html?num=514" name="link">공부방지도사 1급</a></li>
              <li><a href="/m/view/indexB094.html?num=553" name="link">독서논술지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="인문과정">인문과정</a>
            <ul class="sub_mnu sub" id="sub12">
              <h4>인문과정</h4>
              <li><a href="/m/view/indexB091.html?num=550" name="link">한국어지도사 1급</a></li>
              <li><a href="/m/view/indexB083.html?num=539" name="link">한자지도사 1급</a></li>
              <li><a href="/m/view/indexB078.html?num=532" name="link">인문학지도사 1급</a></li>
              <li><a href="/m/view/indexB056.html?num=475" name="link">한국사지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="부동산과정">부동산과정</a>
            <ul class="sub_mnu sub" id="sub13">
              <h4>부동산과정</h4>
              <li><a href="/m/view/indexB151.html?num=628" name="link">건물관리사 1급</a></li>
              <li><a href="/m/view/indexB066.html?num=507" name="link">부동산자산관리지도사 1급</a></li>
              <li><a href="/m/view/indexB048.html?num=466" name="link">빌딩관리사 1급</a></li>
              <li><a href="/m/view/indexB097.html?num=556" name="link">부동산분양상담전문가 1급</a></li>
              <li><a href="/m/view/indexB117.html?num=576" name="link">부동산권리분석사 1급</a></li>
              <li><a href="/m/view/indexB157.html?num=636" name="link">부동산토지전문가 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="산업과정">산업과정</a>
            <ul class="sub_mnu sub" id="sub14">
              <h4>산업과정</h4>
              <li><a href="/m/view/indexB147.html?num=623" name="link">품질검사마스터 1급</a></li>
              <li><a href="/m/view/indexB108.html?num=568" name="link">6시그마(GB)</a></li>
              <li><a href="/m/view/indexB077.html?num=531" name="link">3D프린팅지도사 1급</a></li>
              <li><a href="/m/view/indexB109.html?num=569" name="link">기업생산관리자 1급</a></li>
              <li><a href="/m/view/indexB110.html?num=570" name="link">코딩지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="IT과정">IT과정</a>
            <ul class="sub_mnu sub" id="sub15">
              <h4>IT과정</h4>
              <li><a href="/m/view/indexB143.html?num=619" name="link">네트워크전문가 1급</a></li>
              <li><a href="/m/view/indexB073.html?num=524" name="link">스마트IT컴퓨터지도사 1급</a></li>
              <li><a href="/m/view/indexB100.html?num=560" name="link">빅데이터전문가 1급</a></li>
              <li><a href="/m/view/indexB102.html?num=562" name="link">컴퓨터OA마스터 1급</a></li>
              <li><a href="/m/view/indexB118.html?num=578" name="link">소프트웨어교육지도사 1급</a></li>
              <li><a href="/m/view/indexB134.html?num=606" name="link">해킹보안전문가 1급</a></li>
              <li><a href="/m/view/indexB133.html?num=605" name="link">정보보안전문가 1급</a></li>
              <li><a href="/m/view/indexB136.html?num=608" name="link">컴퓨터사무정보처리사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="취업과정">취업과정</a>
            <ul class="sub_mnu sub" id="sub16">
              <h4>취업과정</h4>
              <li><a href="/m/view/indexB115.html?num=573" name="link">전문비서 1급</a></li>
              <li><a href="/m/view/indexB092.html?num=551" name="link">HRD전문가 1급</a></li>
              <li><a href="/m/view/indexB095.html?num=554" name="link">전산회계 1급</a></li>
              <li><a href="/m/view/indexB104.html?num=564" name="link">스마트폰활용지도사 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="항공과정">항공과정</a>
            <ul class="sub_mnu sub" id="sub17">
              <h4>항공과정</h4>
              <li><a href="/m/view/indexB137.html?num=609" name="link">DCS 1급</a></li>
              <li><a href="/m/view/indexB121.html?num=592" name="link">항공서비스전문가 1급</a></li>
            </ul>
          </li>
          <li>
            <a href="#" title="공예과정">공예과정</a>
            <ul class="sub_mnu sub" id="sub18">
              <h4>공예과정</h4>
              <li><a href="/m/view/indexB154.html?num=633" name="link">캔들공예지도사 1급</a></li>
              <li><a href="/m/view/indexB155.html?num=634" name="link">풍선아트지도사 1급</a></li>
              <li><a href="/m/view/indexB159.html?num=638" name="link">냅킨아트지도사 1급</a></li>
              <li><a href="/m/view/indexB161.html?num=640" name="link">조향사 1급</a></li>
              <li><a href="/m/view/indexB167.html?num=647" name="link">레진아트지도사 1급</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </nav>
  <script>
    $(document).ready(function() {

      // .toggle 클릭시 .total_mnu에 act01 서식을 적용해서 전체메뉴 나타나게 함
      $('.toggle').click(function(){
        $('.total_mnu').addClass('act01');
			});

      // i.fa-times(X버튼) 클릭시 .total_mnu에 적용된 act01 서식을 해제해서 전체메뉴 사라지게 함
      $('.total_mnu i.fa-times').click(function(){
        $('.total_mnu').removeClass('act01');
      });

      $(function(){

        // 첫번째 li태그에 g_on 서식 적용
        $('.gnb > li:first-child > a').addClass('g_on');

        // 첫번째 서브메뉴를 나타나게 함
        $('.gnb #sub01').show();

        // .gnb > li 클릭시 g_on 서식을 적용하고 해당메뉴의 서브메뉴를 나타나게 함
        const tab_mnu = $('.gnb > li > a');
        tab_mnu.click(function(){
          $('.gnb > li > a').removeClass('g_on');
          $(this).addClass('g_on');

          $('.gnb #sub01').hide();
          $(this).next().show();
          $(this).next().show().parent().siblings().find('.sub').hide();
        });
      });


		});
  </script>
</header>