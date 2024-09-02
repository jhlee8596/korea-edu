<style>
  /* 하단 푸터 서식 */
  footer{
      border-top:1px solid #E8E8E8;
    }
    .f_top{
      background-color: #FBFBFB;
      padding: 18px 0px;
      border-top:1px solid #E8E8E8;
    }
    .f_top > a{
      background: #FFFFFF;
      border: 1px solid #000000;
      box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.24);
      border-radius: 31px;
      width:calc(100% - 140px);
      margin: 0px auto 20px;
      display:flex;
      justify-content: center;
      height: 40px;
      line-height: 42px;
    }
    .f_top > a > img{
      width: 21px;
      height: 21px;
      padding: 9px 2px 10px 0px;
    }
    .f_top > a > span{
      letter-spacing: -0.03rem;
      color: #000000;
      font-size:0.938rem;
      font-weight: 400;
    }
    .f_info{

    }
    .f_info > li{
      line-height: 20px;
    }
    .f_info > li > p{
      width:100%;
      text-align: center;
    }
    .f_info > li > p > span{
      letter-spacing: -0.03rem;
      color: #000000;
      font-size:0.813rem;
      font-weight: 400;
      position: relative;
      padding: 0px 8px;
    }
    .f_info > li:first-child > p > span:first-child::after{
      content: "";
      display: inline-block;
      width: 1px;
      height: 9px;
      background-color: #000;
      position: absolute;
      top:50%;
      transform: translateY(-50%);
      right: 0px;
    }

    .f_inner{
      background-color: #F2F2F2;
      text-align: center;
      width:100%;
      overflow: hidden;
      padding: 26px 0px 21px;
    }
    .f_inner > p{
      letter-spacing: -0.03rem;
      color: #616161;
      font-size:0.813rem;
      font-weight: 400;
    }
    #more:checked + .f_inner > .f_info01{
      height:127px;
    }
    .f_info01{
      display:flex;
      justify-content: space-between;
      padding:20px 10px;
      width:100%;
      height: 0px;
      max-width:640px;
      overflow-y:hidden;
      margin:0px auto;
      transition:0.7s;
    }
    .icon_act{
      transform:rotate(180deg);
    }
    footer input[type=checkbox]{
      display:none;
    }
    .f_info01 > dl{
      color: #8088A3;
      width:100%;
      box-sizing: border-box;
    }
    .f_info01 > dl > dt{
      letter-spacing: -0.03rem;
      color: #000000;
      font-size:0.813rem;
      font-weight: 400;
      display: block;
      padding-bottom:38px;
      transform: translateY(0px);
    }
    .f_info01 > dl > dt i.fas{
      font-size:10px;
      position: relative;
      top: -2px;
      transform-origin: 50% 50%;
    }
    .f_info01 > dl > dd{
      display: flex;
      line-height: 19px;
      width: calc(100% - 100px);
      margin: 0px auto;
    }
    .f_info01 > dl > dd > span{
      text-align: left;
      letter-spacing: -0.03rem;
      font-size: 0.750rem;
    }
    .f_info01 > dl > dd > span:first-child{
      display: block;
      color: rgba(1, 1, 1, 0.6);
      width: 40%;
    }
    .f_info01 > dl > dd > span:last-child{
      color: #000000;
      display: block;
      width: 60%;
    }
    address{
      letter-spacing: -0.03rem;
      color: #616161;
      font-size:0.813rem;
      padding-top:33px;
    }

    .icon_act{
      transform:rotate(180deg);
    }
    .info_act{
      display:block;
    }
</style>

<footer>
    <div class="f_top">
      <a href="#" title="고객상담">
        <img src="./img/call_black.png" alt="고객상담">
        <span>고객상담 및 주간기술지원</span>
      </a>
      <ul class="f_info">
        <li>
          <p><span>전화 : 1670-6237</span><span>이메일 : good2@korea7070.com</span></p>
        </li>
        <li>
          <p><span>운영시간 : 평일 9시~18시, 주말&#x00B7;공휴일 휴무</span></p>
        </li>
      </ul>
    </div>

    <input type="checkbox" id="more">
    <div class="f_inner">
      <p>본사 : 서울특별시 강남구 영동대로85길 30 은탑타워 || 4층,8층,10층</p>
      <div class="f_info01">
        <dl>
          <dt>
            <label for="more">
              한국자격검정평가진흥원 사업자 정보 <i class="fas fa-angle-down"></i>
            </label>
          </dt>
          <dd>
            <span>대표이사</span>
            <span>민지원</span>
          </dd>
          <dd>
            <span>사업자등록번호</span>
            <span>769-86-01081</span>
          </dd>
          <dd>
            <span>통신판매신고</span>
            <span>제 2019-서울강남-00411호</span>
          </dd>
          <dd>
            <span>원격평생교육시설신고</span>
            <span>2019-강남교육지원청 -제원582호-</span>
          </dd>
          <dd>
            <span>개인정보보호책임자</span>
            <span>차민호</span>
          </dd>
        </dl>
      </div>

      <address>Copyrightⓒ 한국자격검정평가진흥원. All Rights RESERVED. </address>
    </div>
  </footer>

  <!-- 클릭시 아이콘 변경하는 스크립트 -->
  <script>
    $(function(){

      $('dt label').click(function(){
        //선택한 요소의 자손인 i.fas에 icon_act 서식을 toggle class함.
        $(this).find('i.fas').stop().toggleClass('icon_act');
            
      });
    });
  </script>