<style>
  footer{
    width:100%;
    max-width: 640px;
    margin:0px auto 0px auto;
    border-top:1px solid #EFEFF7;
    /* padding-bottom:58px; */
  }
  .f_nav01{
    display:flex;
    border-bottom:1px solid  #EAF0F8;
    padding:18px 0px;
  }
  .f_nav01 > li{
    margin:0px 20px;
  }
  .f_nav01 > li:first-child{
    position:relative;
  }
  .f_nav01 > li:first-child::before{
    content: " ";
    display:block;
    position:absolute;
    left:144.25%;
    width:1px;
    height:15px;
    background-color:#D5DAE4;
  }
  .f_nav01 > li > a{
    font-style: normal;
    font-weight: bold;
    font-size: 0.938rem;
    line-height: 14px;
    display: flex;
    align-items: center;
    letter-spacing: -0.04em;
    color:#505873;
  }
    
  .f_txt01{
    margin-left:4.625%;
    padding:23px 0px;
  }
  .f_txt01 p{
    font-size:0.813rem;
    color:#8088A3;
    line-height:23px;
  }
    
  .f_bottom{
    background-color:  #F7F7F7;
    padding:18px 28px 31px 31px;
    width:100%;
    max-width:640px;
    margin:0px auto;
    box-sizing: border-box;
  }
  .f_nav02{
    display:flex;
    justify-content:flex-start;
    position:relative;
  }
    
  .f_nav02 > li:last-child{
    border:none;
  }
  .f_nav02 > li > a{
    font-size:0.813rem;
    color:#222222;
    font-weight:400;
    position:relative;
    padding:0px 5px;
    line-height:19px;
    letter-spacing: -0.04em;
  }
  .f_nav02 > li:first-child > a{
    padding-left:unset;
  }
  .f_nav02 > li > a::after{
    content: "";
    display: inline-block;
    position: absolute;
    width: 1.5px;
    height: 10px;
    background-color: #C6C6C6;
    top: 50%;
    transform: translateY(-50%);
    margin: 1px 5px 0px;
  }
  .f_nav02 > li:last-child a::after{
    content:none;
  }
    
  .f_inner{
    width:100%;
    height: 47px;
    overflow: hidden;
    transition:0.7s;
    text-align:left;
  }
  #more:checked + .f_inner{
    height:197px;
  }
  .f_info01{
    display:flex;
    justify-content: space-between;
    padding-top:22px;
    width:100%;
    box-sizing:border-box;
    max-width:640px;
    overflow-y:hidden;
    margin:0px auto;
  }
  .icon_act{
    transform:rotate(180deg);
  }
  footer input[type=checkbox]{
    display:none;
  }
  .f_info01 > dl{
    letter-spacing: -0.04em;
    color: #666666;
    width:100%;
    box-sizing: border-box;
  }
  .f_info01 > dl > dt{
    font-size:0.813rem;
    display:block;
    padding-bottom:8px;
  }
  .f_info01 > dl > dt > label > i.fas{
    position:relative;
    left:4px;
  }
  .f_info01 > dl > dd{
    margin-left:10px;
    line-height:20px;
    font-size:0.750rem;
    box-sizing: border-box;
  }
  .f_info01 > dl > dd::after{
    position:relative;
    content: " ";
    display:block;
    top:-12px;
    left:-2.25%;
    width:3px;
    height:3px;
    border-radius: 100%;
    background-color:  #8088A3;
  }
  .f_info01 > dl > dd:nth-child(5)::after{
    content: none;
  }
  .f_info01 > dl > dd:nth-child(6)::after{
    top:-31px;
  }
    
  .f_info01 > dl > dd > span:first-child{
    display:inline-block;
    width:35%;
  }
  .f_info01 > dl > dd > span:last-child{
    display:inline-block;
    text-align: left;
  }
    
  address{
    letter-spacing: -0.075em;
    font-size:0.750rem;
    color: #666666;
    font-style: normal;
  }

  .not_scroll{
    position: fixed;
    overflow: hidden;
    width: 100%;
    height: 100%
  }
  .not_scroll .cont {
    position: relative;
    top: 0;
  }
</style>
<footer>

    <!-- 로그인, 고객상담, 운영시간 -->
    <!-- <div class="f_top">
      <ul class="f_nav01">
        <li>
          <a href="https://www.korea-edu.net/m/login.html" title="로그인">로그인</a>
        </li>
        <li>
          <a href="./curriculum.html" title="교육과정">교육과정</a>
        </li>
      </ul>

      <div class="f_txt01">
        <p>고객상담 : 1670-6237 &#x007C; 이메일 : good2@korea7070.com</p>
        <p>운영시간 : 평일09시 ~ 18시, 주말/공휴일 제외</p>
      </div>
    </div> -->

    <!-- 하단 회색 바탕 영역 -->
    <div class="f_bottom">
      <ul class="f_nav02">
        <li>
          <a href="#" title="교육원소개">교육원소개</a>
        </li>
        <li>
          <a href="service.html" title="이용약관">이용약관</a>
        </li>
        <li>
          <a href="privacy.html" title="개인정보처리방침">개인정보처리방침</a>
        </li>
        <li>
          <a href="procedure.html" title="고객센터">고객센터</a>
        </li>
      </ul>

      <!-- 클릭시 아래로 펼쳐지는 영역 -->
      <input type="checkbox" id="more">
      <div class="f_inner">
        <div class="f_info01">
          <dl>
            <dt>
              <label for="more">
                (주)한국자격검정평가진흥원 사업자 정보 <i class="fas fa-angle-down"></i>
              </label>
            </dt>
            <dd><span>원격평생교육시설신고</span> <span>2019-강남교육지원청 -제원582호-</span></dd>
            <dd><span>개인정보보호책임자</span> <span>차민호</span></dd>
            <dd><span>대표이사</span> <span>민지원</span></dd>
            <dd><span>주소</span> <span>서울 특별시 강남구 영동대로 85길 30,</span></dd>
            <dd><span>&nbsp;</span> <span>4층 (대치동, 은탑타워)</span></dd>
            <dd><span>사업자등록번호</span> <span>769-86-01081</span></dd>
            <dd><span>통신판매업신고</span> <span>제 2019-서울강남-00411호</span></dd>
          </dl>
        </div>
      </div>

      <!-- 클릭시 아이콘 변경하는 스크립트 -->
      <script>
        $(function(){

          $('dt label').click(function(){
            //선택한 요소의 자손인 i.fas에 icon_act 서식을 toggle class함.
            $(this).find('i.fas').stop().toggleClass('icon_act');
            
          });
        });
      </script>

      <address>
        COPYRIGHT &copy; 2016 (주)한국자격검정평가진흥원 All Rights Reserved.
      </address>
      
    </div>

  </footer>